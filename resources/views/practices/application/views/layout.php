<?php
$headerItems = [
  ['name' => 'main', 'path' => '?url=main'],
  ['name' => 'about', 'path' => '?url=about'],
  ['name' => 'portfolio', 'path' => '?url=portfolio'],
];
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"
    >
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&family=Open+Sans&display=swap" rel="stylesheet">
    <link href="/public/css/app.css" rel="stylesheet">
</head>

<body>

<style>
    body {
        font-family: 'Poppins', sans-serif;
    }
</style>

<header class="px-4 bg-gray-600 text-white shadow-md">
    <div class="container mx-auto flex justify-between items-center">
        <div class="text-2xl grow">
            Create app for module 24.5
        </div>
      <?php
      echo '<ul class="list-none flex items-center' . count($headerItems) . ' gap-x-4 py-4">';
      foreach ($headerItems as $name => $link) {

        $l_name = $link['name'];
        $l_path = $link['path'];

        echo "<li><a class='bg-gray-600 hover:bg-gray-800 text-white font-bold py-2 px-4 rounded' href='$l_path' title='$l_name'>$l_name</a></li>";
      }
      echo '</ul>';
      ?>
    </div>
</header>

<div class="container mx-auto py-4">
  <?php include $view_content ?>
</div>

<footer class="bg-gray-100 text-center lg:text-left">
    <div class="container p-6 mx-auto">
        <div class="mb-auto grid grid-cols-2 md:grid-cols-4 gap-4 p-6">
          <?php
          $footerItems = [
            ['name' => 'links 1', 'link' => [
              ['name' => 'Link 1', 'link' => '#'],
              ['name' => 'Link 1', 'link' => '#'],
              ['name' => 'Link 1', 'link' => '#'],
              ['name' => 'Link 1', 'link' => '#'],
            ]
            ],
            ['name' => 'links 2', 'link' => [
              ['name' => 'Link 2', 'link' => '#'],
              ['name' => 'Link 2', 'link' => '#'],
              ['name' => 'Link 2', 'link' => '#'],
              ['name' => 'Link 2', 'link' => '#'],
            ],
            ],
            ['name' => 'links 3', 'link' => [
              ['name' => 'Link 3', 'link' => '#'],
              ['name' => 'Link 3', 'link' => '#'],
              ['name' => 'Link 3', 'link' => '#'],
              ['name' => 'Link 3', 'link' => '#'],
            ],
            ],
            ['name' => 'links 4', 'link' => [
              ['name' => 'Link 4', 'link' => '#'],
              ['name' => 'Link 4', 'link' => '#'],
              ['name' => 'Link 4', 'link' => '#'],
              ['name' => 'Link 4', 'link' => '#'],
            ],
            ]
          ];

          foreach ($footerItems as $name => $link) {
            $l_name = $link['name'];
            $l_path = $link['link'];

            echo '<div>';
            echo "<h5 class='uppercase font-bold mb-2.5 text-gray-800' >$l_name</h5>";
            echo '<ul>';

            foreach ($link['link'] as $key => $val) {
              $v_name = $val['name'];
              $v_path = $val['link'];

              echo "<li><a class='text-gray-800' href='$v_path' title='$v_name'>$v_name</a></li>";
            }
            echo '</ul>';
            echo '</div>';
          }
          ?>
        </div>
    </div>

    <div class="text-center p-4 text-white bg-gray-600">
        © 2022
    </div>
</footer>

<script src="/public/js/app.js"></script>

</body>

</html>