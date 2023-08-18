<style>
    .bullet-list {
        list-style: disc outside none;
        padding-left: 20px; /* Adjust the spacing as needed */
        margin-top: 0; /* Reset top margin to avoid extra space */
    }
    .hover-list {
        list-style-type: none;
        padding-left: 0;
    }
    .hoverable {
        position: relative;
        cursor: pointer;
        margin-right: 20px; /* Adjust spacing between list items */
    }
    .hover-content {
        display: none;
        position: absolute;
        left: 100%; /* Position to the right of the list item */
        top: 0;
        background-color: #f9f9f9;
        padding: 5px;
        border: 1px solid #ccc;
        width: 200px;
        z-index: 1;
    }
    .hoverable:hover .hover-content {
        display: block;
    }
</style>

<x-workout-category name="Back">
<x-workout-exercise name="Deadlift" image="D.jpeg">
    <x-slot name="info">
        The Deadlift is a compound exercise that targets multiple muscle groups, including the lower back, glutes, hamstrings, and grip strength. It's one of the fundamental strength exercises that involves lifting a loaded barbell off the ground to a standing position.
    </x-slot>
    <x-slot name="howTo">
        Stand with your feet hip-width apart, toes under the barbell.
        Bend at your hips and knees, grip the barbell with hands shoulder-width apart.
        Keep your back straight, chest up, and engage your core.
        Lift the barbell by extending your hips and knees, pulling your shoulders back.
        Lower the barbell back to the ground with control, maintaining a neutral spine.
        Coach’s Tip: Focus on maintaining proper form and a strong grip throughout the lift.
    </x-slot>
    <x-slot name="setsReps">
        Recommended sets and reps for the Deadlift:<br>
        - For strength: 3-5 sets of 1-5 reps<br>
        - For muscle development: 3-4 sets of 6-8 reps<br>
        Adjust the weight based on your goals and experience level.
    </x-slot>
    <x-slot name="mistakes">
        <div class="flex">
            <ul class="hover-list">
                <li class="hoverable">
                    Rounding the Back
                    <p class="hover-content text-black">
                        Keep your back straight; avoid rounding or hunching during the lift.
                    </p>
                </li>
                <li class="hoverable">
                    Jerking the Barbell
                    <p class="hover-content text-black">
                        Lift the barbell smoothly without using jerky movements.
                    </p>
                </li>
                <li class="hoverable">
                    Neglecting Hip Hinge
                    <p class="hover-content text-black">
                        Initiate the lift with a hip hinge rather than relying solely on leg strength.
                    </p>
                </li>
            </ul>
        </div>
    </x-slot>
    <x-slot name="muscles">
        <div class="flex">
            <ul class="hover-list">
                <li class="hoverable">
                    Lower Back (Erector Spinae)
                    <p class="hover-content text-black">
                        The deadlift heavily engages the muscles of the lower back.
                    </p>
                </li>
                <li class="hoverable">
                    Glutes
                    <p class="hover-content text-black">
                        The glutes play a significant role in hip extension during the lift.
                    </p>
                </li>
                <li class="hoverable">
                    Hamstrings
                    <p class="hover-content text-black">
                        The hamstrings assist in the upward phase of the lift.
                    </p>
                </li>
                <li class="hoverable">
                    Quadriceps
                    <p class="hover-content text-black">
                        The quadriceps are engaged during the initial phase of the lift.
                    </p>
                </li>
                <li class="hoverable">
                    Forearms and Grip
                    <p class="hover-content text-black">
                        The grip strength is challenged as you hold onto the barbell.
                    </p>
                </li>
            </ul>
        </div>
    </x-slot>
    <x-slot name="benefits">
        <div class="flex">
            <ul class="hover-list">
                <li class="hoverable">
                    Full Body Strength
                    <p class="hover-content text-black">
                        The deadlift is a comprehensive strength builder involving multiple muscle groups.
                    </p>
                </li>
                <li class="hoverable">
                    Posterior Chain Development
                    <p class="hover-content text-black">
                        The exercise targets the muscles along your backside, promoting balanced muscle development.
                    </p>
                </li>
                <li class="hoverable">
                    Functional Strength
                    <p class="hover-content text-black">
                        Deadlifts mimic real-world movements and contribute to overall functional strength.
                    </p>
                </li>
            </ul>
        </div>
    </x-slot>
</x-workout-exercise>
<x-workout-exercise name="T-Bar Row" image="TBR.jpeg">
    <x-slot name="info">
        The T-Bar Row is a compound exercise that targets the muscles of the back, particularly the lats, rhomboids, and traps. Using a T-Bar row machine or landmine attachment, you can effectively build upper body strength and muscle mass.
    </x-slot>
    <x-slot name="howTo">
        Place a barbell in a landmine attachment or T-Bar row machine.
        Straddle the barbell with your knees slightly bent and your hips back.
        Grip the handles or the barbell with an overhand grip.
        Keep your back straight and pull the barbell towards your torso, retracting your shoulder blades.
        Lower the barbell under control to the starting position, maintaining a slight bend in your knees.
        Coach’s Tip: Focus on pulling with your back muscles rather than using your arms to lift the weight.
    </x-slot>
    <x-slot name="setsReps">
        Recommended sets and reps for the T-Bar Row:<br>
        - For muscle development: 3-4 sets of 8-10 reps<br>
        - For strength and power: 4-5 sets of 6-8 reps<br>
        Adjust the weight based on your goals and experience level.
    </x-slot>
    <x-slot name="mistakes">
        <div class="flex">
            <ul class="hover-list">
                <li class="hoverable">
                    Using Momentum
                    <p class="hover-content text-black">
                        Perform the exercise with controlled movements; avoid using momentum to lift the weight.
                    </p>
                </li>
                <li class="hoverable">
                    Rounded Back
                    <p class="hover-content text-black">
                        Maintain proper posture; avoid rounding your back during the row.
                    </p>
                </li>
                <li class="hoverable">
                    Incorrect Grip Width
                    <p class="hover-content text-black">
                        Use a grip width that allows for proper range of motion and engagement of the target muscles.
                    </p>
                </li>
            </ul>
        </div>
    </x-slot>
    <x-slot name="muscles">
        <div class="flex">
            <ul class="hover-list">
                <li class="hoverable">
                    Latissimus Dorsi (Lats)
                    <p class="hover-content text-black">
                        The T-Bar Row primarily targets the lats, contributing to back width.
                    </p>
                </li>
                <li class="hoverable">
                    Rhomboids and Middle Back
                    <p class="hover-content text-black">
                        The rowing motion engages the rhomboids and middle back muscles.
                    </p>
                </li>
                <li class="hoverable">
                    Trapezius (Traps)
                    <p class="hover-content text-black">
                        The upper traps assist in stabilizing and controlling the movement.
                    </p>
                </li>
                <li class="hoverable">
                    Biceps
                    <p class="hover-content text-black">
                        While secondary, the biceps are engaged during the pulling motion.
                    </p>
                </li>
            </ul>
        </div>
    </x-slot>
    <x-slot name="benefits">
        <div class="flex">
            <ul class="hover-list">
                <li class="hoverable">
                    Back Muscle Development
                    <p class="hover-content text-black">
                        The T-Bar Row is effective for building back muscle mass and strength.
                    </p>
                </li>
                <li class="hoverable">
                    Improved Posture
                    <p class="hover-content text-black">
                        Strengthening your back muscles contributes to better posture and spinal support.
                    </p>
                </li>
                <li class="hoverable">
                    Upper Body Symmetry
                    <p class="hover-content text-black">
                        Balanced back development leads to improved upper body symmetry.
                    </p>
                </li>
            </ul>
        </div>
    </x-slot>
</x-workout-exercise>
<x-workout-exercise name="Pull-Up" image="PU.jpeg">
    <x-slot name="info">
        The Pull-Up is a bodyweight exercise that targets the muscles of the back, particularly the lats and upper back muscles. It's a versatile exercise that can be performed using various grip variations to engage different muscle groups.
    </x-slot>
    <x-slot name="howTo">
        Hang from a pull-up bar with your palms facing away and your hands slightly wider than shoulder-width apart.
        Engage your back muscles and pull your body up towards the bar by squeezing your shoulder blades together.
        Continue pulling until your chin is above the bar, then lower your body back down under control.
        Maintain a straight body position throughout the movement, avoiding excessive swinging.
        Coach’s Tip: Focus on controlled movements; avoid using momentum to lift your body.
    </x-slot>
    <x-slot name="setsReps">
        Recommended sets and reps for the Pull-Up:<br>
        - For muscle development: 3-4 sets of 6-10 reps<br>
        - For strength: 4-5 sets of 4-6 reps<br>
        Use assistance (bands or a spotter) if needed to perform the desired number of reps.
    </x-slot>
    <x-slot name="mistakes">
        <div class="flex">
            <ul class="hover-list">
                <li class="hoverable">
                    Not Fully Extending
                    <p class="hover-content text-black">
                        Lower your body fully to achieve a complete range of motion.
                    </p>
                </li>
                <li class="hoverable">
                    Kipping or Swinging
                    <p class="hover-content text-black">
                        Avoid using momentum; perform pull-ups with strict form.
                    </p>
                </li>
                <li class="hoverable">
                    Not Engaging Back Muscles
                    <p class="hover-content text-black">
                        Focus on using your back muscles to initiate the movement.
                    </p>
                </li>
            </ul>
        </div>
    </x-slot>
    <x-slot name="muscles">
        <div class="flex">
            <ul class="hover-list">
                <li class="hoverable">
                    Latissimus Dorsi (Lats)
                    <p class="hover-content text-black">
                        The primary target of the Pull-Up exercise is the lats.
                    </p>
                </li>
                <li class="hoverable">
                    Rhomboids and Middle Back
                    <p class="hover-content text-black">
                        The pulling motion engages the rhomboids and middle back muscles.
                    </p>
                </li>
                <li class="hoverable">
                    Biceps
                    <p class="hover-content text-black">
                        The biceps assist in the pulling motion.
                    </p>
                </li>
                <li class="hoverable">
                    Trapezius (Traps)
                    <p class="hover-content text-black">
                        The upper traps assist in stabilizing the movement.
                    </p>
                </li>
            </ul>
        </div>
    </x-slot>
    <x-slot name="benefits">
        <div class="flex">
            <ul class="hover-list">
                <li class="hoverable">
                    Back Muscle Development
                    <p class="hover-content text-black">
                        Pull-Ups effectively target and develop back muscles.
                    </p>
                </li>
                <li class="hoverable">
                    Upper Body Strength
                    <p class="hover-content text-black">
                        Regularly performing Pull-Ups enhances upper body strength.
                    </p>
                </li>
                <li class="hoverable">
                    Versatile Exercise
                    <p class="hover-content text-black">
                        Different grip variations allow you to target various muscle groups.
                    </p>
                </li>
            </ul>
        </div>
    </x-slot>
</x-workout-exercise>
<x-workout-exercise name="Bent-Over Row" image="BOR.jpeg">
    <x-slot name="info">
        The Bent-Over Row is a compound exercise that primarily targets the muscles of the upper back, including the lats, rhomboids, and traps. This exercise is performed by bending at the hips and pulling a barbell or dumbbells towards your lower ribs.
    </x-slot>
    <x-slot name="howTo">
        Stand with your feet hip-width apart and hold a barbell or dumbbells with an overhand grip.
        Bend at your hips, keeping your back straight and chest up, creating a slight forward lean.
        Pull the barbell or dumbbells towards your lower ribs while squeezing your shoulder blades together.
        Lower the weight under control to the starting position without rounding your back.
        Coach’s Tip: Maintain a stable core and focus on using your back muscles to pull.
    </x-slot>
    <x-slot name="setsReps">
        Recommended sets and reps for the Bent-Over Row:<br>
        - For muscle development: 3-4 sets of 8-10 reps<br>
        - For strength and power: 4-5 sets of 6-8 reps<br>
        Adjust the weight based on your goals and experience level.
    </x-slot>
    <x-slot name="mistakes">
        <div class="flex">
            <ul class="hover-list">
                <li class="hoverable">
                    Rounding the Back
                    <p class="hover-content text-black">
                        Keep your back straight; avoid rounding or hunching during the movement.
                    </p>
                </li>
                <li class="hoverable">
                    Using Momentum
                    <p class="hover-content text-black">
                        Lift the weight with controlled movements; avoid using momentum.
                    </p>
                </li>
                <li class="hoverable">
                    Incorrect Forward Lean
                    <p class="hover-content text-black">
                        Maintain a slight forward lean from your hips; don't excessively bend your lower back.
                    </p>
                </li>
            </ul>
        </div>
    </x-slot>
    <x-slot name="muscles">
        <div class="flex">
            <ul class="hover-list">
                <li class="hoverable">
                    Latissimus Dorsi (Lats)
                    <p class="hover-content text-black">
                        The Bent-Over Row effectively targets the lats for back width.
                    </p>
                </li>
                <li class="hoverable">
                    Rhomboids and Middle Back
                    <p class="hover-content text-black">
                        The rowing motion engages the rhomboids and middle back muscles.
                    </p>
                </li>
                <li class="hoverable">
                    Trapezius (Traps)
                    <p class="hover-content text-black">
                        The upper traps assist in stabilizing the movement.
                    </p>
                </li>
                <li class="hoverable">
                    Biceps
                    <p class="hover-content text-black">
                        While secondary, the biceps are engaged during the rowing motion.
                    </p>
                </li>
            </ul>
        </div>
    </x-slot>
    <x-slot name="benefits">
        <div class="flex">
            <ul class="hover-list">
                <li class="hoverable">
                    Back Muscle Development
                    <p class="hover-content text-black">
                        The Bent-Over Row contributes to building a strong and defined back.
                    </p>
                </li>
                <li class="hoverable">
                    Improved Posture
                    <p class="hover-content text-black">
                        Strengthening your upper back muscles promotes better posture.
                    </p>
                </li>
                <li class="hoverable">
                    Upper Body Symmetry
                    <p class="hover-content text-black">
                        Balanced back development enhances overall upper body symmetry.
                    </p>
                </li>
            </ul>
        </div>
    </x-slot>
</x-workout-exercise>

</x-workout-category>