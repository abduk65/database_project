<?php

namespace App\Http\Controllers;

use App\Models\Subscriber;

use App\Http\Requests\StoreSubscriberRequest;
use App\Http\Requests\UpdateSubscriberRequest;
use App\Models\Package;
use Error;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use PhpParser\Node\Expr\FuncCall;

class SubscriberController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    function checkout(Request $request)
    {
        $package = Package::where('id', (int) $request->package_id)->first();

        $user = Auth::user();

        $subscriber = new Subscriber();
        $currentDate = now();
        $subscriber->user_id = $user->id;
        $subscriber->subscribed_at = $currentDate;
        $subscriber->expires_at = $currentDate->addDays($package->valid_duration);
        $subscriber->package_id = $package->id;
        $stripe = new \Stripe\StripeClient(env('STRIPE_PRIVATE_KEY'));

        $checkout_session = $stripe->checkout->sessions->create([
            'line_items' => [[
                'price_data' => [
                    'currency' => 'usd',
                    'product_data' => [
                        'name' => $package->name,
                    ],
                    'unit_amount' => $package->price,
                ],
                'quantity' => 1,
            ]],
            'mode' => 'payment',
            'success_url' => route('success') . "?session_id={CHECKOUT_SESSION_ID}",
            'cancel_url' => route('cancel'),
        ]);
        $subscriber->session_id = $checkout_session->id;
        $subscriber->save();

        return redirect($checkout_session->url);
    }

    public function success(Request $request)
    {
        $sessionId = $request->get('session_id');

        $stripe = new \Stripe\StripeClient(env('STRIPE_PRIVATE_KEY'));

        try {
            $session = $stripe->checkout->sessions->retrieve($sessionId);
            $subscriber = Subscriber::where('session_id', $sessionId)->first();
            $subscriber->paid = true;
            $subscriber->save();

            request()->flash('Your payment has been successfully received');
            return redirect()->route('table');
        } catch (Error $e) {
            Log::info($e);
        }
    }

    public function cancel()
    {

    }

    public function webhook()
    {

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreSubscriberRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Subscriber $subscriber)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Subscriber $subscriber)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSubscriberRequest $request, Subscriber $subscriber)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Subscriber $subscriber)
    {
        //
    }
}
