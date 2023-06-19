<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Package;
use App\Test;
use App\OrderItem;
use Illuminate\Support\Facades\DB;

class CartController extends Controller
{
    public function index()
    {
        $cartItems = OrderItem::where('user_id', auth()->id())->get();
        $totalPrice = $cartItems->sum('price');

        return view('cart.index', compact('cartItems', 'totalPrice'));
    }

    public function addToCart(Request $request)
    {
        $itemType = $request->input('item_type');
        $itemId = $request->input('item_id');

        if ($itemType === 'package') {
            $item = Package::find($itemId);
        } elseif ($itemType === 'test') {
            $item = Test::find($itemId);
        } else {
            return response()->json(['error' => 'Invalid item type.']);
        }

        if (!$item) {
            return response()->json(['error' => 'Item not found.']);
        }

        $cartItem = new OrderItem();
        $cartItem->user_id = auth()->id();
        $cartItem->item_type = $itemType;
        $cartItem->item_id = $itemId;
        $cartItem->name = $item->name;
        $cartItem->price = $item->price;
        $cartItem->save();

        return response()->json(['success' => 'Item added to cart.']);
    }

    public function removeFromCart(Request $request)
    {
        $itemId = $request->input('item_id');

        $cartItem = OrderItem::where('user_id', auth()->id())->find($itemId);

        if (!$cartItem) {
            return response()->json(['error' => 'Item not found in cart.']);
        }

        $cartItem->delete();

        return response()->json(['success' => 'Item removed from cart.']);
    }

    public function checkout(Request $request)
    {
        // Perform checkout process here

        // Clear cart items
        OrderItem::where('user_id', auth()->id())->delete();

        return response()->json(['success' => 'Checkout completed.']);
    }

    public function bookTest(){
        $packages = DB::table('package_test')
                    ->select('package_test.package_id', DB::raw('COUNT(test_types.id) AS total_test_types'))
                    ->join('test_types', 'package_test.test_id', '=', 'test_types.test_id')
                    ->join('package_test as p2', 'package_test.package_id', '=', 'p2.package_id')
                    ->join('test_types as tt2', 'p2.test_id', '=', 'tt2.test_id')
                    ->join('test_types as t', 'package_test.test_id', '=', 't.test_id')
                    ->groupBy('package_test.package_id')
                    ->get();
    

            
            return view('frontend.home.booktest',compact(['packages']));
    }
}
