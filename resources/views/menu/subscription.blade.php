<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Subscription') }}
        </h2>
    </x-slot>
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subscription Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f0f0f0;
        }
        .container {
            max-width: 600px;
            margin: auto;
            padding: 20px;
            background-color: white;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            text-align: center;
        }
        .subscription {
            text-align: center;
            margin-top: 20px;
        }
        .btn {
            display: inline-block;
            padding: 10px 20px;
            background-color: #007bff;
            color: white;
            border: none;
            cursor: pointer;
        }
    </style>
</head>
<body>
<div class="container">
                        <h1>Subscription Page</h1>
    <div class="subscription">
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
<script>
    document.querySelector('form').addEventListener('submit', function() {
        alert('Subscribed successfully!');
    });
</script>
</body>
</html>

</x-app-layout>