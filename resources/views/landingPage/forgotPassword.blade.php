<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="h-screen flex items-center justify-center">
    <div class="w-1/3 bg-white p-8 rounded shadow-md">
        <h2 class="text-4xl font-medium mb-4 text-center">Forgot Password</h2>
        @if(session('status'))
            <div class="text-green-500 text-center mb-4">
                {{ session('status') }}
            </div>
        @endif
        <form action="{{ route('forgot-password.send') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label for="email" class="block text-lg font-medium text-gray-700">Email</label>
                <input type="email" name="email" id="email" class="block w-full p-2 border border-gray-300 rounded" required>
            </div>
            <button type="submit" class="w-full bg-indigo-600 text-white py-2 px-4 rounded hover:bg-indigo-700">Send Reset Link</button>
        </form>
    </div>
</body>
</html>
