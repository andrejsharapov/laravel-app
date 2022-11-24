<div
  class="grid grid-cols-2 place-content-center w-full h-full"
  style="
    background-size: 50vw;
    background-repeat: no-repeat;
    background-position: 0 50%;
    background-image: url('/public/src/phpinfo-gd.png');
  "
>
  <div></div>
  <div class="ml-auto mr-0 flex justify-center">
    <div class="flex flex-col md:flex-row md:max-w-xl rounded-lg bg-white">
      <img
        class="w-full h-96 md:h-auto object-cover md:w-48 rounded-lg"
        src="<?php echo $data ? $data['image'] : 'https://source.unsplash.com/collection/3319466' ?>"
        alt=""
      />

      <div class="px-6 flex flex-col justify-start">
        <h5 class="text-gray-900 text-xl font-medium mb-2">
          <?php echo $data['title']; ?>
        </h5>
        <p class="text-gray-700 text-base mb-4">
          <?php echo $data['description']; ?>
        </p>
        <p class="text-gray-600 text-xs">
          Page created
          <?php echo $data['created_at']; ?>
        </p>

        <a
          href="?url=about"
          class="mt-4 text-center bg-<?= setColor(); ?>-600 hover:bg-<?= setColor(); ?>-700 text-white font-bold py-2 px-4 rounded"
        >
          About author
        </a>
      </div>
    </div>
  </div>
</div>
