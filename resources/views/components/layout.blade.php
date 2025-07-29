<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sample</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <header
        class="flex justify-between px-4 py-3 sm:px-6 md:px-12 lg:px-16 xl:px-24 items-center leading-none border-b border-sofrgray">
        <h1 class="font-bold text-4xl">LOREM</h1>
        <nav class="flex justify-between gap-8 items-center">
            <x-lorem.nav-link :active="request()->routeIs('home')">HOME</x-lorem.nav-link>
            <x-lorem.nav-link :active="request()->routeIs('contact')">CONTACT</x-lorem.nav-link>
            <x-lorem.nav-link :active="request()->routeIs('page')">PAGE</x-lorem.nav-link>
            <x-lorem.nav-link :active="request()->routeIs('about')">ABOUT</x-lorem.nav-link>
        </nav>
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit">LOG OUT</button>
        </form>

    </header>
    <main class="my-7 mx-4 sm:mx-6 lg:mx-16 xl:mx-24">
        {{ $slot }}
    </main>
</body>

</html>
