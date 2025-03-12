<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AgendaFormController;
use App\Http\Controllers\CategoryFormController;
use App\Http\Controllers\ClientFormController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FormServiceCategoryController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\KeyWordFormController;
use App\Http\Controllers\LocationFormController;
use App\Http\Controllers\LogController;
use App\Http\Controllers\OrdenesController;
use App\Http\Controllers\PaymentFormController;
use App\Http\Controllers\ProfesionalFormController;
use App\Http\Controllers\ProfesionalServiceFormController;
use App\Http\Controllers\ServiceFormController;
use App\Http\Controllers\SuscriptionFormController;
use App\Http\Controllers\TablaTypeSusciptionController;
use App\Http\Controllers\TableAgendaController;
use App\Http\Controllers\TableCategoryController;
use App\Http\Controllers\TableCustomersController;
use App\Http\Controllers\TableKeyWordController;
use App\Http\Controllers\TableLocationController;
use App\Http\Controllers\TablePaymentController;
use App\Http\Controllers\TableProfesionalController;
use App\Http\Controllers\TableProfesionalServiceController;
use App\Http\Controllers\TableReviewController;
use App\Http\Controllers\TableServiceCategoryController;
use App\Http\Controllers\TableServiceController;
use App\Http\Controllers\TableSuscriptionController;
use App\Http\Controllers\TableTypePaymentController;
use App\Http\Controllers\TypePaymentFormController;
use App\Http\Controllers\TypeSuscriptionFormController;

Route::get('/', function () {
    return view('index');
});

Route::get('/agendaForm', [AgendaFormController::class, 'index'])->name('agendaForm');

Route::get('/categoryForm', [CategoryFormController::class, 'index'])->name('categoryForm');

Route::get('/clientForm', [ClientFormController::class, 'index'])->name('clientForm');

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

Route::get('/formServiceCategory', [FormServiceCategoryController::class, 'index'])->name('formServiceCategory');

Route::get('/index', [IndexController::class, 'index'])->name('index');

Route::get('/keyWordForm', [KeyWordFormController::class, 'index'])->name('keyWordForm');

Route::get('/locationForm', [LocationFormController::class, 'index'])->name('locationForm');

Route::get('/log', [LogController::class, 'index'])->name('log');

Route::get('/ordenes', [OrdenesController::class, 'index'])->name('ordenes');

Route::get('/paymentForm', [PaymentFormController::class, 'index'])->name('paymentForm');

Route::get('/profesionalForm', [ProfesionalFormController::class, 'index'])->name('profesionalForm');

Route::get('/profesionalServiceForm', [ProfesionalServiceFormController::class, 'index'])->name('profesionalServiceForm');

Route::get('/serviceForm', [ServiceFormController::class, 'index'])->name('serviceForm');

Route::get('/suscriptionForm', [SuscriptionFormController::class, 'index'])->name('suscriptionForm');

Route::get('/tablaTypeSusciption', [TablaTypeSusciptionController::class, 'index'])->name('tablaTypeSusciption');

Route::get('/tableAgenda', [TableAgendaController::class, 'index'])->name('tableAgenda');

Route::get('/tableCategory', [TableCategoryController::class, 'index'])->name('tableCategory');

Route::get('/tableCustomers', [TableCustomersController::class, 'index'])->name('tableCustomers');

Route::get('/tableKeyWord', [TableKeyWordController::class, 'index'])->name('tableKeyWord');

Route::get('/tableLocation', [TableLocationController::class, 'index'])->name('tableLocation');

Route::get('/tablePayment', [TablePaymentController::class, 'index'])->name('tablePayment');

Route::get('/tableProfesional', [TableProfesionalController::class, 'index'])->name('tableProfesional');

Route::get('/tableProfesionalService', [TableProfesionalServiceController::class, 'index'])->name('tableProfesionalService');

Route::get('/tableReview', [TableReviewController::class, 'index'])->name('tableReview');

Route::get('/tableService', [TableServiceController::class, 'index'])->name('tableService');

Route::get('/tableServiceCategory', [TableServiceCategoryController::class, 'index'])->name('tableServiceCategory');

Route::get('/tableSuscription', [TableSuscriptionController::class, 'index'])->name('tableSuscription');

Route::get('/tableTypePayment', [TableTypePaymentController::class, 'index'])->name('tableTypePayment');

Route::get('/typePayment', [TypePaymentFormController::class, 'index'])->name('typePayment');

Route::get('/typeSuscriptionForm', [TypeSuscriptionFormController::class, 'index'])->name('typeSuscriptionForm');