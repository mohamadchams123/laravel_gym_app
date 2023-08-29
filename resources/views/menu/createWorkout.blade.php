<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center">
            <x-back-button href="{{ route('exercices') }}" />
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('Add A New Workout') }}
            </h2>
        </div>
    </x-slot>
    <div class="py-12">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <form method="POST" action="{{ route('workout.store') }}" enctype="multipart/form-data" class="px-6 pb-6 space-y-6">
                    @csrf
                    <x-text-input type="text" id="category_name" name="category_name" class="block w-full" placeholder="Category" required />
                    <x-text-input type="text" id="exercise_name" name="exercise_name" class="block w-full" placeholder="Exercise Name" required />
                    <x-text-area-input id="exercise_info" name="exercise_info" class="block w-full" required placeholder="Exercise Info" />
                    <x-text-area-input id="exercise_howto" name="exercise_howto" class="block w-full" required placeholder="Exercise How-to" />
                    <x-text-area-input id="exercise_sr" name="exercise_sr" class="block w-full" required placeholder="Exercise Sets-Reps" />
                    <div id="mistake-container">
                        <div class="mistake">
                            <x-text-area-input name="exercise_mistakes[]" class="block w-full" required placeholder="Mistake" />
                        </div>
                    </div>
                    <x-secondary-button id="add-mistake">
                        {{ __('Add Mistake') }}
                    </x-secondary-button>
                    <div id="muscles-container">
                        <div class="muscle">
                            <x-text-area-input name="exercise_muscles[]" class="block w-full" required placeholder="Muscle Targeted" />
                        </div>
                    </div>
                    <x-secondary-button id="add-muscle">
                        {{ __('Add Muscle') }}
                    </x-secondary-button>
                    <div id="benefits-container">
                        <div class="benefit">
                            <x-text-area-input name="exercise_benefits[]" class="block w-full" required placeholder="Exercise Benefit" />
                        </div>
                    </div>
                    <x-secondary-button id="add-benefit">
                        {{ __('Add Benefit') }}
                    </x-secondary-button>
                    <x-text-input type="file" name="exercise_image" class="pl-1 block w-full" required />
                    <x-primary-button>
                        {{ __('Create Workout') }}
                    </x-primary-button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>

<script>
    document.getElementById('add-muscle').addEventListener('click', function() {
        var container = document.getElementById('muscles-container');
        var muscleDiv = document.createElement('div');
        muscleDiv.className = 'muscle';
        muscleDiv.innerHTML = `
            <x-text-area-input name="exercise_muscles[]" class="block w-full" required placeholder="Muscle Targeted" />
        `;
        container.appendChild(muscleDiv);
    });
    
    document.getElementById('add-benefit').addEventListener('click', function() {
        var container = document.getElementById('benefits-container');
        var benefitDiv = document.createElement('div');
        benefitDiv.className = 'benefit';
        benefitDiv.innerHTML = `
            <x-text-area-input name="exercise_benefits[]" class="block w-full" required placeholder="Exercise Benefit" />
        `;
        container.appendChild(benefitDiv);
    });
    
    document.getElementById('add-mistake').addEventListener('click', function() {
        var container = document.getElementById('mistake-container');
        var mistakeDiv = document.createElement('div');
        mistakeDiv.className = 'mistake';
        mistakeDiv.innerHTML = `
            <x-text-area-input name="exercise_mistakes[]" class="block w-full" required placeholder="Mistake" />
        `;
        container.appendChild(mistakeDiv);
    });
</script>