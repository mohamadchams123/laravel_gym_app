@props(['name','image'])

<div class="text-black dark:text-white">
    <div>
        <x-title class="text-center text-xl font-bold my-3 text-gray-500 dark:text-gray-400">{{ $name }}</x-title>
    </div>
    <div>
        <x-title class="text-lg my-3 text-gray-500 dark:text-gray-400">Info</x-title>
        {{ $info }}
    </div>
    <div>
        <x-title class="text-lg my-3 text-gray-500 dark:text-gray-400">How To Do It</x-title>
        {{ $howTo }}
    </div>
    <div>
        <x-title class="text-lg my-3 text-gray-500 dark:text-gray-400">Sets and Reps</x-title>
        {{ $setsReps }}
    </div>
    <div>
        <x-title class="text-lg my-3 text-gray-500 dark:text-gray-400">Common Mistakes</x-title>
        {{ $mistakes }}
    </div>
    <div>
        <x-title class="text-lg my-3 text-gray-500 dark:text-gray-400">Muscles Worked by the {{$name}}</x-title>
        {{ $muscles }}
    </div>
    <div>
        <x-title class="text-lg my-3 text-gray-500 dark:text-gray-400">Benefits</x-title>
        {{ $benefits }}
    </div>
    <div class="flex justify-center border-b py-8">
        <img src="./workouts-images/{{ $image }}" style="max-height: 200px; max-width: 100%;">
    </div>
</div>