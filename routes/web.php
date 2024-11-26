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
use App\Http\Controllers\CandidateStatusController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\OfficeExpenseController;
use App\Http\Controllers\ReportController;





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
    Route::get('/candidate/edit/{id}', [CandidateController::class, 'edit'])->name('candidate.edit');
    Route::post('/candidate/update/{id}', [CandidateController::class, 'update'])->name('candidate.update');
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
Route::get('/status/create', [StatusController::class, 'create'])->name('status.create');
Route::post('/status/create', [StatusController::class, 'store'])->name('status.store');
Route::post('/status/update-order', [StatusController::class, 'updateOrder'])->name('statuses.update-order');
Route::get('/status/status_update/{id}', [StatusController::class, 'status_update'])->name('status.status_update');


Route::post('/candidate/status/create', [CandidateStatusController::class, 'store'])->name('candidate.status.store');
Route::get('/candidate/status/update/{id}', [CandidateStatusController::class, 'update'])->name('candidate.status.update');



Route::get('/payments', [PaymentController::class, 'index'])->name('payments');
Route::get('/payment/create', [PaymentController::class, 'create'])->name('payment.create');
Route::get('/payment/group', [PaymentController::class, 'group'])->name('payment.group');
Route::get('/payment/group/create/{id}', [PaymentController::class, 'group_create'])->name('payment.group.create');
Route::get('/payment/group/details/{id}', [PaymentController::class, 'group_payment_details'])->name('payment.group.details');
Route::get('/payment/candidate/details/{id}', [PaymentController::class, 'candidate_payment_details'])->name('payment.individual.details');


Route::get('/payment/individual', [PaymentController::class, 'individual'])->name('payment.individual');
Route::get('/payment/individual/create/{id}', [PaymentController::class, 'individual_create'])->name('payment.individual.create');
Route::post('/payment/create', [PaymentController::class, 'store'])->name('payment.store');
Route::get('/payment/{id}/details', [PaymentController::class, 'show'])->name('payment.show');
Route::post('/payment/delete/', [PaymentController::class, 'destroy'])->name('payment.delete');
Route::post('/payment/update/{id}', [PaymentController::class, 'update'])->name('payments.update');



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

Route::get('/expenses', [OfficeExpenseController::class, 'index'])->name('expenses');
Route::get('/expenses/create', [OfficeExpenseController::class, 'create'])->name('expenses.create');
Route::post('/expenses/create', [OfficeExpenseController::class, 'store'])->name('expenses.store');
Route::get('/expenses/{id}/show', [OfficeExpenseController::class, 'show'])->name('expenses.show');
Route::get('/expenses/{id}/edit', [OfficeExpenseController::class, 'edit'])->name('expenses.edit');
Route::get('/expenses/filter', [OfficeExpenseController::class, 'filter'])->name('expenses.filter');
Route::post('/expenses/delete/', [OfficeExpenseController::class, 'destroy'])->name('expenses.delete');

Route::get('/reports/individual', [ReportController::class, 'index'])->name('reports.individual');
Route::get('/reports/group', [ReportController::class, 'group_reports'])->name('reports.group');
Route::get('/reports/transections', [ReportController::class, 'transection'])->name('reports.transection');

Route::get('/reports/filter/individual', [ReportController::class, 'filter_individual'])->name('report.filter.individual');
Route::get('/reports/filter/group', [ReportController::class, 'filter_group'])->name('report.filter.group');


//++++++++++++++++++++++++++++++++ settings end  ++++++++++++++++++++++++++++++++++++++++++//
});



// Route::get('/{any}', function () {
//     return view('auth.login');
// })->where('any', '.*');
