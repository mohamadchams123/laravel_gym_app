<x-app-layout>
<x-title>Payment Details</x-title>
<form action="{{ route('payments.add') }}" method="POST">
    @csrf
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
                <td colspan="2"><x-primary-button class="m-1">Add Card</x-primary-button></td>
            </tr>
        </table>
    </div>
</form>

@hasCards
<x-title>Your Cards</x-title>
@foreach ($userCards as $userCard)
    <form action="{{route('payments.destroy')}}" method="POST">
    @csrf
    @method('DELETE')
    {{$userCard->card_number}}
    <x-danger-button onclick="return confirm('Are you sure you want to remove this card?')">Remove</x-danger-button>
    </form>
@endforeach
@endhasCards
</x-app-layout>