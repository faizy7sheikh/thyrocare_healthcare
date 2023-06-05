<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Test;
use App\Package;

class CartController extends Controller
{
    public function index()
    {
        $cartItems = session('cart', []);
        $tests = Test::whereIn('id', array_keys($cartItems['tests']))->get();
        $packages = Package::whereIn('id', array_keys($cartItems['packages']))->get();
        
        return view('cart.index', compact('tests', 'packages', 'cartItems'));
    }

    public function addToCart(Request $request)
    {
        $cartItems = session('cart', []);
        
        if ($request->has('test_id')) {
            $test = Test::find($request->test_id);
            if ($test) {
                $cartItems['tests'][$test->id] = $test;
            }
        }
        
        if ($request->has('package_id')) {
            $package = Package::find($request->package_id);
            if ($package) {
                $cartItems['packages'][$package->id] = $package;
            }
        }
        
        session(['cart' => $cartItems]);
        
        return redirect()->route('cart.index')->with('success', 'Item added to cart successfully.');
    }

    public function removeFromCart(Request $request)
    {
        $cartItems = session('cart', []);
        
        if ($request->has('test_id')) {
            unset($cartItems['tests'][$request->test_id]);
        }
        
        if ($request->has('package_id')) {
            unset($cartItems['packages'][$request->package_id]);
        }
        
        session(['cart' => $cartItems]);
        
        return redirect()->route('cart.index')->with('success', 'Item removed from cart successfully.');
    }

    public function clearCart()
    {
        session(['cart' => []]);
        
        return redirect()->route('cart.index')->with('success', 'Cart cleared successfully.');
    }

    public function search(Request $request)
    {
        $query = $request->input('query');

        $tests = Test::where('name', 'like', '%' . $query . '%')->get();
        
        return response()->json(['tests' => $tests]);
    }
}
