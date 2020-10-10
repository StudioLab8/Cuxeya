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

Route::get('/', function () {
    // return view('welcome');
    // return view('mantenimiento');
    return view('index2');
});

Route::get('/home', function () {
    return view('index');
});

/*Route::get('/admin', function () {
    return view('admin');
});*/

Route::get('/inicio', function () {
    return view('index2');
})->name('inicio');

Route::get('/todas-las-ayudas', function () {
    return view('ayudas');
});
Route::get('/fundaciones', function () {
    return view('fundaciones');
});
Route::get('/bull-and-bear', function () {
    return view('bullandbear');
});
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

Route::get('/blog', function () {
    return view('blog');
});

Route::get('/LinkedIn-abrio-su-pagina-para-cursos-online-gratuitos', function () {
    return view('blog01');
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

Route::get('/salvando-vidas', function () {
    return view('salvandovidas');
});

Route::get('/adopta-un-abuelito', function () {
    return view('adoptaunabuelito');
});

Route::get('/tejiendo-redes-libertad', function () {
    return view('tejiendoredes');
});

Route::get('/underdogs', function () {
    return view('underdogs');
});

Route::get('/abriga-bebe', function () {
    return view('ropa-bebe');
});

Route::get('/laptops', function () {
    return view('laptops');
});

Route::get('/registro-salvando-vidas', function () {
    return view('registro-salvando-vidas');
});

Route::get('/registro-adopta-abuelito', function () {
    return view('registro-adopta-abuelito');
});

Route::get('/registro-tejiendo-redes-libertad', function () {
    return view('registro-tejiendo-redes');
});

Route::get('/registro-underdogs', function () {
    return view('registro-underdog');
});

Route::get('/registro-ropa-bebe', function () {
    return view('registro-ropa-bebe');
});

Route::get('/registro-laptops', function () {
    return view('registro-laptops');
});

Route::get('/registro-exitoso', function () {
    return view('registro-exitoso');
});

Route::get('/mensaje-exitoso', function () {
    return view('mensaje-exitoso');
});

Route::get('/donar', function () {
    return view('donar');
});

Route::get('/cambiar-password-exitoso', function () {
    return view('cambiar-password-exitoso');
});

/**
 * Admin Routes
 */

Route::resource('estates', 'EstateController');

Route::resource('users', 'UserController');

Route::resource('savinglives', 'SavingLivesController');

Route::resource('adoptgrandpa', 'AdoptGrandpaController');

Route::resource('contact', 'ContactController');

Route::post('stripe', 'StripeController@store');

Route::resource('admin', 'AdminController');

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