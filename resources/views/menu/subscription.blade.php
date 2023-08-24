<x-app-layout>
    <x-slot name="header">
    <div class="flex items-center">
    <a href="{{ route('dashboard') }}">
                <x-back-button />
            </a>
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Subscription') }}
        </h2>
    </div>
    </x-slot>

    <div class="sm:px-12 py-12">
        <div class="max-w-xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="px-6 py-6 text-gray-900 dark:text-gray-100">
                @admin
                <div class="flex justify-center items-center mb-6">
                    <form method="GET" action="{{ route('subscription') }}">
                        <x-text-input type="text" name="search" placeholder="Search someone's name or email" class="bg-transparent font-semibold text-sm" value="{{request('search')}}" />
                        <x-primary-button >Search</x-primary-button>
                    </form>
                </div>
                    @foreach ($users as $user)
                    @if($user->email !=='admin@gym.com')
                    <p class="text-xl text-gray-700 dark:text-gray-200 pb-6">
                        <b><i>{{ $user->name }}</i></b> is
                        @if ($user->subscription)
                        <span class="text-green-500"> subscribed</span> since <time>{{ $user->subscription_start_date->format('d m Y') }}</time>
                        @else
                        <span class="text-red-500"> not subscribed</span>
                        @endif
                    </p>
                    @endif
                    @endforeach
                @else
                    @if ($user->subscription)
                        <x-title class="text-xl">You are subscribed!</x-title>
                        <div class="flex justify-center">
                            <table class="text-center mt-6">
                                <tr>
                                    <td>
                                        <x-title>Subscription Start Date:</x-title>
                                    </td>
                                    <td>
                                        <time>{{ $user->subscription_start_date->format('d m Y') }}</time>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <x-title>Subscription End Date:</x-title>
                                    </td>
                                    <td>
                                        <time>{{ $user->subscription_end_date->format('d m Y') }}</time>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2">
                                        <form action="{{ route('unsubscribe') }}" method="POST">
                                            @csrf
                                            @method('DELETE') <!-- Specify the HTTP method -->
                                            <x-primary-button onclick="return confirm('Are you sure you want to unsubscribe?');">Unsubscribe</x-primary-button>
                                        </form>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    @else
                        <x-title class="text-xl mb-6">Get Your 30 Days Membership Right Now</x-title>
                        <form action="{{ route('subscribe') }}" method="POST">
                            @csrf
                            <div class="mb-6 sm:flex items-center">
                            <x-input-label for="subscription_start_date" :value="__('Choose your starting date:')" />
                            <x-text-input type="date" name="subscription_start_date" id="subscription_start_date" class="m-1 block" required />
                            </div>
                            <x-has-cards value="subscribe" />
                        </form>
                    @endif
                @endadmin
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
