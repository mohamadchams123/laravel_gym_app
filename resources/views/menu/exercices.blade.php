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
                        <x-exercise-content name="Bicep Curl" href="https://youtu.be/ykJmrZ5v0Oo">
                            The bicep curl is a classic biceps exercise. Stand with a dumbbell in each hand, palms facing forward. Keep your upper arms stationary and curl the weights while contracting your biceps. Lower the weights slowly back to the starting position.
                        </x-exercise-content>
                        <x-exercise-content name="Hammer Curl" href="https://youtu.be/TwD-YGVP4Bk">
                            The hammer curl targets both the biceps and the brachialis muscle. Hold a dumbbell in each hand with a neutral grip (palms facing your body). Curl the dumbbells while keeping your upper arms stationary. This exercise emphasizes the outer portion of the biceps.
                        </x-exercise-content>
                        <x-exercise-content name="Preacher Curl" href="https://youtu.be/DoCWeUBA0Gs">
                             The preacher curl is performed on a preacher curl bench. Sit down and rest your arms on the angled pad. Hold an EZ-bar with an underhand grip and curl the barbell while keeping your upper arms on the pad. This isolates the biceps and provides a great stretch.
                        </x-exercise-content>
                        <x-exercise-content name="Concentration Curl" href="https://youtu.be/0AUGkch3tzc">
                            The concentration curl is performed while seated. Hold a dumbbell in one hand and rest your elbow on your inner thigh. Curl the dumbbell while keeping your upper arm stationary. This exercise helps isolate the biceps and improves peak contraction.
                        </x-exercise-content>
                        <x-exercise-content name="Incline Dumbbell Curl" href="https://youtu.be/b4jOP-spQW8">
                            The incline dumbbell curl is performed on an incline bench. Lie back with dumbbells in each hand, arms fully extended. Curl the weights while keeping your upper arms stationary. This exercise targets the lower portion of the biceps.
                        </x-exercise-content>
                    </x-exercise-category>
                    <x-exercise-category value="Leg Exercises">
                        <x-exercise-content name="Squats" href="https://youtu.be/jGQ8_IMPQOY">
                            Squats are a compound exercise that targets the quadriceps, hamstrings, and glutes. Keep your back straight and lower your hips while bending your knees. Push through your heels to return to the starting position.
                        </x-exercise-content>
                        <x-exercise-content name="Lunges" href="https://youtu.be/QF0BQS2W80k">
                            Lunges are great for targeting the quads, hamstrings, and glutes. Step forward with one leg and lower your body until both knees are bent at a 90-degree angle. Push through your front heel to return to the starting position.
                        </x-exercise-content>
                        <x-exercise-content name="Leg Press" href="https://youtu.be/U9dnM3dguLc">
                            The leg press machine is used to work the quads, hamstrings, and glutes. Sit down and push the weight sled away with your legs. Lower the sled back down while maintaining control.
                        </x-exercise-content>
                        <x-exercise-content name="Deadlifts" href="https://youtu.be/cAd_Xz5smlI">
                            Deadlifts work the entire posterior chain, including the lower back, glutes, and hamstrings. Stand with a barbell, bend at your hips and knees, grab the bar, and lift while keeping your back straight.
                        </x-exercise-content>
                        <x-exercise-content name="Calf Raises" href="https://youtu.be/-M4-G8p8fmc">
                            Calf raises target the calf muscles. Stand on the edge of a step or platform, then rise up on your toes as high as possible. Lower your heels below the step to stretch the calves.
                        </x-exercise-content>
                    </x-exercise-category>
                    <x-exercise-category value="Chest Exercises">
                        <x-exercise-content name="Bench Press" href="https://youtu.be/4aVy2Xj6wYs">
                            The bench press is a staple chest exercise. Lie on a bench and lower the barbell to your chest, then press it back up. Keep your elbows at a 45-degree angle to your body for optimal chest activation.
                        </x-exercise-content>
                        <x-exercise-content name="Push-Ups" href="https://youtu.be/bJ3Ogh5mFE4">
                            Push-ups are a bodyweight exercise that targets the chest, shoulders, and triceps. Start in a plank position, lower your body towards the ground, and push back up.
                        </x-exercise-content>
                        <x-exercise-content name="Dumbbell Flyes" href="https://youtu.be/ajdFwa-qM98">
                            Dumbbell flyes isolate the chest muscles. Lie on a bench and hold dumbbells above your chest with slightly bent arms. Lower the weights out to the sides in a controlled motion.
                        </x-exercise-content>
                        <x-exercise-content name="Incline Bench Press" href="https://youtu.be/dtNXLavPFo0">
                            The incline bench press targets the upper chest. Lie on an inclined bench and perform a bench press with the barbell or dumbbells, focusing on the upper chest contraction.
                        </x-exercise-content>
                        <x-exercise-content name="Chest Dips" href="https://youtu.be/dX_nSOOJIsE">
                            Chest dips are performed on parallel bars. Lower your body by bending your elbows and leaning slightly forward, then push back up to the starting position.
                        </x-exercise-content>
                    </x-exercise-category>
                    <x-exercise-category value="Back Exercises">
                        <x-exercise-content name="Deadlifts" href="https://www.google.com/">
                            Deadlifts work the entire posterior chain, including the lower back, glutes, and hamstrings. Stand with a barbell, bend at your hips and knees, grab the bar, and lift while keeping your back straight.
                        </x-exercise-content>
                        <x-exercise-content name="Pull-Ups" href="https://www.google.com/">
                            Pull-ups target the lats and upper back. Hang from a bar with palms facing away and pull your body up until your chin is above the bar. Lower back down with control.
                        </x-exercise-content>
                        <x-exercise-content name="Bent-Over Rows" href="https://www.google.com/">
                            Bent-over rows work the upper back. Hold a barbell or dumbbells, bend at the hips, and row the weight towards your lower chest while keeping your back flat.
                        </x-exercise-content>
                        <x-exercise-content name="Lat Pulldowns" href="https://www.google.com/">
                            Lat pulldowns target the lats. Sit at a lat pulldown machine, grip the bar wider than shoulder-width, and pull the bar down to your chest while leaning slightly back.
                        </x-exercise-content>
                        <x-exercise-content name="T-Bar Rows" href="https://www.google.com/">
                            T-bar rows target the middle back. Use a T-bar row machine or landmine attachment, load it with weight, and row the handle towards your abdomen while maintaining good form.
                        </x-exercise-content>
                    </x-exercise-category>
                    <x-exercise-category value="Shoulder Exercises">
                        <x-exercise-content name="Military Press" href="https://www.google.com/">
                            The military press targets the shoulders. Stand or sit, press a barbell or dumbbells overhead while keeping your core engaged. Lower the weights back to shoulder level.
                        </x-exercise-content>
                        <x-exercise-content name="Lateral Raises" href="https://www.google.com/">
                            Lateral raises isolate the lateral deltoids. Hold dumbbells at your sides and raise them out to the sides until they are at shoulder level. Lower back down with control.
                        </x-exercise-content>
                        <x-exercise-content name="Front Raises" href="https://www.google.com/">
                            Front raises target the front deltoids. Hold dumbbells in front of your thighs and raise them to shoulder level in front of you. Lower back down with control.
                        </x-exercise-content>
                        <x-exercise-content name="Rear Delt Flyes" href="https://www.google.com/">
                            Rear delt flyes target the rear deltoids. Bend over at the hips, hold dumbbells in front of you, and raise them out to the sides until your arms are parallel to the ground.
                        </x-exercise-content>
                        <x-exercise-content name="Face Pulls" href="https://www.google.com/">
                            Face pulls work the rear deltoids and upper back. Attach a rope to a cable machine, pull the rope towards your face, and squeeze your shoulder blades together.
                        </x-exercise-content>
                    </x-exercise-category>
                    <x-exercise-category value="Triceps Exercises">
                        <x-exercise-content name="Tricep Dips" href="https://www.google.com/">
                            Tricep dips target the triceps. Place your hands on parallel bars, lower your body by bending your elbows, then push back up.
                        </x-exercise-content>
                        <x-exercise-content name="Close-Grip Bench Press" href="https://www.google.com/">
                            Close-grip bench press focuses on the triceps. Use a narrow grip on the barbell and lower it to your chest, then push it back up.
                        </x-exercise-content>
                        <x-exercise-content name="Skull Crushers" href="https://www.google.com/">
                            Skull crushers work the triceps. Lie on a bench, hold a barbell or dumbbells above your forehead, and bend at the elbows.
                        </x-exercise-content>
                        <x-exercise-content name="Tricep Kickbacks" href="https://www.google.com/">
                            Tricep kickbacks isolate the triceps. Hold a dumbbell in one hand, bend at the waist, and extend your arm back.
                        </x-exercise-content>
                        <x-exercise-content name="Overhead Tricep Extension" href="https://www.google.com/">
                            Overhead tricep extension targets the triceps. Hold a dumbbell or barbell overhead and bend at the elbows to lower the weight behind your head.
                        </x-exercise-content>
                    </x-exercise-category>
                    <x-exercise-category value="Flexibility and Mobility Exercises">
                        <x-exercise-content name="Static Stretching" href="https://www.google.com/">
                            Static stretching helps improve flexibility. Hold stretches for various muscle groups for about 15-30 seconds.
                        </x-exercise-content>
                        <x-exercise-content name="Yoga" href="https://www.google.com/">
                            Yoga combines poses and stretches to enhance flexibility and relaxation. There are many styles of yoga to choose from.
                        </x-exercise-content>
                        <x-exercise-content name="Foam Rolling" href="https://www.google.com/">
                            Foam rolling helps release muscle tension. Use a foam roller to target different areas of your body.
                        </x-exercise-content>
                        <x-exercise-content name="Pilates" href="https://www.google.com/">
                            Pilates focuses on core strength, flexibility, and balance. It often involves precise movements and controlled breathing.
                        </x-exercise-content>
                        <x-exercise-content name="Dynamic Stretching" href="https://www.google.com/">
                            Dynamic stretching involves moving parts of your body through their full range of motion. It's great for warming up before workouts.
                        </x-exercise-content>
                    </x-exercise-category>
                    <x-exercise-category value="Cardio Exercises">
                        <x-exercise-content name="Running" href="https://www.google.com/">
                            Running is a great cardiovascular workout. Go for a jog or a run outdoors or on a treadmill.
                        </x-exercise-content>
                        <x-exercise-content name="Cycling" href="https://www.google.com/">
                            Cycling is a low-impact cardio exercise. You can cycle outdoors or use a stationary bike.
                        </x-exercise-content>
                        <x-exercise-content name="Jump Rope" href="https://www.google.com/">
                            Jump rope is a fun cardio exercise. Grab a jump rope and skip in place or try different jump rope techniques.
                        </x-exercise-content>
                        <x-exercise-content name="Swimming" href="https://www.google.com/">
                            Swimming is a full-body cardio workout. Swim laps or engage in water aerobics.
                        </x-exercise-content>
                        <x-exercise-content name="High-Intensity Interval Training (HIIT)" href="https://www.google.com/">
                            HIIT alternates between intense bursts of exercise and short rest periods. It's effective for burning calories and improving fitness.
                        </x-exercise-content>
                    </x-exercise-category>
                    <x-exercise-category value="Core Exercises">
                        <x-exercise-content name="Plank" href="https://www.google.com/">
                            Planks engage the core muscles. Hold a push-up position with your body in a straight line, supporting yourself on your forearms and toes.
                        </x-exercise-content>
                        <x-exercise-content name="Russian Twists" href="https://www.google.com/">
                            Russian twists work the obliques. Sit on the ground, lean back slightly, and twist your torso to each side while holding a weight.
                        </x-exercise-content>
                        <x-exercise-content name="Leg Raises" href="https://www.google.com/">
                            Leg raises target the lower abs. Lie on your back and lift your legs up while keeping them straight.
                        </x-exercise-content>
                        <x-exercise-content name="Crunches" href="https://www.google.com/">
                            Crunches work the upper abs. Lie on your back, bend your knees, and lift your shoulders off the ground.
                        </x-exercise-content>
                        <x-exercise-content name="Hanging Knee Raises" href="https://www.google.com/">
                            Hanging knee raises engage the lower abs. Hang from a bar and lift your knees towards your chest.
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





