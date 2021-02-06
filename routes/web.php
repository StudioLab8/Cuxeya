<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/**
 * Web Site
 */

Route::get('/aviso-de-privacidad', function () {
    return view('aviso');
});

Route::get('/terminos-y-condiciones', function () {
    return view('terminos');
});

Route::get('/como-funciona', function () {
    return view('funcionamiento');
});

Route::get('/iniciativa-cuxeya', function () {
    return view('iniciativa');
});

Route::get('/contacto', function () {
    return view('contacto');
});

Route::get('/registro', function () {
    return view('registro');
});

Route::get('/registro-brazo-exitoso', function () {
    return view('registro-brazo-exitoso');
});

Route::get('/registro-exitoso', function () {
    return view('registro-exitoso');
});

Route::get('/mensaje-exitoso', function () {
    return view('mensaje-exitoso');
});

Route::get('/cambiar-password-exitoso', function () {
    return view('cambiar-password-exitoso');
});

//Admin Change After
Route::get('/confirm-project-user', function () {
    return view('admin.projects.confirm');
});


/**
 * Site Web Public Routes
*/

Route::get('/', 'SiteWebController@home')->name('inicio');
Route::get('/inicio', 'SiteWebController@home')->name('inicio');
Route::get('/proyecto/{url}', 'SiteWebController@project');
Route::get('/proyecto/{url}/aplicar', 'SiteWebController@apply')->name('proyecto.aplicar');
Route::get('/noticias', 'SiteWebController@all_news')->name('noticias');
Route::get('/noticia/{url}', 'SiteWebController@news_item')->name('noticias-item');
Route::get('/todas-las-ayudas', 'SiteWebController@all_projects')->name('proyectos');

/**
 * Admin Routes
 */

// Stripe
Route::post('stripe', 'StripeController@store');

// Administrator
Route::resource('/admin', 'AdminController');


// Galleries Controllers.
Route::post('/dropzone/store','ImageController@store')->name('dropzone.store');
Route::post('/dropzone/news/store','GalleryNewsController@store')->name('dropzone.news.store');
Route::post('/dropzone/news/destroy/{id}','GalleryNewsController@destroy')->name('dropzone.news.destroy');
Route::post('/upload/docs/store','DocumentController@store');

// Projects
Route::get('projects/index', 'ProjectController@index')->name('projects.index');
Route::get('projects/show/{id}', 'ProjectController@show')->name('projects.show');
Route::get('projects/create', 'ProjectController@create')->name('projects.create');
Route::post('projects/store', 'ProjectController@store')->name('projects.store');
Route::post('projects/publish', 'ProjectController@publish')->name('projects.publish');
Route::get('projects/list-pending', 'ProjectController@list_pending')->name('projects.list-pending');
Route::get('projects/list-rejected', 'ProjectController@list_rejected')->name('projects.list-rejected');
Route::get('projects/list-accepted', 'ProjectController@list_accepted')->name('projects.list-accepted');
Route::get('projects/list-by-user', 'ProjectController@list_by_user')->name('projects.list-by-user');
Route::post('projects/check', 'ProjectController@check')->name('projects.check');

// Beneficiaries
Route::post('beneficiary/store', 'BeneficiaryController@store')->name('beneficiary.store');
Route::get('beneficiary/show/{id}', 'BeneficiaryController@show')->name('beneficiary.show');
Route::get('beneficiary/list-pending', 'BeneficiaryController@list_pending')->name('beneficiary.list-pending');
Route::get('beneficiary/list-rejected', 'BeneficiaryController@list_rejected')->name('beneficiary.list-rejected');
Route::get('beneficiary/list-accepted', 'BeneficiaryController@list_accepted')->name('beneficiary.list-accepted');
Route::get('beneficiary/list-contacting', 'BeneficiaryController@list_contacting')->name('beneficiary.list-contacting');
Route::get('beneficiary/list-attending', 'BeneficiaryController@list_attending')->name('beneficiary.list-attending');
Route::get('beneficiary/list-attended', 'BeneficiaryController@list_attended')->name('beneficiary.list-attended');
Route::get('beneficiary/list-by-user', 'BeneficiaryController@list_by_user')->name('beneficiary.list-by-user');
Route::post('beneficiary/check', 'BeneficiaryController@check')->name('beneficiary.check');
Route::post('beneficiary/contact', 'BeneficiaryController@contact')->name('beneficiary.contact');
Route::get('beneficiary/confirm-contact', 'BeneficiaryController@confirm_contact');
Route::get('beneficiary/confirm-attending', 'BeneficiaryController@confirm_attending');

// News
Route::get('news/index', 'NewsController@index')->name('news.index');
Route::get('news/create', 'NewsController@create')->name('news.create');
Route::post('news/store', 'NewsController@store')->name('news.store');
Route::get('news/edit/{id}', 'NewsController@edit')->name('news.edit');
Route::post('news/update', 'NewsController@update')->name('news.update');

// Testimonials
Route::get('testimonials/index', 'TestimonialsController@index')->name('testimonials.index');
Route::get('testimonials/create', 'TestimonialsController@create')->name('testimonials.create');
Route::post('testimonials/store', 'TestimonialsController@store')->name('testimonials.store');
Route::get('testimonials/edit/{id}', 'TestimonialsController@edit')->name('testimonials.edit');
Route::post('testimonials/update', 'TestimonialsController@update')->name('testimonials.update');

// Contacts
Route::resource('contact', 'ContactController');

// Users
Route::resource('users', 'UserController');

//Route::resource('assistance', 'AssistanceController');
Route::post('/assistance/new', 'AssistanceController@store')
->name('assistance-program-new');
Route::get('/assistance/{program}', 'AssistanceController@getlist')
->name('assistance-program');

//Route::resource('login', 'LoginController');
Route::get('validateAccount', 'LoginController@validateAccount');
Route::get('changePassword', 'LoginController@changePassword');
Route::get('logout', 'LoginController@logout');
Route::post('changeConfirmPassword', 'LoginController@changeConfirmPassword');
Route::post('login', 'LoginController@login');
Route::post('recoveryPassword', 'LoginController@recoveryPassword');