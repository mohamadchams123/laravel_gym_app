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

<x-workout-category name="Glutes">
<x-workout-exercise name="Cossack Squat" image="CS.jpeg">
    <x-slot name="info">
        The Cossack Squat is a dynamic lower body exercise that targets the hips, thighs, and mobility of the lower body. It involves lateral movement and stretching, making it effective for enhancing flexibility and strength in the legs.
    </x-slot>
    <x-slot name="howTo">
        Start with your feet wider than shoulder-width apart, toes pointing outward.
        Shift your weight to one side, bending that knee while keeping the other leg extended.
        Lower your hips toward the bent knee, keeping the other leg straight and heel on the ground.
        Push through the bent leg to return to the starting position and switch sides.
        Coach’s Tip: Maintain a straight back and engage your core throughout the movement.
    </x-slot>
    <x-slot name="setsReps">
        Recommended sets and reps for the Cossack Squat:<br>
        - For mobility and flexibility: 3-4 sets of 8-10 reps per leg<br>
        Adjust the depth and range of motion based on your flexibility level.
    </x-slot>
    <x-slot name="mistakes">
        <div class="flex">
            <ul class="hover-list">
                <li class="hoverable">
                    Lifting Heels
                    <p class="hover-content text-black">
                        Keep your heels on the ground throughout the movement for stability.
                    </p>
                </li>
                <li class="hoverable">
                    Leaning Forward
                    <p class="hover-content text-black">
                        Maintain an upright posture; avoid leaning excessively forward.
                    </p>
                </li>
                <li class="hoverable">
                    Overextending Knee
                    <p class="hover-content text-black">
                        Don't let your knee extend beyond your toes during the squat.
                    </p>
                </li>
            </ul>
        </div>
    </x-slot>
    <x-slot name="muscles">
        <div class="flex">
            <ul class="hover-list">
                <li class="hoverable">
                    Quadriceps
                    <p class="hover-content text-black">
                        The Cossack Squat targets the quadriceps muscles of the legs.
                    </p>
                </li>
                <li class="hoverable">
                    Adductors
                    <p class="hover-content text-black">
                        The adductors are engaged in the lateral movement.
                    </p>
                </li>
                <li class="hoverable">
                    Hamstrings
                    <p class="hover-content text-black">
                        The hamstrings assist in the squatting and lowering phases.
                    </p>
                </li>
                <li class="hoverable">
                    Hip Flexors
                    <p class="hover-content text-black">
                        The hip flexors play a role in stabilizing the hips.
                    </p>
                </li>
            </ul>
        </div>
    </x-slot>
    <x-slot name="benefits">
        <div class="flex">
            <ul class="hover-list">
                <li class="hoverable">
                    Lower Body Mobility
                    <p class="hover-content text-black">
                        Cossack Squats enhance lower body flexibility and lateral movement.
                    </p>
                </li>
                <li class="hoverable">
                    Leg Strength
                    <p class="hover-content text-black">
                        The exercise engages the legs, promoting strength and balance.
                    </p>
                </li>
                <li class="hoverable">
                    Hip Flexibility
                    <p class="hover-content text-black">
                        Regular practice improves hip joint flexibility and mobility.
                    </p>
                </li>
            </ul>
        </div>
    </x-slot>
</x-workout-exercise>
<x-workout-exercise name="Goblet Squat" image="GS.jpeg">
    <x-slot name="info">
        The Goblet Squat is a versatile lower body exercise that targets the quadriceps, glutes, and core muscles. Holding a weight close to your body adds resistance and stability, making it a suitable exercise for various fitness levels.
    </x-slot>
    <x-slot name="howTo">
        Hold a dumbbell or kettlebell close to your chest with both hands, elbows pointing downward.
        Stand with your feet slightly wider than shoulder-width apart, toes pointing slightly outward.
        Lower your body into a squat by bending your knees and pushing your hips back.
        Keep your chest up and back straight; aim to have your elbows touch your thighs.
        Push through your heels to return to the starting position.
        Coach’s Tip: Maintain proper form and avoid letting your knees cave inward.
    </x-slot>
    <x-slot name="setsReps">
        Recommended sets and reps for the Goblet Squat:<br>
        - For muscle development: 3-4 sets of 8-12 reps<br>
        - For strength: 4-5 sets of 6-8 reps<br>
        Adjust the weight based on your goals and experience level.
    </x-slot>
    <x-slot name="mistakes">
        <div class="flex">
            <ul class="hover-list">
                <li class="hoverable">
                    Leaning Forward
                    <p class="hover-content text-black">
                        Keep your chest up and avoid leaning excessively forward.
                    </p>
                </li>
                <li class="hoverable">
                    Not Hitting Depth
                    <p class="hover-content text-black">
                        Squat to a depth where your thighs are parallel to the ground.
                    </p>
                </li>
                <li class="hoverable">
                    Using Toes Instead of Heels
                    <p class="hover-content text-black">
                        Push through your heels, not your toes, to stand up.
                    </p>
                </li>
            </ul>
        </div>
    </x-slot>
    <x-slot name="muscles">
        <div class="flex">
            <ul class="hover-list">
                <li class="hoverable">
                    Quadriceps
                    <p class="hover-content text-black">
                        The Goblet Squat targets the front thigh muscles.
                    </p>
                </li>
                <li class="hoverable">
                    Glutes
                    <p class="hover-content text-black">
                        The glute muscles are engaged in the squatting motion.
                    </p>
                </li>
                <li class="hoverable">
                    Core Muscles
                    <p class="hover-content text-black">
                        Your core works to stabilize your body during the squat.
                    </p>
                </li>
                <li class="hoverable">
                    Upper Back
                    <p class="hover-content text-black">
                        Holding the weight engages the upper back and traps.
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
                        Goblet Squats help develop leg and glute strength.
                    </p>
                </li>
                <li class="hoverable">
                    Core Stability
                    <p class="hover-content text-black">
                        The exercise challenges your core muscles for stability.
                    </p>
                </li>
                <li class="hoverable">
                    Functional Movement
                    <p class="hover-content text-black">
                        The squatting motion mimics everyday movements.
                    </p>
                </li>
            </ul>
        </div>
    </x-slot>
</x-workout-exercise>
<x-workout-exercise name="Dead-Stop Kettlebell Swing" image="DSKS.jpeg">
    <x-slot name="info">
        The Dead-Stop Kettlebell Swing is a variation of the traditional kettlebell swing that starts from a dead-stop position between each repetition. It's a full-body exercise that engages the hips, glutes, and core muscles while enhancing explosive power.
    </x-slot>
    <x-slot name="howTo">
        Place a kettlebell a few feet in front of you.
        Stand with your feet hip-width apart and hinge at the hips to grab the kettlebell's handle.
        Swing the kettlebell back between your legs, then explosively swing it forward.
        At the top of the swing, let the kettlebell come to a complete stop before initiating the next swing.
        Keep your core engaged and maintain a slight bend in your knees throughout the movement.
        Coach’s Tip: Generate power from your hips and use a controlled motion.
    </x-slot>
    <x-slot name="setsReps">
        Recommended sets and reps for the Dead-Stop Kettlebell Swing:<br>
        - For power and explosiveness: 4-5 sets of 8-10 reps<br>
        - For conditioning: 3-4 sets of 15-20 reps<br>
        Adjust the weight based on your goals and experience level.
    </x-slot>
    <x-slot name="mistakes">
        <div class="flex">
            <ul class="hover-list">
                <li class="hoverable">
                    Rounding the Back
                    <p class="hover-content text-black">
                        Maintain a straight back; avoid rounding or arching.
                    </p>
                </li>
                <li class="hoverable">
                    Using Arm Strength
                    <p class="hover-content text-black">
                        Generate power from your hips, not your arms.
                    </p>
                </li>
                <li class="hoverable">
                    Not Fully Stopping
                    <p class="hover-content text-black">
                        Let the kettlebell come to a complete stop at the top.
                    </p>
                </li>
            </ul>
        </div>
    </x-slot>
    <x-slot name="muscles">
        <div class="flex">
            <ul class="hover-list">
                <li class="hoverable">
                    Glutes and Hips
                    <p class="hover-content text-black">
                        The movement heavily engages the glutes and hips.
                    </p>
                </li>
                <li class="hoverable">
                    Core Muscles
                    <p class="hover-content text-black">
                        Your core stabilizes your body throughout the swing.
                    </p>
                </li>
                <li class="hoverable">
                    Hamstrings
                    <p class="hover-content text-black">
                        The hamstrings assist in the hip thrusting motion.
                    </p>
                </li>
                <li class="hoverable">
                    Shoulders and Upper Back
                    <p class="hover-content text-black">
                        The upper back assists in the kettlebell's upward trajectory.
                    </p>
                </li>
            </ul>
        </div>
    </x-slot>
    <x-slot name="benefits">
        <div class="flex">
            <ul class="hover-list">
                <li class="hoverable">
                    Explosive Power
                    <p class="hover-content text-black">
                        The movement enhances explosive power in the hips.
                    </p>
                </li>
                <li class="hoverable">
                    Full Body Engagement
                    <p class="hover-content text-black">
                        Dead-Stop Kettlebell Swings engage multiple muscle groups.
                    </p>
                </li>
                <li class="hoverable">
                    Cardiovascular Conditioning
                    <p class="hover-content text-black">
                        The exercise provides a cardiovascular challenge.
                    </p>
                </li>
            </ul>
        </div>
    </x-slot>
</x-workout-exercise>
<x-workout-exercise name="Kettlebell Swing" image="KS.jpeg">
    <x-slot name="info">
        The Kettlebell Swing is a dynamic exercise that targets the hips, glutes, and core muscles. It involves a hip-hinging motion to swing the kettlebell between your legs and up to shoulder height, engaging muscles for explosive power and endurance.
    </x-slot>
    <x-slot name="howTo">
        Stand with your feet slightly wider than hip-width apart and hold the kettlebell handle with both hands.
        Hinge at your hips, bending your knees slightly, and swing the kettlebell back between your legs.
        Explosively thrust your hips forward, using your glutes and core to swing the kettlebell up to shoulder height.
        Let the kettlebell descend back between your legs and continue the swinging motion.
        Keep your back straight, chest up, and maintain a stable core throughout.
        Coach’s Tip: Focus on the hip hinge and hip thrust to generate power.
    </x-slot>
    <x-slot name="setsReps">
        Recommended sets and reps for the Kettlebell Swing:<br>
        - For power and explosiveness: 4-5 sets of 10-12 reps<br>
        - For cardiovascular conditioning: 3-4 sets of 15-20 reps<br>
        Adjust the weight based on your goals and experience level.
    </x-slot>
    <x-slot name="mistakes">
        <div class="flex">
            <ul class="hover-list">
                <li class="hoverable">
                    Rounded Back
                    <p class="hover-content text-black">
                        Maintain a straight back throughout the movement.
                    </p>
                </li>
                <li class="hoverable">
                    Overusing Arm Strength
                    <p class="hover-content text-black">
                        Generate power from your hips, not your arms.
                    </p>
                </li>
                <li class="hoverable">
                    Not Using Hip Thrust
                    <p class="hover-content text-black">
                        Focus on the explosive hip thrust to swing the kettlebell.
                    </p>
                </li>
            </ul>
        </div>
    </x-slot>
    <x-slot name="muscles">
        <div class="flex">
            <ul class="hover-list">
                <li class="hoverable">
                    Glutes and Hips
                    <p class="hover-content text-black">
                        The swinging motion heavily engages the glutes and hips.
                    </p>
                </li>
                <li class="hoverable">
                    Core Muscles
                    <p class="hover-content text-black">
                        Your core stabilizes your body throughout the swing.
                    </p>
                </li>
                <li class="hoverable">
                    Hamstrings
                    <p class="hover-content text-black">
                        The hamstrings assist in the hip thrusting motion.
                    </p>
                </li>
                <li class="hoverable">
                    Shoulders and Upper Back
                    <p class="hover-content text-black">
                        The upper back assists in the kettlebell's upward trajectory.
                    </p>
                </li>
            </ul>
        </div>
    </x-slot>
    <x-slot name="benefits">
        <div class="flex">
            <ul class="hover-list">
                <li class="hoverable">
                    Explosive Power
                    <p class="hover-content text-black">
                        Kettlebell Swings enhance hip explosiveness.
                    </p>
                </li>
                <li class="hoverable">
                    Full Body Engagement
                    <p class="hover-content text-black">
                        The exercise engages multiple muscle groups.
                    </p>
                </li>
                <li class="hoverable">
                    Cardiovascular Conditioning
                    <p class="hover-content text-black">
                        Kettlebell Swings provide cardiovascular benefits.
                    </p>
                </li>
            </ul>
        </div>
    </x-slot>
</x-workout-exercise>

</x-workout-category>