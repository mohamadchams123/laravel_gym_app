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

<x-workout-category name="Quads">
<x-workout-exercise name="Bulgarian Split Squat" image="BSS.JPEG">
    <x-slot name="info">
        The Bulgarian split squat is a single-leg strength exercise that targets the quads, glutes, and hamstrings. It improves balance and lower body strength.
    </x-slot>
    <x-slot name="howTo">
        Stand a few feet in front of a bench or step, and place one foot behind you on the bench.
        Lower your back knee toward the ground while bending your front knee, forming a lunge position.
        Keep your torso upright and your front knee aligned with your ankle.
        Push through your front heel to return to the starting position.
        Perform the desired number of reps on one leg before switching to the other.
        Coach’s Tip: Focus on proper form, and maintain control throughout the movement.
    </x-slot>
    <x-slot name="setsReps">
        Incorporate Bulgarian split squats into your leg workout: <br>
        For Strength: 3 to 4 sets of 8 to 10 reps per leg.
        For Muscle Toning: 2 to 3 sets of 12 to 15 reps per leg.
    </x-slot>
    <x-slot name="mistakes">
        <div class="flex">
            <ul class="hover-list">
                <li class="hoverable">
                    Forward Knee Movement
                    <p class="hover-content text-black">
                        Keep your front knee in line with your ankle to prevent it from moving too far forward.
                    </p>
                </li>
                <li class="hoverable">
                    Hunching Torso
                    <p class="hover-content text-black">
                        Maintain an upright posture throughout the movement to engage your core and maintain balance.
                    </p>
                </li>
            </ul>
        </div>
    </x-slot>
    <x-slot name="muscles">
        <div class="flex">
            <ul class="hover-list">
                <li class="hoverable">
                    Quadriceps, Glutes, Hamstrings
                    <p class="hover-content text-black">
                        The Bulgarian split squat targets your leg muscles, helping build strength and balance.
                    </p>
                </li>
            </ul>
        </div>
    </x-slot>
    <x-slot name="benefits">
        <div class="flex">
            <ul class="hover-list">
                <li class="hoverable">
                    Leg Strength
                    <p class="hover-content text-black">
                        Bulgarian split squats enhance strength in your lower body muscles.
                    </p>
                </li>
                <li class="hoverable">
                    Single-Leg Stability
                    <p class="hover-content text-black">
                        This exercise improves balance and stability on each leg individually.
                    </p>
                </li>
            </ul>
        </div>
    </x-slot>
</x-workout-exercise>
<x-workout-exercise name="Traditional Squat" image="TS.JPEG">
    <x-slot name="info">
        The traditional squat is a foundational lower body exercise that targets the quads, hamstrings, and glutes. It's effective for building overall leg strength.
    </x-slot>
    <x-slot name="howTo">
        Stand with your feet shoulder-width apart, toes pointing slightly outward.
        Lower your hips back and down, bending your knees and hips simultaneously.
        Keep your chest up and your back straight. Aim to lower your hips until your thighs are parallel to the ground.
        Push through your heels to stand back up to the starting position.
        Perform the desired number of reps.
        Coach’s Tip: Focus on maintaining proper form throughout the movement, and engage your core for stability.
    </x-slot>
    <x-slot name="setsReps">
        Incorporate traditional squats into your leg workout: <br>
        For Strength: 3 to 4 sets of 6 to 8 reps.
        For Muscle Toning: 2 to 3 sets of 10 to 12 reps.
    </x-slot>
    <x-slot name="mistakes">
        <div class="flex">
            <ul class="hover-list">
                <li class="hoverable">
                    Knees Over Toes
                    <p class="hover-content text-black">
                        Avoid letting your knees go too far forward beyond your toes during the squat.
                    </p>
                </li>
                <li class="hoverable">
                    Rounding Back
                    <p class="hover-content text-black">
                        Keep your back straight and chest up to maintain proper spinal alignment.
                    </p>
                </li>
            </ul>
        </div>
    </x-slot>
    <x-slot name="muscles">
        <div class="flex">
            <ul class="hover-list">
                <li class="hoverable">
                    Quadriceps, Hamstrings, Glutes
                    <p class="hover-content text-black">
                        The traditional squat engages major leg muscles, contributing to overall lower body strength.
                    </p>
                </li>
            </ul>
        </div>
    </x-slot>
    <x-slot name="benefits">
        <div class="flex">
            <ul class="hover-list">
                <li class="hoverable">
                    Lower Body Strength
                    <p class="hover-content text-black">
                        Traditional squats are effective for building strength in your legs and glutes.
                    </p>
                </li>
                <li class="hoverable">
                    Functional Movement
                    <p class="hover-content text-black">
                        This exercise mimics movements used in daily activities and sports.
                    </p>
                </li>
            </ul>
        </div>
    </x-slot>
</x-workout-exercise>
<x-workout-exercise name="Sumo Squat" image="Sumo-Squat.JPEG">
    <x-slot name="info">
        The sumo squat, also known as the plie squat, targets the inner thighs, quads, and glutes. It's a variation of the traditional squat with a wider stance.
    </x-slot>
    <x-slot name="howTo">
        Stand with your feet wider than shoulder-width apart and your toes pointing outward.
        Lower your hips down and back by bending your knees, keeping your chest up and your back straight.
        Aim to lower your hips until your thighs are parallel to the ground or slightly lower.
        Push through your heels to stand back up to the starting position.
        Perform the desired number of reps.
        Coach’s Tip: Engage your core muscles and maintain an upright posture throughout the movement.
    </x-slot>
    <x-slot name="setsReps">
        Incorporate sumo squats into your leg workout: <br>
        For Muscle Toning: 3 to 4 sets of 12 to 15 reps.
        For Endurance: 2 to 3 sets of 15 to 20 reps.
    </x-slot>
    <x-slot name="mistakes">
        <div class="flex">
            <ul class="hover-list">
                <li class="hoverable">
                    Knees Over Toes
                    <p class="hover-content text-black">
                        Keep your knees aligned with your toes and avoid letting them go too far forward.
                    </p>
                </li>
                <li class="hoverable">
                    Rounding Back
                    <p class="hover-content text-black">
                        Maintain an upright posture to prevent rounding of the back.
                    </p>
                </li>
            </ul>
        </div>
    </x-slot>
    <x-slot name="muscles">
        <div class="flex">
            <ul class="hover-list">
                <li class="hoverable">
                    Inner Thighs, Quadriceps, Glutes
                    <p class="hover-content text-black">
                        The sumo squat targets the inner thighs and lower body muscles, enhancing leg strength.
                    </p>
                </li>
            </ul>
        </div>
    </x-slot>
    <x-slot name="benefits">
        <div class="flex">
            <ul class="hover-list">
                <li class="hoverable">
                    Leg Muscle Engagement
                    <p class="hover-content text-black">
                        Sumo squats provide an effective way to engage and strengthen various leg muscles.
                    </p>
                </li>
                <li class="hoverable">
                    Hip Mobility
                    <p class="hover-content text-black">
                        This exercise contributes to improved hip mobility and flexibility.
                    </p>
                </li>
            </ul>
        </div>
    </x-slot>
</x-workout-exercise>
<x-workout-exercise name="Wall Sit" image="WS.JPEG">
    <x-slot name="info">
        The wall sit is an isometric exercise that targets the quadriceps and engages the lower body muscles. It's great for building endurance and strengthening the legs.
    </x-slot>
    <x-slot name="howTo">
        Stand with your back against a wall and your feet hip-width apart, a few feet away from the wall.
        Slowly slide down the wall, bending your knees, until your thighs are parallel to the ground or slightly higher.
        Keep your back against the wall and your knees aligned with your ankles.
        Hold this position for the desired amount of time.
        Push through your heels to stand back up and rest.
        Coach’s Tip: Focus on maintaining proper alignment and breathing throughout the wall sit.
    </x-slot>
    <x-slot name="setsReps">
        Incorporate wall sits into your leg routine: <br>
        For Endurance: 3 to 4 sets of 30 to 60 seconds each.
        For Strength: 2 to 3 sets of 60 to 90 seconds each.
    </x-slot>
    <x-slot name="mistakes">
        <div class="flex">
            <ul class="hover-list">
                <li class="hoverable">
                    Rounding Shoulders
                    <p class="hover-content text-black">
                        Keep your shoulders against the wall and avoid rounding forward.
                    </p>
                </li>
                <li class="hoverable">
                    Bouncing Knees
                    <p class="hover-content text-black">
                        Maintain a steady position; avoid bouncing your knees during the wall sit.
                    </p>
                </li>
            </ul>
        </div>
    </x-slot>
    <x-slot name="muscles">
        <div class="flex">
            <ul class="hover-list">
                <li class="hoverable">
                    Quadriceps, Hamstrings, Glutes
                    <p class="hover-content text-black">
                        Wall sits engage the leg muscles, providing a static strength-building challenge.
                    </p>
                </li>
            </ul>
        </div>
    </x-slot>
    <x-slot name="benefits">
        <div class="flex">
            <ul class="hover-list">
                <li class="hoverable">
                    Leg Endurance
                    <p class="hover-content text-black">
                        Wall sits are effective for building endurance in your leg muscles.
                    </p>
                </li>
                <li class="hoverable">
                    Isometric Strength
                    <p class="hover-content text-black">
                        This exercise improves your ability to hold a static position, enhancing muscle strength.
                    </p>
                </li>
            </ul>
        </div>
    </x-slot>
</x-workout-exercise>

</x-workout-category>