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

<x-workout-category name="Chest">
    <x-workout-exercise name="Barbell Bench Press" image="BBP.PNG">
        <x-slot name="info">
            The barbell bench press is a classic compound exercise that primarily targets the chest muscles (pectoralis major). It's a fundamental movement for building upper body strength and size.
        </x-slot>
        <x-slot name="howTo">
            Lie on a flat bench with your feet flat on the floor and your back arched naturally. Grip the barbell slightly wider than shoulder-width apart.
            Lower the bar to your chest under control while keeping your elbows at around a 45-degree angle from your body.
            Push the barbell back up explosively to the starting position, fully extending your arms.
            Repeat for the desired number of reps.
            Coach’s Tip: Make sure to maintain a stable and controlled motion throughout the lift, avoiding excessive arching of the lower back.
        </x-slot>
        <x-slot name="setsReps">
            The barbell bench press can be tailored to various goals. Here are some rep and set ranges to consider: <br>
            For Muscle Hypertrophy: 3 to 4 sets of 8 to 12 reps, with moderate weights.
            For Strength and Power: 4 to 6 sets of 4 to 6 reps, using heavier weights.
            For Endurance: 2 to 3 sets of 15 to 20 reps, with lighter weights.
        </x-slot>
        <x-slot name="mistakes">
            <div class="flex">  
                <ul class="hover-list">
                    <li class="hoverable">
                        Bouncing the Bar off the Chest
                        <p class="hover-content text-black">
                            One common mistake is using the momentum of the bounce to help you push the bar back up. This reduces the effectiveness of the exercise and can be risky for your shoulder health.
                        </p>
                    </li>
                    <li class="hoverable">
                        Flaring Elbows Out
                        <p class="hover-content text-black">
                            Allowing your elbows to flare out excessively can put strain on the shoulder joints. Keep your elbows at a roughly 45-degree angle to your body.
                        </p>
                    </li>
                    <li class="hoverable">
                        Not Using a Full Range of Motion
                        <p class="hover-content text-black">
                            Some lifters may only lower the bar a short distance. Make sure you perform a full range of motion, touching your chest gently with the bar at the bottom.
                        </p>
                    </li>
                </ul>
            </div>
        </x-slot>
        <x-slot name="muscles">
            <div class="flex">  
                <ul class="hover-list">
                    <li class="hoverable">
                        Chest (Pectoralis Major)
                        <p class="hover-content text-black">
                            The primary muscle targeted by the barbell bench press is the pectoralis major, which contributes to the pressing motion.
                        </p>
                    </li>
                    <li class="hoverable">
                        Front Shoulders (Anterior Deltoids)
                        <p class="hover-content text-black">
                            The front part of the shoulder muscles assists in raising the arms during the upward phase of the bench press.
                        </p>
                    </li>
                    <li class="hoverable">
                        Triceps
                        <p class="hover-content text-black">
                            The triceps play a significant role in extending the elbow during the pressing motion.
                        </p>
                    </li>
                </ul>
            </div>
        </x-slot>
        <x-slot name="benefits">
            <div class="flex">  
                <ul class="hover-list">
                    <li class="hoverable">
                        Upper Body Strength and Mass
                        <p class="hover-content text-black">
                            The barbell bench press is a foundational movement for building upper body strength and muscle mass, particularly in the chest.
                        </p>
                    </li>
                    <li class="hoverable">
                        Functional Strength
                        <p class="hover-content text-black">
                            The strength gained from the bench press carries over to various activities in daily life that involve pushing movements.
                        </p>
                    </li>
                </ul>
            </div>
        </x-slot>
    </x-workout-exercise>
    <x-workout-exercise name="Dumbbell Bench Press" image="DBP.JPEG">
    <x-slot name="info">
        The dumbbell bench press is an effective compound exercise that targets the chest muscles (pectoralis major). It helps in building strength and size in the upper body.
    </x-slot>
    <x-slot name="howTo">
        Lie on a flat bench with your feet flat on the floor and your back arched naturally. Hold a dumbbell in each hand at shoulder level.
        Lower the dumbbells to your chest under control while keeping your elbows at around a 45-degree angle from your body.
        Push the dumbbells back up explosively to the starting position, fully extending your arms.
        Repeat for the desired number of reps.
        Coach’s Tip: Maintain proper form and control throughout the exercise, and avoid using momentum to lift the weights.
    </x-slot>
    <x-slot name="setsReps">
        The dumbbell bench press can be customized based on your goals: <br>
        For Muscle Hypertrophy: 3 to 4 sets of 8 to 12 reps, using moderate weights.
        For Strength and Power: 4 to 6 sets of 4 to 6 reps, with heavier weights.
        For Endurance: 2 to 3 sets of 15 to 20 reps, using lighter weights.
    </x-slot>
    <x-slot name="mistakes">
        <div class="flex">  
            <ul class="hover-list">
                <li class="hoverable">
                    Arching Lower Back
                    <p class="hover-content text-black">
                        Avoid excessive arching of the lower back, which can lead to strain. Maintain a stable and neutral spine position.
                    </p>
                </li>
                <li class="hoverable">
                    Flaring Elbows Out
                    <p class="hover-content text-black">
                        Keep your elbows at a 45-degree angle to your body to minimize stress on the shoulder joints.
                    </p>
                </li>
                <li class="hoverable">
                    Not Touching Chest
                    <p class="hover-content text-black">
                        Perform a full range of motion by gently touching your chest with the dumbbells at the bottom of the movement.
                    </p>
                </li>
            </ul>
        </div>
    </x-slot>
    <x-slot name="muscles">
        <div class="flex">  
            <ul class="hover-list">
                <li class="hoverable">
                    Chest (Pectoralis Major)
                    <p class="hover-content text-black">
                        The primary muscle targeted by the dumbbell bench press is the pectoralis major, responsible for the pressing action.
                    </p>
                </li>
                <li class="hoverable">
                    Front Shoulders (Anterior Deltoids)
                    <p class="hover-content text-black">
                        The front deltoids assist in lifting the dumbbells during the upward phase of the press.
                    </p>
                </li>
                <li class="hoverable">
                    Triceps
                    <p class="hover-content text-black">
                        The triceps play a crucial role in extending the elbow during the pressing motion.
                    </p>
                </li>
            </ul>
        </div>
    </x-slot>
    <x-slot name="benefits">
        <div class="flex">  
            <ul class="hover-list">
                <li class="hoverable">
                    Chest Development
                    <p class="hover-content text-black">
                        The dumbbell bench press helps in building a well-rounded and strong chest.
                    </p>
                </li>
                <li class="hoverable">
                    Balanced Strength
                    <p class="hover-content text-black">
                        Using dumbbells can help identify and correct strength imbalances between the left and right sides of the body.
                    </p>
                </li>
            </ul>
        </div>
    </x-slot>
</x-workout-exercise>
    <x-workout-exercise name="Decline Barbell Press" image="DP.JPEG">
        <x-slot name="info">
            The decline barbell press is a compound exercise that primarily targets the lower portion of the chest muscles (lower pectoralis major). It's a variation of the bench press that provides a unique angle of resistance.
        </x-slot>
        <x-slot name="howTo">
            Lie on a decline bench angled at around 30-45 degrees with your feet secured. Grip the barbell slightly wider than shoulder-width apart.
            Lower the bar to your lower chest under control while keeping your elbows at around a 45-degree angle from your body.
            Push the barbell back up explosively to the starting position, fully extending your arms.
            Repeat for the desired number of reps.
            Coach’s Tip: Maintain proper form and control throughout the movement to effectively target the lower chest muscles.
        </x-slot>
        <x-slot name="setsReps">
            The decline barbell press can be incorporated into your routine with these rep and set ranges: <br>
            For Muscle Hypertrophy: 3 to 4 sets of 8 to 12 reps, using moderate weights.
            For Strength and Power: 4 to 6 sets of 4 to 6 reps, using heavier weights.
            For Endurance: 2 to 3 sets of 15 to 20 reps, with lighter weights.
        </x-slot>
        <x-slot name="mistakes">
            <div class="flex">  
                <ul class="hover-list">
                    <li class="hoverable">
                        Arching the Back Excessively
                        <p class="hover-content text-black">
                            Avoid excessive arching of the lower back, as it can compromise stability and form during the movement.
                        </p>
                    </li>
                    <li class="hoverable">
                        Using Momentum
                        <p class="hover-content text-black">
                            Refrain from using momentum to push the bar. Maintain controlled movements to target the intended muscle groups effectively.
                        </p>
                    </li>
                    <li class="hoverable">
                        Neglecting Full Range of Motion
                        <p class="hover-content text-black">
                            Perform a complete range of motion, allowing the bar to touch your lower chest at the bottom of the movement.
                        </p>
                    </li>
                </ul>
            </div>
        </x-slot>
        <x-slot name="muscles">
            <div class="flex">  
                <ul class="hover-list">
                    <li class="hoverable">
                        Lower Chest (Lower Pectoralis Major)
                        <p class="hover-content text-black">
                            The decline barbell press effectively targets the lower portion of the chest muscles, helping to develop overall chest symmetry.
                        </p>
                    </li>
                    <li class="hoverable">
                        Front Shoulders (Anterior Deltoids)
                        <p class="hover-content text-black">
                            The front shoulder muscles assist in raising the arms during the upward phase of the decline press.
                        </p>
                    </li>
                    <li class="hoverable">
                        Triceps
                        <p class="hover-content text-black">
                            The triceps contribute to elbow extension during the pressing motion.
                        </p>
                    </li>
                </ul>
            </div>
        </x-slot>
        <x-slot name="benefits">
            <div class="flex">  
                <ul class="hover-list">
                    <li class="hoverable">
                        Lower Chest Development
                        <p class="hover-content text-black">
                            The decline barbell press helps target the often-neglected lower portion of the chest muscles, contributing to balanced chest development.
                        </p>
                    </li>
                    <li class="hoverable">
                        Variation and Muscle Stimulation
                        <p class="hover-content text-black">
                            Adding decline presses to your routine provides a different angle of resistance, stimulating muscle growth and preventing plateaus.
                        </p>
                    </li>
                </ul>
            </div>
        </x-slot>
    </x-workout-exercise>
    <x-workout-exercise name="Incline Barbell Bench Press" image="IP.JPEG">
        <x-slot name="info">
            The incline barbell bench press is a compound exercise that primarily targets the upper chest muscles (upper pectoralis major). It involves a bench inclined at around 30-45 degrees for a unique angle of resistance.
        </x-slot>
        <x-slot name="howTo">
            Lie on an incline bench with your feet flat on the floor and your back naturally arched. Grip the barbell slightly wider than shoulder-width apart.
            Lower the bar to your upper chest while keeping your elbows at approximately a 45-degree angle from your body.
            Push the barbell back up explosively to the starting position, fully extending your arms.
            Repeat for the desired number of reps.
            Coach’s Tip: Maintain control throughout the lift, focusing on the contraction of the upper chest muscles.
        </x-slot>
        <x-slot name="setsReps">
            Incorporate the incline barbell bench press with these rep and set ranges: <br>
            For Muscle Hypertrophy: 3 to 4 sets of 8 to 12 reps, using moderate weights.
            For Strength and Power: 4 to 6 sets of 4 to 6 reps, using heavier weights.
            For Endurance: 2 to 3 sets of 15 to 20 reps, with lighter weights.
        </x-slot>
        <x-slot name="mistakes">
            <div class="flex">  
                <ul class="hover-list">
                    <li class="hoverable">
                        Overarching the Lower Back
                        <p class="hover-content text-black">
                            Avoid excessive arching of the lower back during the lift, as it can lead to poor form and potential injury.
                        </p>
                    </li>
                    <li class="hoverable">
                        Neglecting Controlled Motion
                        <p class="hover-content text-black">
                            Focus on controlled eccentric and concentric phases to effectively target the upper chest muscles.
                        </p>
                    </li>
                    <li class="hoverable">
                        Shortening the Range of Motion
                        <p class="hover-content text-black">
                            Ensure a full range of motion by allowing the bar to touch your upper chest at the bottom of the movement.
                        </p>
                    </li>
                </ul>
            </div>
        </x-slot>
        <x-slot name="muscles">
            <div class="flex">  
                <ul class="hover-list">
                    <li class="hoverable">
                        Upper Chest (Upper Pectoralis Major)
                        <p class="hover-content text-black">
                            The incline barbell bench press effectively targets the upper portion of the chest muscles, contributing to a well-rounded chest.
                        </p>
                    </li>
                    <li class="hoverable">
                        Front Shoulders (Anterior Deltoids)
                        <p class="hover-content text-black">
                            The front shoulder muscles assist in raising the arms during the upward phase of the incline press.
                        </p>
                    </li>
                    <li class="hoverable">
                        Triceps
                        <p class="hover-content text-black">
                            The triceps play a role in elbow extension during the pressing motion.
                        </p>
                    </li>
                </ul>
            </div>
        </x-slot>
        <x-slot name="benefits">
            <div class="flex">  
                <ul class="hover-list">
                    <li class="hoverable">
                        Upper Chest Development
                        <p class="hover-content text-black">
                            The incline barbell bench press helps target the upper portion of the chest muscles, enhancing upper chest definition.
                        </p>
                    </li>
                    <li class="hoverable">
                        Variation and Muscle Stimulation
                        <p class="hover-content text-black">
                            Adding incline presses to your routine introduces a different angle of resistance, promoting muscle growth and preventing plateaus.
                        </p>
                    </li>
                </ul>
            </div>
        </x-slot>
    </x-workout-exercise>
</x-workout-category>
