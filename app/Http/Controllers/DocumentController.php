<?php

namespace App\Http\Controllers;

use App\Models\Candidate;
use App\Models\User;
use App\Models\Group;
use App\Models\Agent;
use App\Models\Document;
use App\Models\SubAgent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class DocumentController extends Controller
{

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.document.all_documents');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            'candidate_id' => 'required',
            'document_type' => 'required',
            'images' => 'required',
        ]);
        // return $request->all();
        $candidate_id = $request->candidate_id;
        $candidate_data = Document::where('candidate_id', $candidate_id)->first();
        $candidate = Candidate::where('id', $candidate_id)->first();
        $document_type = $request->document_type;

        if (!$candidate_data) {
            $imageUrls = [];
            if ($request->hasFile('images')) {
                foreach ($request->file('images') as $image) {
                    $path = $image->store('uploads/'.$candidate->name.'-'.$candidate->email.'/'.$document_type, 'public');
                    $imageUrls[] = '/storage/' . $path;
                }
            }
            $docs = new Document;
            $docs->candidate_id = $request->candidate_id;
            $docs->$document_type = json_encode($imageUrls);
            $docs->create_by = auth()->user()->id;
            $docs->save();
            //  return response()->json($docs, 200);
            return back()->with('success', 'Document uploaded successfully');
        }
        else {

            if ($request->hasFile('images')) {
                foreach ($request->file('images') as $image) {
                    $path = $image->store('uploads/'.$candidate->name.'-'.$candidate->email.'/'.$document_type, 'public');

                    $imageUrls[] = '/storage/' . $path;
                }
            }

            $newImages = $imageUrls;
            $docs_exist = Document::find($candidate_data->id)->first();
            $images = json_decode($candidate_data->$document_type, true);

            if (is_array($images) && !empty($images)) {
                $imageUrls = array_merge($images, $newImages);
            } else {
                $imageUrls = $newImages;
            }



            $docs = Document::find($candidate_data->id);
            $docs->$document_type = json_encode($imageUrls);
            $docs->save();
            return back()->with('success', 'Document uploaded successfully');
        }








    }

    /**
     * Display the specified resource.
     */
    public function details($id)
    {
        $candidate = Candidate::find($id);
        $documents = Document::where('candidate_id', $id)->first();
        // return $documents;
        if ($documents) {
            $documents->passport = json_decode($documents->passport, true);
            $documents->passport_copy = json_decode($documents->passport_copy, true);
            $documents->photo = json_decode($documents->photo, true);
            $documents->police_clearance = json_decode($documents->police_clearance, true);
            $documents->educational_certificate = json_decode($documents->educational_certificate, true);
            $documents->technical_certificate = json_decode($documents->technical_certificate, true);
            $documents->driving_licence = json_decode($documents->driving_licence, true);
            $documents->national_id = json_decode($documents->national_id, true);
        }

        // return $documents;


        $agent = User::find($candidate->agent_user_id);

        $agent_data = Agent::where('user_id', $agent->id)->first();
        if ($agent_data) {
            $agent_data=$agent_data;
        }
        else {
            $agent_data = SubAgent::where('user_id', $agent->id)->first();

        }
        // return $agent_data;

        return view('admin.document.index')->with('candidate', $candidate)->with('agent', $agent)->with('agent_data', $agent_data)->with('documents', $documents);

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Document $document)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Document $document)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(request $request, Document $document)
    {
        // return $request->all();
        $request->validate([
            'document_id' => 'required|integer',
            'imgUrl' => 'required|string',
        ]);
        $imageToDelete = $request->input('imgUrl');
        $relativePath = str_replace('/storage/', '', $imageToDelete);
        // return $relativePath;

        if (Storage::disk('public')->exists($relativePath)) {
            Storage::disk('public')->delete($relativePath);
        } else {
            return response()->json(['message' => 'Image not found.']);
        }

        $docs_type = $request->input('document_type');
        $record = Document::findOrFail($request->document_id);
        $record_images =  $images = json_decode($record->{$docs_type}, true);
        $relativePath = str_replace('/storage', 'public', $imageToDelete);
        if (in_array($imageToDelete, $record_images)) {
            $record_images = array_values(array_diff($record_images, [$imageToDelete]));
            $record->{$docs_type} = json_encode($record_images);
            $record->save();
            return back()->with('success', 'Image deleted successfully');
        } else {
            return back()->with('error', 'Image not found.');
        }

}
public function download(Request $request)
{
    $document = Document::find($request->document_id);
    $candidate = Candidate::find($document->candidate_id);
    $candidate_name = $candidate->name;
    $candidate_email = $candidate->email;

    $filePath = $candidate_name.'-'.$candidate_email;

    if (Storage::disk('public')->exists($filePath)) {
        Storage::disk('public')->download($filePath);
        return back()->with('success', 'File downloaded successfully');
    } else {
        return response()->json(['message' => 'File not found.']);
    }

}


}
