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

<x-workout-category name="Abs">
<x-workout-exercise name="Hanging Knee Raise" image="HKR.JPEG">
    <x-slot name="info">
        The hanging knee raise is an effective abdominal exercise that targets the lower abs and hip flexors. It helps strengthen the core and improve overall stability.
    </x-slot>
    <x-slot name="howTo">
        Hang from a pull-up bar with your arms fully extended.
        Keep your torso stable and initiate the movement by lifting your knees towards your chest.
        Exhale as you lift your knees and pause briefly at the top of the movement, squeezing your abs.
        Lower your legs back down with control to the starting position.
        Repeat for the desired number of reps.
        Coach’s Tip: Avoid swinging your body or using momentum. Focus on controlled and deliberate movements.
    </x-slot>
    <x-slot name="setsReps">
        The hanging knee raise can be incorporated into your ab workout routine: <br>
        For Muscle Building: 3 to 4 sets of 10 to 15 reps.
        For Endurance: 2 to 3 sets of 15 to 20 reps.
    </x-slot>
    <x-slot name="mistakes">
        <div class="flex">
            <ul class="hover-list">
                <li class="hoverable">
                    Swinging Motion
                    <p class="hover-content text-black">
                        Avoid swinging your body to lift your knees. Use your core muscles to control the movement.
                    </p>
                </li>
                <li class="hoverable">
                    Not Fully Contracting Abs
                    <p class="hover-content text-black">
                        Make sure to fully contract your abs at the top of the movement for maximum benefit.
                    </p>
                </li>
            </ul>
        </div>
    </x-slot>
    <x-slot name="muscles">
        <div class="flex">
            <ul class="hover-list">
                <li class="hoverable">
                    Rectus Abdominis
                    <p class="hover-content text-black">
                        The hanging knee raise targets the lower portion of the rectus abdominis, helping to develop defined lower abs.
                    </p>
                </li>
                <li class="hoverable">
                    Hip Flexors
                    <p class="hover-content text-black">
                        The hip flexors are engaged as you lift your knees towards your chest.
                    </p>
                </li>
            </ul>
        </div>
    </x-slot>
    <x-slot name="benefits">
        <div class="flex">
            <ul class="hover-list">
                <li class="hoverable">
                    Core Strength
                    <p class="hover-content text-black">
                        The hanging knee raise strengthens the core muscles, enhancing overall stability and posture.
                    </p>
                </li>
                <li class="hoverable">
                    Lower Ab Development
                    <p class="hover-content text-black">
                        This exercise is particularly effective for targeting and sculpting the lower abdominal muscles.
                    </p>
                </li>
            </ul>
        </div>
    </x-slot>
</x-workout-exercise>
<x-workout-exercise name="Machine Crunch" image="MC.JPEG">
    <x-slot name="info">
        The machine crunch is an isolation exercise that targets the upper abdominal muscles. It's a great exercise for building core strength and definition.
    </x-slot>
    <x-slot name="howTo">
        Sit down on the machine and adjust the seat and pad to fit your height.
        Place your hands lightly behind your head, avoiding pulling on your neck.
        Exhale as you contract your abs and curl your upper body forward, bringing your elbows towards your thighs.
        Inhale as you slowly release the crunch and return to the starting position with control.
        Repeat for the desired number of reps.
        Coach’s Tip: Focus on using your abdominal muscles to lift your upper body, not your neck or arms.
    </x-slot>
    <x-slot name="setsReps">
        Incorporate machine crunches into your ab routine: <br>
        For Muscle Building: 3 to 4 sets of 12 to 15 reps.
        For Endurance: 2 to 3 sets of 15 to 20 reps.
    </x-slot>
    <x-slot name="mistakes">
        <div class="flex">
            <ul class="hover-list">
                <li class="hoverable">
                    Pulling on Neck
                    <p class="hover-content text-black">
                        Avoid pulling your head with your hands. Keep your hands lightly behind your head to support, not pull.
                    </p>
                </li>
                <li class="hoverable">
                    Using Momentum
                    <p class="hover-content text-black">
                        Perform the crunches with controlled and deliberate movements, avoiding swinging.
                    </p>
                </li>
            </ul>
        </div>
    </x-slot>
    <x-slot name="muscles">
        <div class="flex">
            <ul class="hover-list">
                <li class="hoverable">
                    Upper Rectus Abdominis
                    <p class="hover-content text-black">
                        The machine crunch effectively targets the upper part of the rectus abdominis for improved definition.
                    </p>
                </li>
            </ul>
        </div>
    </x-slot>
    <x-slot name="benefits">
        <div class="flex">
            <ul class="hover-list">
                <li class="hoverable">
                    Core Definition
                    <p class="hover-content text-black">
                        Machine crunches help build a strong and defined upper abdominal region.
                    </p>
                </li>
                <li class="hoverable">
                    Isolation Exercise
                    <p class="hover-content text-black">
                        This exercise isolates the upper abs, making it effective for targeted training.
                    </p>
                </li>
            </ul>
        </div>
    </x-slot>
</x-workout-exercise>
<x-workout-exercise name="Pallof Press" image="PP.JPG">
    <x-slot name="info">
        The Pallof press is a functional core exercise that targets the obliques and deep core muscles. It enhances stability and helps prevent rotational imbalances.
    </x-slot>
    <x-slot name="howTo">
        Attach a resistance band to a sturdy anchor point at chest height.
        Stand sideways to the anchor point and hold the band's handle with both hands at chest level.
        Position your feet shoulder-width apart and engage your core.
        Extend your arms fully in front of you, resisting the pull of the band's tension.
        Hold the extended position briefly, then return your hands to your chest.
        Repeat for the desired number of reps on each side.
        Coach’s Tip: Maintain a stable stance and avoid leaning or rotating during the movement.
    </x-slot>
    <x-slot name="setsReps">
        Include Pallof presses in your core routine: <br>
        For Core Stability: 3 to 4 sets of 10 to 12 reps on each side.
    </x-slot>
    <x-slot name="mistakes">
        <div class="flex">
            <ul class="hover-list">
                <li class="hoverable">
                    Poor Posture
                    <p class="hover-content text-black">
                        Keep an upright posture throughout the exercise. Avoid arching or rounding your back.
                    </p>
                </li>
                <li class="hoverable">
                    Lack of Core Engagement
                    <p class="hover-content text-black">
                        Engage your core muscles to resist the band's tension and stabilize your body.
                    </p>
                </li>
            </ul>
        </div>
    </x-slot>
    <x-slot name="muscles">
        <div class="flex">
            <ul class="hover-list">
                <li class="hoverable">
                    Obliques
                    <p class="hover-content text-black">
                        The Pallof press effectively targets the oblique muscles on the sides of your abdomen.
                    </p>
                </li>
                <li class="hoverable">
                    Transverse Abdominis
                    <p class="hover-content text-black">
                        The deep core muscle, transverse abdominis, is engaged to stabilize your spine.
                    </p>
                </li>
            </ul>
        </div>
    </x-slot>
    <x-slot name="benefits">
        <div class="flex">
            <ul class="hover-list">
                <li class="hoverable">
                    Core Stability
                    <p class="hover-content text-black">
                        The Pallof press enhances core stability, helping to prevent rotational imbalances and injuries.
                    </p>
                </li>
                <li class="hoverable">
                    Functional Movement
                    <p class="hover-content text-black">
                        This exercise mimics real-life movements, improving core strength for daily activities.
                    </p>
                </li>
            </ul>
        </div>
    </x-slot>
</x-workout-exercise>
<x-workout-exercise name="Cable Crunch" image="CableC.JPEG">
    <x-slot name="info">
        The cable crunch is a powerful core exercise that targets the upper and lower abdominal muscles. It's an effective movement for building core strength and definition.
    </x-slot>
    <x-slot name="howTo">
        Attach a rope handle to a high pulley on a cable machine.
        Kneel down facing the machine, grab the rope with both hands placed on your forehead.
        Begin by flexing your waist, bringing your elbows down toward your knees.
        Exhale as you contract your abs and crunch down, focusing on bringing your chest towards your hips.
        Inhale as you slowly release the crunch and return to the starting position.
        Repeat for the desired number of reps.
        Coach’s Tip: Keep your lower back stationary and use your core muscles to perform the movement.
    </x-slot>
    <x-slot name="setsReps">
        Incorporate cable crunches into your core workout routine: <br>
        For Muscle Building: 3 to 4 sets of 10 to 15 reps.
        For Endurance: 2 to 3 sets of 15 to 20 reps.
    </x-slot>
    <x-slot name="mistakes">
        <div class="flex">
            <ul class="hover-list">
                <li class="hoverable">
                    Using Momentum
                    <p class="hover-content text-black">
                        Avoid using momentum to swing the weight. Focus on controlled and deliberate movements.
                    </p>
                </li>
                <li class="hoverable">
                    Pulling with Neck
                    <p class="hover-content text-black">
                        Use your core muscles to initiate the movement, not your neck or arms.
                    </p>
                </li>
            </ul>
        </div>
    </x-slot>
    <x-slot name="muscles">
        <div class="flex">
            <ul class="hover-list">
                <li class="hoverable">
                    Upper and Lower Rectus Abdominis
                    <p class="hover-content text-black">
                        The cable crunch targets both the upper and lower portions of the rectus abdominis for comprehensive core engagement.
                    </p>
                </li>
            </ul>
        </div>
    </x-slot>
    <x-slot name="benefits">
        <div class="flex">
            <ul class="hover-list">
                <li class="hoverable">
                    Core Strength and Definition
                    <p class="hover-content text-black">
                        Cable crunches help build strong and well-defined abdominal muscles.
                    </p>
                </li>
                <li class="hoverable">
                    Full Range of Motion
                    <p class="hover-content text-black">
                        This exercise allows for a deep crunch, providing a thorough contraction of the core muscles.
                    </p>
                </li>
            </ul>
        </div>
    </x-slot>
</x-workout-exercise>

</x-workout-category>