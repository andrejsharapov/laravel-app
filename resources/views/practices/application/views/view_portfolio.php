<div class="text-center text-xl my-6">
    <p>This portfolio page.</p>
</div>

<p class="text-center">
    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur minus odio pariatur praesentium quia. Beatae
    corporis pariatur qui sapiente vel voluptatem voluptates? Debitis distinctio facilis nemo officiis quas quibusdam
    vel.
</p>
<section class="overflow-hidden text-gray-700 ">
    <div class="container px-5 py-2 mx-auto lg:pt-12 lg:px-32">
        <div class="w-full w-4/5 mx-auto grid grid-cols-3">
          <?php
          for ($i = 1; $i <= $data; $i++) {
            echo '<div class="p-1 md:p-2">';
            echo '<img alt="gallery" class="block object-cover object-center w-full h-full rounded-lg" src="https://picsum.photos/300/200?random=';
            echo $i;
            echo '">';
            echo '</div>';
          }
          ?>
        </div>
    </div>
</section>
