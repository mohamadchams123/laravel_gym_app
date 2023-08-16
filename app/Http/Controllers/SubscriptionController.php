<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Carbon;
use App\Models\UserCard;
class SubscriptionController extends Controller
{
    public function show()
    {
        $user = User::find(auth()->user()->id); // Retrieve the authenticated user
        return view('menu.subscription', compact('user'));
    }
    public function subscribe(Request $request)
    {
        $request->validate([
            'subscription_start_date' => 'required|date',
            'card_number' => 'required|digits:8|numeric',
            'expiry_date' => 'required|date_format:m/Y|after:' . now(),
            'cvv' => 'required|digits:3|numeric',
            'cardholder_name' => 'required|string',
        ]);
        $subscriptionStartDate = Carbon::parse($request->input('subscription_start_date'));
        $subscriptionEndDate = $subscriptionStartDate->copy()->addMonth(); 
        $user = User::find(auth()->user()->id);
        $user->update([
            'subscription' => true,
            'subscription_start_date' => $subscriptionStartDate,
            'subscription_end_date' => $subscriptionEndDate,
        ]);
        $userCard = new UserCard([
            'user_id' => $user->id,
            'card_number' => $request->input('card_number'),
            'expiry_date' => $request->input('expiry_date'),
            'cvv' => $request->input('cvv'),
            'cardholder_name' => $request->input('cardholder_name'),
        ]);
        $userCard->save();
        return redirect()->route('subscription');
    }
    public function unsubscribe(Request $request)
    {
        $user = User::find(auth()->user()->id);

        // Delete the user's card information from the userCard table
        $user->userCards()->delete();

        // Update user subscription status and dates
        $user->update([
            'subscription' => false,
            'subscription_start_date' => null,
            'subscription_end_date' => null,
        ]);

        return redirect()->route('subscription');
    }
}
