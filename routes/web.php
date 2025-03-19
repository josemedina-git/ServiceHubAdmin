<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AgendaFormController;
use App\Http\Controllers\CategoryFormController;
use App\Http\Controllers\ClientFormController;
use App\Http\Controllers\DashboardController;
// use App\Http\Controllers\FormServiceCategoryController;
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
// use App\Http\Controllers\TableAgendaController;
// use App\Http\Controllers\TableCategoryController;
// use App\Http\Controllers\TableCustomersController;
//use App\Http\Controllers\TableKeyWordController;
//use App\Http\Controllers\TableLocationController;
use App\Http\Controllers\TablePaymentController;
//use App\Http\Controllers\TableProfesionalController;
//use App\Http\Controllers\TableProfesionalServiceController;
//use App\Http\Controllers\TableReviewController;
//use App\Http\Controllers\TableServiceCategoryController;
//use App\Http\Controllers\TableServiceController;
use App\Http\Controllers\TableSuscriptionController;
use App\Http\Controllers\TableTypePaymentController;
use App\Http\Controllers\TypePaymentFormController;
use App\Http\Controllers\TypeSuscriptionFormController;

use App\Http\Controllers\ProfesionalController;
use App\Http\Controllers\Professional_serviceController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\ReviewsController;
use App\Http\Controllers\ServiceCategoryController;




use App\Http\Controllers\CategoryController;
use App\Http\Controllers\KeywordController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\AgendaController;


Route::get('/', function () {
    return view('index');
});

Route::get('/agendaForm', [AgendaFormController::class, 'index'])->name('agendaForm');

Route::get('/categoryForm', [CategoryFormController::class, 'index'])->name('categoryForm');

Route::get('/clientForm', [ClientFormController::class, 'index'])->name('clientForm');

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

// Route::get('/formServiceCategory', [FormServiceCategoryController::class, 'index'])->name('formServiceCategory');

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

Route::get('/tableAgenda', [AgendaController::class, 'index'])->name('tableAgenda');

Route::get('/tableCategory', [CategoryController::class, 'index'])->name('tableCategory');

Route::get('/tableCustomers', [ClientController::class, 'index'])->name('tableCustomers');

Route::get('/tableKeyWord', [KeywordController::class, 'index'])->name('tableKeyWord');

Route::get('/tableLocation', [LocationController::class, 'index'])->name('tableLocation');

Route::get('/tablePayment', [TablePaymentController::class, 'index'])->name('tablePayment');

Route::get('/tableProfesional', [ProfesionalController::class, 'index'])->name('tableProfesional');

Route::get('/tableProfesionalService', [Professional_serviceController::class, 'index'])->name('tableProfesionalService');

Route::get('/tableReview', [ReviewsController::class, 'index'])->name('tableReview');

Route::get('/tableService', [ServicesController::class, 'index'])->name('tableService');

Route::get('/tableServiceCategory', [ServiceCategoryController::class, 'index'])->name('tableServiceCategory');

Route::get('/tableSuscription', [TableSuscriptionController::class, 'index'])->name('tableSuscription');

Route::get('/tableTypePayment', [TableTypePaymentController::class, 'index'])->name('tableTypePayment');

Route::get('/typePayment', [TypePaymentFormController::class, 'index'])->name('typePayment');

Route::get('/typeSuscriptionForm', [TypeSuscriptionFormController::class, 'index'])->name('typeSuscriptionForm');


Route::get('/profesionals', [ProfesionalController::class, 'index'])->name('profesionals.index');
Route::get('/profesionals/create', [ProfesionalController::class, 'create'])->name('profesionals.create');
Route::post('/profesionals/store', [ProfesionalController::class, 'store'])->name('profesionals.store');
Route::get('/profesionals/{profesional}/edit', [ProfesionalController::class, 'edit'])->name('profesionals.edit');
Route::put('/profesionals/{profesional}', [ProfesionalController::class, 'update'])->name('profesionals.update');
Route::delete('/profesionals/{profesional}', [ProfesionalController::class, 'destroy'])->name('profesionals.destroy');

Route::get('/professional_services', [Professional_serviceController::class, 'index'])->name('professional_services.index');
Route::get('/professional_services/create', [Professional_serviceController::class, 'create'])->name('professional_services.create');           
Route::post('/professional_services/store', [Professional_serviceController::class, 'store'])->name('professional_services.store');
Route::get('/professional_services/{professional_service}/edit', [Professional_serviceController::class, 'edit'])->name('professional_services.edit');
Route::put('/professional_services/{professional_service}', [Professional_serviceController::class, 'update'])->name('professional_services.update');
Route::delete('/professional_services/{professional_service}', [Professional_serviceController::class, 'destroy'])->name('professional_services.destroy');

Route::get('/services', [ServicesController::class, 'index'])->name('services.index');
Route::get('/services/create', [ServicesController::class, 'create'])->name('services.create');
Route::post('/services/store', [ServicesController::class, 'store'])->name('services.store');
Route::get('/services/{service}/edit', [ServicesController::class, 'edit'])->name('services.edit');
Route::put('/services/{service}', [ServicesController::class, 'update'])->name('services.update');
Route::delete('/services/{service}', [ServicesController::class, 'destroy'])->name('services.destroy');

Route::get('/reviews', [ReviewsController::class, 'index'])->name('reviews.index');
Route::get('/reviews/create', [ReviewsController::class, 'create'])->name('reviews.create');
Route::post('/reviews/store', [ReviewsController::class, 'store'])->name('reviews.store');
Route::get('/reviews/{review}/edit', [ReviewsController::class, 'edit'])->name('reviews.edit');
Route::put('/reviews/{review}', [ReviewsController::class, 'update'])->name('reviews.update');
Route::delete('/reviews/{review}', [ReviewsController::class, 'destroy'])->name('reviews.destroy');

Route :: get ('/service_categories', [ServiceCategoryController :: class, 'index'])-> name ('service_categories.index');
Route :: get ('/service_categories/create', [ServiceCategoryController :: class, 'create'])-> name ('service_categories.create');
Route :: post ('/service_categories/store', [ServiceCategoryController :: class, 'store'])-> name ('service_categories.store');
Route :: get ('/service_categories/{service_category}/edit', [ServiceCategoryController :: class, 'edit'])->
name ('service_categories.edit');
Route :: put ('/service_categories/{service_category}', [ServiceCategoryController :: class, 'update'])
-> name ('service_categories.update');
Route :: delete ('/service_categories/{service_category}', [ServiceCategoryController :: class, 'destroy'])
-> name ('service_categories.destroy');

//Para la tabla de categorias
// use App\Http\Controllers\CategoryController;

Route::get('/categories', [CategoryController::class, 'index'])->name('categories.index');
Route::get('/categories/create', [CategoryController::class, 'create'])->name('categories.create');
Route::post('/categories/store', [CategoryController::class, 'store'])->name('categories.store');
Route::get('/categories/{category}/edit', [CategoryController::class, 'edit'])->name('categories.edit');
Route::put('/categories/{category}', [CategoryController::class, 'update'])->name('categories.update');
Route::delete('/categories/{category}', [CategoryController::class, 'destroy'])->name('categories.destroy');

//Para la tabla de kewords
Route::get('/keywords', [KeywordController::class, 'index'])->name('keywords.index');
Route::get('/keywords/create', [KeywordController::class, 'create'])->name('keywords.create');
Route::post('/keywords/store', [KeywordController::class, 'store'])->name('keywords.store');
Route::get('/keywords/{keyword}/edit', [KeywordController::class, 'edit'])->name('keywords.edit');
Route::put('/keywords/{keyword}', [KeywordController::class, 'update'])->name('keywords.update');
Route::delete('/keywords/{keyword}', [KeywordController::class, 'destroy'])->name('keywords.destroy');

//Para la tabla de clientes
Route::get('/clients', [ClientController::class, 'index'])->name('clients.index');
Route::get('/clients/create', [ClientController::class, 'create'])->name('clients.create');
Route::post('/clients/store', [ClientController::class, 'store'])->name('clients.store');
Route::get('/clients/{client}/edit', [ClientController::class, 'edit'])->name('clients.edit');
Route::put('/clients/{client}', [ClientController::class, 'update'])->name('clients.update');
Route::delete('/clients/{client}', [ClientController::class, 'destroy'])->name('clients.destroy');

//Para la tabla de ubicaciones
Route::get('/locations', [LocationController::class, 'index'])->name('locations.index');
Route::get('/locations/create', [LocationController::class, 'create'])->name('locations.create');
Route::post('/locations/store', [LocationController::class, 'store'])->name('locations.store');
Route::get('/locations/{location}/edit', [LocationController::class, 'edit'])->name('locations.edit');
Route::put('/locations/{location}', [LocationController::class, 'update'])->name('locations.update');
Route::delete('/locations/{location}', [LocationController::class, 'destroy'])->name('locations.destroy');

//Para la tabla de agendas
Route::get('/agendas', [AgendaController::class, 'index'])->name('agendas.index');
Route::get('/agendas/create', [AgendaController::class, 'create'])->name('agendas.create');
Route::post('/agendas/store', [AgendaController::class, 'store'])->name('agendas.store');
Route::get('/agendas/{agenda}/edit', [AgendaController::class, 'edit'])->name('agendas.edit');
Route::put('/agendas/{agenda}', [AgendaController::class, 'update'])->name('agendas.update');
Route::delete('/agendas/{agenda}', [AgendaController::class, 'destroy'])->name('agendas.destroy');

