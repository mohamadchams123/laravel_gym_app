@props(['name','href'])

<div class="border-b border-gray-400 py-3">
    <h3 class="text-lg font-semibold text-gray-100">{{$name}}</h3>
    <p class="text-md text-gray-400 my-3">{{$slot}}</p>
    <a href="{{$href}}" class="text-indigo-500 text-md">Watch Video</a>
</div>