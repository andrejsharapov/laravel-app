<?php
$menuItems = require __DIR__ . '../../../../database_/appbar.php';
?>

<nav
  class="sticky bottom-0 md:px-4 py-2 md:py-0 bg-gradient-to-r from-indigo-600 to-purple-600 dark:from-purple-800 dark:to-indigo-800 shadow-lg">
  <div class="md:container flex flex-wrap justify-between items-center mx-auto">
    <!-- Logo or Content -->
    <div class="flex items-center ml-4">
      <span class="self-center text-lg font-medium whitespace-nowrap text-white">
          {{ config('app_config.date.current_month') }}, {{ config('app_config.date.current_day') }} {{ config('app_config.date.current_year') }}
      </span>
    </div>
    <!-- /Logo or Content -->

    <!-- Open menu button -->
    <button data-collapse-toggle="header-navbar" type="button"
            class="mr-4 inline-flex justify-center items-center p-2 text-gray-400 rounded-lg md:hidden hover:text-gray-900 focus:outline-none focus:ring-2 focus:ring-blue-300 dark:text-gray-400 dark:hover:text-white dark:focus:ring-gray-500"
            aria-controls="header-navbar" aria-expanded="false">
      <span class="sr-only">Open menu</span>
      <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
           xmlns="http://www.w3.org/2000/svg">
        <path fill-rule="evenodd"
              d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
              clip-rule="evenodd"/>
      </svg>
    </button>
    <!-- /Open menu button -->

    <!-- Menu items -->
    <div class="hidden w-full h-screen md:h-auto md:block md:w-auto" id="header-navbar">
      <div
        class="divide-y md:divide-y-0 md:divide-x divide-indigo-300 dark:divide-gray-300 flex items-center flex-col md:flex-row mt-4 md:mt-0 rounded-lg md:text-sm md:font-medium">
        <?php
        foreach ($menuItems as $i => $step1) {
          if (is_array($step1['path'])) {
            echo '<div class="w-full">';
            echo "<button id='$step1[label]' data-dropdown-toggle='dropdown-$i' class='w-full flex justify-between items-center whitespace-nowrap block whitespace-nowrap py-3 px-4 text-white hover:bg-indigo-300 hover:bg-opacity-40'>";
            echo $step1['label'];
            echo '<svg width="20" height="20" viewBox="0 0 24 24" class="ml-2"><path fill="currentColor" d="M7.41,8.58L12,13.17L16.59,8.58L18,10L12,16L6,10L7.41,8.58Z"/></svg>';
            echo '</button>';
            echo "<div id='dropdown-$i' aria-labelledby='$step1[label]' class='mt-1 hidden z-10 min-w-min font-normal rounded divide-y divide-gray-300 shadow bg-purple-600 dark:bg-indigo-800'>";
            echo '<div class="py-1 text-sm text-white divide-y divide-gray-300" aria-labelledby="dropdownLargeButton">';

            foreach ($step1['path'] as $step2 => $key) {
              echo "<a href='$key[path]'";

              if ($key['blank']) {
                echo "target='_blank'";
              };

              echo "rel='noopener noreferrer' class='first-letter:uppercase block whitespace-nowrap py-3 px-4 text-white hover:bg-purple-400 hover:bg-opacity-40' aria-current='page'>";
              echo $key['label'];
              echo '</a>';
            }
            echo '</div>';
            echo '</div>';
            echo '</div>';
          } else {
            echo '<div class="w-full">';
            echo "<a href='$step1[path]'";

            if ($step1['blank']) {
              echo "target='_blank'";
            };

            echo "rel='noopener noreferrer' class='first-letter:uppercase whitespace-nowrap block whitespace-nowrap py-3 px-4 text-white hover:bg-purple-300 hover:bg-opacity-40' aria-current='page'>
                    $step1[label]
                  </a>";
            echo '</div>';
          };
        };
        ?>
      </div>
    </div>
    <!-- /Menu items -->
  </div>
</nav>

