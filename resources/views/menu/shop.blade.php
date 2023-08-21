<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('Shop') }}
            </h2>
            @admin
                <x-link-button href="{{ route('item.create') }}">
                    {{ __('Add New Items') }} <x-plus-svg />
                </x-link-button>
            @else
                <x-link-button href="{{ route('cart') }}">
                    {{ __('Your Cart') }} <x-shopping-cart />
                </x-link-button>
            @endadmin
        </div>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            @if (!$items->isEmpty())
            <div class="flex flex-wrap justify-center lg:grid lg:grid-cols-4 gap-10">
                @foreach ($items as $item)
                    <a href="{{ route('item.detail', ['item' => $item->id]) }}" class="block">
                        <x-item-card :item="$item" />
                    </a>
                @endforeach
            </div>
            @else
            <div class="max-w-xl mx-auto sm:px-6 lg:px-8">
                <p class="bg-white dark:bg-gray-800 flex shadow-sm rounded-xl justify-center text-gray-800 dark:text-gray-400 p-3">The shop is currently empty!</p>
            </div>
            @endif
        </div>
        </div>
    </div>
</x-app-layout>