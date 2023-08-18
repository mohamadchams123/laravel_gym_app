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

<x-workout-category name="Thighs">
<x-workout-exercise name="Lunges with Dumbbells" image="LWD.JPEG">
    <x-slot name="info">
        Lunges with dumbbells are a versatile lower body exercise that targets the quads, hamstrings, and glutes. Adding dumbbells increases resistance for strength and muscle building.
    </x-slot>
    <x-slot name="howTo">
        Stand with your feet hip-width apart, holding dumbbells at your sides.
        Take a step forward or backward, lowering your hips into a lunge position.
        Lower your back knee toward the ground without letting it touch.
        Push through your front heel to return to the starting position.
        Perform the desired number of reps on each leg.
        Coach’s Tip: Maintain proper form, and keep your knees aligned with your ankles during lunges.
    </x-slot>
    <x-slot name="setsReps">
        Incorporate lunges with dumbbells into your leg workout: <br>
        For Strength: 3 to 4 sets of 8 to 10 reps per leg.
        For Muscle Toning: 2 to 3 sets of 12 to 15 reps per leg.
    </x-slot>
    <x-slot name="mistakes">
        <div class="flex">
            <ul class="hover-list">
                <li class="hoverable">
                    Leaning Forward
                    <p class="hover-content text-black">
                        Maintain an upright posture and avoid leaning too far forward during lunges.
                    </p>
                </li>
                <li class="hoverable">
                    Shallow Lunge
                    <p class="hover-content text-black">
                        Aim for a deep lunge to engage your leg muscles effectively.
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
                        Lunges with dumbbells target multiple leg muscles for overall lower body strength.
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
                        This exercise enhances leg strength and muscle development.
                    </p>
                </li>
                <li class="hoverable">
                    Versatility
                    <p class="hover-content text-black">
                        Lunges with dumbbells can be modified for various fitness goals and levels.
                    </p>
                </li>
            </ul>
        </div>
    </x-slot>
</x-workout-exercise>
<x-workout-exercise name="Single-Leg Circle" image="SLC.JPEG">
    <x-slot name="info">
        The single-leg circle is a Pilates exercise that engages the core and hip muscles. It helps in improving hip mobility and stability.
    </x-slot>
    <x-slot name="howTo">
        Lie on your back with one leg extended toward the ceiling and the other leg extended on the ground.
        Trace a circle with your extended leg, moving it clockwise or counterclockwise.
        Keep your core engaged and maintain stability in your pelvis.
        Perform the desired number of circles in one direction before switching.
        Coach’s Tip: Focus on controlled movement and avoid excessive swinging of the leg.
    </x-slot>
    <x-slot name="setsReps">
        Incorporate single-leg circles into your core workout: <br>
        For Mobility: 3 to 4 sets of 6 to 8 circles in each direction.
        For Core Activation: 2 to 3 sets of 10 to 12 circles in each direction.
    </x-slot>
    <x-slot name="mistakes">
        <div class="flex">
            <ul class="hover-list">
                <li class="hoverable">
                    Hip Tilting
                    <p class="hover-content text-black">
                        Keep your pelvis stable and avoid excessive tilting during the movement.
                    </p>
                </li>
                <li class="hoverable">
                    Swinging Leg
                    <p class="hover-content text-black">
                        Perform controlled circles without swinging your leg.
                    </p>
                </li>
            </ul>
        </div>
    </x-slot>
    <x-slot name="muscles">
        <div class="flex">
            <ul class="hover-list">
                <li class="hoverable">
                    Core, Hip Muscles
                    <p class="hover-content text-black">
                        The single-leg circle engages your core and hip muscles, enhancing stability and mobility.
                    </p>
                </li>
            </ul>
        </div>
    </x-slot>
    <x-slot name="benefits">
        <div class="flex">
            <ul class="hover-list">
                <li class="hoverable">
                    Hip Mobility
                    <p class="hover-content text-black">
                        Single-leg circles contribute to improved hip flexibility and mobility.
                    </p>
                </li>
                <li class="hoverable">
                    Core Engagement
                    <p class="hover-content text-black">
                        This exercise activates your core while performing controlled leg movements.
                    </p>
                </li>
            </ul>
        </div>
    </x-slot>
</x-workout-exercise>
<x-workout-exercise name="Side Lunge Sweep" image="SLS.JPEG">
    <x-slot name="info">
        The side lunge sweep is a lateral movement that targets the inner thighs, quads, and glutes. It enhances leg strength and mobility.
    </x-slot>
    <x-slot name="howTo">
        Stand with your feet together and your hands on your hips or in front of you for balance.
        Take a wide step to the side, bending your knee and pushing your hips back into a side lunge.
        Sweep your opposite leg across the floor and behind your lunging leg.
        Push through your lunging heel to return to the starting position.
        Perform the desired number of reps on each leg.
        Coach’s Tip: Keep your chest up and focus on maintaining proper form throughout the movement.
    </x-slot>
    <x-slot name="setsReps">
        Incorporate side lunge sweeps into your leg workout: <br>
        For Muscle Toning: 3 to 4 sets of 12 to 15 reps per leg.
        For Endurance: 2 to 3 sets of 15 to 20 reps per leg.
    </x-slot>
    <x-slot name="mistakes">
        <div class="flex">
            <ul class="hover-list">
                <li class="hoverable">
                    Collapsed Chest
                    <p class="hover-content text-black">
                        Maintain an upright posture and avoid hunching your shoulders.
                    </p>
                </li>
                <li class="hoverable">
                    Knees Over Toes
                    <p class="hover-content text-black">
                        Keep your knees aligned with your ankles during the side lunge.
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
                        Side lunge sweeps target leg muscles, providing lateral strength and mobility.
                    </p>
                </li>
            </ul>
        </div>
    </x-slot>
    <x-slot name="benefits">
        <div class="flex">
            <ul class="hover-list">
                <li class="hoverable">
                    Lateral Strength
                    <p class="hover-content text-black">
                        This exercise enhances lateral leg strength and stability.
                    </p>
                </li>
                <li class="hoverable">
                    Hip Mobility
                    <p class="hover-content text-black">
                        Side lunge sweeps contribute to improved hip flexibility and range of motion.
                    </p>
                </li>
            </ul>
        </div>
    </x-slot>
</x-workout-exercise>
<x-workout-exercise name="Side Shuffle Switch" image="SSS.JPEG">
    <x-slot name="info">
        The side shuffle switch is an agility exercise that targets the lower body and improves lateral movement. It's commonly used for sports training.
    </x-slot>
    <x-slot name="howTo">
        Start in a low squat position, with your knees bent and your chest up.
        Shuffle quickly to the side, crossing one foot in front of the other.
        Shuffle back to the other side by switching the position of your feet.
        Continue shuffling from side to side as quickly as possible.
        Perform the desired number of shuffles.
        Coach’s Tip: Keep your core engaged and maintain a low squat position throughout the movement.
    </x-slot>
    <x-slot name="setsReps">
        Incorporate side shuffle switches into your agility training: <br>
        For Agility: 3 to 4 sets of 20 to 30 seconds of continuous shuffling.
        For Conditioning: 2 to 3 sets of 45 to 60 seconds of continuous shuffling.
    </x-slot>
    <x-slot name="mistakes">
        <div class="flex">
            <ul class="hover-list">
                <li class="hoverable">
                    Upright Torso
                    <p class="hover-content text-black">
                        Maintain a low squat position to engage your leg muscles and improve agility.
                    </p>
                </li>
                <li class="hoverable">
                    Lack of Speed
                    <p class="hover-content text-black">
                        Shuffle as quickly as you can while maintaining control and proper form.
                    </p>
                </li>
            </ul>
        </div>
    </x-slot>
    <x-slot name="muscles">
        <div class="flex">
            <ul class="hover-list">
                <li class="hoverable">
                    Lower Body Muscles
                    <p class="hover-content text-black">
                        Side shuffle switches engage leg muscles and enhance lateral movement.
                    </p>
                </li>
            </ul>
        </div>
    </x-slot>
    <x-slot name="benefits">
        <div class="flex">
            <ul class="hover-list">
                <li class="hoverable">
                    Agility
                    <p class="hover-content text-black">
                        This exercise improves your ability to move quickly and change direction.
                    </p>
                </li>
                <li class="hoverable">
                    Sports Performance
                    <p class="hover-content text-black">
                        Side shuffle switches are valuable for sports that require quick lateral movements.
                    </p>
                </li>
            </ul>
        </div>
    </x-slot>
</x-workout-exercise>
</x-workout-category>