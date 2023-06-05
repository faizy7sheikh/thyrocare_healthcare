<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Stripe\Charge;
use Stripe\Stripe;

class CheckoutController extends Controller
{
    public function stripePayment(Request $request)
    {
        // Set your Stripe secret key
        Stripe::setApiKey(env('STRIPE_SECRET_KEY'));

        // Create a charge
        try {
            Charge::create([
                'amount' => $request->input('amount'),
                'currency' => 'usd',
                'source' => $request->input('stripeToken'),
                'description' => 'Payment Description',
            ]);

            // Payment successful, redirect to success page
            return redirect()->route('payment.success');
        } catch (\Exception $e) {
            // Payment failed, redirect to failure page
            return redirect()->route('payment.failure')->with('error', 'Payment failed. Please try again.');
        }
    }

    public function codPayment(Request $request)
    {
        // Process the Cash on Delivery payment

        // Payment successful, redirect to success page
        return redirect()->route('payment.success');

        // Alternatively, you can redirect to a failure page if the COD payment failed
        // return redirect()->route('payment.failure')->with('error', 'COD payment failed. Please try again.');
    }

    public function success()
    {
        // Payment success page
        return view('payment.success');
    }

    public function failure()
    {
        // Payment failure page
        return view('payment.failure');
    }
}
