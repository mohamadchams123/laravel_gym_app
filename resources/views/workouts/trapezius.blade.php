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

<x-workout-category name="Trapezius">
<x-workout-exercise name="Farmer's Carry" image="FC.jpeg">
    <x-slot name="info">
        The Farmer's Carry is a functional full-body exercise that primarily targets the grip strength, forearms, and core muscles. It involves walking while holding a heavy weight in each hand, simulating the action of carrying heavy objects over a distance.
    </x-slot>
    <x-slot name="howTo">
        Begin by standing upright with a weight in each hand. You can use dumbbells, kettlebells, or other heavy objects.
        Keep your core engaged and shoulders pulled back.
        Walk forward with a controlled and upright posture. Take small, deliberate steps and avoid swaying.
        Maintain a neutral spine and avoid excessive leaning.
        Walk for a predetermined distance or time, or until your grip strength starts to weaken.
        To finish, gently set the weights down.
        Coach’s Tip: Start with a manageable weight and gradually increase as your grip strength improves.
    </x-slot>
    <x-slot name="setsReps">
        The Farmer's Carry can be used in various ways in your training routine:<br>
        - For grip strength and endurance: 3-4 sets of 30-60 seconds<br>
        - For full-body conditioning: 3-5 sets of 50-100 feet<br>
        Adjust the weight and distance according to your fitness level.
    </x-slot>
    <x-slot name="mistakes">
        <div class="flex">
            <ul class="hover-list">
                <li class="hoverable">
                    Poor Posture and Core Engagement
                    <p class="hover-content text-black">
                        Maintain an upright posture and engage your core muscles to prevent slouching or arching.
                    </p>
                </li>
                <li class="hoverable">
                    Overstriding
                    <p class="hover-content text-black">
                        Take controlled, small steps to avoid overstriding, which can lead to instability.
                    </p>
                </li>
                <li class="hoverable">
                    Neglecting Breathing
                    <p class="hover-content text-black">
                        Breathe regularly and avoid holding your breath to ensure proper oxygenation during the exercise.
                    </p>
                </li>
            </ul>
        </div>
    </x-slot>
    <x-slot name="muscles">
        <div class="flex">
            <ul class="hover-list">
                <li class="hoverable">
                    Grip Strength and Forearms
                    <p class="hover-content text-black">
                        The primary focus of the Farmer's Carry is to challenge and improve grip strength and forearm muscles.
                    </p>
                </li>
                <li class="hoverable">
                    Core Muscles
                    <p class="hover-content text-black">
                        To stabilize the weight, your core muscles engage throughout the exercise.
                    </p>
                </li>
                <li class="hoverable">
                    Upper Back and Shoulders
                    <p class="hover-content text-black">
                        The upper back and shoulder muscles work to maintain an upright posture while carrying the weights.
                    </p>
                </li>
                <li class="hoverable">
                    Leg Muscles
                    <p class="hover-content text-black">
                        While not the primary focus, leg muscles are activated to support walking with added weight.
                    </p>
                </li>
            </ul>
        </div>
    </x-slot>
    <x-slot name="benefits">
        <div class="flex">
            <ul class="hover-list">
                <li class="hoverable">
                    Grip Strength Improvement
                    <p class="hover-content text-black">
                        Regular Farmer's Carries lead to enhanced grip strength, which can benefit other lifting exercises.
                    </p>
                </li>
                <li class="hoverable">
                    Core Stabilization
                    <p class="hover-content text-black">
                        Carrying heavy weights requires strong core engagement, contributing to better posture and stability.
                    </p>
                </li>
                <li class="hoverable">
                    Functional Strength
                    <p class="hover-content text-black">
                        The exercise mimics real-life activities involving carrying objects, improving overall functional strength.
                    </p>
                </li>
            </ul>
        </div>
    </x-slot>
</x-workout-exercise>
<x-workout-exercise name="Dumbbell Military Press" image="DMP.jpeg">
    <x-slot name="info">
        The Dumbbell Military Press, also known as the Seated Dumbbell Shoulder Press, is a fundamental shoulder exercise that targets the front deltoids (anterior deltoids) and triceps. This exercise helps develop upper body strength and shoulder stability.
    </x-slot>
    <x-slot name="howTo">
        Sit on a bench with back support and hold a dumbbell in each hand at shoulder height, palms facing forward.
        Press the dumbbells upward by extending your arms, but avoid fully locking out your elbows.
        Keep your core engaged and maintain a neutral spine throughout the movement.
        At the top of the movement, your arms should be fully extended overhead.
        Lower the dumbbells back to shoulder height in a controlled manner.
        Coach’s Tip: Maintain control over the dumbbells throughout the exercise and focus on a smooth, controlled motion.
    </x-slot>
    <x-slot name="setsReps">
        Recommended sets and reps for the Dumbbell Military Press:<br>
        - For muscle hypertrophy: 3-4 sets of 8-12 reps<br>
        - For shoulder strength: 4-5 sets of 6-8 reps<br>
        Adjust the weight based on your fitness level while prioritizing proper form.
    </x-slot>
    <x-slot name="mistakes">
        <div class="flex">
            <ul class="hover-list">
                <li class="hoverable">
                    Arching Lower Back
                    <p class="hover-content text-black">
                        Avoid excessive arching of the lower back during the movement; keep your core engaged and maintain a neutral spine.
                    </p>
                </li>
                <li class="hoverable">
                    Using Momentum
                    <p class="hover-content text-black">
                        Steer clear of using momentum to lift the dumbbells; focus on controlled and deliberate movements.
                    </p>
                </li>
                <li class="hoverable">
                    Poor Shoulder Positioning
                    <p class="hover-content text-black">
                        Ensure that your shoulders are not shrugged; keep them down and back to engage the proper muscles.
                    </p>
                </li>
            </ul>
        </div>
    </x-slot>
    <x-slot name="muscles">
        <div class="flex">
            <ul class="hover-list">
                <li class="hoverable">
                    Front Deltoids (Anterior Deltoids)
                    <p class="hover-content text-black">
                        The pressing motion targets the front deltoids, aiding in lifting the arms forward and upward.
                    </p>
                </li>
                <li class="hoverable">
                    Triceps Brachii
                    <p class="hover-content text-black">
                        The triceps are engaged as you extend your arms during the upward pressing motion.
                    </p>
                </li>
                <li class="hoverable">
                    Upper Chest (Clavicular Head)
                    <p class="hover-content text-black">
                        The upper chest is activated as a secondary muscle group during the pressing motion.
                    </p>
                </li>
            </ul>
        </div>
    </x-slot>
    <x-slot name="benefits">
        <div class="flex">
            <ul class="hover-list">
                <li class="hoverable">
                    Shoulder Strength
                    <p class="hover-content text-black">
                        The Dumbbell Military Press is an effective exercise for developing shoulder strength and muscle endurance.
                    </p>
                </li>
                <li class="hoverable">
                    Upper Body Development
                    <p class="hover-content text-black">
                        This exercise contributes to overall upper body development by targeting the deltoids and triceps.
                    </p>
                </li>
                <li class="hoverable">
                    Shoulder Stability
                    <p class="hover-content text-black">
                        Performing the exercise in a controlled manner enhances shoulder stability and reduces injury risk.
                    </p>
                </li>
            </ul>
        </div>
    </x-slot>
</x-workout-exercise>
<x-workout-exercise name="Face Pull" image="FP.jpeg">
    <x-slot name="info">
        The Face Pull is a shoulder exercise that targets the rear deltoids, traps, and upper back muscles. It's an effective movement for improving posture and strengthening the muscles that support proper shoulder alignment.
    </x-slot>
    <x-slot name="howTo">
        Attach a rope handle to a cable machine at about chest height.
        Stand facing the machine and grip the rope with an overhand grip, hands positioned wider than shoulder-width.
        Step back to create tension in the cable, and position your feet shoulder-width apart.
        Start with your arms extended and palms facing each other.
        Pull the rope towards your face by externally rotating your shoulders and squeezing your shoulder blades together.
        Focus on leading with your elbows and keeping them elevated.
        As the rope reaches your face, pause briefly and then slowly return to the starting position.
        Coach’s Tip: Avoid using excessive weight; focus on proper form and a controlled motion.
    </x-slot>
    <x-slot name="setsReps">
        Recommended sets and reps for the Face Pull:<br>
        - For muscle endurance: 3-4 sets of 12-15 reps<br>
        - For muscle hypertrophy: 3-4 sets of 8-12 reps<br>
        Adjust the weight based on your fitness level while maintaining good technique.
    </x-slot>
    <x-slot name="mistakes">
        <div class="flex">
            <ul class="hover-list">
                <li class="hoverable">
                    Shrugging Shoulders
                    <p class="hover-content text-black">
                        Avoid lifting your shoulders towards your ears; focus on engaging the targeted muscles without involving the traps excessively.
                    </p>
                </li>
                <li class="hoverable">
                    Insufficient External Rotation
                    <p class="hover-content text-black">
                        Make sure to externally rotate your shoulders as you pull the rope towards your face to effectively engage the rear deltoids.
                    </p>
                </li>
                <li class="hoverable">
                    Poor Posture
                    <p class="hover-content text-black">
                        Maintain a neutral spine and avoid arching your back to promote good posture throughout the exercise.
                    </p>
                </li>
            </ul>
        </div>
    </x-slot>
    <x-slot name="muscles">
        <div class="flex">
            <ul class="hover-list">
                <li class="hoverable">
                    Rear Deltoids (Posterior Deltoids)
                    <p class="hover-content text-black">
                        The primary focus of the Face Pull is on the rear deltoids, helping to balance shoulder development.
                    </p>
                </li>
                <li class="hoverable">
                    Trapezius Muscles (Upper Traps)
                    <p class="hover-content text-black">
                        The upper traps are engaged to stabilize the shoulder blades during the pulling motion.
                    </p>
                </li>
                <li class="hoverable">
                    Rhomboids and Rotator Cuff Muscles
                    <p class="hover-content text-black">
                        These muscles work to retract the scapulae and support shoulder joint stability.
                    </p>
                </li>
            </ul>
        </div>
    </x-slot>
    <x-slot name="benefits">
        <div class="flex">
            <ul class="hover-list">
                <li class="hoverable">
                    Improved Posture
                    <p class="hover-content text-black">
                        Strengthening the rear deltoids and upper back muscles contributes to better posture and shoulder alignment.
                    </p>
                </li>
                <li class="hoverable">
                    Shoulder Health
                    <p class="hover-content text-black">
                        The exercise targets the muscles that support the shoulder joint, promoting overall shoulder stability and reducing injury risk.
                    </p>
                </li>
                <li class="hoverable">
                    Balanced Shoulder Development
                    <p class="hover-content text-black">
                        The Face Pull helps counterbalance the effects of front-focused exercises, promoting balanced shoulder muscle development.
                    </p>
                </li>
            </ul>
        </div>
    </x-slot>
</x-workout-exercise>
<x-workout-exercise name="Dumbbell Snatch" image="DS.jpeg">
    <x-slot name="info">
        The Dumbbell Snatch is a dynamic and explosive full-body exercise that combines elements of strength, power, and coordination. It involves lifting a dumbbell from the ground to overhead in one fluid motion, engaging muscles throughout the body.
    </x-slot>
    <x-slot name="howTo">
        Begin in a squat position with a dumbbell on the ground between your feet.
        Grasp the dumbbell with one hand in an overhand grip.
        Initiate the movement by driving through your hips and explosively extending your hips and knees, simultaneously pulling the dumbbell upward.
        As the dumbbell reaches chest height, quickly switch your grip by rotating your hand around the dumbbell and pressing it overhead.
        Lock out your arm overhead, keeping your core engaged and your body stable.
        Lower the dumbbell back to the ground with control, using a hip hinge motion.
        Coach’s Tip: Practice the movement with light weights first to ensure proper technique and minimize the risk of injury.
    </x-slot>
    <x-slot name="setsReps">
        Recommended sets and reps for the Dumbbell Snatch:<br>
        - For power and explosiveness: 3-4 sets of 5-8 reps per arm<br>
        - For strength and muscle development: 3-4 sets of 8-10 reps per arm<br>
        Choose a weight that challenges you while maintaining good form throughout the movement.
    </x-slot>
    <x-slot name="mistakes">
        <div class="flex">
            <ul class="hover-list">
                <li class="hoverable">
                    Using Arm Strength Only
                    <p class="hover-content text-black">
                        Emphasize hip and leg power; avoid relying solely on your arm to lift the dumbbell.
                    </p>
                </li>
                <li class="hoverable">
                    Lack of Coordination
                    <p class="hover-content text-black">
                        The movement requires coordination between your lower and upper body; practice the motion to improve synchronization.
                    </p>
                </li>
                <li class="hoverable">
                    Not Keeping the Dumbbell Close
                    <p class="hover-content text-black">
                        Ensure the dumbbell remains close to your body throughout the lift to prevent straining your lower back.
                    </p>
                </li>
            </ul>
        </div>
    </x-slot>
    <x-slot name="muscles">
        <div class="flex">
            <ul class="hover-list">
                <li class="hoverable">
                    Hamstrings and Glutes
                    <p class="hover-content text-black">
                        The hip extension involved engages the hamstrings and glutes to generate power.
                    </p>
                </li>
                <li class="hoverable">
                    Trapezius and Upper Back
                    <p class="hover-content text-black">
                        The upper back muscles stabilize the weight during the movement.
                    </p>
                </li>
                <li class="hoverable">
                    Shoulders
                    <p class="hover-content text-black">
                        The shoulders play a crucial role in driving the weight overhead.
                    </p>
                </li>
                <li class="hoverable">
                    Core Muscles
                    <p class="hover-content text-black">
                        Core engagement stabilizes the spine throughout the lift.
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
                        The Dumbbell Snatch develops explosive power in the hips and entire body.
                    </p>
                </li>
                <li class="hoverable">
                    Full-Body Engagement
                    <p class="hover-content text-black">
                        This exercise engages multiple muscle groups, promoting overall strength and coordination.
                    </p>
                </li>
                <li class="hoverable">
                    Cardiovascular Conditioning
                    <p class="hover-content text-black">
                        The dynamic nature of the movement also provides cardiovascular benefits.
                    </p>
                </li>
            </ul>
        </div>
    </x-slot>
</x-workout-exercise>

</x-workout-category>