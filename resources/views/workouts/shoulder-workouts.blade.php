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
            .container {
                display: flex;
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
            <h3 class="mt-10">Common Mistakes</h3>
            <div class="container">  
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
            <h3 class="mt-10">Muscles Worked by the Overhead Press</h3>
            <div class="container">  
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
            <h3 class="mt-10">Benefits</h3>
            <div class="container">  
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
    
            <div class="mt-10" style="display: flex; justify-content: center; align-items: center; height: 70v;">
                <img src="./workouts-images/BOP.jpeg" alt="Human Body" style="max-height: 200px; max-width: 100%;">
            </div>
        </div>
    </div>
    
    </x-app-layout>
