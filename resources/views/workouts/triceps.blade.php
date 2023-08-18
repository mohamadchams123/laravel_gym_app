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

<x-workout-category name="Triceps">
<x-workout-exercise name="Skullcrusher" image="SC.jpeg">
    <x-slot name="info">
        The Skullcrusher, also known as the lying triceps extension, is an isolation exercise that targets the triceps muscles. It's performed by extending the arms while lying on a bench, resembling a "skullcrushing" motion when done with heavy weights.
    </x-slot>
    <x-slot name="howTo">
        Lie on a flat bench with your feet flat on the floor, and hold an EZ bar or dumbbells with an overhand grip.
        Extend your arms fully, holding the bar or dumbbells over your chest, palms facing inward.
        Keeping your upper arms stationary, lower the weight towards your forehead by bending your elbows.
        Aim to lower the weight until your forearms are just past parallel to the ground.
        Extend your arms back up to the starting position by contracting your triceps.
        Coach’s Tip: Maintain control throughout the movement; avoid swinging or jerking the weight.
    </x-slot>
    <x-slot name="setsReps">
        Recommended sets and reps for the Skullcrusher:<br>
        - For muscle hypertrophy: 3-4 sets of 8-12 reps<br>
        - For triceps strength: 4-5 sets of 6-8 reps<br>
        Use an appropriate weight to challenge your triceps while maintaining proper form.
    </x-slot>
    <x-slot name="mistakes">
        <div class="flex">
            <ul class="hover-list">
                <li class="hoverable">
                    Flaring Elbows Outward
                    <p class="hover-content text-black">
                        Keep your elbows close to your head throughout the movement to emphasize triceps activation.
                    </p>
                </li>
                <li class="hoverable">
                    Poor Wrist Alignment
                    <p class="hover-content text-black">
                        Maintain a neutral wrist position to avoid unnecessary strain on your wrists.
                    </p>
                </li>
                <li class="hoverable">
                    Using Excessive Weight
                    <p class="hover-content text-black">
                        Choose a weight that allows you to perform the exercise with proper form and without straining your elbows.
                    </p>
                </li>
            </ul>
        </div>
    </x-slot>
    <x-slot name="muscles">
        <div class="flex">
            <ul class="hover-list">
                <li class="hoverable">
                    Triceps Brachii (Long Head)
                    <p class="hover-content text-black">
                        The primary target of the Skullcrusher exercise is the long head of the triceps, helping to build triceps size and strength.
                    </p>
                </li>
                <li class="hoverable">
                    Triceps Brachii (Lateral Head)
                    <p class="hover-content text-black">
                        The lateral head of the triceps also contributes to the movement during the extension.
                    </p>
                </li>
                <li class="hoverable">
                    Triceps Brachii (Medial Head)
                    <p class="hover-content text-black">
                        The medial head of the triceps stabilizes the movement and contributes to overall triceps development.
                    </p>
                </li>
            </ul>
        </div>
    </x-slot>
    <x-slot name="benefits">
        <div class="flex">
            <ul class="hover-list">
                <li class="hoverable">
                    Triceps Strength and Size
                    <p class="hover-content text-black">
                        The Skullcrusher effectively targets the triceps muscles, promoting both strength and hypertrophy.
                    </p>
                </li>
                <li class="hoverable">
                    Isolation of the Triceps
                    <p class="hover-content text-black">
                        The exercise isolates the triceps, allowing for focused muscle engagement and development.
                    </p>
                </li>
                <li class="hoverable">
                    Improved Bench Press
                    <p class="hover-content text-black">
                        Strengthening the triceps with exercises like the Skullcrusher can contribute to improved performance in pressing movements.
                    </p>
                </li>
            </ul>
        </div>
    </x-slot>
</x-workout-exercise>
<x-workout-exercise name="Close-Grip Bench Press" image="CGBP.jpeg">
    <x-slot name="info">
        The Close-Grip Bench Press is a variation of the traditional bench press that targets the triceps more intensely. By narrowing your grip on the barbell, you emphasize the triceps while still engaging the chest and shoulders to a lesser extent.
    </x-slot>
    <x-slot name="howTo">
        Lie on a flat bench and grip the barbell with your hands placed closer than shoulder-width apart.
        Unrack the barbell and lower it to your lower chest while keeping your elbows tucked in.
        Press the barbell back up while extending your arms and focusing on engaging your triceps.
        Lower the barbell under control for each repetition, maintaining a controlled tempo.
        Coach’s Tip: Maintain a stable and controlled movement; avoid flaring your elbows out.
    </x-slot>
    <x-slot name="setsReps">
        Recommended sets and reps for the Close-Grip Bench Press:<br>
        - For triceps development: 3-4 sets of 8-12 reps<br>
        - For strength: 4-5 sets of 6-8 reps<br>
        Adjust the weight based on your fitness level and focus on maintaining proper form.
    </x-slot>
    <x-slot name="mistakes">
        <div class="flex">
            <ul class="hover-list">
                <li class="hoverable">
                    Flaring Elbows Outward
                    <p class="hover-content text-black">
                        Keep your elbows tucked in close to your sides to maximize triceps engagement.
                    </p>
                </li>
                <li class="hoverable">
                    Not Using a Spotter
                    <p class="hover-content text-black">
                        When lifting heavy weights, having a spotter can help ensure your safety.
                    </p>
                </li>
                <li class="hoverable">
                    Bouncing the Bar
                    <p class="hover-content text-black">
                        Avoid bouncing the bar off your chest; maintain control throughout the movement.
                    </p>
                </li>
            </ul>
        </div>
    </x-slot>
    <x-slot name="muscles">
        <div class="flex">
            <ul class="hover-list">
                <li class="hoverable">
                    Triceps Brachii
                    <p class="hover-content text-black">
                        The primary focus of the Close-Grip Bench Press is on the triceps muscles.
                    </p>
                </li>
                <li class="hoverable">
                    Chest (Pectoralis Major)
                    <p class="hover-content text-black">
                        While less emphasized, the chest muscles still contribute to the movement.
                    </p>
                </li>
                <li class="hoverable">
                    Anterior Deltoids
                    <p class="hover-content text-black">
                        The front shoulder muscles assist in stabilizing the movement.
                    </p>
                </li>
            </ul>
        </div>
    </x-slot>
    <x-slot name="benefits">
        <div class="flex">
            <ul class="hover-list">
                <li class="hoverable">
                    Triceps Strength
                    <p class="hover-content text-black">
                        The Close-Grip Bench Press is a potent exercise for developing triceps strength and size.
                    </p>
                </li>
                <li class="hoverable">
                    Bench Press Improvement
                    <p class="hover-content text-black">
                        Strengthening your triceps can lead to improved performance in regular bench press movements.
                    </p>
                </li>
                <li class="hoverable">
                    Efficient Triceps Isolation
                    <p class="hover-content text-black">
                        This variation allows you to target the triceps with a high degree of isolation.
                    </p>
                </li>
            </ul>
        </div>
    </x-slot>
</x-workout-exercise>
<x-workout-exercise name="Board Press" image="BP.jpeg">
    <x-slot name="info">
        The Board Press is a powerlifting exercise used to work on specific portions of the bench press range of motion. By placing boards on your chest, you reduce the range the barbell travels, allowing you to focus on strength in a limited portion of the lift.
    </x-slot>
    <x-slot name="howTo">
        Lie on a bench with boards placed on your chest at the desired height, typically around 1 to 4 boards.
        Grip the barbell with an overhand grip and unrack it, lowering it to the boards.
        Press the barbell upward while keeping control and stopping when the barbell touches the boards.
        Pause for a brief moment and then press the barbell back up to the starting position.
        Coach’s Tip: Use boards of varying heights to target different parts of the bench press range and enhance strength in sticking points.
    </x-slot>
    <x-slot name="setsReps">
        Recommended sets and reps for the Board Press:<br>
        - For powerlifting strength: 3-4 sets of 3-5 reps<br>
        Adjust the boards and weight based on your goals and specific weaknesses.
    </x-slot>
    <x-slot name="mistakes">
        <div class="flex">
            <ul class="hover-list">
                <li class="hoverable">
                    Bouncing the Bar off Boards
                    <p class="hover-content text-black">
                        Maintain control; avoid using momentum to bounce the bar off the boards.
                    </p>
                </li>
                <li class="hoverable">
                    Improper Board Height
                    <p class="hover-content text-black">
                        Choose the appropriate board height to target your desired bench press range.
                    </p>
                </li>
                <li class="hoverable">
                    Neglecting Full Range Work
                    <p class="hover-content text-black">
                        Use board presses as a supplement; still incorporate full range bench pressing.
                    </p>
                </li>
            </ul>
        </div>
    </x-slot>
    <x-slot name="muscles">
        <div class="flex">
            <ul class="hover-list">
                <li class="hoverable">
                    Pectoralis Major (Chest)
                    <p class="hover-content text-black">
                        The chest muscles are engaged in the pressing motion.
                    </p>
                </li>
                <li class="hoverable">
                    Triceps Brachii
                    <p class="hover-content text-black">
                        The triceps are a primary mover in the board press exercise.
                    </p>
                </li>
                <li class="hoverable">
                    Anterior Deltoids
                    <p class="hover-content text-black">
                        The front shoulder muscles assist in stabilizing the movement.
                    </p>
                </li>
            </ul>
        </div>
    </x-slot>
    <x-slot name="benefits">
        <div class="flex">
            <ul class="hover-list">
                <li class="hoverable">
                    Specific Strength Training
                    <p class="hover-content text-black">
                        Board presses allow you to target and improve strength in specific parts of the bench press.
                    </p>
                </li>
                <li class="hoverable">
                    Overcoming Weak Points
                    <p class="hover-content text-black">
                        The exercise helps address sticking points in the bench press motion.
                    </p>
                </li>
                <li class="hoverable">
                    Powerlifting Assistance
                    <p class="hover-content text-black">
                        The board press is a valuable tool for powerlifters looking to enhance their bench press performance.
                    </p>
                </li>
            </ul>
        </div>
    </x-slot>
</x-workout-exercise>
<x-workout-exercise name="Triceps Dip" image="TD.jpeg">
    <x-slot name="info">
        The Triceps Dip is a bodyweight exercise that effectively targets the triceps muscles. It's performed using parallel bars or a dip station and is an excellent way to build strength and definition in the back of your arms.
    </x-slot>
    <x-slot name="howTo">
        Grab the parallel bars with your palms facing down and your arms fully extended.
        Lower your body by bending your elbows until they're at a 90-degree angle or slightly lower.
        Push your body back up to the starting position by extending your elbows.
        Keep your chest up and shoulders down throughout the movement.
        Coach’s Tip: Avoid letting your shoulders hunch; focus on using your triceps to perform the movement.
    </x-slot>
    <x-slot name="setsReps">
        Recommended sets and reps for the Triceps Dip:<br>
        - For muscle endurance: 3-4 sets of 12-15 reps<br>
        - For triceps strength: 4-5 sets of 6-8 reps<br>
        Adjust the reps and difficulty based on your fitness level.
    </x-slot>
    <x-slot name="mistakes">
        <div class="flex">
            <ul class="hover-list">
                <li class="hoverable">
                    Forward Leaning
                    <p class="hover-content text-black">
                        Maintain an upright posture and avoid leaning too far forward during the movement.
                    </p>
                </li>
                <li class="hoverable">
                    Not Lowering Deep Enough
                    <p class="hover-content text-black">
                        Lower your body until your elbows are at least at a 90-degree angle to maximize triceps engagement.
                    </p>
                </li>
                <li class="hoverable">
                    Relying on Momentum
                    <p class="hover-content text-black">
                        Use controlled movements; avoid using momentum to lift your body.
                    </p>
                </li>
            </ul>
        </div>
    </x-slot>
    <x-slot name="muscles">
        <div class="flex">
            <ul class="hover-list">
                <li class="hoverable">
                    Triceps Brachii
                    <p class="hover-content text-black">
                        The primary focus of the Triceps Dip is on the triceps muscles.
                    </p>
                </li>
                <li class="hoverable">
                    Chest (Pectoralis Major)
                    <p class="hover-content text-black">
                        The chest muscles assist in stabilizing the movement.
                    </p>
                </li>
                <li class="hoverable">
                    Shoulders (Anterior Deltoids)
                    <p class="hover-content text-black">
                        The front shoulder muscles contribute to shoulder stability.
                    </p>
                </li>
            </ul>
        </div>
    </x-slot>
    <x-slot name="benefits">
        <div class="flex">
            <ul class="hover-list">
                <li class="hoverable">
                    Triceps Development
                    <p class="hover-content text-black">
                        The Triceps Dip is an effective exercise for building triceps strength and size.
                    </p>
                </li>
                <li class="hoverable">
                    Upper Body Definition
                    <p class="hover-content text-black">
                        Regularly incorporating triceps dips can contribute to a well-defined upper body.
                    </p>
                </li>
                <li class="hoverable">
                    Minimal Equipment
                    <p class="hover-content text-black">
                        Triceps dips require minimal equipment and can be performed at home or at the gym.
                    </p>
                </li>
            </ul>
        </div>
    </x-slot>
</x-workout-exercise>

</x-workout-category>