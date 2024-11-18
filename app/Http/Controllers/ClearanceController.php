<?php

namespace App\Http\Controllers;
use App\Models\Candidate;
use App\Models\User;
use App\Models\Group;
use App\Models\Agent;
use App\Models\Document;
use App\Models\SubAgent;
use App\Models\Clearance;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class ClearanceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.clearance.index');
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
            'clearance_type' => 'required',
            'images' => 'required',
        ]);

        $candidate_id = $request->candidate_id;
        $candidate_data = Clearance::where('candidate_id', $candidate_id)->first();
        $candidate = Candidate::where('id', $candidate_id)->first();
        $clearance_type = $request->clearance_type;
        if (!$candidate_data) {
            $imageUrls = [];
            if ($request->hasFile('images')) {
                foreach ($request->file('images') as $image) {
                    $path = $image->store('uploads/'.$candidate->name, 'public');
                    $imageUrls[] = '/storage/' . $path;
                }
            }
            $docs = new Clearance;
            $docs->candidate_id = $request->candidate_id;
            $docs->$clearance_type = json_encode($imageUrls);
            $docs->create_by = auth()->user()->id;
            $docs->save();
            //  return response()->json($docs, 200);
            return back()->with('success', 'Clearance uploaded successfully');
        }
        else {

            if ($request->hasFile('images')) {
                foreach ($request->file('images') as $image) {
                    $path = $image->store('uploads/'.$candidate->name, 'public');
                    $imageUrls[] = '/storage/' . $path;
                }
            }

            $newImages = $imageUrls;
            $docs_exist = Clearance::find($candidate_data->id)->first();
            $images = json_decode($docs_exist->$clearance_type, true);

            if (is_array($images) && !empty($images)) {
                // Add two new images to the existing array
                $imageUrls = array_merge($images, $newImages);
                // return $imageUrls;
            } else {
                // If no images exist, initialize with the new images
                $imageUrls = $newImages;
            }



            $docs = Clearance::find($candidate_data->id);
            $docs->$clearance_type = json_encode($imageUrls);
            $docs->save();
            return back()->with('success', 'Clearance uploaded successfully');

    }
}

    /**
     * Display the specified resource.
     */
    public function show(Clearance $clearance)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Clearance $clearance)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Clearance $clearance)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Clearance $clearance , Request $request)
    {

        // return $request->all();
        $request->validate([
            'clearance_id' => 'required|integer',
            'clearance_type' => 'required',
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

        $clearance_type = $request->input('clearance_type');
        $record = Clearance::findOrFail($request->clearance_id);
        $record_images =  $images = json_decode($record->{$clearance_type}, true);
        $relativePath = str_replace('/storage', 'public', $imageToDelete);
        if (in_array($imageToDelete, $record_images)) {
            $record_images = array_values(array_diff($record_images, [$imageToDelete]));
            $record->{$clearance_type} = json_encode($record_images);
            $record->save();
            return back()->with('success', 'Image deleted successfully');
        } else {
            return back()->with('error', 'Image not found.');
        }
    }
}
