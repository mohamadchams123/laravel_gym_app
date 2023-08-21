<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('Workouts') }}
            </h2>
            @admin
                <x-link-button href="{{ route('workout.create') }}">
                    {{ __('Add A New Workout') }}
                </x-link-button>
            @endadmin
        </div>
    </x-slot>

    <div class="py-12 flex justify-center inline-block">
        <img src="{{ asset('./images/body.jpg') }}" alt="Human Body">
    </div>

    <div class="pb-12 flex justify-center space-x-12 items-start text-md font-semibold">
        <ul class="p-3 space-y-2 bg-white dark:bg-gray-800 shadow-sm rounded-lg">
            <li><x-title class="text-xl text-center border-b border-gray-400">Front</x-title></li>
            <li><x-nav-link href="{{ route('shoulder-workouts') }}">{{ __('1. Shoulders') }}</x-nav-link></li>
            <li><x-nav-link href="{{ route('chest-workouts') }}">{{ __('2. Chest') }}</x-nav-link></li>
            <li><x-nav-link href="{{ route('biceps-workouts') }}">{{ __('3. Biceps') }}</x-nav-link></li>
            <li><x-nav-link href="{{ route('abs-workouts') }}">{{ __('4. Abs') }}</x-nav-link></li>
            <li><x-nav-link href="{{ route('obliques-workouts') }}">{{ __('5. Oblique') }}</x-nav-link></li>
            <li><x-nav-link href="{{ route('quads-workouts') }}">{{ __('6. Quads') }}</x-nav-link></li>
            <li><x-nav-link href="{{ route('thighs-workouts') }}">{{ __('7. Thighs') }}</x-nav-link></li>
            <li><x-nav-link href="{{ route('calves-workouts') }}">{{ __('8. Calves') }}</x-nav-link></li>
        </ul>
        <ul class="p-3 space-y-2 bg-white dark:bg-gray-800 shadow-sm rounded-lg">
            <li><x-title class="text-xl text-center border-b border-gray-400">Rear</x-title></li>
            <li><x-nav-link href="{{ route('trapez-workouts') }}">{{ __('1. Trapezius') }}</x-nav-link></li>
            <li><x-nav-link href="{{ route('triceps-workouts') }}">{{ __('2. Triceps') }}</x-nav-link></li>
            <li><x-nav-link href="{{ route('back-workouts') }}">{{ __('3. Back') }}</x-nav-link></li>
            <li><x-nav-link href="{{ route('glutes-workouts') }}">{{ __('4. Glutes') }}</x-nav-link></li>
            <li><x-nav-link href="{{ route('Hamstrings-workouts') }}">{{ __('5. Hamstrings') }}</x-nav-link></li>
            <li><x-nav-link href="{{ route('calves-workouts') }}">{{ __('6. Calves') }}</x-nav-link></li>
        </ul>
    </div>
</x-app-layout>
