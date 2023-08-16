<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Exercise Recommendations') }}
        </h2>
    </x-slot>

    <div class="p-12">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="py-3">
                    <x-exercise-category value="Biceps Exercises">
                        <x-exercise-content name="Bicep Curl" href="https://www.google.com/">
                            Description of the exercise...
                        </x-exercise-content>
                        <x-exercise-content name="Bicep Curl" href="https://www.google.com/">
                            Description of the exercise...
                        </x-exercise-content>
                        <x-exercise-content name="Bicep Curl" href="https://www.google.com/">
                            Description of the exercise...
                        </x-exercise-content>
                        <x-exercise-content name="Bicep Curl" href="https://www.google.com/">
                            Description of the exercise...
                        </x-exercise-content>
                    </x-exercise-category>
                    <x-exercise-category value="Biceps Exercises">
                        <x-exercise-content name="Bicep Curl" href="https://www.google.com/">
                            Description of the exercise...
                        </x-exercise-content>
                        <x-exercise-content name="Bicep Curl" href="https://www.google.com/">
                            Description of the exercise...
                        </x-exercise-content>
                        <x-exercise-content name="Bicep Curl" href="https://www.google.com/">
                            Description of the exercise...
                        </x-exercise-content>
                        <x-exercise-content name="Bicep Curl" href="https://www.google.com/">
                            Description of the exercise...
                        </x-exercise-content>
                    </x-exercise-category>
                </div>
            </div>
        </div>
    </div>

    {{-- <style>
        .exercise-category {
            margin-bottom: 20px;
            border: 1px solid #e2e8f0;
            border-radius: 8px;
            overflow: hidden;
        }

        .category-header dark:text-gray-200 {
            padding: 12px;
            font-size: 18px;
            background-color: #f7fafc;
            cursor: pointer;
        }

        .category-content {
            padding: 12px;
            background-color: #ffffff;
        }

        .category-content .border {
            border: 1px solid #e2e8f0;
            padding: 12px;
            margin-bottom: 10px;
            border-radius: 8px;
        }

        .category-content .border h3 {
            font-size: 16px;
            margin-bottom: 8px;
        }

        .category-content .border p {
            color: #4a5568;
            margin-bottom: 10px;
        }

        .category-content .border a {
            color: #4299e1;
            text-decoration: underline;
        }

        .category-content .border a:hover {
            color: #3182ce;
        }

        .category-content .border.bg-cover {
            background-size: cover;
        }

        .category-content .border.bg-center {
            background-position: center;
        }
    </style> --}}

    
</x-app-layout>





