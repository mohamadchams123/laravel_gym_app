<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Subscription') }}
        </h2>
    </x-slot>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f0f0f0;
        }
        .btn {
            display: inline-block;
            padding: 10px 20px;
            background-color: #00a859;
            color: white;
            border: none;
            cursor: pointer;
        }
    </style>
<body>
<div class="p-12">
<div class="max-w-2xl mx-auto sm:px-6 lg:px-8">
<div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg text-center">
    <div class="p-6 text-gray-900 dark:text-gray-100">
    <h1>Subscription Page</h1>
    <div>
                    @if ($user->subscription)
                        <p>You are subscribed!</p>
                        <p>Subscription Start Date: {{ $user->subscription_start_date }}</p>
                        <p>Subscription End Date: {{ $user->subscription_end_date }}</p>
                        <form action="{{ route('unsubscribe') }}" method="POST">
                            @csrf
                            <button class="btn" type="submit">Unsubscribe</button>
                        </form>
                    @else
                        <p>You are not subscribed.</p>
                        <form action="{{ route('subscribe') }}" method="POST">
                            @csrf
                            <button class="btn" type="submit">Subscribe</button>
                        </form>
                    @endif
    </div>
    </div>
</div>
</div>
</div>
<script>
    document.querySelector('form').addEventListener('submit', function() {
        alert('Subscribed successfully!');
    });
</script>
</body>
</html>

</x-app-layout>