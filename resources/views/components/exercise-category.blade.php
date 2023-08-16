@props(['value'])

<div>
    <h2 class="dark:text-gray-200 text-xl font-semibold mx-12 my-3 p-2 text-center cursor-pointer border rounded-md">
        {{ $value }}
    </h2>
    <div class="mx-12 my-3 p-2 dark:bg-gray-900 border rounded-md">
        {{ $slot }}
    </div>
</div>


{{-- style="display: none;" --}}