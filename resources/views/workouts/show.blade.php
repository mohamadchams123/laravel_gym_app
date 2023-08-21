<x-app-layout>
    <h1>{{ $workout->exercise_name }}</h1>
    <p>Category: {{ $workout->category_name }}</p>
    <!-- Display other workout details -->

    <h2>Mistakes:</h2>
    @foreach ($exerciseMistakes as $mistake)
        <div>
            <h3>Mistake Name: {{ $mistake['name'] }}</h3>
            <p>Mistake Description: {{ $mistake['description'] }}</p>
        </div>
    @endforeach
</x-app-layout>
