<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Subscription') }}
        </h2>
    </x-slot>

    <div class="p-12">
        <div class="max-w-xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="px-12 py-6 text-gray-900 dark:text-gray-100">
                    <x-title class="text-xl mb-6">Subscription Page</x-title>
                    <div>
                        @if ($user->subscription)
                            <x-title>You are subscribed!</x-title>
                            <div class="flex justify-center">
                            <table class="text-center mt-6">
                                <tr>
                                    <td>
                                        <x-title>Subscription Start Date:</x-title>
                                    </td>
                                    <td>
                                        <time>{{ $user->subscription_start_date }}</time>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <x-title>Subscription End Date:</x-title>
                                    </td>
                                    <td>
                                        <time>{{ $user->subscription_end_date }}</time>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2">
                                        <form action="{{ route('unsubscribe') }}" method="POST">
                                            @csrf
                                            <x-primary-button onclick="return confirm('Are you sure you want to unsubscribe?');">Unsubscribe</x-primary-button>
                                        </form>
                                    </td>
                                </tr>
                            </table>
                            </div>
                        @else
                            <x-title>Payment Details</x-title>
                            <div class="flex justify-center">
                            <form action="{{ route('subscribe') }}" method="POST">
                                @csrf
                                <table class="text-right mt-6">
                                    <tr>
                                        <td><x-input-label for="message" :value="__('Card Number')" /></td>
                                        <td>
                                            <x-text-input type="text" id="card_number" name="card_number" placeholder="Enter card number" class="m-1 block w-full" required />
                                            <x-input-error class="mt-2" :messages="$errors->get('card_number')" />
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><x-input-label for="message" :value="__('Expiry Date')" /></td>
                                        <td>
                                            <x-text-input type="text" id="expiry_date" name="expiry_date" placeholder="MM/YY" class="m-1 block w-full" required />
                                            <x-input-error class="mt-2" :messages="$errors->get('expiry_date')" />
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><x-input-label for="message" :value="__('CVV')" /></td>
                                        <td>
                                            <x-text-input type="text" id="cvv" name="cvv" placeholder="Enter CVV" class="m-1 block w-full" required />
                                            <x-input-error class="mt-2" :messages="$errors->get('cvv')" />
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><x-input-label for="message" :value="__('Card Holder Name')" /></td>
                                        <td>
                                            <x-text-input type="text" id="cardholder_name" name="cardholder_name" placeholder="Enter cardholder name" class="m-1 block w-full" required />
                                            <x-input-error class="mt-2" :messages="$errors->get('cardholder_name')" />
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2"><x-primary-button class="m-1">Subscribe</x-primary-button></td>
                                    </tr>
                                </table>
                            </form>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>