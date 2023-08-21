<!DOCTYPE html>
<html>
<head>
    <title>Shoulder Workouts</title>
</head>
<body>
    <form method="POST" action="{{ route('shoulder-workouts') }}">
        @csrf
        <input type="text" name="category_name" placeholder="Category">
        <input type="text" name="exercise_name" placeholder="Exercise">
        <input type="text" name="exercise_info" placeholder="Exercise Info">
        <input type="text" name="exercise_howto" placeholder="Exercise How-to">
        <input type="text" name="exercise_sr" placeholder="Exercise SR">

        <div id="mistake-container">
            <div class="mistake">
                <input type="text" name="mistakes[0][name]" placeholder="Mistake Name">
                <input type="text" name="mistakes[0][description]" placeholder="Mistake Description">
            </div>
        </div>

        <button type="button" id="add-mistake">Add Mistake</button>
        <button type="submit">Create Workout</button>
    </form>

    <script>
    document.getElementById('add-mistake').addEventListener('click', function() {
        var container = document.getElementById('mistake-container');
        var mistakes = container.getElementsByClassName('mistake');
        var newIndex = mistakes.length;

        var mistakeDiv = document.createElement('div');
        mistakeDiv.className = 'mistake';
        mistakeDiv.innerHTML = `
            <input type="text" name="mistakes[${newIndex}][name]" placeholder="Mistake Name">
            <input type="text" name="mistakes[${newIndex}][description]" placeholder="Mistake Description">
        `;
        container.appendChild(mistakeDiv);
    });
    </script>
</body>
</html>
