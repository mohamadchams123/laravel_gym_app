<!-- berjaa bzabet l design baaden -->

<form method="POST" action="{{ route('workout.store') }}" enctype="multipart/form-data">
    @csrf
    <input type="text" name="category_name" placeholder="Category">
    <input type="text" name="exercise_name" placeholder="Exercise">
    <input type="text" name="exercise_info" placeholder="Exercise Info">
    <input type="text" name="exercise_howto" placeholder="Exercise How-to">
    <input type="text" name="exercise_sr" placeholder="Exercise SR">

    <div id="mistake-container">
        <div class="mistake">
            <input type="text" name="exercise_mistakes[]" placeholder="Mistake">
        </div>
    </div>

    <button type="button" id="add-mistake">Add Mistake</button>

    <div id="muscles-container">
        <div class="muscle">
            <input type="text" name="exercise_muscles[]" placeholder="Muscle Targeted">
        </div>
    </div>

    <button type="button" id="add-muscle">Add Muscle</button>

    <div id="benefits-container">
        <div class="benefit">
            <input type="text" name="exercise_benefits[]" placeholder="Exercise Benefit">
        </div>
    </div>

    <button type="button" id="add-benefit">Add Benefit</button>

    <input type="file" name="exercise_image">

    <button type="submit">Create Workout</button>
</form>

<script>
document.getElementById('add-muscle').addEventListener('click', function() {
    var container = document.getElementById('muscles-container');
    var muscleDiv = document.createElement('div');
    muscleDiv.className = 'muscle';
    muscleDiv.innerHTML = `
        <input type="text" name="exercise_muscles[]" placeholder="Muscle Targeted">
    `;
    container.appendChild(muscleDiv);
});

document.getElementById('add-benefit').addEventListener('click', function() {
    var container = document.getElementById('benefits-container');
    var benefitDiv = document.createElement('div');
    benefitDiv.className = 'benefit';
    benefitDiv.innerHTML = `
        <input type="text" name="exercise_benefits[]" placeholder="Exercise Benefit">
    `;
    container.appendChild(benefitDiv);
});

document.getElementById('add-mistake').addEventListener('click', function() {
    var container = document.getElementById('mistake-container');
    var mistakeDiv = document.createElement('div');
    mistakeDiv.className = 'mistake';
    mistakeDiv.innerHTML = `
        <input type="text" name="exercise_mistakes[]" placeholder="Mistake">
    `;
    container.appendChild(mistakeDiv);
});
</script>
