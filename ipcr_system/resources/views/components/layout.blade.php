<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'IPCR System')</title>
    @yield('vite')
</head>
<body>
    <header class="bg-blue-400 shadow-md fixed top-0 left-0 w-full z-10">
        <nav class="container mx-auto p-4 justify-between items-center">
            <a href="{{ url('/') }}" class="font-sans font-bold text-3xl text-white">IPCR System</a>
        </nav>
    </header>
    <div class="flex pt-16">
        <main class="flex-1 overflow-y-auto p-6 ml-64 h-[calc(100vh-4rem)]">
            <header class="mb-10">
                @if (session('success'))
                    <div class="p-3 mb-3 text-center bg-green-200 text-green-600 font-semibold text-lg block rounded-2xl border drop-shadow-2xl">
                        {{ session('success') }}
                    </div>
                @endif
                <h1 class="text-2x1 font-bold text-gray-600">@yield('main', 'Title')</h1>
            </header>
            {{ $slot }}
        </main>
    </div>
</body>
</html>