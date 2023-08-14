<style>
    .submit-button {
        display: inline-block;
        padding: 10px 20px;
        font-size: 16px;
        background-color: #007bff;
        color: #ffffff;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    /* Button hover effect */
    .submit-button:hover {
        background-color: #0056b3;
    }

    /* Hidden div */
    .hidden-div {
        display: none;
        padding: 10px;
        margin-top: 10px;
    }

    /* Center the hidden div */
    .hidden-div.flex {
        display: flex;
        justify-content: center;
        align-items: center;
    }
</style>

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Feedback') }}
        </h2>
    </x-slot>
    
    <div class="flex justify-center text-white">
        <form action="{{ route('feedback.store') }}" method="post" class="w-1/2">
            @csrf
            <div class="mb-3">
                <div>
                    <label for="message" class="mr-0">Give us your Feedback</label>
                </div>
                <textarea id="message" name="message" class="form-control text-black"
                    style="width: 100%;"
                    rows="5"></textarea>
            </div>
            <button type="submit" class="submit-button">Submit Feedback</button>
            <div style="display: flex; justify-content: center; align-items: center;">
                <button type="button" class="submit-button" id="showButton">Show Feedbacks</button>
            </div>
        </form>
    </div>
    
    <div class="hidden-div flex bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg text-white" style="display: none;">
        @foreach ($feedbacks as $feedback)
            <br>{{ $feedback->user->name }} : {{ $feedback->message }}
        @endforeach
    </div>
    
    <script>
        const showButton = document.getElementById('showButton');
        const hiddenDiv = document.querySelector('.hidden-div');

        let isHidden = true;

        showButton.addEventListener('click', () => {
        if (isHidden) {
            hiddenDiv.style.display = 'block';
        } else {
            hiddenDiv.style.display = 'none';
        }
            isHidden = !isHidden;
        });

    </script>
</x-app-layout>
