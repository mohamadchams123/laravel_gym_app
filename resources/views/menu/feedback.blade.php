<x-app-layout>
    <x-slot name="header">
    <div class="flex items-center">
        <a href="{{ route('dashboard') }}">
                <x-back-button />
            </a>
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Feedback') }}
        </h2>
    </div>
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
                            <x-secondary-button onclick="document.getElementById('hidden-div').style.display = document.getElementById('hidden-div').style.display === 'none' ? 'block' : 'none';">
                                {{ __('Show Feedbacks') }}
                            </x-secondary-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="py-12">
        <div class="max-w-2xl mx-auto sm:px-6 lg:px-8">
            <div class="p-3 justify-center items-center bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg" style="display: none;" id="hidden-div">
                @if (!$feedbacks->isEmpty())
                    @foreach ($feedbacks as $feedback)
                        <div class="border-b border-gray-600 dark:border-gray-400 mb-5">
                            <p class="text-xl font-semibold text-indigo-600 dark:text-indigo-500">{{ $feedback->user->name }}</p>
                            <p class="text-xs text-gray-600 dark:text-gray-400">Posted {{ $feedback->created_at->diffForHumans() }}</p>
                            <p class="m-3 ml-0 text-gray-900 dark:text-gray-100">{{ $feedback->message }}</p>
                            @if ($feedback->user_id === auth()->user()->id || auth()->user()->can('admin'))
                                <form action="{{ route('feedback.destroy', $feedback) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-red-500 hover:text-red-700" onclick="return confirm('Are you sure you want to delete your feedback');">{{ __('Delete') }}</button>
                                </form>
                            @endif
                        </div>
                    @endforeach
                @else
                    <p class="flex justify-center items-center text-gray-800 dark:text-gray-400 m-3">There are no Feedbacks! Be the first one to participate.</p>
                @endif
            </div>
        </div>
    </div>
</x-app-layout>
