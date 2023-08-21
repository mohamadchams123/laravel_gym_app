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
                    <div class="p-6 border-b border-gray-200 dark:border-gray-600">
                        <x-title class="text-xl font-semibold">{{ $cartItem->items->name }}</x-title>
                        <p class="text-gray-600 dark:text-gray-400 text-lg my-3">{{ $cartItem->items->description }}</p>
                        <p class="text-lg font-bold my-3">${{ $cartItem->items->price }}</p>
                        <p class="text-md mb-3">Quantity: {{ $cartItem->quantity }}</p>
                        <form action="{{ route('cart.remove', ['item' => $cartItem->id]) }}" method="POST">
                            @csrf
                            <x-danger-button>Remove From Cart</x-danger-button>
                        </form>
                        <form action="{{ route('checkout', ['item' => $cartItem->id]) }}" method="POST">
                            @csrf
                            <x-primary-button>Buy</x-primary-button>
                        </form>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</x-app-layout>