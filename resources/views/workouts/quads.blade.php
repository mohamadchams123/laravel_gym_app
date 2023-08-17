<style>
    .bullet-list {
        list-style: disc outside none;
        padding-left: 20px; /* Adjust the spacing as needed */
        margin-top: 0; /* Reset top margin to avoid extra space */
    }
    .hover-list {
        list-style-type: none;
        padding-left: 0;
    }
    .hoverable {
        position: relative;
        cursor: pointer;
        margin-right: 20px; /* Adjust spacing between list items */
    }
    .hover-content {
        display: none;
        position: absolute;
        left: 100%; /* Position to the right of the list item */
        top: 0;
        background-color: #f9f9f9;
        padding: 5px;
        border: 1px solid #ccc;
        width: 200px;
        z-index: 1;
    }
    .hoverable:hover .hover-content {
        display: block;
    }
</style>

<x-workout-category name="Quads">
    <x-workout-exercise name="" image="">
        <x-slot name="info">

        </x-slot>
        <x-slot name="howTo">

        </x-slot>
        <x-slot name="setsReps">
            
        </x-slot>
        <x-slot name="mistakes">
            
        </x-slot>
        <x-slot name="muscles">
            
        </x-slot>
        <x-slot name="benefits">
            
        </x-slot>
    </x-workout-exercise>
</x-workout-category>