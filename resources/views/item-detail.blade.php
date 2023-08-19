<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ $item->name }}
            </h2>
        </div>
    </x-slot>
    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-4">
                <h3 class="text-xl font-semibold">{{ $item->name }}</h3>
                <p class="text-gray-600">{{ $item->description }}</p>
                <p class="text-lg font-bold mt-2">${{ $item->price }}</p>

                <!-- Add the form for adding an item to the cart -->
                <form id="addToCartForm" action="{{ route('cart.add', ['item' => $item->id]) }}" method="POST">
                    @csrf
                    <button type="submit" class="mt-4 px-4 py-2 bg-blue-500 text-white rounded">
                        Add to Your Cart
                    </button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
