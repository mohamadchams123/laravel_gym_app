<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'id' => 2,
            'name' => 'Test User',
            'email' => 'test@example.com',
            'password'=>bcrypt('password')
        ]);

        \App\Models\User::factory()->create([
            'id' => 7,
            'name' => 'Test User',
            'email' => 'test@example.com',
            'password' => bcrypt('password')
        ]);

        \App\Models\User::factory()->create([
            'id' => 3,
            'name' => 'Another User',
            'email' => 'another@example.com',
            'password' => bcrypt('password123')
        ]);


        \App\Models\User::factory()->create([
            'id' => 4,
            'name' => 'John Doe',
            'email' => 'john.doe@example.com',
            'password' => bcrypt('secret')
        ]);

        \App\Models\User::factory()->create([
            'id' => 5,
            'name' => 'Jane Smith',
            'email' => 'jane.smith@example.com',
            'password' => bcrypt('test123')
        ]);

        \App\Models\User::factory()->create([
            'id' => 6,
            'name' => 'Alice Johnson',
            'email' => 'alice@example.com',
            'password' => bcrypt('mypassword')
        ]);

        \App\Models\User::factory()->create([
            'id' => 1,
            'name' => 'Gym Admin',
            'email' => 'admin@gym.com',
            'password'=>bcrypt('admin')
        ]);

        \App\Models\Item::create([
            'name' => 'Whey Protein Powder',
            'description' => 'High-quality whey protein powder for muscle recovery and growth.',
            'price' => 29.99,
            'quantity' => 50,
            'image_path' => '../../images/whey_protein.jpeg',
        ]);

        \App\Models\Item::create([
            'name' => 'Adjustable Dumbbells Set',
            'description' => 'A set of adjustable dumbbells with various weight plates for versatile workouts.',
            'price' => 149.99,
            'quantity' => 20,
            'image_path' => '../../images/dumbbells.jpeg',
        ]);

        \App\Models\Item::create([
            'name' => 'Resistance Bands',
            'description' => 'A set of resistance bands for targeted muscle training and flexibility exercises.',
            'price' => 19.99,
            'quantity' => 30,
            'image_path' => '../../images/resistance_bands.jpeg',
        ]);

        \App\Models\Item::create([
            'name' => 'Yoga Mat',
            'description' => 'High-quality yoga mat for comfortable floor exercises and stretching.',
            'price' => 24.99,
            'quantity' => 40,
            'image_path' => '../../images/yoga_mat.jpeg',
        ]);

        \App\Models\Item::create([
            'name' => 'Treadmill',
            'description' => 'Motorized treadmill with various workout programs and incline options.',
            'price' => 799.99,
            'quantity' => 10,
            'image_path' => '../../images/treadmill.jpeg',
        ]);

        \App\Models\Item::create([
            'name' => 'Kettlebell Set',
            'description' => 'Set of kettlebells in different weights for dynamic and functional workouts.',
            'price' => 69.99,
            'quantity' => 25,
            'image_path' => '../../images/kettlebells.jpeg',
        ]);

        \App\Models\Item::create([
            'name' => 'Weight Bench',
            'description' => 'Adjustable weight bench for bench presses, incline, and decline exercises.',
            'price' => 129.99,
            'quantity' => 15,
            'image_path' => '../../images/weight_bench.jpeg',
        ]);

        \App\Models\Item::create([
            'name' => 'Jump Rope',
            'description' => 'Durable jump rope for cardio workouts and improving coordination.',
            'price' => 9.99,
            'quantity' => 50,
            'image_path' => '../../images/jump_rope.jpeg',
        ]);

        \App\Models\Item::create([
            'name' => 'Foam Roller',
            'description' => 'Foam roller for self-myofascial release and muscle recovery.',
            'price' => 14.99,
            'quantity' => 30,
            'image_path' => '../../images/foam_roller.jpeg',
        ]);

        \App\Models\Item::create([
            'name' => 'Pull-Up Bar',
            'description' => 'Sturdy pull-up bar for upper body strength training and bodyweight exercises.',
            'price' => 34.99,
            'quantity' => 20,
            'image_path' => '../../images/pull_up_bar.jpeg',
        ]);


        \App\Models\Exercices::create([
            'category_name' => 'shoulders',
            'exercise_name' => 'Shoulder Press',
            'exercise_info' => 'The shoulder press is a compound exercise that primarily targets the deltoid muscles in the shoulders. It involves lifting a weight overhead from shoulder level.',
            'exercise_howto' => 'To perform the shoulder press, sit on a bench with back support or stand with your feet shoulder-width apart. Hold a dumbbell in each hand at shoulder height, with your palms facing forward. Press the weights upward until your arms are fully extended. Lower the weights back down to shoulder level and repeat.',
            'exercise_sr' => 'Recommended to do 3 sets of 10 repetitions.',
            'exercise_mistakes' => [
                'Leaning back too far while lifting.',
                'Using momentum to lift the weights instead of relying on shoulder strength.',
            ],
            'exercise_muscles' => [
                'Primary: Deltoids',
                'Secondary: Triceps',
            ],
            'exercise_benefits' => [
                'Builds shoulder and upper body strength.',
                'Improves overall upper body stability and coordination.',
            ],
            'exercise_image' => '../../workouts-images/SP.jpeg',
        ]);
        \App\Models\Exercices::create([
            'category_name' => 'chest',
            'exercise_name' => 'Bench Press',
            'exercise_info' => 'The bench press is a classic compound exercise for building strength and muscle in the chest, shoulders, and triceps.',
            'exercise_howto' => 'Lie flat on a bench, unrack the barbell, and lower it to your chest. Push the barbell back up to the starting position. Ensure proper form and use a spotter for safety.',
            'exercise_sr' => 'Recommended to do 4 sets of 8-10 repetitions.',
            'exercise_mistakes' => [
                'Bouncing the bar off the chest.',
                'Arching the back excessively.',
            ],
            'exercise_muscles' => [
                'Primary: Pectoralis Major',
                'Secondary: Anterior Deltoids, Triceps',
            ],
            'exercise_benefits' => [
                'Builds a strong and well-defined chest.',
                'Develops upper body pressing strength.',
            ],
            'exercise_image' => '../../workouts-images/BP.jpeg',
        ]);
        \App\Models\Exercices::create([
            'category_name' => 'obliques',
            'exercise_name' => 'Russian Twist',
            'exercise_info' => 'The Russian twist is an exercise that targets the oblique muscles on the sides of the abdomen.',
            'exercise_howto' => 'Sit on the floor, lean back slightly, and lift your feet off the ground. Hold a weight or medicine ball and twist your torso from side to side.',
            'exercise_sr' => 'Recommended to do 3 sets of 15-20 twists each.',
            'exercise_mistakes' => [
                'Using momentum to twist rather than controlled movement.',
                'Not engaging the core muscles.',
            ],
            'exercise_muscles' => [
                'Primary: Obliques',
                'Secondary: Rectus Abdominis, Hip Flexors',
            ],
            'exercise_benefits' => [
                'Targets the oblique muscles for better waist definition.',
                'Improves rotational core strength.',
            ],
            'exercise_image' => '../../workouts-images/RT.jpeg',
        ]);
        \App\Models\Exercices::create([
            'category_name' => 'abs',
            'exercise_name' => 'Plank',
            'exercise_info' => 'The plank is a core-strengthening exercise that engages multiple muscles.',
            'exercise_howto' => 'Start in a push-up position and lower onto your forearms. Keep your body in a straight line from head to heels. Hold this position for as long as you can.',
            'exercise_sr' => 'Hold for 3 sets of 30-60 seconds each.',
            'exercise_mistakes' => [
                'Dropping the hips too low.',
                'Raising the hips too high.',
            ],
            'exercise_muscles' => [
                'Primary: Rectus Abdominis',
                'Secondary: Obliques, Transverse Abdominis',
            ],
            'exercise_benefits' => [
                'Strengthens the core muscles.',
                'Improves posture and stability.',
            ],
            'exercise_image' => '../../workouts-images/P.jpeg',
        ]);
        \App\Models\Exercices::create([
            'category_name' => 'biceps',
            'exercise_name' => 'Barbell Bicep Curl',
            'exercise_info' => 'The barbell bicep curl is a classic exercise for targeting the biceps muscles.',
            'exercise_howto' => 'Stand with a straight back and grip a barbell with palms facing up. Curl the barbell upwards while keeping your elbows still. Slowly lower the barbell back down.',
            'exercise_sr' => 'Recommended to do 3 sets of 12 repetitions.',
            'exercise_mistakes' => [
                'Swinging the barbell to lift the weight.',
                'Using the back to lift the weight.',
            ],
            'exercise_muscles' => [
                'Primary: Biceps Brachii',
                'Secondary: Brachialis, Forearms',
            ],
            'exercise_benefits' => [
                'Helps build bicep size and strength.',
                'Improves arm aesthetics.',
            ],
            'exercise_image' => '../../workouts-images/BC.jpeg',
        ]);
        \App\Models\Exercices::create([
            'category_name' => 'calves',
            'exercise_name' => 'Standing Calf Raise',
            'exercise_info' => 'The standing calf raise is an exercise to target the calf muscles in the lower legs.',
            'exercise_howto' => 'Stand on an elevated surface with the balls of your feet on the edge. Lower your heels down as far as possible, then raise your heels as high as possible by pushing through your toes.',
            'exercise_sr' => 'Recommended to do 4 sets of 15-20 repetitions.',
            'exercise_mistakes' => [
                'Not using a full range of motion.',
                'Bouncing the heels at the bottom.',
            ],
            'exercise_muscles' => [
                'Primary: Gastrocnemius',
                'Secondary: Soleus',
            ],
            'exercise_benefits' => [
                'Builds and defines the calf muscles.',
                'Improves ankle strength and stability.',
            ],
            'exercise_image' => '../../workouts-images/SCRC.jpeg',
        ]);
        \App\Models\Exercices::create([
            'category_name' => 'thighs',
            'exercise_name' => 'Leg Press',
            'exercise_info' => 'The leg press is an effective machine exercise for targeting the thighs.',
            'exercise_howto' => 'Sit on the leg press machine, place your feet shoulder-width apart on the platform, and press the weight upward by extending your legs. Slowly lower the weight back down.',
            'exercise_sr' => 'Recommended to do 3 sets of 12-15 repetitions.',
            'exercise_mistakes' => [
                'Locking out the knees at the top.',
                'Allowing the knees to move inward during the movement.',
            ],
            'exercise_muscles' => [
                'Primary: Quadriceps',
                'Secondary: Hamstrings, Glutes',
            ],
            'exercise_benefits' => [
                'Targets and develops the muscles of the thighs.',
                'Less stress on the lower back compared to squats.',
            ],
            'exercise_image' => '../../workouts-images/LP.jpeg',
        ]);
        \App\Models\Exercices::create([
            'category_name' => 'quads',
            'exercise_name' => 'Barbell Squat',
            'exercise_info' => 'The barbell squat is a compound exercise that targets the quadriceps, hamstrings, and glutes.',
            'exercise_howto' => 'Stand with a barbell on your upper back. Lower your body by bending your knees and hips. Keep your back straight and chest up. Push through your heels to return to the starting position.',
            'exercise_sr' => 'Recommended to do 4 sets of 8-10 repetitions.',
            'exercise_mistakes' => [
                'Allowing the knees to cave inward.',
                'Rounding the lower back.',
            ],
            'exercise_muscles' => [
                'Primary: Quadriceps',
                'Secondary: Hamstrings, Glutes',
            ],
            'exercise_benefits' => [
                'Builds strong and powerful leg muscles.',
                'Enhances lower body strength and stability.',
            ],
            'exercise_image' => '../../workouts-images/BBS.jpeg',
        ]);
        \App\Models\Exercices::create([
            'category_name' => 'triceps',
            'exercise_name' => 'Tricep Dips',
            'exercise_info' => 'Tricep dips are a great bodyweight exercise to target the triceps muscles.',
            'exercise_howto' => 'Position yourself between parallel bars, with your hands on the bars and your feet off the ground. Lower your body by bending your elbows, then press back up to the starting position.',
            'exercise_sr' => 'Recommended to do 3 sets of 12-15 repetitions.',
            'exercise_mistakes' => [
                'Leaning too far forward during the dip.',
                'Not lowering the body through a full range of motion.',
            ],
            'exercise_muscles' => [
                'Primary: Triceps Brachii',
                'Secondary: Chest, Shoulders',
            ],
            'exercise_benefits' => [
                'Targets and sculpts the triceps muscles.',
                'Helps in building upper body strength.',
            ],
            'exercise_image' => '../../workouts-images/TD.jpeg',
        ]);
        \App\Models\Exercices::create([
            'category_name' => 'trapezius',
            'exercise_name' => 'Barbell Shrug',
            'exercise_info' => 'Barbell shrugs are an effective exercise to target the trapezius muscles in the upper back.',
            'exercise_howto' => 'Hold a barbell in front of you with an overhand grip. Lift your shoulders as high as possible while keeping your arms straight. Lower the shoulders back down.',
            'exercise_sr' => 'Recommended to do 4 sets of 12-15 repetitions.',
            'exercise_mistakes' => [
                'Rolling the shoulders instead of lifting them straight up.',
                'Using too much weight and compromising form.',
            ],
            'exercise_muscles' => [
                'Primary: Trapezius',
                'Secondary: Levator Scapulae',
            ],
            'exercise_benefits' => [
                'Targets the upper trapezius muscles for improved posture.',
                'Helps in strengthening and stabilizing the upper back.',
            ],
            'exercise_image' => '../../workouts-images/BS.jpeg',
        ]);
        \App\Models\Exercices::create([
            'category_name' => 'back',
            'exercise_name' => 'Deadlift',
            'exercise_info' => 'The deadlift is a powerful compound exercise that engages multiple muscles in the back and lower body.',
            'exercise_howto' => 'Stand with a barbell in front of you. Bend at the hips and knees to grip the barbell. Lift the barbell by extending your hips and standing up straight. Lower the barbell back down with controlled movement.',
            'exercise_sr' => 'Recommended to do 3 sets of 5 repetitions.',
            'exercise_mistakes' => [
                'Rounding the lower back during the lift.',
                'Using improper form and risking injury.',
            ],
            'exercise_muscles' => [
                'Primary: Erector Spinae, Latissimus Dorsi',
                'Secondary: Glutes, Hamstrings, Trapezius',
            ],
            'exercise_benefits' => [
                'Builds overall back strength and muscle.',
                'Engages the entire posterior chain.',
            ],
            'exercise_image' => '../../workouts-images/D.jpeg',
        ]);
        \App\Models\Exercices::create([
            'category_name' => 'glutes',
            'exercise_name' => 'Hip Thrust',
            'exercise_info' => 'The hip thrust is a targeted exercise for the glute muscles.',
            'exercise_howto' => 'Sit on the floor with your upper back against a bench and a barbell across your hips. Thrust your hips upward by squeezing your glutes, then lower your hips back down.',
            'exercise_sr' => 'Recommended to do 4 sets of 10-12 repetitions.',
            'exercise_mistakes' => [
                'Not fully extending the hips at the top.',
                'Using too much weight and sacrificing form.',
            ],
            'exercise_muscles' => [
                'Primary: Gluteus Maximus',
                'Secondary: Hamstrings',
            ],
            'exercise_benefits' => [
                'Targets and shapes the glute muscles.',
                'Helps in building hip strength and power.',
            ],
            'exercise_image' => '../../workouts-images/HT.jpeg',
        ]);
        \App\Models\Exercices::create([
            'category_name' => 'hamstrings',
            'exercise_name' => 'Romanian Deadlift',
            'exercise_info' => 'The Romanian deadlift is a hamstring-dominant exercise that also engages the lower back and glutes.',
            'exercise_howto' => 'Hold a barbell in front of you with a shoulder-width grip. Bend at the hips while keeping your back straight, lower the barbell towards the ground, then lift it back up by extending your hips.',
            'exercise_sr' => 'Recommended to do 3 sets of 8-10 repetitions.',
            'exercise_mistakes' => [
                'Rounding the back during the movement.',
                'Using jerky or uncontrolled motion.',
            ],
            'exercise_muscles' => [
                'Primary: Hamstrings',
                'Secondary: Lower Back, Glutes',
            ],
            'exercise_benefits' => [
                'Targets and strengthens the hamstrings.',
                'Improves hip hinge movement pattern.',
            ],
            'exercise_image' => '../../workouts-images/RD.jpeg',
        ]);
                                                                                         
        
    }
}
