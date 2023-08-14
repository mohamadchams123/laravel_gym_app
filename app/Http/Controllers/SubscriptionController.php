<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Carbon;

class SubscriptionController extends Controller
{
    public function show()
{
    $user = User::find(auth()->user()->id); // Retrieve the authenticated user
    return view('menu.subscription', compact('user'));
}
 
public function subscribe(Request $request)
{
    $subscriptionStartDate = Carbon::now();
    $subscriptionEndDate = $subscriptionStartDate->copy()->addMonth(); 
    $user = User::find(auth()->user()->id);
    $user->update(['subscription' => true]);
    $user->update(['subscription_start_date' => $subscriptionStartDate]);
    $user->update(['subscription_end_date' => $subscriptionEndDate]);
    return redirect()->route('subscription');
}
public function unsubscribe(Request $request)
{
    $user = User::find(auth()->user()->id);
    $user->update([
        'subscription' => false,
        'subscription_start_date' => null,
        'subscription_end_date' => null,
    ]);

    return redirect()->route('subscription');
}

}
