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

<x-workout-category name="Obliques">
<x-workout-exercise name="Medicine Ball Rotational Throw" image="Medicine-Ball.JPEG">
    <x-slot name="info">
        The medicine ball rotational throw is a dynamic exercise that engages the core, hips, and upper body. It's great for improving power and rotational strength.
    </x-slot>
    <x-slot name="howTo">
        Stand with your feet shoulder-width apart, holding a medicine ball with both hands at chest level.
        Rotate your torso to one side, loading your hips and engaging your core.
        Explosively rotate your torso to the opposite side, extending your arms and releasing the medicine ball.
        Throw the ball with force, following through the movement with your upper body.
        Catch the ball or retrieve it and repeat the movement for the desired number of reps.
        Coach’s Tip: Focus on generating power from your core and hips, and maintain a stable base with your legs.
    </x-slot>
    <x-slot name="setsReps">
        Incorporate medicine ball rotational throws into your workout routine: <br>
        For Power Development: 3 to 4 sets of 6 to 8 reps per side.
        For Conditioning: 2 to 3 sets of 10 to 12 reps per side.
    </x-slot>
    <x-slot name="mistakes">
        <div class="flex">
            <ul class="hover-list">
                <li class="hoverable">
                    Poor Rotation
                    <p class="hover-content text-black">
                        Ensure proper torso rotation to maximize power and engagement of the core.
                    </p>
                </li>
                <li class="hoverable">
                    Using Only Arms
                    <p class="hover-content text-black">
                        Generate force from your core and hips, not just your arms.
                    </p>
                </li>
            </ul>
        </div>
    </x-slot>
    <x-slot name="muscles">
        <div class="flex">
            <ul class="hover-list">
                <li class="hoverable">
                    Core Muscles
                    <p class="hover-content text-black">
                        The medicine ball rotational throw targets the core muscles, particularly obliques and rectus abdominis.
                    </p>
                </li>
                <li class="hoverable">
                    Hip Muscles
                    <p class="hover-content text-black">
                        This exercise engages the muscles in your hips, aiding in rotational power.
                    </p>
                </li>
            </ul>
        </div>
    </x-slot>
    <x-slot name="benefits">
        <div class="flex">
            <ul class="hover-list">
                <li class="hoverable">
                    Power and Rotational Strength
                    <p class="hover-content text-black">
                        Medicine ball rotational throws enhance power and strength in rotational movements.
                    </p>
                </li>
                <li class="hoverable">
                    Functional Movement
                    <p class="hover-content text-black">
                        This exercise mimics movements used in various sports and activities.
                    </p>
                </li>
            </ul>
        </div>
    </x-slot>
</x-workout-exercise>
<x-workout-exercise name="Decline Oblique Crunch" image="Decline-oblique.JPEG">
    <x-slot name="info">
        The decline oblique crunch is a targeted core exercise that emphasizes the oblique muscles. It helps in strengthening and sculpting the sides of your waist.
    </x-slot>
    <x-slot name="howTo">
        Secure your legs at the end of a decline bench and lie back, placing your hands lightly behind your head or across your chest.
        Lift your upper body off the bench, curling your torso while twisting to one side.
        Focus on contracting your oblique muscles as you perform the crunch.
        Slowly lower your upper body back down but don't let your back arch completely.
        Perform the desired number of reps on one side, then switch to the other.
        Coach’s Tip: Keep your movements controlled and avoid pulling on your neck during the crunch.
    </x-slot>
    <x-slot name="setsReps">
        Incorporate decline oblique crunches into your core routine: <br>
        For Muscle Toning: 3 to 4 sets of 12 to 15 reps per side.
        For Definition: 2 to 3 sets of 15 to 20 reps per side.
    </x-slot>
    <x-slot name="mistakes">
        <div class="flex">
            <ul class="hover-list">
                <li class="hoverable">
                    Neck Strain
                    <p class="hover-content text-black">
                        Avoid pulling on your neck; use your oblique muscles to perform the movement.
                    </p>
                </li>
                <li class="hoverable">
                    Arching Back
                    <p class="hover-content text-black">
                        Keep a slight engagement in your core to prevent excessive arching of the back.
                    </p>
                </li>
            </ul>
        </div>
    </x-slot>
    <x-slot name="muscles">
        <div class="flex">
            <ul class="hover-list">
                <li class="hoverable">
                    Oblique Muscles
                    <p class="hover-content text-black">
                        The decline oblique crunch targets the side muscles of your core for a defined waistline.
                    </p>
                </li>
            </ul>
        </div>
    </x-slot>
    <x-slot name="benefits">
        <div class="flex">
            <ul class="hover-list">
                <li class="hoverable">
                    Oblique Strength
                    <p class="hover-content text-black">
                        This exercise is effective in isolating and strengthening the oblique muscles.
                    </p>
                </li>
                <li class="hoverable">
                    Core Definition
                    <p class="hover-content text-black">
                        Decline oblique crunches contribute to a more sculpted and defined midsection.
                    </p>
                </li>
            </ul>
        </div>
    </x-slot>
</x-workout-exercise>
<x-workout-exercise name="Seated Barbell Twist" image="SBT.JPEG">
    <x-slot name="info">
        The seated barbell twist is a rotational core exercise that targets your oblique muscles. It enhances rotational strength and stability.
    </x-slot>
    <x-slot name="howTo">
        Sit on the floor with your knees slightly bent and your feet elevated.
        Hold a barbell or a weighted object with both hands, positioning it across your shoulders behind your neck.
        Keeping your back straight, engage your core and rotate your torso to one side.
        Pause briefly at the end of the range of motion, then rotate to the other side.
        Perform the desired number of reps on each side.
        Coach’s Tip: Focus on your oblique muscles doing the work and maintain proper posture throughout the movement.
    </x-slot>
    <x-slot name="setsReps">
        Incorporate seated barbell twists into your core routine: <br>
        For Strength: 3 to 4 sets of 8 to 10 reps per side.
        For Endurance: 2 to 3 sets of 12 to 15 reps per side.
    </x-slot>
    <x-slot name="mistakes">
        <div class="flex">
            <ul class="hover-list">
                <li class="hoverable">
                    Hunching Shoulders
                    <p class="hover-content text-black">
                        Maintain a tall posture and avoid rounding your shoulders during the twists.
                    </p>
                </li>
                <li class="hoverable">
                    Using Momentum
                    <p class="hover-content text-black">
                        Perform controlled twists, using your core muscles, not momentum.
                    </p>
                </li>
            </ul>
        </div>
    </x-slot>
    <x-slot name="muscles">
        <div class="flex">
            <ul class="hover-list">
                <li class="hoverable">
                    Oblique Muscles
                    <p class="hover-content text-black">
                        Seated barbell twists primarily target the oblique muscles, enhancing rotational strength.
                    </p>
                </li>
            </ul>
        </div>
    </x-slot>
    <x-slot name="benefits">
        <div class="flex">
            <ul class="hover-list">
                <li class="hoverable">
                    Rotational Strength
                    <p class="hover-content text-black">
                        This exercise improves your ability to generate power and stability in rotational movements.
                    </p>
                </li>
                <li class="hoverable">
                    Core Engagement
                    <p class="hover-content text-black">
                        Seated barbell twists engage the entire core, contributing to overall core strength.
                    </p>
                </li>
            </ul>
        </div>
    </x-slot>
</x-workout-exercise>
<x-workout-exercise name="Plate Twist" image="Plate-Twist.JPEG">
    <x-slot name="info">
        The plate twist is a simple yet effective exercise for targeting the oblique muscles. It helps in building rotational strength and improving torso mobility.
    </x-slot>
    <x-slot name="howTo">
        Sit on the floor with your knees bent and your feet elevated.
        Hold a weight plate or a weighted object with both hands, holding it close to your chest.
        Lean back slightly and engage your core.
        Rotate your torso to one side while keeping your hips and lower body stationary.
        Pause briefly, then rotate to the other side.
        Perform the desired number of reps on each side.
        Coach’s Tip: Focus on controlled rotations and don't rush the movement; let your oblique muscles do the work.
    </x-slot>
    <x-slot name="setsReps">
        Incorporate plate twists into your core routine: <br>
        For Muscle Toning: 3 to 4 sets of 12 to 15 reps per side.
        For Definition: 2 to 3 sets of 15 to 20 reps per side.
    </x-slot>
    <x-slot name="mistakes">
        <div class="flex">
            <ul class="hover-list">
                <li class="hoverable">
                    Using Momentum
                    <p class="hover-content text-black">
                        Avoid using momentum to twist; focus on controlled and deliberate movements.
                    </p>
                </li>
                <li class="hoverable">
                    Arching Back
                    <p class="hover-content text-black">
                        Keep your back straight and avoid arching during the twists.
                    </p>
                </li>
            </ul>
        </div>
    </x-slot>
    <x-slot name="muscles">
        <div class="flex">
            <ul class="hover-list">
                <li class="hoverable">
                    Oblique Muscles
                    <p class="hover-content text-black">
                        Plate twists engage the oblique muscles for improved rotational strength.
                    </p>
                </li>
            </ul>
        </div>
    </x-slot>
    <x-slot name="benefits">
        <div class="flex">
            <ul class="hover-list">
                <li class="hoverable">
                    Rotational Strength
                    <p class="hover-content text-black">
                        Plate twists enhance your ability to rotate and twist your torso effectively.
                    </p>
                </li>
                <li class="hoverable">
                    Core Mobility
                    <p class="hover-content text-black">
                        This exercise helps in improving the flexibility and mobility of your core.
                    </p>
                </li>
            </ul>
        </div>
    </x-slot>
</x-workout-exercise>

</x-workout-category>