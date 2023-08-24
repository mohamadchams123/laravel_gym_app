<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\UserCard;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class UserCardController extends Controller
{
    public function create()
    {
        if (auth()->user()?->can('admin'))
        {
            abort(Response::HTTP_FORBIDDEN);
        }
        return view('profile.payments');
    }
    public function store()
    {
        request()->validate([
            'card_number' => 'required|regex:/^\d{4}-\d{4}-\d{4}-\d{4}$/',
            'expiry_date' => 'required|date_format:m/Y|after:' . now(),
            'cvv' => 'required|digits:3|numeric',
            'cardholder_name' => 'required|string',
        ]);
        $user = User::find(auth()->user()->id);
        $userCard = new UserCard([
            'user_id' => $user->id,
            'card_number' => request()->input('card_number'),
            'expiry_date' => request()->input('expiry_date'),
            'cvv' => request()->input('cvv'),
            'cardholder_name' => request()->input('cardholder_name'),
        ]);
        $userCard->save();
        return redirect()->route('payments.create');
    }
    public function destroy($id)
    {
        $userCard = UserCard::find($id);
        if (!$userCard || $userCard->user_id !== auth()->id()) {
            abort(403, 'Unauthorized');
        }
        $userCard->delete();
        return redirect()->route('payments.create');
    }
}
