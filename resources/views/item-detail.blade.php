<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <div class="flex items-center">
                <x-back-button />
                <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                    {{ $item->name }}
                </h2>
            </div>
            <div>
                @admin
                @else
                <x-link-button href="{{ route('cart') }}">
                        {{ __('Your Cart') }} <x-shopping-cart />
                </x-link-button>
                @endadmin
            </div>
        </div> 
    </x-slot>
    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6">
                    <div class="pb-6 flex justify-center">
                        <img src="../../storage/{{$item->image_path}}" width="300" height="300">
                    </div>
                    <div class="text-gray-900 dark:text-gray-100">
                        @admin
                        <form action="{{ route('item.update', ['item' => $item->id]) }}" method="POST">
                            @csrf
                            <x-input-label for="name" :value="__('Name:')" class="text-lg" />
                            <x-text-input type="text" id="name" name="name" :value="$item->name" />
                            <x-input-label for="description" :value="__('Description:')" class="text-lg mt-3" />
                            <x-text-area-input id="description" name="description" rows="4" class="mt-1 block w-full">{{ $item->description }}</x-text-area-input>
                            <x-input-label for="price" :value="__('Price: (in USD)')" class="text-lg mt-3" />
                            <x-text-input type="number" id="price" name="price" :value="$item->price" />
                            <x-input-label for="quantity" :value="__('Quantity:')" class="text-lg mt-3" />
                            <x-text-input type="number" id="quantity" name="quantity" min="1" :value="$item->quantity" />
                            <p class="mt-3"><x-primary-button>Update Item</x-primary-button></p>
                        </form>
                        <form action="{{ route('item.destroy', ['item' => $item->id]) }}" method="POST" class="mt-3">
                            @csrf
                            @method('DELETE')
                            <x-danger-button onclick="return confirm('Are you sure you want to delete this item?')">Delete Item</x-danger-button>
                        </form>
                        @else
                        <x-title class="text-xl font-semibold">{{ $item->name }}</x-title>
                        <p class="text-gray-600 dark:text-gray-400 text-lg my-3">{{ $item->description }}</p>
                        <p class="text-lg font-bold my-3">${{ $item->price }}</p>
                        @if ($item->quantity === 0)
                            <p class="text-red-500 text-md">This item is out of stock</p>
                        @else
                        <form action="{{ route('cart.add', ['item' => $item->id]) }}" method="POST">
                            @csrf
                            <p class="flex items-center mb-6">
                                <x-input-label for="item-quantity" :value="__('Quantity:')" class="text-xl mr-2" />
                                <button type="button" class="px-2 text-xl" onclick="decrementValue()">-</button>
                                <x-text-input type="number" id="item-quantity" name="item-quantity" min="1" max="{{ $item->quantity }}" required readonly value="1" />
                                <button type="button" class="px-2 text-xl" onclick="incrementValue()">+</button>
                            </p>
                            <script>
                                function incrementValue() {
                                    var input = document.getElementById("item-quantity");
                                    var currentValue = parseInt(input.value);
                                    var maxValue = parseInt(input.getAttribute("max"));
                                    input.value = Math.min(currentValue + 1, maxValue);
                                }
                                function decrementValue() {
                                    var input = document.getElementById("item-quantity");
                                    var currentValue = parseInt(input.value);
                                    var minValue = parseInt(input.getAttribute("min"));
                                    input.value = Math.max(currentValue - 1, minValue);
                                }
                            </script>
                            <x-primary-button>Add To Your Cart</x-primary-button>
                        </form>
                        @endif
                        @endadmin
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
