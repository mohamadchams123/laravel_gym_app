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

<x-workout-category name="Calves">
<x-workout-exercise name="Bodyweight Calf Raise" image="BCR.JPEG">
    <x-slot name="info">
        Bodyweight calf raises target the calf muscles and help in building calf strength and endurance.
    </x-slot>
    <x-slot name="howTo">
        Stand with your feet hip-width apart and your hands on a stable surface for support if needed.
        Rise onto the balls of your feet by pushing through your toes.
        Hold the raised position for a moment, then lower your heels back down.
        Perform the desired number of reps.
        Coach’s Tip: Focus on squeezing your calf muscles at the top of the movement.
    </x-slot>
    <x-slot name="setsReps">
        Incorporate bodyweight calf raises into your leg routine: <br>
        For Endurance: 3 to 4 sets of 20 to 25 reps.
        For Strength: 2 to 3 sets of 10 to 12 reps.
    </x-slot>
    <x-slot name="mistakes">
        <div class="flex">
            <ul class="hover-list">
                <li class="hoverable">
                    Hunching Shoulders
                    <p class="hover-content text-black">
                        Maintain proper posture and avoid hunching your shoulders during calf raises.
                    </p>
                </li>
                <li class="hoverable">
                    Neglecting Control
                    <p class="hover-content text-black">
                        Control both the upward and downward phases of the movement for better results.
                    </p>
                </li>
            </ul>
        </div>
    </x-slot>
    <x-slot name="muscles">
        <div class="flex">
            <ul class="hover-list">
                <li class="hoverable">
                    Calves
                    <p class="hover-content text-black">
                        Bodyweight calf raises primarily target the calf muscles for strength and definition.
                    </p>
                </li>
            </ul>
        </div>
    </x-slot>
    <x-slot name="benefits">
        <div class="flex">
            <ul class="hover-list">
                <li class="hoverable">
                    Calf Endurance
                    <p class="hover-content text-black">
                        Bodyweight calf raises help in building endurance in your calf muscles.
                    </p>
                </li>
                <li class="hoverable">
                    Convenience
                    <p class="hover-content text-black">
                        This exercise can be performed anywhere without the need for equipment.
                    </p>
                </li>
            </ul>
        </div>
    </x-slot>
</x-workout-exercise>
<x-workout-exercise name="Leg Press Machine Calf Raise" image="LPMCR.JPEG">
    <x-slot name="info">
        The leg press machine calf raise targets the calf muscles using a leg press machine.
    </x-slot>
    <x-slot name="howTo">
        Sit in the leg press machine and position your feet on the platform with your toes and the balls of your feet on the edge.
        Release the safety lock and extend your ankles to raise the weight using your calf muscles.
        Slowly lower the weight by allowing your heels to drop below the platform.
        Perform the desired number of reps.
        Coach’s Tip: Maintain control and focus on a full range of motion for effective calf engagement.
    </x-slot>
    <x-slot name="setsReps">
        Incorporate leg press machine calf raises into your leg routine: <br>
        For Muscle Toning: 3 to 4 sets of 15 to 20 reps.
        For Strength: 2 to 3 sets of 8 to 10 reps.
    </x-slot>
    <x-slot name="mistakes">
        <div class="flex">
            <ul class="hover-list">
                <li class="hoverable">
                    Arching Back
                    <p class="hover-content text-black">
                        Keep your back against the machine's seat and avoid arching during the movement.
                    </p>
                </li>
                <li class="hoverable">
                    Using Momentum
                    <p class="hover-content text-black">
                        Perform the movement using controlled calf muscle contraction, not momentum.
                    </p>
                </li>
            </ul>
        </div>
    </x-slot>
    <x-slot name="muscles">
        <div class="flex">
            <ul class="hover-list">
                <li class="hoverable">
                    Calves
                    <p class="hover-content text-black">
                        Leg press machine calf raises effectively target the calf muscles for strength and definition.
                    </p>
                </li>
            </ul>
        </div>
    </x-slot>
    <x-slot name="benefits">
        <div class="flex">
            <ul class="hover-list">
                <li class="hoverable">
                    Muscle Isolation
                    <p class="hover-content text-black">
                        This exercise isolates and works the calf muscles with the support of the leg press machine.
                    </p>
                </li>
                <li class="hoverable">
                    Controlled Resistance
                    <p class="hover-content text-black">
                        The leg press machine provides controlled resistance throughout the movement.
                    </p>
                </li>
            </ul>
        </div>
    </x-slot>
</x-workout-exercise>
<x-workout-exercise name="Barbell Split Squats" image="BarbellSS.JPEG">
    <x-slot name="info">
        Barbell split squats are a single-leg exercise that targets the quads, hamstrings, and glutes. It enhances leg strength and stability.
    </x-slot>
    <x-slot name="howTo">
        Stand with your feet hip-width apart and hold a barbell across your upper back.
        Step one foot back and position it behind you on your toes.
        Lower your back knee toward the ground while bending your front knee, forming a lunge position.
        Push through your front heel to return to the starting position.
        Perform the desired number of reps on each leg.
        Coach’s Tip: Keep your front knee aligned with your ankle and maintain proper upper body posture.
    </x-slot>
    <x-slot name="setsReps">
        Incorporate barbell split squats into your leg routine: <br>
        For Strength: 3 to 4 sets of 8 to 10 reps per leg.
        For Muscle Toning: 2 to 3 sets of 12 to 15 reps per leg.
    </x-slot>
    <x-slot name="mistakes">
        <div class="flex">
            <ul class="hover-list">
                <li class="hoverable">
                    Leaning Forward
                    <p class="hover-content text-black">
                        Maintain an upright posture and avoid leaning forward during the split squat.
                    </p>
                </li>
                <li class="hoverable">
                    Shallow Lunge
                    <p class="hover-content text-black">
                        Aim for a deep lunge position to engage your leg muscles effectively.
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
                        Barbell split squats engage multiple leg muscles for comprehensive strength development.
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
                        This exercise enhances leg strength and stability through unilateral movement.
                    </p>
                </li>
                <li class="hoverable">
                    Functional Balance
                    <p class="hover-content text-black">
                        Barbell split squats improve balance and coordination on each leg separately.
                    </p>
                </li>
            </ul>
        </div>
    </x-slot>
</x-workout-exercise>
<x-workout-exercise name="Standing Dumbbell or Barbell Calf Raise" image="SD.JPEG">
    <x-slot name="info">
        Standing calf raises with dumbbells or a barbell target the calf muscles to build strength and definition.
    </x-slot>
    <x-slot name="howTo">
        Stand with your feet hip-width apart and hold dumbbells or a barbell in your hands.
        Rise onto the balls of your feet by pushing through your toes.
        Hold the raised position for a moment, then lower your heels back down.
        Perform the desired number of reps.
        Coach’s Tip: Focus on contracting your calf muscles at the top of the movement.
    </x-slot>
    <x-slot name="setsReps">
        Incorporate standing calf raises into your leg routine: <br>
        For Endurance: 3 to 4 sets of 20 to 25 reps.
        For Strength: 2 to 3 sets of 10 to 12 reps.
    </x-slot>
    <x-slot name="mistakes">
        <div class="flex">
            <ul class="hover-list">
                <li class="hoverable">
                    Rounded Shoulders
                    <p class="hover-content text-black">
                        Maintain proper posture and avoid rounding your shoulders during calf raises.
                    </p>
                </li>
                <li class="hoverable">
                    Using Momentum
                    <p class="hover-content text-black">
                        Perform controlled calf raises without relying on momentum.
                    </p>
                </li>
            </ul>
        </div>
    </x-slot>
    <x-slot name="muscles">
        <div class="flex">
            <ul class="hover-list">
                <li class="hoverable">
                    Calves
                    <p class="hover-content text-black">
                        Standing calf raises effectively target the calf muscles for strength and definition.
                    </p>
                </li>
            </ul>
        </div>
    </x-slot>
    <x-slot name="benefits">
        <div class="flex">
            <ul class="hover-list">
                <li class="hoverable">
                    Calf Strength
                    <p class="hover-content text-black">
                        This exercise helps in building strength and endurance in your calf muscles.
                    </p>
                </li>
                <li class="hoverable">
                    Versatility
                    <p class="hover-content text-black">
                        Standing calf raises can be performed with dumbbells or a barbell for added resistance.
                    </p>
                </li>
            </ul>
        </div>
    </x-slot>
</x-workout-exercise>
<x-workout-exercise name="Seated Calf Raise" image="SCR.JPEG">
    <x-slot name="info">
        Seated calf raises target the calf muscles while using a calf raise machine or a bench.
    </x-slot>
    <x-slot name="howTo">
        Sit on a calf raise machine or a bench with your knees bent and the balls of your feet on the edge.
        Place a weight on your thighs or use the machine's weight stack.
        Raise your heels by pushing through your toes, lifting the weight.
        Slowly lower your heels below the platform or bench level.
        Perform the desired number of reps.
        Coach’s Tip: Use controlled movements and a full range of motion for effective calf engagement.
    </x-slot>
    <x-slot name="setsReps">
        Incorporate seated calf raises into your leg routine: <br>
        For Muscle Toning: 3 to 4 sets of 15 to 20 reps.
        For Strength: 2 to 3 sets of 8 to 10 reps.
    </x-slot>
    <x-slot name="mistakes">
        <div class="flex">
            <ul class="hover-list">
                <li class="hoverable">
                    Rounded Back
                    <p class="hover-content text-black">
                        Maintain proper posture with a straight back during seated calf raises.
                    </p>
                </li>
                <li class="hoverable">
                    Using Momentum
                    <p class="hover-content text-black">
                        Perform the movement using controlled calf muscle contraction, not momentum.
                    </p>
                </li>
            </ul>
        </div>
    </x-slot>
    <x-slot name="muscles">
        <div class="flex">
            <ul class="hover-list">
                <li class="hoverable">
                    Calves
                    <p class="hover-content text-black">
                        Seated calf raises target and work the calf muscles for strength and definition.
                    </p>
                </li>
            </ul>
        </div>
    </x-slot>
    <x-slot name="benefits">
        <div class="flex">
            <ul class="hover-list">
                <li class="hoverable">
                    Isolation
                    <p class="hover-content text-black">
                        This exercise isolates and effectively works the calf muscles using a specific machine or bench.
                    </p>
                </li>
                <li class="hoverable">
                    Controlled Resistance
                    <p class="hover-content text-black">
                        Seated calf raises provide controlled resistance throughout the movement.
                    </p>
                </li>
            </ul>
        </div>
    </x-slot>
</x-workout-exercise>
</x-workout-category>