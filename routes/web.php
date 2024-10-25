<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\GroupController;
use App\Http\Controllers\CandidateController;
use App\Http\Controllers\DocumentController;
use App\Http\Controllers\StatusController;
use App\Http\Controllers\ClearanceController;
use App\Http\Controllers\ExpenseCandidateController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AgentController;
use App\Http\Controllers\SubAgentController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\CompanyInfoController;



Route::get('/', [AdminDashboardController::class, 'index']);
Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['auth:sanctum', 'verified'])->name('dashboard');
Route::middleware(['auth:sanctum', 'verified',config('jetstream.auth_session'),])->prefix('admin')->group(function () {
    Route::get('/dashboard', [AdminDashboardController::class, 'dashboard'])->name('admin.dashboard');
    Route::get('/countrys', [CountryController::class, 'index'])->name('countrys');
// ++++++++++++++++++++++++++++++ groups start ++++++++++++++++++++++++++++++++++++++++//
    Route::get('/groups', [GroupController::class, 'index'])->name('groups');
    Route::get('/group/create', [GroupController::class, 'create'])->name('groups.create');
    Route::post('/group/create', [GroupController::class, 'store'])->name('group.store');
//++++++++++++++++++++++++++++++++ groups end ++++++++++++++++++++++++++++++++++++++++++//

//++++++++++++++++++++++++++++++++ candidate start ++++++++++++++++++++++++++++++++++++++++++//
    Route::get('/candidates', [CandidateController::class, 'index'])->name('candidates');
    Route::get('/candidate/create', [CandidateController::class, 'create'])->name('candidate.create');
    Route::post('/candidate/create', [CandidateController::class, 'store'])->name('candidate.store');
    Route::get('/candidate/show/{id}', [CandidateController::class, 'show'])->name('candidate.show');
//++++++++++++++++++++++++++++++++ candidate end ++++++++++++++++++++++++++++++++++++++++++//
//++++++++++++++++++++++++++++++++ agent start ++++++++++++++++++++++++++++++++++++++++++//
Route::get('/agents', [AgentController::class, 'index'])->name('agents');
Route::get('/agent/create', [AgentController::class, 'create'])->name('agents.create');
Route::post('/agent/create', [AgentController::class, 'store'])->name('agent.store');
Route::get('/agents/search', [AgentController::class, 'searchAgents'])->name('agents.search');
//++++++++++++++++++++++++++++++++ agent end ++++++++++++++++++++++++++++++++++++++++++//

//++++++++++++++++++++++++++++++++ Sub agent start ++++++++++++++++++++++++++++++++++++++++++//
Route::get('/sub-agents', [SubAgentController::class, 'index'])->name('sub.agents');
Route::get('/sub-agent/create', [SubAgentController::class, 'create'])->name('sub.agents.create');
Route::post('/sub-agent/create', [SubAgentController::class, 'store'])->name('sub.agent.store');
//++++++++++++++++++++++++++++++++ agent end ++++++++++++++++++++++++++++++++++++++++++//
//++++++++++++++++++++++++++++++++ document start ++++++++++++++++++++++++++++++++++++++++++//

    Route::get('/documents', [DocumentController::class, 'index'])->name('documents');
    // Route::get('/document/create', [DocumentController::class, 'create'])->name('documents.create');
    Route::post('/document/create', [DocumentController::class, 'store'])->name('document.store');
    Route::get('/document/{id}/show', [DocumentController::class, 'details'])->name('document.details');
    Route::post('/document/delete/', [DocumentController::class, 'destroy'])->name('document.delete');
    Route::post('/document/download/', [DocumentController::class, 'download'])->name('document.download');
//++++++++++++++++++++++++++++++++ document end ++++++++++++++++++++++++++++++++++++++++++//
//++++++++++++++++++++++++++++++++ Status start ++++++++++++++++++++++++++++++++++++++++++//
Route::get('/status', [StatusController::class, 'index'])->name('status');
//++++++++++++++++++++++++++++++++ Status end  ++++++++++++++++++++++++++++++++++++++++++//
//++++++++++++++++++++++++++++++++ Clearance start  ++++++++++++++++++++++++++++++++++++++++++//

    Route::get('/clearances', [ClearanceController::class, 'index'])->name('clearances');
    Route::post('/clearances/create', [ClearanceController::class, 'store'])->name('clearance.store');
    Route::post('/clearance/delete/', [ClearanceController::class, 'destroy'])->name('clearance.delete');
//++++++++++++++++++++++++++++++++ Clearance end  ++++++++++++++++++++++++++++++++++++++++++//

//++++++++++++++++++++++++++++++++ Candidate Expense start  ++++++++++++++++++++++++++++++++++++++++++//
    Route::get('/candidates-expenses', [ExpenseCandidateController::class, 'index'])->name('candidates.expenses');
    Route::post('/candidates-expenses/create', [ExpenseCandidateController::class, 'store'])->name('candidate.expense.store');
//++++++++++++++++++++++++++++++++ Candidate Expense end  ++++++++++++++++++++++++++++++++++++++++++//
//++++++++++++++++++++++++++++++++ settings start  ++++++++++++++++++++++++++++++++++++++++++//
    Route::get('/settings', [SettingController::class, 'index'])->name('settings');
//++++++++++++++++++++++++++++++++ settings end  ++++++++++++++++++++++++++++++++++++++++++//
//++++++++++++++++++++++++++++++++ settings start  ++++++++++++++++++++++++++++++++++++++++++//
Route::get('/companies', [CompanyInfoController::class, 'index'])->name('companies');
Route::get('/company/create', [CompanyInfoController::class, 'create'])->name('company.create');
Route::post('/company/create', [CompanyInfoController::class, 'store'])->name('company.store');
Route::get('/company/{id}/details', [CompanyInfoController::class, 'show'])->name('company.show');
Route::get('/company/{id}/edit', [CompanyInfoController::class, 'edit'])->name('company.edit');
Route::post('/company/{id}/update', [CompanyInfoController::class, 'update'])->name('company.update');


//++++++++++++++++++++++++++++++++ settings end  ++++++++++++++++++++++++++++++++++++++++++//
});



// Route::get('/{any}', function () {
//     return view('auth.login');
// })->where('any', '.*');
