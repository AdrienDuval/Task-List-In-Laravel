<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel 10 Task List App</title>

    {{-- blade-formatter-disable --}}
    <style type="text/tailwindcss">
    .btn {
        @apply inline-flex capitalize bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2   dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700 transition-all duration-300 ease-in-out float-left
    }
    label {
        @apply block text-gray-700 text-lg font-bold mb-2 capitalize
    }
    input, textarea {
        @apply bg-gray-50 border border-gray-300 text-gray-900 text-lg rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 mb-2
    }
    .error-message {
        @apply text-red-600 mt-2
    }
        </style>
    {{-- blade-formatter-enable --}}
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="container mx-auto mt-10 mb-10 max-w-2xl">
    <h1 class="text-2xl mb-4">@yield('title')</h1>
    <div>
        @if (session()->has('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        @yield('content')
    </div>
</body>

</html>
