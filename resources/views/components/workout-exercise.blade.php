@props(['name','image','id'])

<div class="text-black dark:text-white">
    @admin
    <table class="text-right w-full">
        <td class="w-1/2"><x-title class="text-xl font-bold my-3 text-gray-100 dark:text-gray-400">{{ $name }}</x-title></td>
        <td class="w-1/2"><form action="{{ route('workout.destroy', $id) }}" method="POST" class="text-right">
            @csrf
            @method('DELETE')
            <x-danger-button onclick="return confirm('Are you sure you want to delete?');">Delete</x-danger-button>
        </form></td>
    </table>
    @else
    <x-title class="text-center text-xl font-bold my-3 text-gray-100 dark:text-gray-400">{{ $name }}</x-title>
    @endadmin
    <div class="text-md">
        <x-title class="text-xl my-3 text-gray-100 dark:text-gray-400">Info</x-title>
        {{ $info }}
    </div>
    <div class="text-md">
        <x-title class="text-xl my-3 text-gray-100 dark:text-gray-400">How To Do It</x-title>
        {{ $howTo }}
    </div>
    <div class="text-md">
        <x-title class="text-xl my-3 text-gray-100 dark:text-gray-400">Sets and Reps</x-title>
        {{ $setsReps }}
    </div>
    <div class="text-md">
        <x-title class="text-xl my-3 text-gray-100 dark:text-gray-400">Common Mistakes</x-title>
        {{ $mistakes }}
    </div>
    <div class="text-md">
        <x-title class="text-xl my-3 text-gray-100 dark:text-gray-400">Muscles Worked by the {{$name}}</x-title>
        {{ $muscles }}
    </div>
    <div class="text-md">
        <x-title class="text-xl my-3 text-gray-100 dark:text-gray-400">Benefits</x-title>
        {{ $benefits }}
    </div>
    <div class="flex justify-center border-b border-gray-400 py-8">
        <img src="../../storage/{{ $image }}" style="max-height: 200px; max-width: 100%;">
    </div>
</div>