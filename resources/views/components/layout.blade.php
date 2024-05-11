<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Home Page</title>
    </head>
    <body>
        <nav>
            <x-navlink href='/'>Home</x-navlink>
            <x-navlink href='/about'>About</x-navlink>
            <x-navlink href='/contact'>Contact</x-navlink>
        </nav>

	{{ $slot }}
    </body>
</html>
