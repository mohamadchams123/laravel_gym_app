<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Carbon;
use App\Models\UserCard;
use Illuminate\Support\Facades\Auth;

class SubscriptionController extends Controller
{
    public function checkSubscriptionStatus(User $user)
    {
        if ($user->subscription && $user->subscription_end_date <= now()) {
            $this->userSubExpired($user);
        }
    }
    protected function userSubExpired(User $user)
    {
        $user->update([
            'subscription' => false,
            'subscription_start_date' => null,
            'subscription_end_date' => null,
        ]);
    }
    public function show()
    {
        if (auth()->user()?->cannot('admin')) {
            $user = User::find(auth()->user()->id);
            $this->checkSubscriptionStatus($user);
            return view('menu.subscription', compact('user'));
        } else {
            $searchQuery = request('search');
            
            $users = User::latest();

            if ($searchQuery) {
                $users->where('name', 'LIKE', '%' . $searchQuery . '%')
                    ->orWhere('email', 'LIKE', '%' . $searchQuery . '%');
            }

            $filteredUsers = $users->get();
            
            return view('menu.subscription', [
                'users' => $filteredUsers
            ]);
        }
    }

    public function subscribe(Request $request)
    {
        $request->validate([
            'subscription_start_date' => 'required|date',
            'selected_card' => 'required',
        ]);
        $subscriptionStartDate = Carbon::parse($request->input('subscription_start_date'));
        $subscriptionEndDate = $subscriptionStartDate->copy()->addDays(30); 
        $user = User::find(auth()->user()->id);
        $user->update([
            'subscription' => true,
            'subscription_start_date' => $subscriptionStartDate,
            'subscription_end_date' => $subscriptionEndDate,
        ]);
        return redirect()->route('subscription');
    }
    public function unsubscribe()
    {
        $user = User::find(auth()->user()->id);
        $user->update([
            'subscription' => false,
            'subscription_start_date' => null,
            'subscription_end_date' => null,
        ]);
        return redirect()->route('subscription');
    }
    public function useSelectedCard(Request $request)
    {
        return redirect()->route('subscribe');
    }
    
}
