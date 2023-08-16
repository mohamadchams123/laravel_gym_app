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
                        <x-title class="text-xl mb-6">Get Your 30 Days Membership Right Now</x-title>
                        <form action="{{ route('subscribe') }}" method="POST">
                            @csrf
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
                                            <x-text-input type="text" id="card_number" name="card_number" placeholder="XXXX XXXX XXXX XXXX" class="m-1 block w-full"
                                                        required pattern="\d{8}" maxlength="8" />
                                            <x-input-error class="mt-2" :messages="$errors->get('card_number')" />
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><x-input-label for="expiry_date" :value="__('Expiry Date')" /></td>
                                        <td>
                                            <x-text-input type="text" id="expiry_date" name="expiry_date" placeholder="MM/YYYY" class="m-1 block w-full"
                                                        required pattern="(0[1-9]|1[0-2])\/\d{4}" title="Format: MM/YYYY" />
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
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
