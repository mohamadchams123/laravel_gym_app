@props(['name','href'])

<div class="border-b py-3">
    <h3 class="text-lg font-semibold text-gray-400">{{$name}}</h3>
    <p class="text-md text-gray-200 my-3">{{$slot}}</p>
    <a href="{{$href}}" class="text-indigo-500">Watch Video</a>
</div>