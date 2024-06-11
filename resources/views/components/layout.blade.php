<!doctype html>
<html lang="en" class="h-full bg-gray-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="h-full">
<div class="min-h-full">
    <nav class="bg-gray-800">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="flex h-16 items-center justify-between">
                <div class="flex items-center">
                    <div class="flex-shrink-0">
                        <img class="h-8 w-8" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=500"
                             alt="Your Company">
                    </div>
                    <div class="hidden md:block">
                        <div class="ml-10 flex items-baseline space-x-4">
                            <x-nav href="{{ route('index') }}" :active="request()->is('/')">Dashboard</x-nav>
                            <x-nav href="{{ route('posts.index') }}" :active="request()->is('posts')">Posts</x-nav>
                            <x-nav href="{{ route('posts.create') }}" :active="request()->is('posts/create')">Create
                            </x-nav>
                        </div>
                    </div>
                </div>
                <div class="hidden md:block">
                    <div class="ml-10 flex items-center md:ml-6  space-x-4">
                        @guest
                            <x-button-white href="{{ route('LoginPage') }}">Login</x-button-white>
                            <x-button-white href="{{ route('RegistrationPage') }}">Registration</x-button-white>
                        @endguest

                        @auth
                            <x-button-white href="{{ route('Logout') }}">Logout</x-button-white>
                                <x-nav href="{{ route('profile') }}" :active="request()->is('profile')">Profile</x-nav>
                        @endauth

{{--                        <div class="relative ml-3">--}}
{{--                            <div>--}}
{{--                                <button type="button"--}}
{{--                                        class="relative flex rounded-full bg-gray-800 text-sm focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800"--}}
{{--                                        id="user-menu-button" aria-expanded="false" aria-haspopup="true">--}}
{{--                                    <span class="absolute -inset-1.5"></span>--}}
{{--                                    <span class="sr-only">Open user menu</span>--}}
{{--                                    <img class="h-8 w-8 rounded-full"--}}
{{--                                         src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"--}}
{{--                                         alt="">--}}
{{--                                </button>--}}
{{--                            </div>--}}
{{--                        </div>--}}

                    </div>
                </div>
            </div>
        </div>
    </nav>
    <header class="bg-white shadow">
        <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
            <h1 class="text-3xl font-bold tracking-tight text-gray-900">{{ $heading }}</h1>
        </div>
    </header>
    <main>
    {{ $slot }}
</div>
</body>
</html>
