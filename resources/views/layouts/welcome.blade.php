<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('meta.title') &mdash; {{ config('app_config.app.app_name') }}</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins&family=Open+Sans&display=swap" rel="stylesheet">
  <script src="https://cdn.tailwindcss.com"></script>

  @yield('styles')

</head>

<body class="min-h-screen flex flex-col bg-white dark:bg-gray-900 text-slate-900 dark:text-white dark:text-slate-300">

@yield('appbar')

<div class="grow my-6 md:container md:mx-auto px-4 flex justify-center items-center">
  @yield('content')
</div>

<div class="bg-white border-t dark:bg-slate-800 ring-1 ring-slate-900/5 dark:border-t-gray-600">
  <div class="md:container md:mx-auto px-4 md:px-0">
    <div class="py-2 px-4 text-md text-center">
      &copy; {{ config('app_config.date.current_year') }}
    </div>
  </div>
</div>

<script src="https://unpkg.com/flowbite@1.5.2/dist/flowbite.js"></script>

@yield('scripts')

</body>
</html>
