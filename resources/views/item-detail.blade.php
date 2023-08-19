<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center">
            <a href="{{route('shop')}}" class="bg-gray-200 dark:bg-gray-200 mr-3 rounded-2xl">
                <img src="../../images/back-button.svg" width="30" height="30">
            </a>
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ $item->name }}
            </h2>
        </div>
    </x-slot>
    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="flex p-6 space-x-12">
                    <div>
                        <img src="../../storage/{{$item->image_path}}" width="300" height="300">
                    </div>
                    <div class="text-gray-900 dark:text-gray-100">
                        <h3 class="text-xl font-semibold">{{ $item->name }}</h3>
                        <p class="text-gray-600 text-md">{{ $item->description }}</p>
                        <p class="text-lg font-bold my-2">${{ $item->price }}</p>
                        <form id="addToCartForm" action="{{ route('cart.add', ['item' => $item->id]) }}" method="POST">
                            @csrf
                            <p class="text-lg font-semibold mb-6">Quantity: 
                                <x-text-input type="number" name="item-quantity" />
                            </p>
                            @if ($item->quantity === 0)
                                <p class="text-red-500 text-md">This item is out of stock</p>
                            @else
                                <x-primary-button>Add To Your Cart</x-primary-button>
                            @endif
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
