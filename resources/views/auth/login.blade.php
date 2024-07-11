<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://unpkg.com/flowbite@1.6.5/dist/flowbite.css" rel="stylesheet">
</head>

<body class="bg-gray-100">
    <div class="min-h-screen flex items-center justify-center">
        <div class="bg-white p-8 rounded-lg shadow-lg max-w-md w-full">
            <h2 class="text-2xl font-bold text-gray-800 text-center mb-6">Login</h2>
            <form action="{{ route('login') }}" method="POST">
                @csrf
                <div class="mb-4">
                    <label for="email" class="block text-gray-700">Email</label>
                    <input type="email" name="email" id="email" required
                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                </div>
                <div class="mb-4">
                    <label for="password" class="block text-gray-700">Password</label>
                    <input type="password" name="password" id="password" required
                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                </div>
                <div class="mb-4 flex items-center justify-between">
                    <div class="flex items-center">
                        <input id="remember" name="remember" type="checkbox"
                            class="h-4 w-4 text-indigo-600 focus:ring-indigo-500 border-gray-300 rounded">
                        <label for="remember" class="ml-2 block text-sm text-gray-900">Remember me</label>
                    </div>
                    <div class="text-sm">
                        <a href="" class="font-medium text-indigo-600 hover:text-indigo-500">Forgot your
                            password?</a>
                    </div>
                </div>
                <button type="submit"
                    class="w-full bg-yellow-400 text-white py-2 px-4 rounded-md hover:bg-yellow-500 focus:outline-none focus:bg-yellow-600">
                    Login
                </button>
                <div class="text-sm mt-5 text-center">
                    <h1 class="font-medium text-indigo-600 hover:text-indigo-500">Don't have an account ? Register
                        <a href="{{ route('admin.register') }}">Here</a>
                    </h1>
                </div>
            </form>
        </div>
    </div>
    <script src="https://unpkg.com/flowbite@1.6.5/dist/flowbite.js"></script>
</body>

</html>
