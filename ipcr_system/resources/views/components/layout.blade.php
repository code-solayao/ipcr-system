<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'IPCR System')</title>
    @yield('vite')
</head>
<body class="dark:bg-neutral-800">
    <header class="bg-blue-400 dark:bg-sky-900 shadow-md fixed top-0 left-0 w-full z-10">
        <nav class="container mx-auto p-4 flex justify-between items-center">
            <a href="{{ url('/') }}" class="font-sans font-bold text-3xl text-white">IPCR System</a>
            <div class="flex items-center space-x-4">
                @guest
                    <div class="flex flex-row-reverse">
                        <a href="{{ route('view.login') }}" class="btn btn-secondary bg-blue-100 hover:bg-blue-200 text-blue-700 ml-5">Log In</a>
                        <a href="{{ route('view.signup') }}" class="btn btn-secondary bg-indigo-500 hover:bg-indigo-400">Sign Up</a>
                    </div>
                @endguest
                @auth
                    <span class="text-white text-lg border-r-2 pr-2">
                        Welcome, <b>{{ Auth::user()->name }}</b>
                    </span>
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <input type="submit" class="btn btn-secondary bg-blue-100 hover:bg-blue-200 text-blue-700" role="button" name="logout" value="Log Out" />
                    </form>
                @endauth
            </div>
        </nav>
    </header>
    <div class="flex pt-16">
        <main class="flex-1 overflow-y-auto p-6 mx-52 h-[calc(100vh-4rem)]">
            <header class="mb-10">
                @if (session('success'))
                    <div class="p-3 mb-3 text-center bg-green-200 text-green-600 font-semibold text-lg block rounded-2xl border drop-shadow-2xl">
                        {{ session('success') }}
                    </div>
                @endif
                <h1 class="text-gray-600 dark:text-white">@yield('main', 'Title')</h1>
            </header>
            {{ $slot }}
        </main>
    </div>
</body>
</html>