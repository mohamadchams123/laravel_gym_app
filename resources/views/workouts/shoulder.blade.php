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

<x-workout-category name="Shoulders">
    <x-workout-exercise name="Barbell Overhead Press" image="BOP.jpeg">
        <x-slot name="info">
            The barbell overhead press strengthens all three heads of the deltoid — the front (anterior), middle (lateral), and rear (posterior). If you want bigger, stronger, and boulder shoulders, overhead pressing variations are necessary for size and strength because shoulder raise variations will only take you so far.
            Although it might seem simple — take a barbell and pop it over your head — the barbell overhead press requires a lot of practice and technique to get right. Warm up your wrists beforehand for best results. Once you master it, the barbell overhead press benefits you by providing unparalleled overall shoulder strength and carryover to any overhead exercise you perform.
        </x-slot>
        <x-slot name="howTo">
            Grip a bar with an overhand grip, set up in a power rack or squat rack. With the bar right in front of you, place your hands just outside your shoulders. 
            Stack your elbows and forearms vertically. If your elbows are pointing out or in, your grip may be either too narrow or too wide. Adjust accordingly.
            Place the bar on the heel of your palm because this is where you’ll generate the most force from. 
            Press overhead until lockout then slowly lower down to the starting position. Repeat.
            Coach’s Tip: Don’t press around your head. Tilt your head back intentionally to push the bar in a straight line.
        </x-slot>
        <x-slot name="setsReps">
            The press is versatile. You can use it to build upper body strength, beef up your shoulder muscles, or help you prepare for any real-world task life throws at you. As such, you need to ensure that your programming matches your goal. Here are a few different ways to implement overhead pressing. <br>
            To Gain Muscle Mass: 3 to 4 sets of 6 to 8 reps, at a moderate rate of perceived exertion. <br>
            For Max Strength: 5 to 8 sets of 3 to 5 reps, with at least two minutes’ rest in-between.  <br>
            As a Beginner: 3 sets of 5 reps, with a light weight and strong focus on your technique.
        </x-slot>
        <x-slot name="mistakes">
            <div class="flex">  
                <ul class="hover-list">
                    <li class="hoverable">
                        <p>Pressing Around the Head</p>
                        <p class="hover-content text-black">
                            The first overhead press mistake lifters can run into is pressing around the head, which is when one shifts the bar path to accommodate one’s head position. Typically, shifting the bar path means the joints won’t be stacked, and if they’re not stacked on each other, you won’t be as strong and stable.
                        </p>
                    </li>
                    <li class="hoverable">
                        Gripping the Bar Too Wide
                        <p class="hover-content text-black">
                            Another common mistake is gripping the barbell too wide. A grip that is too wide can reduce your power output from the set as you’re essentially taking the prime movers and putting them into disadvantageous positions. For a good rule of thumb, your forearm should be perpendicular to the barbell when you’re in the middle of your press.
                        </p>
                    </li>
                    <li class="hoverable">
                        Assuming a Narrow Stance
                        <p class="hover-content text-black">
                            A narrow stance can, often, cause lifters to lose stability and balance, so bringing one’s stance wider is often a better bet for success. Again, play around with this and pay attention to how you feel while pressing. A little narrow is okay, but you should feel grounded and strong.
                        </p>
                    </li>
                </ul>
            </div>
        </x-slot>
        <x-slot name="muscles">
            <div class="flex">  
                <ul class="hover-list">
                    <li class="hoverable">
                        Shoulders (Deltoids)
                        <p class="hover-content text-black">
                        The shoulders are the primary muscle group used when performing overhead pressing, specifically the anterior head of the deltoid.
                        </p>
                    </li>
                    <li class="hoverable">
                        Scapular Stabilizers
                        <p class="hover-content text-black">
                        Overhead pressing is dependent on scapular stability muscles to help create tension to support the shoulders, triceps, and upper pecs. .
                        </p>
                    </li>
                    <li class="hoverable">
                        Upper Pecs
                        <p class="hover-content text-black">
                        The upper pecs assist the shoulders and triceps in the pressing of the weight overhead, specifically during the initial phase of the lift. The greater degree of back extension (leaning backward) in the setup, increases upper pec usage (similar to that of an incline barbell press)
                        </p>
                    </li>
                    <li class="hoverable">
                        Triceps
                        <p class="hover-content text-black">
                        The triceps are responsible for elbow extension during the pressing movements. The triceps become more involved at later stages of the overhead press and aid in elbow lockout of the overhead press. 
                        </p>
                    </li>
                </ul>
            </div>
        </x-slot>
        <x-slot name="benefits">
            <div class="flex">  
                <ul class="hover-list">
                    <li class="hoverable">
                        Most Bang for Your Buck
                        <p class="hover-content text-black">
                        f you’re tight on time and need to cut your workout short, the overhead press should be at the top of your list. Since this movement targets so many muscles, it’s a great option for lifters that want the most bang for their buck at the gym. As opposed to isolation pressing exercises which can be limited in nature, the overhead press has a much higher ceiling for total growth and progression.In short: Why target just your shoulders or triceps when you could hit your shoulders and triceps (and chest and upper back) with one movement? 
                        </p>
                    </li>
                    <li class="hoverable">
                        Upper-Body Strength
                        <p class="hover-content text-black">
                        In general, the overhead press is one of the best movements for obtaining upper body strength as a whole. Compared to other pressing movements, the overhead press will target the most muscles, translating to total body pressing strength. Outside of hitting the prime movers (the deltoids), the overhead press will also hit a plethora of stabilizers and synergist muscles
                        </p>
                    </li>
                </ul>
            </div>
        </x-slot>
    </x-workout-exercise>
    <x-workout-exercise name="Rear Delt Row" image="RDR.PNG">
        <x-slot name="info">
            The Rear Delt Row is a strength training exercise that primarily targets the rear deltoid muscles, which are located at the back of your shoulders. This exercise helps to develop the muscles responsible for shoulder extension and horizontal abduction, and it can contribute to a balanced and well-rounded shoulder appearance.
        </x-slot>
        <x-slot name="howTo">
            Stand up straight with a dumbbell in each hand, palms facing your body. Keep your feet shoulder-width apart.
            Hinge at your hips while keeping your back flat and a slight bend in your knees. This will bring your torso close to parallel with the ground. Your arms should hang straight down from your shoulders, and the dumbbells should be in line with your shoulders.Engage your core muscles to maintain a stable position.With a slight bend in your elbows, lift the dumbbells upward and outward, leading the movement with your elbows. Your hands will move slightly outward, but the focus should be on your elbows moving backward.Continue lifting the dumbbells until your upper arms are approximately parallel to the ground and your shoulder blades are squeezed together. This is the top of the movement, where your rear deltoids are fully contracted.Slowly lower the dumbbells back to the starting position, keeping control and tension in your rear deltoids and other muscles throughout the descent.Repeat the movement for the desired number of repetitions.
        </x-slot>
        <x-slot name="setsReps">
            The number of sets and reps you should perform for the Rear Delt Row exercise can vary based on your fitness goals and  experience level. Here are some general guidelines to consider:<br>
            Muscle Endurance and Toning: <br>
            Reps: 12-15 reps per set <br>
            Sets: 2-3 sets <br>
            Muscle Hypertrophy (Muscle Growth): <br>
            Reps: 8-12 reps per set <br>
            Sets: 3-4 sets <br>
            Strength and Power: <br>
            Reps: 4-8 reps per set <br>
            Sets: 3-5 sets <br>
        </x-slot>
        <x-slot name="mistakes">
        <div class="flex">  
                <ul class="hover-list">
                    <li class="hoverable">
                        <p>Using Excessive Momentum</p>
                        <p class="hover-content text-black">
                            Swinging or using momentum to lift the weights can reduce the effectiveness of the exercise by taking the focus off the rear deltoids. Focus on controlled and deliberate movements.
                        </p>
                    </li>
                    <li class="hoverable">
                        <p>Neglecting Proper Posture</p>
                        <p class="hover-content text-black">
                            Allowing your back to round or slouching during the movement can lead to poor form and potential injury. Maintain a flat back and engaged core throughout the exercise.
                        </p>
                    </li>
                    <li class="hoverable">
                        <p>Using Excessive Momentum</p>
                        <p class="hover-content text-black">
                            Swinging or using momentum to lift the weights can reduce the effectiveness of the exercise by taking the focus off the rear deltoids. Focus on controlled and deliberate movements.
                        </p>
                    </li>
                    <li class="hoverable">
                        <p>Shrugging Shoulders</p>
                        <p class="hover-content text-black">
                            Raising your shoulders toward your ears instead of keeping them down and away can engage the wrong muscles and reduce the engagement of the rear deltoids.
                        </p>
                    </li>
                    <li class="hoverable">
                        <p>Not Squeezing at the Top</p>
                        <p class="hover-content text-black">
                            Failing to squeeze your shoulder blades together at the top of the movement minimizes the activation of the rear deltoids. Focus on fully contracting the targeted muscles at the peak of the lift.
                        </p>
                    </li>
                    <li class="hoverable">
                        <p>Overarching the Lower Back</p>
                        <p class="hover-content text-black">
                            Hyperextending your lower back can strain your spine and lead to discomfort. Keep your lower back in a neutral position to maintain proper alignment.
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
                        These muscles are the primary target of the exercise. They are responsible for shoulder extension (pulling your arm back) and horizontal abduction (moving your arm away from the midline of your body).
                        </p>
                    </li>
                    <li class="hoverable">
                        Rhomboids
                        <p class="hover-content text-black">
                        These muscles are located between your shoulder blades and play a crucial role in retracting your scapulae (shoulder blades), helping to stabilize your shoulders and maintain proper posture.
                        </p>
                    </li>
                    <li class="hoverable">
                        Trapezius (Middle and Lower Fibers)
                        <p class="hover-content text-black">
                        The trapezius muscles are responsible for scapular retraction and depression. They work alongside the rhomboids to stabilize your shoulder blades during the rowing movement.
                        </p>
                    </li>
                    <li class="hoverable">
                        Biceps (Secondary)
                        <p class="hover-content text-black">
                        The biceps assist in elbow flexion during the movement, although they are not the primary focus.
                        </p>
                    </li>
                </ul>
            </div>
        </x-slot>
        <x-slot name="benefits">
        <div class="flex">  
                <ul class="hover-list">
                    <li class="hoverable">
                        Rear Deltoid Development
                        <p class="hover-content text-black">
                        The primary benefit of the Rear Delt Row is the targeted development of the rear deltoid muscles (posterior deltoids). Strengthening these muscles leads to improved aesthetics by creating a well-rounded and balanced shoulder appearance. Developed rear deltoids also contribute to better shoulder function, particularly in movements involving shoulder extension and horizontal abduction.
                    </li>
                    <li class="hoverable">
                        Improved Posture
                        <p class="hover-content text-black">
                        Engaging the muscles of the upper back, including the rear deltoids, helps improve posture. Strengthening these muscles can counteract the negative effects of slouching and rounded shoulders, leading to a more upright and confident posture. Better posture not only enhances your appearance but also reduces the risk of discomfort and potential musculoskeletal issues related to poor alignment.
                        </p>
                    </li>
                </ul>
            </div>
        </x-slot>
    </x-workout-exercise>
    <x-workout-exercise name="Seated Barbell Press" image="SBP.jpeg">
    <x-slot name="info">
        The seated barbell press, also known as the seated military press, is a compound shoulder exercise that targets the front deltoids while also engaging the triceps and upper chest. This exercise is effective for developing upper body strength and shoulder muscle definition.
    </x-slot>
    <x-slot name="howTo">
        Sit on a bench with back support and place a barbell on your upper chest, hands slightly wider than shoulder-width apart, palms facing forward.
        Lift the barbell off the rack and hold it above your upper chest with your arms fully extended.
        Lower the barbell to your upper chest, keeping your elbows pointed slightly forward.
        Press the barbell overhead by extending your arms fully, then lower it back down to your upper chest.
        Coach’s Tip: Maintain a stable core and avoid using momentum to lift the weight. Focus on controlled movements throughout.
    </x-slot>
    <x-slot name="setsReps">
        The recommended sets and reps for the Seated Barbell Press depend on your training goal:<br>
        - For muscle hypertrophy: 3-4 sets of 8-12 reps<br>
        - For shoulder strength: 4-5 sets of 6-8 reps<br>
        Adjust the weight according to your fitness level while maintaining proper form.
    </x-slot>
    <x-slot name="mistakes">
        <div class="flex">
            <ul class="hover-list">
                <li class="hoverable">
                    <p>Using Excessive Momentum</p>
                    <p class="hover-content text-black">
                        Avoid using momentum to lift the barbell. Focus on controlled and steady movements.
                    </p>
                </li>
                <li class="hoverable">
                    Improper Hand Placement
                    <p class="hover-content text-black">
                        Placing your hands too wide or too narrow can affect your lifting mechanics. Opt for a grip slightly wider than shoulder-width.
                    </p>
                </li>
                <li class="hoverable">
                    Arching the Lower Back
                    <p class="hover-content text-black">
                        Maintain a neutral spine throughout the movement to prevent lower back strain.
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
                        The primary target of the exercise, responsible for lifting the arms forward and upward.
                    </p>
                </li>
                <li class="hoverable">
                    Triceps
                    <p class="hover-content text-black">
                        The triceps assist in extending the arms overhead during the pressing movement.
                    </p>
                </li>
                <li class="hoverable">
                    Upper Chest (Sternal Portion)
                    <p class="hover-content text-black">
                        The upper portion of the chest is engaged during the press, especially when the arms are fully extended.
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
                        The seated barbell press is an effective way to develop upper body strength, especially in the shoulders and triceps.
                    </p>
                </li>
                <li class="hoverable">
                    Shoulder Development
                    <p class="hover-content text-black">
                        This exercise targets the front deltoids, contributing to balanced shoulder development and a strong, well-rounded physique.
                    </p>
                </li>
            </ul>
        </div>
    </x-slot>
    </x-workout-exercise>
    <x-workout-exercise name="Seated Dumbbell Press" image="SDP.JPEG">
    <x-slot name="info">
        The Seated Dumbbell Press is a shoulder exercise that targets the deltoid muscles, primarily the front deltoids (anterior deltoids). This exercise helps to develop shoulder strength and size, and it's a fundamental movement for overall upper body development.
    </x-slot>
    <x-slot name="howTo">
        Sit on a bench with a backrest, holding a dumbbell in each hand at shoulder height. Keep your feet flat on the ground and your back against the bench.
        Press the dumbbells upward by extending your arms fully. Your palms should be facing forward, and the dumbbells should come close to each other without touching.
        Slowly lower the dumbbells back to the starting position at shoulder height, maintaining control throughout the movement.
        Repeat the movement for the desired number of repetitions.
    </x-slot>
    <x-slot name="setsReps">
        The recommended sets and reps for the Seated Dumbbell Press depend on your fitness goals:<br>
        - For muscle endurance: 3-4 sets of 12-15 reps<br>
        - For muscle growth (hypertrophy): 3-4 sets of 8-12 reps<br>
        - For strength and power: 3-5 sets of 4-8 reps<br>
        Adjust the weight accordingly to challenge yourself while maintaining proper form.
    </x-slot>
    <x-slot name="mistakes">
        <div class="flex">
            <ul class="hover-list">
                <li class="hoverable">
                    <p>Arching the Lower Back</p>
                    <p class="hover-content text-black">
                        Avoid excessive arching of the lower back during the press. Maintain a neutral spine to prevent strain on your lower back.
                    </p>
                </li>
                <li class="hoverable">
                    <p>Using Momentum</p>
                    <p class="hover-content text-black">
                        Jerking or using momentum to lift the dumbbells can reduce the effectiveness of the exercise and increase the risk of injury. Use controlled movements.
                    </p>
                </li>
                <li class="hoverable">
                    <p>Leaning Backward</p>
                    <p class="hover-content text-black">
                        Leaning backward excessively during the press can shift the focus away from the shoulders. Keep your torso upright throughout the movement.
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
                        The primary target of the exercise, responsible for lifting the arms forward and upward.
                    </p>
                </li>
                <li class="hoverable">
                    Triceps (Secondary)
                    <p class="hover-content text-black">
                        The triceps assist in extending the arms during the upward phase of the press.
                    </p>
                </li>
                <li class="hoverable">
                    Upper Chest (Sternal Portion)
                    <p class="hover-content text-black">
                        The upper portion of the chest is engaged during the press, especially when the arms are fully extended.
                    </p>
                </li>
            </ul>
        </div>
    </x-slot>
    <x-slot name="benefits">
        <div class="flex">
            <ul class="hover-list">
                <li class="hoverable">
                    Front Deltoid Development
                    <p class="hover-content text-black">
                        The Seated Dumbbell Press targets the front deltoids, contributing to balanced shoulder development and a well-rounded appearance.
                    </p>
                </li>
                <li class="hoverable">
                    Upper Body Strength
                    <p class="hover-content text-black">
                        This exercise is an effective way to build upper body strength, especially in the shoulders and triceps.
                    </p>
                </li>
            </ul>
        </div>
    </x-slot>
    </x-workout-exercise>

<x-workout-exercise name="Upright Row" image="UR.jpeg">
    <x-slot name="info">
        The upright row is a shoulder exercise that primarily targets the lateral deltoids (middle deltoids) and the trapezius muscles. This exercise helps improve shoulder width and upper body aesthetics.
    </x-slot>
    <x-slot name="howTo">
        Stand with your feet shoulder-width apart, holding a barbell with an overhand grip that is slightly narrower than shoulder-width.
        Allow the barbell to hang in front of your thighs, arms fully extended.
        Lift the barbell toward your chin by leading with your elbows, keeping the barbell close to your body.
        Pause at the top of the movement, then slowly lower the barbell back to the starting position.
        Coach’s Tip: Avoid using excessive momentum or raising the bar too high, as this can strain the shoulder joint.
    </x-slot>
    <x-slot name="setsReps">
        The recommended sets and reps for the Upright Row depend on your training goal:<br>
        - For muscle hypertrophy: 3-4 sets of 8-12 reps<br>
        - For shoulder strength: 4-5 sets of 6-8 reps<br>
        Adjust the weight according to your fitness level and maintain proper form throughout.
    </x-slot>
    <x-slot name="mistakes">
        <div class="flex">
            <ul class="hover-list">
                <li class="hoverable">
                    <p>Using Excessive Momentum</p>
                    <p class="hover-content text-black">
                        Avoid using momentum to lift the barbell. Use controlled movements to engage the target muscles effectively.
                    </p>
                </li>
                <li class="hoverable">
                    Improper Hand Placement
                    <p class="hover-content text-black">
                        Using a grip that is too narrow or too wide can lead to discomfort or strain. Use a grip slightly narrower than shoulder-width.
                    </p>
                </li>
                <li class="hoverable">
                    Raising Elbows Too High
                    <p class="hover-content text-black">
                        Raising your elbows above shoulder level can stress the shoulder joint. Keep your elbows in line with your shoulders.
                    </p>
                </li>
            </ul>
        </div>
    </x-slot>
    <x-slot name="muscles">
        <div class="flex">
            <ul class="hover-list">
                <li class="hoverable">
                    Lateral Deltoids (Middle Deltoids)
                    <p class="hover-content text-black">
                        The primary target of the exercise, responsible for lifting the arms laterally and creating shoulder width.
                    </p>
                </li>
                <li class="hoverable">
                    Trapezius (Upper and Middle Fibers)
                    <p class="hover-content text-black">
                        The trapezius muscles assist in scapular elevation and help stabilize the shoulders during the movement.
                    </p>
                </li>
                <li class="hoverable">
                    Rhomboids
                    <p class="hover-content text-black">
                        The rhomboids also assist in scapular retraction and play a role in stabilizing the shoulder blades.
                    </p>
                </li>
            </ul>
        </div>
    </x-slot>
    <x-slot name="benefits">
        <div class="flex">
            <ul class="hover-list">
                <li class="hoverable">
                    Shoulder Width Enhancement
                    <p class="hover-content text-black">
                        The upright row contributes to creating the appearance of broader shoulders, enhancing overall upper body aesthetics.
                    </p>
                </li>
                <li class="hoverable">
                    Upper Back Engagement
                    <p class="hover-content text-black">
                        The exercise engages the trapezius and rhomboid muscles, promoting upper back strength and stability.
                    </p>
                </li>
            </ul>
        </div>
    </x-slot>
</x-workout-exercise>
<x-workout-exercise name="Arnold Press" image="AP.jpeg">
    <x-slot name="info">
        The Arnold Press, also known as the Seated Arnold Press, is a shoulder exercise that targets multiple deltoid heads — front (anterior) and lateral (middle) deltoids. Named after Arnold Schwarzenegger, this exercise provides a unique range of motion that enhances shoulder development and strength.
    </x-slot>
    <x-slot name="howTo">
        Sit on a bench with back support and hold a dumbbell in each hand at shoulder height, palms facing your body.
        Begin the movement by pressing the dumbbells upward while simultaneously rotating your palms to face forward.
        At the top of the movement, your palms should be facing forward, and your arms should be fully extended overhead.
        Reverse the motion by rotating your palms back toward your body and lowering the dumbbells to shoulder height.
        Coach’s Tip: Focus on controlled movements and maintain stability in your core throughout the exercise.
    </x-slot>
    <x-slot name="setsReps">
        The recommended sets and reps for the Arnold Press depend on your training goal:<br>
        - For muscle hypertrophy: 3-4 sets of 8-12 reps<br>
        - For shoulder strength: 4-5 sets of 6-8 reps<br>
        Adjust the weight according to your fitness level while maintaining proper form.
    </x-slot>
    <x-slot name="mistakes">
        <div class="flex">
            <ul class="hover-list">
                <li class="hoverable">
                    <p>Using Excessive Momentum</p>
                    <p class="hover-content text-black">
                        Avoid using momentum to lift the dumbbells. Control the movement throughout to engage the target muscles effectively.
                    </p>
                </li>
                <li class="hoverable">
                    Poor Core Stability
                    <p class="hover-content text-black">
                        Keep your core engaged to stabilize your body during the movement and prevent swaying or arching.
                    </p>
                </li>
                <li class="hoverable">
                    Insufficient Range of Motion
                    <p class="hover-content text-black">
                        Ensure a full range of motion by rotating your palms both at the bottom and top of the movement.
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
                        The pressing motion engages the front deltoids, lifting the arms forward and upward.
                    </p>
                </li>
                <li class="hoverable">
                    Lateral Deltoids (Middle Deltoids)
                    <p class="hover-content text-black">
                        The lateral deltoids assist in lifting the arms laterally and contribute to shoulder width.
                    </p>
                </li>
                <li class="hoverable">
                    Rotator Cuff Muscles
                    <p class="hover-content text-black">
                        The rotator cuff muscles stabilize the shoulder joint throughout the exercise.
                    </p>
                </li>
            </ul>
        </div>
    </x-slot>
    <x-slot name="benefits">
        <div class="flex">
            <ul class="hover-list">
                <li class="hoverable">
                    Full Shoulder Development
                    <p class="hover-content text-black">
                        The Arnold Press engages both the front and lateral deltoids, promoting balanced shoulder development.
                    </p>
                </li>
                <li class="hoverable">
                    Enhanced Range of Motion
                    <p class="hover-content text-black">
                        The rotational motion adds variety to traditional shoulder pressing exercises, enhancing shoulder mobility and strength.
                    </p>
                </li>
            </ul>
        </div>
    </x-slot>
</x-workout-exercise>
</x-workout-category>