<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Exercise Recommendations') }}
        </h2>
    </x-slot>

    <div class="p-12">
        <div class="max-w-xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="px-12 py-6 text-gray-900 dark:text-gray-100">
                    <!-- Biceps Exercises -->
                    <div class="exercise-category" id="biceps-category">
                        <h2 class="category-header dark:text-gray-200 cursor-pointer" id="biceps-header">
                            Biceps Exercises
                        </h2>
                        <div class="category-content" id="biceps-exercises" style="display: none;">
                            <!-- Exercise 1 -->
                            <div class="border p-4 rounded-md bg-cover bg-center" style="background-image: url('path-to-your-image.jpg');">
                                <h3 class="text-lg font-semibold" style="color: #333;">Bicep Curl</h3>
                                <p>Description of the exercise...</p>
                                <a href="#" class="text-blue-500">Watch Video</a>
                            </div>
                            <!-- Exercise 2 -->
                            <div class="border p-4 rounded-md bg-cover bg-center" style="background-image: url('path-to-your-image.jpg');">
                                <h3 class="text-lg font-semibold" style="color: #333;">Hammer Curl</h3>
                                <p>Description of the exercise...</p>
                                <a href="#" class="text-blue-500">Watch Video</a>
                            </div>
                            <!-- Exercise 3 -->
                            <div class="border p-4 rounded-md bg-cover bg-center" style="background-image: url('path-to-your-image.jpg');">
                                <h3 class="text-lg font-semibold" style="color: #333;">Preacher Curl</h3>
                                <p>Description of the exercise...</p>
                                <a href="#" class="text-blue-500">Watch Video</a>
                            </div>
                            <!-- Exercise 4 -->
                            <div class="border p-4 rounded-md bg-cover bg-center" style="background-image: url('path-to-your-image.jpg');">
                                <h3 class="text-lg font-semibold" style="color: #333;">Concentration Curl</h3>
                                <p>Description of the exercise...</p>
                                <a href="#" class="text-blue-500">Watch Video</a>
                            </div>
                            <!-- Exercise 5 -->
                            <div class="border p-4 rounded-md bg-cover bg-center" style="background-image: url('path-to-your-image.jpg');">
                                <h3 class="text-lg font-semibold" style="color: #333;">Zottman Curl</h3>
                                <p>Description of the exercise...</p>
                                <a href="#" class="text-blue-500">Watch Video</a>
                            </div>
                        </div>
                    </div>

                    <!-- Chest Exercises -->
                    <div class="exercise-category" id="chest-category">
                        <h2 class="category-header dark:text-gray-200 cursor-pointer" id="chest-header">
                            Chest Exercises
                        </h2>
                        <div class="category-content" id="chest-exercises" style="display: none;">
                            <!-- Exercise 1 -->
                            <div class="border p-4 rounded-md bg-cover bg-center" style="background-image: url('path-to-your-image.jpg');">
                                <h3 class="text-lg font-semibold" style="color: #333;">Bench Press</h3>
                                <p>Description of the exercise...</p>
                                <a href="#" class="text-blue-500">Watch Video</a>
                            </div>
                            <!-- Exercise 2 -->
                            <div class="border p-4 rounded-md bg-cover bg-center" style="background-image: url('path-to-your-image.jpg');">
                                <h3 class="text-lg font-semibold" style="color: #333;">Push-Up</h3>
                                <p>Description of the exercise...</p>
                                <a href="#" class="text-blue-500">Watch Video</a>
                            </div>
                            <!-- Exercise 3 -->
                            <div class="border p-4 rounded-md bg-cover bg-center" style="background-image: url('path-to-your-image.jpg');">
                                <h3 class="text-lg font-semibold" style="color: #333;">Dumbbell Flyes</h3>
                                <p>Description of the exercise...</p>
                                <a href="#" class="text-blue-500">Watch Video</a>
                            </div>
                            <!-- Exercise 4 -->
                            <div class="border p-4 rounded-md bg-cover bg-center" style="background-image: url('path-to-your-image.jpg');">
                                <h3 class="text-lg font-semibold" style="color: #333;">Incline Bench Press</h3>
                                <p>Description of the exercise...</p>
                                <a href="#" class="text-blue-500">Watch Video</a>
                            </div>
                            <!-- Exercise 5 -->
                            <div class="border p-4 rounded-md bg-cover bg-center" style="background-image: url('path-to-your-image.jpg');">
                                <h3 class="text-lg font-semibold" style="color: #333;">Chest Dips</h3>
                                <p>Description of the exercise...</p>
                                <a href="#" class="text-blue-500">Watch Video</a>
                            </div>
                        </div>
                    </div>

                    <!-- Back Exercises -->
                    <div class="exercise-category" id="back-category">
                        <h2 class="category-header dark:text-gray-200 cursor-pointer" id="back-header">
                            Back Exercises
                        </h2>
                        <div class="category-content" id="back-exercises" style="display: none;">
                            <!-- Exercise 1 -->
                            <div class="border p-4 rounded-md bg-cover bg-center" style="background-image: url('path-to-your-image.jpg');">
                                <h3 class="text-lg font-semibold" style="color: #333;">Pull-Up</h3>
                                <p>Description of the exercise...</p>
                                <a href="#" class="text-blue-500">Watch Video</a>
                            </div>
                            <!-- Exercise 2 -->
                            <div class="border p-4 rounded-md bg-cover bg-center" style="background-image: url('path-to-your-image.jpg');">
                                <h3 class="text-lg font-semibold" style="color: #333;">Barbell Rows</h3>
                                <p>Description of the exercise...</p>
                                <a href="#" class="text-blue-500">Watch Video</a>
                            </div>
                            <!-- Exercise 3 -->
                            <div class="border p-4 rounded-md bg-cover bg-center" style="background-image: url('path-to-your-image.jpg');">
                                <h3 class="text-lg font-semibold" style="color: #333;">Deadlifts</h3>
                                <p>Description of the exercise...</p>
                                <a href="#" class="text-blue-500">Watch Video</a>
                            </div>
                            <!-- Exercise 4 -->
                            <div class="border p-4 rounded-md bg-cover bg-center" style="background-image: url('path-to-your-image.jpg');">
                                <h3 class="text-lg font-semibold" style="color: #333;">T-Bar Rows</h3>
                                <p>Description of the exercise...</p>
                                <a href="#" class="text-blue-500">Watch Video</a>
                            </div>
                            <!-- Exercise 5 -->
                            <div class="border p-4 rounded-md bg-cover bg-center" style="background-image: url('path-to-your-image.jpg');">
                                <h3 class="text-lg font-semibold" style="color: #333;">Lat Pulldowns</h3>
                                <p>Description of the exercise...</p>
                                <a href="#" class="text-blue-500">Watch Video</a>
                            </div>
                        </div>
                    </div>

                    <!-- Leg Exercises -->
                    <div class="exercise-category" id="legs-category">
                        <h2 class="category-header dark:text-gray-200 cursor-pointer" id="legs-header">
                            Leg Exercises
                        </h2>
                        <div class="category-content" id="legs-exercises" style="display: none;">
                            <!-- Exercise 1 -->
                            <div class="border p-4 rounded-md bg-cover bg-center" style="background-image: url('path-to-your-image.jpg');">
                                <h3 class="text-lg font-semibold" style="color: #333;">Squats</h3>
                                <p>Description of the exercise...</p>
                                <a href="#" class="text-blue-500">Watch Video</a>
                            </div>
                            <!-- Exercise 2 -->
                            <div class="border p-4 rounded-md bg-cover bg-center" style="background-image: url('path-to-your-image.jpg');">
                                <h3 class="text-lg font-semibold" style="color: #333;">Lunges</h3>
                                <p>Description of the exercise...</p>
                                <a href="#" class="text-blue-500">Watch Video</a>
                            </div>
                            <!-- Exercise 3 -->
                            <div class="border p-4 rounded-md bg-cover bg-center" style="background-image: url('path-to-your-image.jpg');">
                                <h3 class="text-lg font-semibold" style="color: #333;">Leg Press</h3>
                                <p>Description of the exercise...</p>
                                <a href="#" class="text-blue-500">Watch Video</a>
                            </div>
                            <!-- Exercise 4 -->
                            <div class="border p-4 rounded-md bg-cover bg-center" style="background-image: url('path-to-your-image.jpg');">
                                <h3 class="text-lg font-semibold" style="color: #333;">Calf Raises</h3>
                                <p>Description of the exercise...</p>
                                <a href="#" class="text-blue-500">Watch Video</a>
                            </div>
                            <!-- Exercise 5 -->
                            <div class="border p-4 rounded-md bg-cover bg-center" style="background-image: url('path-to-your-image.jpg');">
                                <h3 class="text-lg font-semibold" style="color: #333;">Deadlifts</h3>
                                <p>Description of the exercise...</p>
                                <a href="#" class="text-blue-500">Watch Video</a>
                            </div>
                        </div>
                    </div>

                    <!-- Shoulder Exercises -->
                    <div class="exercise-category" id="shoulder-category">
                        <h2 class="category-header dark:text-gray-200 cursor-pointer" id="shoulder-header">
                            Shoulder Exercises
                        </h2>
                        <div class="category-content" id="shoulder-exercises" style="display: none;">
                            <!-- Exercise 1 -->
                            <div class="border p-4 rounded-md bg-cover bg-center" style="background-image: url('path-to-your-image.jpg');">
                                <h3 class="text-lg font-semibold" style="color: #333;">Military Press</h3>
                                <p>Description of the exercise...</p>
                                <a href="#" class="text-blue-500">Watch Video</a>
                            </div>
                            <!-- Exercise 2 -->
                            <div class="border p-4 rounded-md bg-cover bg-center" style="background-image: url('path-to-your-image.jpg');">
                                <h3 class="text-lg font-semibold" style="color: #333;">Lateral Raises</h3>
                                <p>Description of the exercise...</p>
                                <a href="#" class="text-blue-500">Watch Video</a>
                            </div>
                            <!-- Exercise 3 -->
                            <div class="border p-4 rounded-md bg-cover bg-center" style="background-image: url('path-to-your-image.jpg');">
                                <h3 class="text-lg font-semibold" style="color: #333;">Front Raises</h3>
                                <p>Description of the exercise...</p>
                                <a href="#" class="text-blue-500">Watch Video</a>
                            </div>
                            <!-- Exercise 4 -->
                            <div class="border p-4 rounded-md bg-cover bg-center" style="background-image: url('path-to-your-image.jpg');">
                                <h3 class="text-lg font-semibold" style="color: #333;">Upright Rows</h3>
                                <p>Description of the exercise...</p>
                                <a href="#" class="text-blue-500">Watch Video</a>
                            </div>
                            <!-- Exercise 5 -->
                            <div class="border p-4 rounded-md bg-cover bg-center" style="background-image: url('path-to-your-image.jpg');">
                                <h3 class="text-lg font-semibold" style="color: #333;">Shrugs</h3>
                                <p>Description of the exercise...</p>
                                <a href="#" class="text-blue-500">Watch Video</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <style>
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
    </style>

    <script>
        const toggleExercises = (headerId, exercisesId) => {
            const header = document.getElementById(headerId);
            const exercises = document.getElementById(exercisesId);

            header.addEventListener('click', () => {
                if (exercises.style.display === 'none') {
                    exercises.style.display = 'block';
                } else {
                    exercises.style.display = 'none';
                }
            });
        };

        toggleExercises('biceps-header', 'biceps-exercises');
        toggleExercises('chest-header', 'chest-exercises');
        toggleExercises('back-header', 'back-exercises');
        toggleExercises('legs-header', 'legs-exercises');
        toggleExercises('shoulder-header', 'shoulder-exercises');
    </script>
</x-app-layout>





