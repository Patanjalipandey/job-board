<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Job Portal</title>
        @vite('resources/css/app.css')
        @vite('resources/js/app.js')

    </head>
    <body class="mx-auto mt-10 max-w-2xl bg-linear-to-r/srgb from-indigo-200 to-teal-200 text-slate-700">
        {{ $slot }}
    </body>
</html>
