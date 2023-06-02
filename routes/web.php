<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;
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



Route::get('/', function () {
    return view('welcome');
});
Route::get('book-test',function(){
    return view('book');
})->name('book-test');
Route::get('form',function(){
    return view('form');
})->name('form');


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
