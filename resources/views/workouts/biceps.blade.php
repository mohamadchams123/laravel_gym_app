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
<x-workout-category name="Biceps">
    <x-workout-exercise name="Barbell or EZ-Bar Curl" image="BOEBC.JPEG">
        <x-slot name="info">
            The barbell or EZ-bar curl is a classic biceps isolation exercise that targets the biceps brachii muscles. It's essential for developing well-defined and strong biceps.
        </x-slot>
        <x-slot name="howTo">
            Stand with your feet shoulder-width apart, holding the barbell or EZ-bar with an underhand grip.
            Keep your elbows close to your torso and curl the barbell or EZ-bar upward, contracting your biceps.
            Continue the movement until your biceps are fully contracted and the barbell is at shoulder level.
            Slowly lower the barbell back to the starting position, maintaining control throughout the descent.
            Repeat for the desired number of reps.
            Coach’s Tip: Avoid using momentum to lift the weight; focus on controlled and deliberate movements.
        </x-slot>
        <x-slot name="setsReps">
            The barbell or EZ-bar curl can be adapted to various training goals: <br>
            For Muscle Hypertrophy: 3 to 4 sets of 8 to 12 reps, using moderate weights.
            For Strength: 4 to 5 sets of 6 to 8 reps, with heavier weights.
            For Endurance: 2 to 3 sets of 15 to 20 reps, using lighter weights.
        </x-slot>
        <x-slot name="mistakes">
            <div class="flex">
                <ul class="hover-list">
                    <li class="hoverable">
                        Swinging the Body
                        <p class="hover-content text-black">
                            Avoid using your body's momentum to lift the weight. This reduces the effectiveness of the exercise and can lead to injury.
                        </p>
                    </li>
                    <li class="hoverable">
                        Not Keeping Elbows Stationary
                        <p class="hover-content text-black">
                            Ensure your elbows remain close to your torso throughout the movement to isolate the biceps.
                        </p>
                    </li>
                    <li class="hoverable">
                        Incomplete Range of Motion
                        <p class="hover-content text-black">
                            Perform a full range of motion by fully extending your arms at the bottom and contracting your biceps at the top.
                        </p>
                    </li>
                </ul>
            </div>
        </x-slot>
        <x-slot name="muscles">
            <div class="flex">
                <ul class="hover-list">
                    <li class="hoverable">
                        Biceps Brachii
                        <p class="hover-content text-black">
                            The barbell or EZ-bar curl primarily targets the biceps brachii muscles, contributing to arm flexion.
                        </p>
                    </li>
                    <li class="hoverable">
                        Brachialis
                        <p class="hover-content text-black">
                            The brachialis muscle, located underneath the biceps, also assists in elbow flexion during the curl.
                        </p>
                    </li>
                </ul>
            </div>
        </x-slot>
        <x-slot name="benefits">
            <div class="flex">
                <ul class="hover-list">
                    <li class="hoverable">
                        Biceps Development
                        <p class="hover-content text-black">
                            The barbell or EZ-bar curl is a fundamental exercise for building well-defined and strong biceps.
                        </p>
                    </li>
                    <li class="hoverable">
                        Arm Flexion Strength
                        <p class="hover-content text-black">
                            Developing strong biceps through this exercise improves your ability to perform various pulling and lifting movements.
                        </p>
                    </li>
                </ul>
            </div>
        </x-slot>
    </x-workout-exercise>
    <x-workout-exercise name="Cable Curl" image="CC.JPEG">
        <x-slot name="info">
            The cable curl is an effective biceps isolation exercise using a cable machine. It provides constant tension throughout the movement, helping to build strong and well-defined biceps.
        </x-slot>
        <x-slot name="howTo">
            Attach a straight or EZ-bar attachment to the low pulley of a cable machine.
            Stand facing the cable machine with your feet shoulder-width apart, holding the bar with an underhand grip.
            Keep your elbows close to your torso and curl the bar upward while contracting your biceps.
            Squeeze your biceps at the top of the movement, then slowly lower the bar back to the starting position.
            Repeat for the desired number of reps.
            Coach’s Tip: Focus on maintaining a stable stance and controlled movements throughout the exercise.
        </x-slot>
        <x-slot name="setsReps">
            The cable curl can be customized for various goals: <br>
            For Muscle Hypertrophy: 3 to 4 sets of 8 to 12 reps, using moderate weights.
            For Strength: 4 to 5 sets of 6 to 8 reps, with heavier weights.
            For Endurance: 2 to 3 sets of 15 to 20 reps, using lighter weights.
        </x-slot>
        <x-slot name="mistakes">
            <div class="flex">
                <ul class="hover-list">
                    <li class="hoverable">
                        Using Momentum
                        <p class="hover-content text-black">
                            Avoid swinging your body to lift the weight. This diminishes the effectiveness of the exercise and can lead to injury.
                        </p>
                    </li>
                    <li class="hoverable">
                        Letting Elbows Drift
                        <p class="hover-content text-black">
                            Ensure your elbows remain stationary to effectively target the biceps and minimize involvement of other muscles.
                        </p>
                    </li>
                    <li class="hoverable">
                        Short Range of Motion
                        <p class="hover-content text-black">
                            Perform a complete range of motion, fully extending your arms at the bottom and contracting your biceps at the top.
                        </p>
                    </li>
                </ul>
            </div>
        </x-slot>
        <x-slot name="muscles">
            <div class="flex">
                <ul class="hover-list">
                    <li class="hoverable">
                        Biceps Brachii
                        <p class="hover-content text-black">
                            The cable curl primarily targets the biceps brachii muscles, aiding in arm flexion.
                        </p>
                    </li>
                    <li class="hoverable">
                        Brachialis
                        <p class="hover-content text-black">
                            The brachialis muscle, located beneath the biceps, is also engaged during elbow flexion in this exercise.
                        </p>
                    </li>
                </ul>
            </div>
        </x-slot>
        <x-slot name="benefits">
            <div class="flex">
                <ul class="hover-list">
                    <li class="hoverable">
                        Biceps Development
                        <p class="hover-content text-black">
                            The cable curl helps build strong, well-defined biceps through consistent tension.
                        </p>
                    </li>
                    <li class="hoverable">
                        Tension Throughout Movement
                        <p class="hover-content text-black">
                            The cable provides constant resistance, ensuring continuous tension on the biceps throughout the exercise.
                        </p>
                    </li>
                </ul>
            </div>
        </x-slot>
    </x-workout-exercise>
    <x-workout-exercise name="Dumbbell Curl" image="DC.JPEG">
        <x-slot name="info">
            The dumbbell curl is a classic biceps isolation exercise that can be performed using a pair of dumbbells. It's a versatile movement for developing strong and defined biceps.
        </x-slot>
        <x-slot name="howTo">
            Stand with a dumbbell in each hand, arms fully extended and palms facing your torso.
            Keep your upper arms stationary and curl the dumbbells while contracting your biceps.
            Continue the curl until the dumbbells are at shoulder level, then squeeze your biceps.
            Slowly lower the dumbbells back to the starting position.
            Repeat for the desired number of reps.
            Coach’s Tip: Focus on keeping your upper arms still and using controlled motions throughout the exercise.
        </x-slot>
        <x-slot name="setsReps">
            The dumbbell curl can be adjusted for different objectives: <br>
            For Muscle Hypertrophy: 3 to 4 sets of 8 to 12 reps, using moderate weights.
            For Strength: 4 to 5 sets of 6 to 8 reps, with heavier weights.
            For Endurance: 2 to 3 sets of 15 to 20 reps, using lighter weights.
        </x-slot>
        <x-slot name="mistakes">
            <div class="flex">
                <ul class="hover-list">
                    <li class="hoverable">
                        Swinging the Weights
                        <p class="hover-content text-black">
                            Avoid using momentum to lift the weights; this reduces the effectiveness of the exercise.
                        </p>
                    </li>
                    <li class="hoverable">
                        Not Isolating the Biceps
                        <p class="hover-content text-black">
                            Keep your upper arms stationary to ensure you're targeting the biceps effectively.
                        </p>
                    </li>
                    <li class="hoverable">
                        Using Poor Form
                        <p class="hover-content text-black">
                            Maintain proper posture and controlled movements to prevent injury and maximize results.
                        </p>
                    </li>
                </ul>
            </div>
        </x-slot>
        <x-slot name="muscles">
            <div class="flex">
                <ul class="hover-list">
                    <li class="hoverable">
                        Biceps Brachii
                        <p class="hover-content text-black">
                            The primary muscle worked during the dumbbell curl is the biceps brachii, which contributes to arm flexion.
                        </p>
                    </li>
                    <li class="hoverable">
                        Brachialis
                        <p class="hover-content text-black">
                            The brachialis, located underneath the biceps, also plays a role in elbow flexion during the curl.
                        </p>
                    </li>
                </ul>
            </div>
        </x-slot>
        <x-slot name="benefits">
            <div class="flex">
                <ul class="hover-list">
                    <li class="hoverable">
                        Biceps Development
                        <p class="hover-content text-black">
                            The dumbbell curl is a foundational exercise for building strong and well-defined biceps.
                        </p>
                    </li>
                    <li class="hoverable">
                        Versatile Exercise
                        <p class="hover-content text-black">
                            Dumbbell curls can be performed with various angles and grips, allowing for versatile biceps training.
                        </p>
                    </li>
                </ul>
            </div>
        </x-slot>
    </x-workout-exercise>
    <x-workout-exercise name="Chin-Up" image="CU.JPEG">
        <x-slot name="info">
            The chin-up is a compound exercise that primarily targets the biceps, upper back, and core muscles. It's an effective bodyweight movement for building upper body strength.
        </x-slot>
        <x-slot name="howTo">
            Hang from a pull-up bar with your palms facing you and hands shoulder-width apart.
            Engage your core and pull your body upward until your chin is above the bar.
            Lower yourself back down with control, fully extending your arms.
            Repeat for the desired number of reps.
            Coach’s Tip: Focus on using your biceps and upper back muscles to initiate the movement rather than relying on momentum.
        </x-slot>
        <x-slot name="setsReps">
            The chin-up can be customized for different goals: <br>
            For Muscle Building: 3 to 4 sets of 6 to 10 reps.
            For Strength: 4 to 5 sets of 4 to 6 reps.
            For Endurance: 2 to 3 sets of 10 to 15 reps.
        </x-slot>
        <x-slot name="mistakes">
            <div class="flex">
                <ul class="hover-list">
                    <li class="hoverable">
                        Swinging the Body
                        <p class="hover-content text-black">
                            Avoid using momentum to swing your body. This reduces the effectiveness of the exercise and can lead to injury.
                        </p>
                    </li>
                    <li class="hoverable">
                        Not Using Full Range of Motion
                        <p class="hover-content text-black">
                            Ensure you fully extend your arms at the bottom and lift your chin above the bar at the top of the movement.
                        </p>
                    </li>
                    <li class="hoverable">
                        Not Engaging Core Muscles
                        <p class="hover-content text-black">
                            Keep your core engaged throughout the movement to maintain stability and proper form.
                        </p>
                    </li>
                </ul>
            </div>
        </x-slot>
        <x-slot name="muscles">
            <div class="flex">
                <ul class="hover-list">
                    <li class="hoverable">
                        Biceps Brachii
                        <p class="hover-content text-black">
                            The chin-up engages the biceps, especially during the pulling phase of the movement.
                        </p>
                    </li>
                    <li class="hoverable">
                        Latissimus Dorsi
                        <p class="hover-content text-black">
                            The lats play a significant role in the chin-up, contributing to the pulling motion.
                        </p>
                    </li>
                    <li class="hoverable">
                        Upper Back Muscles
                        <p class="hover-content text-black">
                            Various muscles in the upper back, such as the rhomboids and trapezius, are engaged to stabilize the movement.
                        </p>
                    </li>
                </ul>
            </div>
        </x-slot>
        <x-slot name="benefits">
            <div class="flex">
                <ul class="hover-list">
                    <li class="hoverable">
                        Upper Body Strength
                        <p class="hover-content text-black">
                            Chin-ups are effective for building overall upper body strength, including the biceps, back, and core.
                        </p>
                    </li>
                    <li class="hoverable">
                        Functional Pulling Strength
                        <p class="hover-content text-black">
                            The strength gained from chin-ups translates to improved performance in various pulling activities.
                        </p>
                    </li>
                </ul>
            </div>
        </x-slot>
    </x-workout-exercise>
    <x-workout-exercise name="Reverse-Grip Barbell Row" image="RGBR.JPEG">
        <x-slot name="info">
            The reverse-grip barbell row is a compound exercise that primarily targets the upper back and biceps. It's a powerful movement for building strength and thickness in the back muscles.
        </x-slot>
        <x-slot name="howTo">
            Stand with your feet shoulder-width apart, holding a barbell with an underhand grip (palms facing up).
            Bend at your hips, keeping your back straight and knees slightly bent.
            Pull the barbell towards your lower ribcage, squeezing your shoulder blades together.
            Lower the barbell back down with control, fully extending your arms.
            Repeat for the desired number of reps.
            Coach’s Tip: Focus on initiating the movement with your elbows and engaging your back muscles throughout.
        </x-slot>
        <x-slot name="setsReps">
            The reverse-grip barbell row can be adjusted for different goals: <br>
            For Muscle Building: 3 to 4 sets of 8 to 12 reps.
            For Strength: 4 to 5 sets of 6 to 8 reps.
            For Endurance: 2 to 3 sets of 12 to 15 reps.
        </x-slot>
        <x-slot name="mistakes">
            <div class="flex">
                <ul class="hover-list">
                    <li class="hoverable">
                        Using Momentum
                        <p class="hover-content text-black">
                            Avoid using momentum to pull the weight. Focus on controlled movements for maximum benefit.
                        </p>
                    </li>
                    <li class="hoverable">
                        Rounding Your Back
                        <p class="hover-content text-black">
                            Maintain proper posture to prevent strain on your lower back. Keep your back straight throughout.
                        </p>
                    </li>
                    <li class="hoverable">
                        Not Squeezing Shoulder Blades
                        <p class="hover-content text-black">
                            Squeeze your shoulder blades together at the top of the movement to engage your upper back muscles.
                        </p>
                    </li>
                </ul>
            </div>
        </x-slot>
        <x-slot name="muscles">
            <div class="flex">
                <ul class="hover-list">
                    <li class="hoverable">
                        Latissimus Dorsi
                        <p class="hover-content text-black">
                            The reverse-grip row targets the lats, contributing to the pulling motion and back thickness.
                        </p>
                    </li>
                    <li class="hoverable">
                        Biceps Brachii
                        <p class="hover-content text-black">
                            The biceps are engaged as you pull the barbell towards your lower ribcage.
                        </p>
                    </li>
                    <li class="hoverable">
                        Rhomboids and Trapezius
                        <p class="hover-content text-black">
                            These muscles in the upper back help stabilize the movement and promote better posture.
                        </p>
                    </li>
                </ul>
            </div>
        </x-slot>
        <x-slot name="benefits">
            <div class="flex">
                <ul class="hover-list">
                    <li class="hoverable">
                        Upper Back Development
                        <p class="hover-content text-black">
                            The reverse-grip barbell row is effective for building strength and thickness in the upper back.
                        </p>
                    </li>
                    <li class="hoverable">
                        Biceps Engagement
                        <p class="hover-content text-black">
                            The biceps work synergistically with the upper back muscles during this exercise.
                        </p>
                    </li>
                </ul>
            </div>
        </x-slot>
    </x-workout-exercise>
</x-workout-category>