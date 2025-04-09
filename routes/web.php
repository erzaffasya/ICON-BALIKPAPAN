<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Web;
use App\Services\Watzap;

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

Route::get('/', [Web\LandingController::class, 'index'])->name('landing');
Route::get('/area', [Web\AreaController::class, 'index'])->name('landing.area');
Route::get('/products', [Web\LandingController::class, 'product'])->name('landing.product');
Route::get('/promo', [Web\PromoController::class, 'index'])->name('landing.promo');
Route::get('/promodetail/{id}', [Web\PromoController::class, 'detail'])->name('landing.promodetail');
Route::get('/galery', [Web\GaleryController::class, 'index'])->name('landing.galery');
Route::get('/payment', [Web\PaymentController::class, 'index'])->name('landing.promo');


Route::get('/contact', function () {
    return view('landing.contact');
})->name('landing.contact');

Route::get('/syaratketentuan', function () {
    return view('landing.syaratketentuan');
})->name('landing.syaratketentuan');

Route::get('/kebijakanprivasi', function () {
    return view('landing.kebijakanprivasi');
})->name('landing.kebijakanprivasi');

Route::post('/form', [Web\RegistrationController::class, 'store'])->name('form.store');

Route::get('fetch/data/kota/{id}', [Web\AreaController::class, 'fetchDataKota'])->name('fetch.data.kota');
Route::get('fetch/data/kecamatan/{id}', [Web\AreaController::class, 'fetchDataKecamatan'])->name('fetch.data.kecamatan');
Route::get('fetch/data/kelurahan/{id}', [Web\AreaController::class, 'fetchDataKelurahan'])->name('fetch.data.kelurahan');

Route::get('/product/{product:id}/registration',  [Web\RegistrationController::class, 'registration'])->name('product.registration');
Route::get('/request/otp', [Web\RegistrationController::class, 'requestOtp'])->name('otp.request');

Route::get('/wa-status', function () {
    return (new Watzap)->status();
});
Route::get('/wa-group', function () {
    return (new Watzap)->groupGrab();
});
