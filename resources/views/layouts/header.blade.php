<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('meta.title') &mdash; {{ config('app_config.app.app_name') }}</title>

    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&family=Open+Sans&display=swap" rel="stylesheet">
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">

    <style>
        body {
            font-family: Poppins, sans-serif;
        }
    </style>

    @yield('styles')

</head>

<body class="min-h-screen flex flex-col bg-white dark:bg-gray-700 text-slate-700 dark:text-white dark:text-slate-300">
