<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center">
            <a href="{{ route('shop') }}">
                <x-back-button />
            </a>
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('Shopping Cart') }}
            </h2>
        </div>
    </x-slot>
    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                @if (!$cartItems->isEmpty())
                @foreach ($cartItems as $cartItem)
                    <div class="p-6 border-b border-gray-200 dark:border-gray-600 text-gray-900 dark:text-gray-100">
                        <x-title class="text-xl font-semibold">{{ $cartItem->items->name }}</x-title>
                        <p class="text-md my-3">Quantity: {{ $cartItem->quantity }}</p>
                        <x-link-button href="{{ route('item.detail', ['item' => $cartItem->item_id]) }}">
                            {{ __('Check The Item') }}
                        </x-link-button>
                        <div class="flex justify-between items-center">
                            <form action="{{ route('cart.remove', ['item' => $cartItem->id]) }}" method="POST">
                                @csrf
                                <x-danger-button class="my-3">Remove From Cart</x-danger-button>
                            </form>
                        </div>
                    </div>
                @endforeach
                <div>
                    <!-- Perform actions related to checkout or payment here -->
                    <form action="{{ route('checkout')}}" method="POST">
                        @csrf
                    @hasCards
                    <div class="text-black dark:text-white">
                        <x-has-cards button_name="Buy" />
                    </div>
                    @else
                    <div class="text-sm">
                        <p>It looks like you didn't add any payment method yet.</p>
                        <p class="mb-3">Please add your card information to be able to pay.</p>
                        <x-link-button href="{{ route('payments.create') }}">Add Your Card</x-link-button>
                    </div>
                    @endhasCards
                </div>
                @else
                <p>You currently have nothing in your cart!</p>
                <p>Check the store, we have cool stuff!</p>
                @endif
            </div>
        </div>
    </div>
</x-app-layout>
