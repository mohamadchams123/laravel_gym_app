@props(['name'])
<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center">
            <a href="{{route('exercices')}}" class="bg-white dark:bg-white mr-3 rounded-2xl">
                <img src="./images/back-button.svg" width="30" height="30">
            </a>
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __("$name Workouts") }}
            </h2>
        </div>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg px-6 py-3">
                {{ $slot }}
            </div>
        </div>
    </div>
</x-app-layout>