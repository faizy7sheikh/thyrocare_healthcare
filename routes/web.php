<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\ServiceAreaController;
use App\Http\Controllers\TechnicianDetailController;
use App\Http\Controllers\Auth\LoginController;
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

Route::get('test',function(){
    return view('frontend.layouts.app');
});
Route::get('test2',function(){
    return view('frontend.home.index');
});

Route::get('/', function () {
    return view('welcome');
});
Route::get('book-test',function(){
    return view('book');
})->name('book-test');
Route::get('form',function(){
    return view('form');
})->name('form');

// backeend time
Route::get('backend',function(){
    return view('frontend.layouts.app');
});

// admin login system
Route::get('/admin/login', [LoginController::class, 'showLoginForm'])->name('admin.login');
Route::post('/admin/login', [LoginController::class, 'login'])->name('admin.login.submit');

// cart route
Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
Route::post('/cart/add', [CartController::class, 'addToCart'])->name('cart.add');
Route::post('/cart/remove', [CartController::class, 'removeFromCart'])->name('cart.remove');
Route::post('/cart/clear', [CartController::class, 'clearCart'])->name('cart.clear');


Route::get('/payment', function () {
    $totalAmount = 100; // Replace with your dynamic total amount

    return view('payment')->with('totalAmount', $totalAmount);
});

Route::post('/checkout/stripe', [CheckoutController::class, 'stripePayment'])->name('checkout.stripe');
Route::post('/checkout/cod', [CheckoutController::class, 'codPayment'])->name('checkout.cod');
Route::get('/payment/success', [CheckoutController::class, 'success'])->name('payment.success');
Route::get('/payment/failure', [CheckoutController::class, 'failure'])->name('payment.failure');



Route::post('/whatsapp/send-message', [WhatsAppController::class, 'sendMessage']);
Route::get('/api/tests', [CartController::class,'search']);



// backend code
Route::get('/service-areas', [ServiceAreaController::class,'index'])->name('service-areas.index');
Route::get('/service-areas/create', [ServiceAreaController::class,'create'])->name('service-areas.create');
Route::post('/service-areas', [ServiceAreaController::class,'store'])->name('service-areas.store');
Route::get('/service-areas/{serviceArea}/edit', [ServiceAreaController::class,'edit'])->name('service-areas.edit');
Route::put('/service-areas/{serviceArea}', [ServiceAreaController::class,'update'])->name('service-areas.update');

// package
Route::resource('packages', PackageController::class);


// technicians
Route::get('/technicians', [TechnicianDetailController::class, 'index'])->name('technicians.index');
Route::get('/technicians/create', [TechnicianDetailController::class, 'create'])->name('technicians.create');
Route::post('/technicians', [TechnicianDetailController::class, 'store'])->name('technicians.store');
Route::get('/technicians/{technician}', [TechnicianDetailController::class, 'show'])->name('technicians.show');
Route::get('/technicians/{technician}/edit', [TechnicianDetailController::class, 'edit'])->name('technicians.edit');
Route::put('/technicians/{technician}', [TechnicianDetailController::class, 'update'])->name('technicians.update');
Route::delete('/technicians/{technician}', [TechnicianDetailController::class, 'destroy'])->name('technicians.destroy');

// slots for appointment
Route::resource('available_slots', AvailableSlotController::class);
