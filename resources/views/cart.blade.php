<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center">
            <x-back-button href="{{ route('shop') }}" />
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
                        @if ($cartItem->quantity)
                            <p class="text-md my-3">Quantity: {{ $cartItem->quantity }}</p>
                        @else
                            <p class="text-md my-3">Thank You For Purchasing this item!</p>
                        @endif
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
                    <x-title class="text-xl font-semibold p-6 pb-0">Checkout</x-title>
                    <form action="{{ route('checkout')}}" method="POST">
                        @csrf
                        <x-has-cards value="buy" />
                    </form>
                </div>
                @else
                <div class="text-center text-gray-800 dark:text-gray-400 p-3">
                    <p>You currently have nothing in your cart!</p>
                    <p>Check the store, we have cool stuff!</p>
                </div>
                @endif
            </div>
        </div>
    </div>
</x-app-layout>
