@props(['item'])

<div>
    <h2 class="category-header dark:text-gray-100 text-gray-100 text-2xl font-semibold mx-12 my-3 py-16 text-center cursor-pointer border border-indigo-500 rounded-md" style="top: 0; left: 0; z-index: -1; background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('./storage/{{$item->image_path}}'); background-repeat: no-repeat; background-position: center; background-size: cover;">
        {{ $item->name }}
    </h2>
</div>