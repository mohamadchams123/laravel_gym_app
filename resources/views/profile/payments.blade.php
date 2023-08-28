<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center">
            <x-back-button />
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('Payment Details') }}
            </h2>
        </div>
    </x-slot>

    <div class="sm:px-12 py-12">
        <div class="max-w-xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-6">
                <form action="{{ route('payments.add') }}" method="POST">
                    @csrf
                    <x-title class="text-xl">Add You Card Informations</x-title>
                    <table class="text-right my-6 flex justify-center">
                        <tr>
                            <td><x-input-label for="card_number" :value="__('Card Number')" /></td>
                            <td>
                                <x-text-input type="text" id="card_number" name="card_number" placeholder="XXXX-XXXX-XXXX-XXXX" class="m-1 block w-full" required pattern="\d{4}-\d{4}-\d{4}-\d{4}" maxlength="19" />
                                <script>
                                    document.getElementById('card_number').addEventListener('input', function() {
                                        let input = this.value.replace(/\D/g, '');
                                        let formatted = '';
                                        for (let i = 0; i < input.length; i++) {
                                            if (i > 0 && i % 4 === 0) {
                                                formatted += '-';
                                            }
                                            formatted += input[i];
                                        }
                                        this.value = formatted;
                                    });
                                </script>
                                <x-input-error class="mt-2" :messages="$errors->get('card_number')" />
                            </td>
                        </tr>
                        <tr>
                            <td><x-input-label for="expiry_date" :value="__('Expiry Date')" /></td>
                            <td>
                                <x-text-input type="text" id="expiry_date" name="expiry_date" placeholder="MM/YYYY" class="m-1 block w-full" required pattern="(0[1-9]|1[0-2])\/\d{4}" title="Format: MM/YYYY" maxlength="7" oninput="formatExpiryDate(this)" />
                                <script>
                                    function formatExpiryDate(input) {
                                        let inputValue = input.value;
                                        let numericValue = inputValue.replace(/\D/g, '');
                                        if (numericValue.length > 6) {
                                            numericValue = numericValue.substr(0, 6);
                                        }
                                        if (numericValue.length >= 2) {
                                            numericValue = numericValue.slice(0, 2) + '/' + numericValue.slice(2);
                                        }
                                        input.value = numericValue;
                                    }
                                </script>
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
                                <x-text-input type="text" id="cardholder_name" name="cardholder_name" placeholder="Enter cardholder name" class="m-1 block w-full" required oninput="this.value = this.value.toUpperCase();" />
                                <x-input-error class="mt-2" :messages="$errors->get('cardholder_name')" />
                            </td>
                        </tr>

                        <tr>
                            <td colspan="2"><x-primary-button class="m-1">Add Card</x-primary-button></td>
                        </tr>
                    </table>
                </form>

                @hasCards
                <x-title class="text-xl">Your Previous Cards</x-title>
                <div class="text-gray-800 dark:text-gray-400">
                    @foreach ($userCards as $userCard)
                        <form action="{{ route('payments.destroy', $userCard->id) }}" method="POST" class="space-y-3 border border-gray-300 dark:border-gray-700 rounded-md p-3 mt-6">
                            @csrf
                            @method('DELETE')
                            <p>Card number : {{$userCard->card_number }}</p><p>CVV : {{ $userCard->cvv }}</p>
                            <x-danger-button onclick="return confirm('Are you sure you want to remove this card?')">Remove</x-danger-button>
                        </form>
                    @endforeach
                </div>
                @endhasCards
            </div>
        </div>
    </div>
</x-app-layout>