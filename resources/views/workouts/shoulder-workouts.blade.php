<x-app-layout>
    <style>
           .bullet-list {
    list-style: disc outside none;
    padding-left: 20px; /* Adjust the spacing as needed */
    margin-top: 0; /* Reset top margin to avoid extra space */
}
h3{
    margin-left: 100px;
}
    </style>
    <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('Shoulders Workouts') }}
            </h2>
    </x-slot>
    <div class="text-white">
        <div>
            <div style="text-align: center;">
                 <h2>Barbell Overhead Press</h2>
            </div>
            <div class="mt-5">
                <h3>Info:</h3>
                The barbell overhead press strengthens all three heads of the deltoid — the front (anterior), middle (lateral), and rear (posterior). If you want bigger, stronger, and boulder shoulders, overhead pressing variations are necessary for size and strength because shoulder raise variations will only take you so far.
                Although it might seem simple — take a barbell and pop it over your head — the barbell overhead press requires a lot of practice and technique to get right. Warm up your wrists beforehand for best results. Once you master it, the barbell overhead press benefits you by providing unparalleled overall shoulder strength and carryover to any overhead exercise you perform.
            </div>
            <div class="mt-10">
                <h3>How to Do It:</h3>
                Grip a bar with an overhand grip, set up in a power rack or squat rack. With the bar right in front of you, place your hands just outside your shoulders. 
                Stack your elbows and forearms vertically. If your elbows are pointing out or in, your grip may be either too narrow or too wide. Adjust accordingly.
                Place the bar on the heel of your palm because this is where you’ll generate the most force from. 
                Press overhead until lockout then slowly lower down to the starting position. Repeat.
                Coach’s Tip: Don’t press around your head. Tilt your head back intentionally to push the bar in a straight line.
            </div>
            <div class="mt-10">
                <h3>Sets and Reps:</h3>    
                The press is versatile. You can use it to build upper body strength, beef up your shoulder muscles, or help you prepare for any real-world task life throws at you. As such, you need to ensure that your programming matches your goal. Here are a few different ways to implement overhead pressing. <br>
                To Gain Muscle Mass: 3 to 4 sets of 6 to 8 reps, at a moderate rate of perceived exertion. <br>
                For Max Strength: 5 to 8 sets of 3 to 5 reps, with at least two minutes’ rest in-between.  <br>
                As a Beginner: 3 sets of 5 reps, with a light weight and strong focus on your technique. 
            </div>
            <div>
                <h3>Common Mistakes</h3>
                <ul class="bullet-list">
                    <li>Pressing Around the Head</li>
                    <li>Gripping the Bar Too Wide</li>
                    <li>Assuming a Narrow Stance</li>
                </ul>
            </div>
            <div>
                <h3>Muscles Worked by the Overhead Press</h3>
                <ul class="bullet-list">
                    <li>Shoulders (Deltoids)</li>
                    <li>Scapular Stabilizers</li>
                    <li>Upper Pecs</li>
                    <li>Triceps</li>
                </ul>
            </div>
            <div>
                <h3>Benefits</h3>
                <ul class="bullet-list">
                    <li>Application to Strength Sports</li>
                    <li>Most Bang for Your Buck</li>
                    <li>Upper-Body Strength</li>
                </ul>
            </div>
            <div class="mt-10" style="display: flex; justify-content: center; align-items: center; height: 70v;">
                <img src="./workouts-images/BOP.jpeg" alt="Human Body" style="max-height: 200px; max-width: 100%;">
            </div>
        </div>
    </div>
    </x-app-layout>
