<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('Shop') }}
            </h2>
            @admin
                <x-link-button href="{{ route('item.create') }}">
                    {{ __('Add New Items') }} <img src="/images/plus.svg" width="15" height="15" class="ml-3">
                </x-link-button>
            @endadmin
            <x-link-button href="{{ route('cart') }}">
                {{ __('Your Cart') }} <img src="/images/shopping-cart.svg" width="20" height="20" class="ml-3">
            </x-link-button>
        </div>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex flex-wrap justify-center lg:grid lg:grid-cols-4 gap-10">
                @foreach ($items as $item)
                    <x-item-card :item="$item" />
                @endforeach
            </div>
        </div>
    </div>
</x-app-layout>