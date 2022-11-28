<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SPA &mdash; t14.8</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins&family=Open+Sans&display=swap" rel="stylesheet">
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Nunito&family=Comfortaa&family=Courgette&display=swap"
    rel="stylesheet">
  <style>
    body {
      font-family: 'Comfortaa', sans-serif;
      /* font-family: 'Nunito', sans-serif; */
    }

    h1,
    h2,
    h3,
    h4,
    h5 {
      font-family: 'Courgette', cursive;
    }
  </style>
</head>

<body
  class="md:h-screen overflow-hidden flex flex-col bg-white dark:bg-gray-900 text-slate-900 dark:text-white dark:text-slate-300">
<div class="grow grid grid-cols-1 md:grid-cols-2">
  <!-- SECTION 1 -->
  <section
    class="hidden md:block h-screen overflow-hidden bg-gray-100 dark:bg-gray-900 text-slate-900 dark:text-white dark:text-slate-300">
    <div class="container-sm mx-auto py-6 md:py-12 grid auto-rows-min">
      <!-- headline -->
      <div class="px-6">
        <h3 class="text-3xl md:text-2xl font-extrabold leading-tighter tracking-tighter mb-4">
          Our services
        </h3>
        <hr/>
      </div>

      <!-- services -->
      <div
        class="px-6 py-4 md:py-8 mx-auto grid gap-6 lg:grid-cols-2 items-stretch md:max-w-2xl lg:max-w-none overflow-auto"
        style="height: calc(100vh - 105px);">
        <?php
        $len = 6;

        for ($i = 1; $i <= $len; $i++) {
          ?>
          <div class="relative flex flex-col items-center p-6 bg-white dark:bg-gray-700 rounded shadow-lg">
            <div class="absolute top-3 left-3 h-16 w-16">
              <div
                class="h-12 w-12 grid place-content-center text-lg font-bold text-white leading-6 rounded-lg bg-green-500 bg-opacity-40"><?= $i ?></div>
            </div>
            <img src="<?php echo 'src/' . rand(1, $len) . '.svg'; ?>" alt=""
                 class="w-auto h-32 object-cover object-left-top">
            <h4 class="mt-8 text-xl font-bold leading-snug tracking-tight mb-1">Service <?= $i ?></h4>
            <p class="text-gray-600 dark:text-gray-400 text-center">
              Maiores autem est facilis ipsum nihil nam expedita animi eos repellat, reprehenderit voluptates vitae odit
              fugit tenetur quam iste enim repudiandae. Ipsam.
            </p>
            <p class="mt-4">
              <button type="button"
                      class="shadow cursor-pointer border-2 border-green-500 hover:bg-green-500 focus:shadow-outline focus:outline-none text-green-500 hover:text-white font-bold py-2 px-4 rounded">
                Read more
              </button>
            </p>
          </div>

        <?php }
        ?>
      </div>
    </div>
  </section>
  <!-- /SECTION -->

  <!-- SECTION 2 -->
  <section
    class="relative h-screen overflow-auto flex flex-col bg-white dark:bg-gray-900 text-slate-900 dark:text-white dark:text-slate-300 md:shadow-lg">
    <div class="px-6 pt-6 shrink w-full text-center">
      <a href="#" class="inline-flex items-center gap-3 mb-4">
        <h1 class="text-4xl md:text-6xl font-extrabold">
          SPA
        </h1>
        <div class="text-green-500">
          <svg width="60" height="60" viewBox="0 0 24 24">
            <path fill="currentColor"
                  d="M2,22V20C2,20 7,18 12,18C17,18 22,20 22,20V22H2M11.3,9.1C10.1,5.2 4,6.1 4,6.1C4,6.1 4.2,13.9 9.9,12.7C9.5,9.8 8,9 8,9C10.8,9 11,12.4 11,12.4V17C11.3,17 11.7,17 12,17C12.3,17 12.7,17 13,17V12.8C13,12.8 13,8.9 16,7.9C16,7.9 14,10.9 14,12.9C21,13.6 21,4 21,4C21,4 12.1,3 11.3,9.1Z"/>
          </svg>
        </div>
      </a>
      <p class="text-md md:text-xl text-gray-600 dark:text-gray-400" data-aos="zoom-y-out" data-aos-delay="150">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam qui sequi enim distinctio provident nihil
        dolorem officia voluptatum, quisquam, molestiae vitae vel, iure dolorum odio saepe placeat.
      </p>
    </div>

    <div class="grow grid px-6">
      <div class="flex justify-center w-full max-w-md mx-auto">
        <?php include 'src/spa-preview.svg'; ?>
      </div>

      <form method="POST" action="t1.php" class="w-full mx-auto max-w-md flex flex-col gap-5 mt-5">
          <label>
              <input
                class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-green-500"
                name="login" type="text" placeholder="Логин">
          </label>
          <label>
              <input
              class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-green-500"
              name="password" type="password" placeholder="Пароль">
          </label>
          <input
          class="shadow cursor-pointer bg-green-500 hover:bg-green-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded"
          name="submit" type="submit" value="Log in">
      </form>
    </div>

    <div class="shrink">
      <?php include 'footer.php'; ?>
    </div>
  </section>
  <!-- /SECTION -->
</div>

<script src="https://unpkg.com/flowbite@1.5.2/dist/flowbite.js"></script>
</body>

</html>
