<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Feedback') }}
        </h2>
    </x-slot>
    
    <div class="py-12">
        <div class="max-w-2xl mx-auto">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="flex justify-center">
                    <form action="{{ route('feedback.store') }}" method="post" class="w-1/2 space-y-6">
                        @csrf
                        <div>
                            <x-input-label for="message" :value="__('Give us your feedback')" />
                            <x-text-area-input id="message" name="message" class="mt-1 block w-full" required autofocus />
                            <x-input-error class="mt-2" :messages="$errors->get('message')" />
                        </div>
                        <div class="flex items-center gap-4">
                            <x-primary-button>{{ __('Submit Feedback') }}</x-primary-button>
                        </div>
                        <div class="flex items-center gap-4 pb-6">
                            <x-primary-button type="button" id="showButton">{{ __('Show Feedbacks') }}</x-primary-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="py-12">
        <div class="max-w-2xl mx-auto sm:px-6 lg:px-8">
            <div class="p-3 justify-center items-center bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg text-white" style="display: none;" id="hidden-div">
                @if(!$feedbacks->isEmpty())
                    @foreach ($feedbacks as $feedback)
                    <div class="border-b mb-5">
                        <p class="text-xl font-semibold text-indigo-500">{{ $feedback->user->name }}</p>
                        <p class="text-xs text-gray-400">Posted {{ $feedback->created_at->diffForHumans() }}</p>
                        <p class="m-3 ml-0 text-gray-100">{{ $feedback->message }}</p>
                    </div>
                    @endforeach
                @else
                    <p class="flex justify-center items-center text-gray-100 m-3">There are no Feedbacks! Be the first one to participate.</p>
                @endif
            </div>
        </div>
    </div>
    
    <script>
        const showButton = document.getElementById('showButton');
        const hiddenDiv = document.getElementById('hidden-div');

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
