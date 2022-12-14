<script src="https://unpkg.com/flowbite@1.5.2/dist/flowbite.js"></script>

@yield('scripts')

<footer class="w-full shrink border-t dark:bg-slate-800 ring-1 ring-slate-900/5 dark:border-t-gray-600">
  <div class="md:container md:mx-auto px-4 md:px-0">
    <div class="py-2 px-4 text-md text-center">
      &copy; {{ config('app_config.date.current_month') }}, {{ config('app_config.date.current_day') }} {{ config('app_config.date.current_year') }}
    </div>
  </div>
</footer>

</body>
</html>
