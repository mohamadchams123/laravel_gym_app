<x-app-layout>
    <style>
        /* Add CSS rules here */
        .image {
            text-align: center;
            margin-top: 20px; /* Add some space between the header and the image */
        }
        
        .image img {
            display: inline-block; /* Ensures the image behaves as a block element */
        }
        
        .lists-container {
            margin: bottom 20px;
            display: flex; 
            justify-content: space-between; 
            align-items: flex-start; 
            margin-top: 20px;
        }
        .seconde-list{
            margin-right:20%;
            counter-reset: list-counter; /* Add this line to reset the counter */
            padding-left: 20px; /* Add padding to create space between number and text */
        }
        
        .seconde-list li::before {
            content: counter(list-counter) ". "; /* Add a period and space after the counter */
            counter-increment: list-counter; /* Add this line to increment the counter */
        }
        .first-list{
            margin-left:20%;
            counter-reset: list-counter; /* Add this line to reset the counter */
            padding-left: 20px; /* Add padding to create space between number and text */
        }
        
        .first-list li::before {
            content: counter(list-counter) ". "; /* Add a period and space after the counter */
            counter-increment: list-counter; /* Add this line to increment the counter */
        }
    </style>
    
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Workouts') }}
        </h2>
    </x-slot>
    <div class="image">
        <img src="{{ asset('./images/body.jpg') }}" alt="Human Body">
    </div>
    <div class="lists-container">
        <ol class="text-white first-list">
            <li><a  href="{{ route('shoulder-workouts') }}">Shoulders</a></li>
            <li><a  href="{{ route('chest-workouts') }}">chest</a></li>
            <li><a  href="{{ route('biceps-workouts') }}">Biceps</a></li>
            <li><a  href="{{ route('abs-workouts') }}">Abs</a></li>
            <li><a  href="{{ route('obliques-workouts') }}">Oblique</a></li>
            <li><a  href="{{ route('quads-workouts') }}">Quads</a></li>
            <li><a  href="{{ route('thighs-workouts') }}">Thighs</a></li>
            <li><a  href="{{ route('calves-workouts') }}">Calves</a></li>
        </ol>
        <ol class="seconde-list text-white">
            <li><a  href="{{ route('trapez-workouts') }}">Trapezius</a></li>
            <li><a  href="{{ route('triceps-workouts') }}">Triceps</a></li>
            <li><a  href="{{ route('back-workouts') }}">Midlle Back</a></li>
            <li><a  href="{{ route('glutes-workouts') }}">Glutes</a></li>
            <li><a  href="{{ route('Hamstrings-workouts') }}">Hamstrings</a></li>
            <li><a  href="{{ route('calves-workouts') }}">Calves</a></li>
        </ol>
    </div>
</x-app-layout>
