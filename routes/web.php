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
//++++++++++++++++++++++++++++++++ candidate end ++++++++++++++++++++++++++++++++++++++++++//
//++++++++++++++++++++++++++++++++ agent start ++++++++++++++++++++++++++++++++++++++++++//
Route::get('/agents', [AgentController::class, 'index'])->name('agents');
Route::get('/agent/create', [AgentController::class, 'create'])->name('agents.create');
Route::post('/agent/create', [AgentController::class, 'store'])->name('agent.store');
//++++++++++++++++++++++++++++++++ agent end ++++++++++++++++++++++++++++++++++++++++++//

//++++++++++++++++++++++++++++++++ Sub agent start ++++++++++++++++++++++++++++++++++++++++++//
Route::get('/sub-agents', [SubAgentController::class, 'index'])->name('sub.agents');
Route::get('/sub-agent/create', [SubAgentController::class, 'create'])->name('sub.agents.create');
Route::post('/sub-agent/create', [SubAgentController::class, 'store'])->name('sub.agent.store');
//++++++++++++++++++++++++++++++++ agent end ++++++++++++++++++++++++++++++++++++++++++//

    Route::get('/documents', [DocumentController::class, 'index'])->name('documents');
    Route::get('/status', [StatusController::class, 'index'])->name('status');
    Route::get('/clearances', [ClearanceController::class, 'index'])->name('clearances');
    Route::get('/candidates-expenses', [ExpenseCandidateController::class, 'index'])->name('candidates.expenses');
});



// Route::get('/{any}', function () {
//     return view('auth.login');
// })->where('any', '.*');
