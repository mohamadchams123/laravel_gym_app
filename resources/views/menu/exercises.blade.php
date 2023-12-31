<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
        <div class="flex items-center mr-6">
            <x-back-button href="{{ route('dashboard') }}" />
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('Exercises') }}
            </h2>
        </div>
            @admin
                <x-link-button href="{{ route('workout.create') }}">
                    {{ __('Add A New Workout') }} <x-plus-svg />
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
            <li><x-nav-link href="{{ route('exercices.show', ['category' => 'shoulders']) }}">{{ __('1. Shoulders') }}</x-nav-link></li>
            <li><x-nav-link href="{{ route('exercices.show', ['category' => 'chest']) }}">{{ __('2. Chest') }}</x-nav-link></li>
            <li><x-nav-link href="{{ route('exercices.show', ['category' => 'biceps']) }}">{{ __('3. Biceps') }}</x-nav-link></li>
            <li><x-nav-link href="{{ route('exercices.show', ['category' => 'abs']) }}">{{ __('4. Abs') }}</x-nav-link></li>
            <li><x-nav-link href="{{ route('exercices.show', ['category' => 'obliques']) }}">{{ __('5. Obliques') }}</x-nav-link></li>
            <li><x-nav-link href="{{ route('exercices.show', ['category' => 'quads']) }}">{{ __('6. Quads') }}</x-nav-link></li>
            <li><x-nav-link href="{{ route('exercices.show', ['category' => 'thighs']) }}">{{ __('7. Thighs') }}</x-nav-link></li>
            <li><x-nav-link href="{{ route('exercices.show', ['category' => 'calves']) }}">{{ __('8. Calves') }}</x-nav-link></li>
        </ul>
        <ul class="p-3 space-y-2 bg-white dark:bg-gray-800 shadow-sm rounded-lg">
            <li><x-title class="text-xl text-center border-b border-gray-400">Rear</x-title></li>
            <li><x-nav-link href="{{ route('exercices.show', ['category' => 'trapezius']) }}">{{ __('1. Trapezius') }}</x-nav-link></li>
            <li><x-nav-link href="{{ route('exercices.show', ['category' => 'triceps']) }}">{{ __('2. Triceps') }}</x-nav-link></li>
            <li><x-nav-link href="{{ route('exercices.show', ['category' => 'back']) }}">{{ __('3. Back') }}</x-nav-link></li>
            <li><x-nav-link href="{{ route('exercices.show', ['category' => 'glutes']) }}">{{ __('4. Glutes') }}</x-nav-link></li>
            <li><x-nav-link href="{{ route('exercices.show', ['category' => 'hamstrings']) }}">{{ __('5. Hamstrings') }}</x-nav-link></li>
            <li><x-nav-link href="{{ route('exercices.show', ['category' => 'calves']) }}">{{ __('6. Calves') }}</x-nav-link></li>
        </ul>
    </div>
    @admin
    @else
    <div class="pb-12">
        <div class="max-w-xl mx-auto">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="text-gray-900 dark:text-gray-100 p-6">
                    <div class="p-6 rounded-lg border border-gray-300 dark:border-gray-700 text-center">
                        <p>You can learn all these workouts and more at our gym.</p>
                        <p>
                            <x-nav-link class="text-md underline" href="{{route('subscription')}}">
                                Get your membership
                            </x-nav-link>right now, and discover what your body is capable of!
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endadmin
</x-app-layout>
