<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center">
            <a href="{{route('shop')}}">
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
                @foreach ($cartItems as $cartItem)
                    <div class="p-6 border-b border-gray-200 dark:border-gray-600 text-gray-900 dark:text-gray-100">
                        <x-title class="text-xl font-semibold">{{ $cartItem->items->name }}</x-title>
                        <p class="text-md my-3">Quantity: {{ $cartItem->quantity }}</p>
                        <x-link-button href="{{ route('item.detail', ['item' => $cartItem->id]) }}">
                            {{ __('Chech The Item') }}
                        </x-link-button>
                        <div class="flex justify-between items-center">
                        <form action="{{ route('cart.remove', ['item' => $cartItem->id]) }}" method="POST">
                            @csrf
                            <x-danger-button class="my-3">Remove From Cart</x-danger-button>
                        </form>
                        <form action="{{ route('checkout', ['item' => $cartItem->id]) }}" method="POST">
                            @csrf
                            <x-primary-button>Buy</x-primary-button>
                        </form>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</x-app-layout>