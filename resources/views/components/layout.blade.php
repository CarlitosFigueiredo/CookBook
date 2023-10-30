<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CookBook</title>

    @vite('resources/css/app.css')
</head>

<body class="font-sans antialiased text-gray-900">

    <div class="min-h-screen bg-gray-100">

        <div class="bg-blue-600 text-white">
            <nav class="container mx-auto px-4 py-4 space-x-6">
                <a href="/" class="hover:text-gray-200">Home</a>
                <a href="/charts" class="hover:text-gray-200">Charts</a>
            </nav>
        </div>

        <!-- Page Content -->
        <main class="container mx-auto px-4 py-4">
            {{ $slot }}
        </main>
    </div>

    <!-- Scripts -->
    @stack('scripts')

</body>

</html>