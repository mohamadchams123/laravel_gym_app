@props(['button_name','userCards'])
<p>You have a card</p>
<label for="selected_card">Select a card:</label>
<select name="selected_card" id="selected_card" class="text-black">
    @foreach (auth()->user()->userCards as $userCard)
        <option value="{{ $userCard->id }}" class="text-black">{{ $userCard->card_number }}</option>
    @endforeach
</select>
<div class="flex justify-between items-center mt-3">
    <x-primary-button>{{$button_name}}</x-primary-button>
    <x-link-button href="{{ route('payments.create') }}">Add Or Remove Cards</x-link-button>
</div>