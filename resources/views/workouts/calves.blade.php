<x-workout-category name="Calves">
    @foreach ($exercices as $exercice)
        <x-workout-exercise name="{{$exercice->exercise_name}}" image="{{$exercice->exercise_image}}" id="{{$exercice->id}}">
            <x-slot name="info">
                {{$exercice->exercise_info}}
            </x-slot>
            <x-slot name="howTo">
                {{$exercice->exercise_howto}}
            </x-slot>
            <x-slot name="setsReps">
                {{$exercice->exercise_sr}}
            </x-slot>
            <x-slot name="mistakes">
                <div class="flex">  
                    <ul>
                        @foreach ($exercice->exercise_mistakes as $mistake)
                        <li>
                            {{$mistake}}
                        </li>
                        @endforeach
                    </ul>
                </div>
            </x-slot>
            <x-slot name="muscles">
                <div class="flex">  
                    <ul>
                        @foreach ($exercice->exercise_muscles as $muscle)
                        <li>
                            {{$muscle}}
                        </li>
                        @endforeach
                    </ul>
                </div>
            </x-slot>
            <x-slot name="benefits">
                <div class="flex">  
                    <ul>
                        @foreach ($exercice->exercise_benefits as $benefit)
                        <li>
                            {{$benefit}}
                        </li>
                        @endforeach
                    </ul>
                </div>
            </x-slot>
        </x-workout-exercise>
    @endforeach
    </x-workout-category>