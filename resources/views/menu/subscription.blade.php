<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Subscription') }}
        </h2>
    </x-slot>

    <div class="sm:px-12 py-12">
        <div class="max-w-xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="px-6 py-6 text-gray-900 dark:text-gray-100">
                @admin
                    @foreach ($users as $user)
                    @if($user->email !=='admin@gym.com')
                    <p class="text-xl text-gray-700 dark:text-gray-200 pb-6">
                        <b><i>{{ $user->name }}</i></b> is
                        @if ($user->subscription)
                        <span class="text-green-500"> subscribed</span> since <time>{{ $user->subscription_start_date->format('d m Y') }}</time>
                        @else
                        <span class="text-red-500"> not subscribed</span>
                        @endif
                    </p>
                    @endif
                    @endforeach
                @else
                    @if ($user->subscription)
                        <x-title class="text-xl">You are subscribed!</x-title>
                        <div class="flex justify-center">
                            <table class="text-center mt-6">
                                <tr>
                                    <td>
                                        <x-title>Subscription Start Date:</x-title>
                                    </td>
                                    <td>
                                        <time>{{ $user->subscription_start_date->format('d m Y') }}</time>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <x-title>Subscription End Date:</x-title>
                                    </td>
                                    <td>
                                        <time>{{ $user->subscription_end_date->format('d m Y') }}</time>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2">
                                        <form action="{{ route('unsubscribe') }}" method="POST">
                                            @csrf
                                            @method('DELETE') <!-- Specify the HTTP method -->
                                            <x-primary-button onclick="return confirm('Are you sure you want to unsubscribe?');">Unsubscribe</x-primary-button>
                                        </form>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    @else
                        @php
                            $userCards = auth()->user()->userCards;
                            $hasCard = $userCards->isNotEmpty();
                        @endphp
                        <x-title class="text-xl mb-6">Get Your 30 Days Membership Right Now</x-title>
                        <form action="{{ route('subscribe') }}" method="POST">
                            @csrf
                        @if ($hasCard)
                            <p>You have a card</p>
                                <label for="selected_card">Select a card:</label>
                                <select name="selected_card" id="selected_card" class="text-black" style="color: black;">
                                    @foreach ($userCards as $userCard)
                                        <option value="{{ $userCard->id }}" class="text-black" style="color: black;">{{ $userCard->card_number }}</option>
                                    @endforeach
                                </select>
                                <br>
                                <div class="mb-6 flex items-center">
                                <x-input-label for="subscription_start_date" :value="__('Choose your starting date:')" />
                                <x-text-input type="date" name="subscription_start_date" id="subscription_start_date" class="m-1 block" required />
                                </div>
                                <div class="flex justify-between items-center">
                                    <x-primary-button type="submit" id="use-selected-card-button" class="m-1">Use Selected Card</x-primary-button>
                                    <x-primary-button type="submit" id="create-new-card-button" class="m-1">Create a new card</x-primary-button>
                                </div>
                            </form>
                        @else
                        
                            <div class="mb-6 flex items-center">
                                <x-input-label for="subscription_start_date" :value="__('Choose your starting date:')" />
                                <x-text-input type="date" name="subscription_start_date" id="subscription_start_date" class="m-1 block" required />
                            </div>
                            <x-title>Payment Details</x-title>
                            <div class="flex justify-center">
                                <table class="text-right mt-6">
                                   <tr>
                                        <td><x-input-label for="card_number" :value="__('Card Number')" /></td>
                                        <td>
                                            <x-text-input type="text" id="card_number" name="card_number" placeholder="XXXX XXXX XXXX XXXX" class="m-1 block w-full" required pattern="\d{8}" maxlength="8" />
                                            <x-input-error class="mt-2" :messages="$errors->get('card_number')" />
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><x-input-label for="expiry_date" :value="__('Expiry Date')" /></td>
                                        <td>
                                            <x-text-input type="text" id="expiry_date" name="expiry_date" placeholder="MM/YYYY" class="m-1 block w-full" required pattern="(0[1-9]|1[0-2])\/\d{4}" title="Format: MM/YYYY" />
                                            <x-input-error class="mt-2" :messages="$errors->get('expiry_date')" />
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><x-input-label for="cvv" :value="__('CVV')" /></td>
                                        <td>
                                            <x-text-input type="text" id="cvv" name="cvv" placeholder="Enter CVV" class="m-1 block w-full" required pattern="\d{3}" title="CVV must be 3 digits" maxlength="3" />
                                            <x-input-error class="mt-2" :messages="$errors->get('cvv')" />
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><x-input-label for="cardholder_name" :value="__('Card Holder Name')" /></td>
                                        <td>
                                            <x-text-input type="text" id="cardholder_name" name="cardholder_name" placeholder="Enter cardholder name" class="m-1 block w-full" required />
                                            <x-input-error class="mt-2" :messages="$errors->get('cardholder_name')" />
                                        </td>
                                    </tr>

                                    <tr>
                                        <td colspan="2"><x-primary-button class="m-1">Subscribe</x-primary-button></td>
                                    </tr>
                                </table>
                            </div>
                        </form>
                        @endif
                    @endif
                @endadmin
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
