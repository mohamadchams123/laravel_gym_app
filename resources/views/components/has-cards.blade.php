@props(['value'])

<div class="max-w-xl mx-auto p-3 m-6 border border-gray-300 dark:border-gray-700 rounded-md text-gray-800 dark:text-gray-400">
    @hasCards
    <x-input-label for="selected_card" :value="__('Select A Card')" />
    <select name="selected_card" id="selected_card" class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm">
        @foreach (auth()->user()->userCards as $userCard)
            <option value="{{ $userCard->id }}">{{ $userCard->card_number }}</option>
        @endforeach
    </select>
    <div class="sm:flex justify-between items-center">
        <x-primary-button class="mt-3">{{$value}}</x-primary-button>
        <x-link-button href="{{ route('payments.create') }}" class="mt-3">Add Or Remove Cards</x-link-button>
    </div>
    @else
    <p>It looks like you didn't add any payment methods yet.</p>
    <p class="mb-3">Please add your card information to be able to {{$value}}.</p>
    <x-link-button href="{{ route('payments.create') }}">Add Your Card</x-link-button>
    @endhasCards
</div>