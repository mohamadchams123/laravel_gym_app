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

<x-workout-category name="Hamstrings">
<x-workout-exercise name="Stiff-Legged Deadlift" image="SLD.jpeg">
    <x-slot name="info">
        The Stiff-Legged Deadlift, also known as the Romanian Deadlift, targets the posterior chain muscles, including the hamstrings, glutes, and lower back. This exercise involves hinging at the hips while keeping your legs relatively straight to emphasize hamstring activation.
    </x-slot>
    <x-slot name="howTo">
        Hold a barbell or dumbbells in front of your thighs with an overhand grip.
        Stand with your feet hip-width apart and a slight bend in your knees.
        Hinge at your hips while keeping your back straight, lowering the weight towards the ground.
        Lower the weight as far as your flexibility allows, feeling a stretch in your hamstrings.
        Push through your heels and engage your hamstrings and glutes to return to the starting position.
        Coach’s Tip: Maintain a neutral spine and avoid rounding your back.
    </x-slot>
    <x-slot name="setsReps">
        Recommended sets and reps for the Stiff-Legged Deadlift:<br>
        - For muscle development: 3-4 sets of 8-10 reps<br>
        - For strength: 4-5 sets of 6-8 reps<br>
        Use appropriate weight while maintaining proper form.
    </x-slot>
    <x-slot name="mistakes">
        <div class="flex">
            <ul class="hover-list">
                <li class="hoverable">
                    Rounding the Back
                    <p class="hover-content text-black">
                        Keep your back straight; avoid rounding or arching.
                    </p>
                </li>
                <li class="hoverable">
                    Overextending
                    <p class="hover-content text-black">
                        Avoid hyperextending your lower back at the top.
                    </p>
                </li>
                <li class="hoverable">
                    Not Hinging at Hips
                    <p class="hover-content text-black">
                        Hinge at your hips, not just bending your knees.
                    </p>
                </li>
            </ul>
        </div>
    </x-slot>
    <x-slot name="muscles">
        <div class="flex">
            <ul class="hover-list">
                <li class="hoverable">
                    Hamstrings
                    <p class="hover-content text-black">
                        The primary focus of this exercise is the hamstrings.
                    </p>
                </li>
                <li class="hoverable">
                    Glutes
                    <p class="hover-content text-black">
                        The glutes contribute to the hip extension.
                    </p>
                </li>
                <li class="hoverable">
                    Lower Back
                    <p class="hover-content text-black">
                        The lower back muscles stabilize the spine.
                    </p>
                </li>
                <li class="hoverable">
                    Erector Spinae
                    <p class="hover-content text-black">
                        These muscles help maintain an upright posture.
                    </p>
                </li>
            </ul>
        </div>
    </x-slot>
    <x-slot name="benefits">
        <div class="flex">
            <ul class="hover-list">
                <li class="hoverable">
                    Hamstring Development
                    <p class="hover-content text-black">
                        Stiff-Legged Deadlifts promote hamstring growth.
                    </p>
                </li>
                <li class="hoverable">
                    Glute Activation
                    <p class="hover-content text-black">
                        The exercise engages and strengthens the glutes.
                    </p>
                </li>
                <li class="hoverable">
                    Posterior Chain Strength
                    <p class="hover-content text-black">
                        This exercise targets the muscles along the backside of the body.
                    </p>
                </li>
            </ul>
        </div>
    </x-slot>
</x-workout-exercise>
<x-workout-exercise name="Back Extension" image="BE.jpeg">
    <x-slot name="info">
        The Back Extension, also known as the Hyperextension, targets the lower back muscles (erector spinae) and glutes. It's a bodyweight exercise that helps strengthen the muscles responsible for maintaining proper spinal alignment and supporting the lower back.
    </x-slot>
    <x-slot name="howTo">
        Position yourself face down on a back extension bench with your hips resting on the pad and your feet secured.
        Cross your arms over your chest or place your hands behind your head.
        Lower your upper body toward the ground, then raise it back up by contracting your lower back and glutes.
        Maintain a neutral spine throughout the movement; avoid excessive arching.
        Coach’s Tip: Focus on controlled movements and avoid using momentum.
    </x-slot>
    <x-slot name="setsReps">
        Recommended sets and reps for the Back Extension:<br>
        - For muscle development: 3-4 sets of 10-12 reps<br>
        - For endurance: 4-5 sets of 15-20 reps<br>
        Adjust the difficulty by varying the weight or resistance.
    </x-slot>
    <x-slot name="mistakes">
        <div class="flex">
            <ul class="hover-list">
                <li class="hoverable">
                    Arching the Lower Back
                    <p class="hover-content text-black">
                        Maintain a neutral spine; avoid excessive arching.
                    </p>
                </li>
                <li class="hoverable">
                    Using Momentum
                    <p class="hover-content text-black">
                        Lift your upper body with controlled muscle contraction.
                    </p>
                </li>
                <li class="hoverable">
                    Raising Legs Too High
                    <p class="hover-content text-black">
                        Focus on lifting your upper body; don't hyperextend your hips.
                    </p>
                </li>
            </ul>
        </div>
    </x-slot>
    <x-slot name="muscles">
        <div class="flex">
            <ul class="hover-list">
                <li class="hoverable">
                    Erector Spinae
                    <p class="hover-content text-black">
                        The back extension targets the lower back muscles.
                    </p>
                </li>
                <li class="hoverable">
                    Glutes
                    <p class="hover-content text-black">
                        The glutes assist in raising your upper body.
                    </p>
                </li>
                <li class="hoverable">
                    Hamstrings
                    <p class="hover-content text-black">
                        The hamstrings also contribute to hip extension.
                    </p>
                </li>
            </ul>
        </div>
    </x-slot>
    <x-slot name="benefits">
        <div class="flex">
            <ul class="hover-list">
                <li class="hoverable">
                    Lower Back Strength
                    <p class="hover-content text-black">
                        Back Extensions strengthen the erector spinae.
                    </p>
                </li>
                <li class="hoverable">
                    Improved Posture
                    <p class="hover-content text-black">
                        Strengthening your lower back muscles promotes better posture.
                    </p>
                </li>
                <li class="hoverable">
                    Core Stabilization
                    <p class="hover-content text-black">
                        The exercise engages core muscles for stability.
                    </p>
                </li>
            </ul>
        </div>
    </x-slot>
</x-workout-exercise>
<x-workout-exercise name="Machine Lying Leg Curl" image="MLLC.jpeg">
    <x-slot name="info">
        The Machine Lying Leg Curl is an isolation exercise that targets the hamstrings. Using a leg curl machine, it allows you to focus solely on the hamstrings' contraction, making it effective for developing the back of the thighs.
    </x-slot>
    <x-slot name="howTo">
        Adjust the machine's settings to fit your leg length and select an appropriate weight.
        Lie face down on the machine, with the pad positioned above your calves and your legs straight.
        Grip the handles or hold onto the machine's side handles for stability.
        Curl your legs by bending at the knees, bringing the pad as close to your glutes as possible.
        Slowly lower the pad back to the starting position, fully extending your legs.
        Coach’s Tip: Focus on a controlled movement and avoid using momentum.
    </x-slot>
    <x-slot name="setsReps">
        Recommended sets and reps for the Machine Lying Leg Curl:<br>
        - For muscle development: 3-4 sets of 10-12 reps<br>
        - For endurance: 4-5 sets of 15-20 reps<br>
        Use a weight that challenges you while maintaining proper form.
    </x-slot>
    <x-slot name="mistakes">
        <div class="flex">
            <ul class="hover-list">
                <li class="hoverable">
                    Arching the Lower Back
                    <p class="hover-content text-black">
                        Maintain proper spinal alignment throughout the movement.
                    </p>
                </li>
                <li class="hoverable">
                    Swinging Legs
                    <p class="hover-content text-black">
                        Use controlled leg movement; avoid swinging.
                    </p>
                </li>
                <li class="hoverable">
                    Using Too Much Weight
                    <p class="hover-content text-black">
                        Choose a weight that allows you to perform the exercise with proper form.
                    </p>
                </li>
            </ul>
        </div>
    </x-slot>
    <x-slot name="muscles">
        <div class="flex">
            <ul class="hover-list">
                <li class="hoverable">
                    Hamstrings
                    <p class="hover-content text-black">
                        The primary target of this exercise is the hamstrings.
                    </p>
                </li>
                <li class="hoverable">
                    Glutes
                    <p class="hover-content text-black">
                        The glutes assist in the leg curling motion.
                    </p>
                </li>
                <li class="hoverable">
                    Calves
                    <p class="hover-content text-black">
                        The calves also contribute to the leg curl movement.
                    </p>
                </li>
            </ul>
        </div>
    </x-slot>
    <x-slot name="benefits">
        <div class="flex">
            <ul class="hover-list">
                <li class="hoverable">
                    Hamstring Development
                    <p class="hover-content text-black">
                        Machine Leg Curls target and strengthen the hamstrings.
                    </p>
                </li>
                <li class="hoverable">
                    Muscle Isolation
                    <p class="hover-content text-black">
                        The exercise isolates the hamstrings without involving other muscles.
                    </p>
                </li>
                <li class="hoverable">
                    Balanced Leg Muscles
                    <p class="hover-content text-black">
                        Strengthening the hamstrings contributes to leg muscle balance.
                    </p>
                </li>
            </ul>
        </div>
    </x-slot>
</x-workout-exercise>
<x-workout-exercise name="Single-Leg Romanian Deadlift" image="SLRD.jpeg">
    <x-slot name="info">
        The Single-Leg Romanian Deadlift is a unilateral exercise that targets the hamstrings, glutes, and lower back. This exercise challenges balance and stability while providing an effective stretch and contraction in the hamstrings of the working leg.
    </x-slot>
    <x-slot name="howTo">
        Hold a dumbbell or kettlebell in one hand.
        Stand on one leg and slightly bend the knee of the supporting leg.
        Hinge at your hips while extending the non-supporting leg straight behind you.
        Lower the weight towards the ground while keeping your back straight and the non-supporting leg in line with your torso.
        Feel a stretch in your hamstrings, then return to the starting position.
        Coach’s Tip: Maintain a neutral spine and use controlled movements.
    </x-slot>
    <x-slot name="setsReps">
        Recommended sets and reps for the Single-Leg Romanian Deadlift:<br>
        - For muscle development: 3-4 sets of 8-10 reps per leg<br>
        - For balance and stability: 4-5 sets of 12-15 reps per leg<br>
        Choose a weight that allows you to perform the exercise with good form.
    </x-slot>
    <x-slot name="mistakes">
        <div class="flex">
            <ul class="hover-list">
                <li class="hoverable">
                    Rounding the Back
                    <p class="hover-content text-black">
                        Maintain a straight back throughout the movement.
                    </p>
                </li>
                <li class="hoverable">
                    Losing Balance
                    <p class="hover-content text-black">
                        Focus on stability and engage your core.
                    </p>
                </li>
                <li class="hoverable">
                    Bending the Supporting Knee Too Much
                    <p class="hover-content text-black">
                        Keep a slight bend in the knee of the supporting leg.
                    </p>
                </li>
            </ul>
        </div>
    </x-slot>
    <x-slot name="muscles">
        <div class="flex">
            <ul class="hover-list">
                <li class="hoverable">
                    Hamstrings
                    <p class="hover-content text-black">
                        The primary focus of this exercise is the hamstrings.
                    </p>
                </li>
                <li class="hoverable">
                    Glutes
                    <p class="hover-content text-black">
                        The glutes are engaged during the hip extension.
                    </p>
                </li>
                <li class="hoverable">
                    Lower Back
                    <p class="hover-content text-black">
                        The lower back stabilizes the movement.
                    </p>
                </li>
                <li class="hoverable">
                    Core Muscles
                    <p class="hover-content text-black">
                        Your core helps maintain balance and stability.
                    </p>
                </li>
            </ul>
        </div>
    </x-slot>
    <x-slot name="benefits">
        <div class="flex">
            <ul class="hover-list">
                <li class="hoverable">
                    Hamstring Development
                    <p class="hover-content text-black">
                        The Single-Leg Romanian Deadlift targets and strengthens the hamstrings.
                    </p>
                </li>
                <li class="hoverable">
                    Balance and Stability
                    <p class="hover-content text-black">
                        This exercise challenges your balance and engages stabilizing muscles.
                    </p>
                </li>
                <li class="hoverable">
                    Functional Movement
                    <p class="hover-content text-black">
                        The movement mimics real-life activities that require balance and strength.
                    </p>
                </li>
            </ul>
        </div>
    </x-slot>
</x-workout-exercise>

</x-workout-category>