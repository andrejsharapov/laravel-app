<?php
session_start([
  'gc_maxlifetime' => 172800,
  'cookie_lifetime' => 172800,
]);
?>

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
  <link href="https://fonts.googleapis.com/css2?family=Nunito&family=Comfortaa&family=Courgette&display=swap"
        rel="stylesheet">
  <style>
    body {
      font-family: 'Comfortaa', sans-serif;
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

<?php
$count = $_SESSION['count'] ?? 0;
$count++;
$_SESSION['count'] = $count;
$_SESSION['time'] = time();
$login = $_SESSION['login'];
$time = $_SESSION['time'];
$birthday = $_SESSION['birthday'];
$now = date('d.m');

/**
 * записывает введенный день рождения пользователя в сессию,
 * сравнивает дату с текущей,
 * выводит соответствующее уведомление и скидку если true
 * направляет обратно на страницу товаров
 *
 * @return void
 */
function getHappyBirthday()
{
  session_start();

  $birthday = $_POST['birthday'] ?? null;
  $_SESSION['birthday'] = $birthday;

  if ($birthday) {
    header("location: " . $_SERVER["HTTP_REFERER"]);
    exit;
  }
}

getHappyBirthday();

// var_dump($_SESSION);
// var_dump($now);
// var_dump(strcasecmp($birthday, $now) == 0);

if (strcasecmp($birthday, $now) == 0) {
  $setBirthday = true;
}

/**
 * automatic logout
 * if the count of sessions is more than 100
 */
if ($count == 100) {
  // session_regenerate_id();
  session_destroy();

  $new_url = 'login.php';
  header("location: $new_url");
  exit;
}
?>

<body class="h-screen flex flex-col bg-white dark:bg-gray-900 text-gray-900 dark:text-white dark:text-slate-300">
<?php
if ($_SESSION['login']) {
  if ($count == 2) {
    ?>
    <!-- ANCHOR birthday dialog -->
    <div id="birthday-dialog" data-modal-placement="center center" tabindex="-1"
         class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 md:inset-0 h-modal md:h-full">
      <div class="relative p-4 w-full max-w-md h-full md:h-auto">
        <!-- dialog content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
          <button type="button"
                  class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white"
                  data-modal-toggle="birthday-dialog">
            <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                 xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd"
                    d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                    clip-rule="evenodd"></path>
            </svg>
            <span class="sr-only">Close modal</span>
          </button>
          <div class="p-6 text-center">
            <!-- get birthday form -->
            <h3 class="mb-4 text-xl font-medium text-gray-900 dark:text-white">
              Когда у Вас день рождения?
            </h3>
            <form method="POST" action="" class="grid space-y-6">
              <input
                class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-green-500"
                name="birthday" type="text" placeholder="Введите день и месяц, например, 09.09">
              <input
                class="shadow cursor-pointer bg-green-500 hover:bg-green-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded"
                data-modal-toggle="birthday-dialog" name="submit" type="submit" value="Отправить">
            </form>
          </div>
        </div>
      </div>
    </div>

    <?php
  }
} ?>

<!-- SECTION navbar -->
<div class="shrink bg-green-500 shadow-lg">
  <!-- ANCHOR navbar 1 -->
  <nav class="bg-gray-50 border-gray-200 dark:bg-gray-900">
    <div class="flex flex-wrap justify-between items-center mx-auto max-w-screen-xl px-4 md:px-6 py-2.5">
      <a href="#" class="flex items-center gap-3">
        <h1
          class="text-3xl font-extrabold dark:text-white tracking-tight sm:text-4.5xl font-display sm:leading-extra-tight">
          SPA</h1>
        <div class="text-green-500">
          <svg width="36" height="36" viewBox="0 0 24 24">
            <path fill="currentColor"
                  d="M2,22V20C2,20 7,18 12,18C17,18 22,20 22,20V22H2M11.3,9.1C10.1,5.2 4,6.1 4,6.1C4,6.1 4.2,13.9 9.9,12.7C9.5,9.8 8,9 8,9C10.8,9 11,12.4 11,12.4V17C11.3,17 11.7,17 12,17C12.3,17 12.7,17 13,17V12.8C13,12.8 13,8.9 16,7.9C16,7.9 14,10.9 14,12.9C21,13.6 21,4 21,4C21,4 12.1,3 11.3,9.1Z"/>
          </svg>
        </div>
      </a>
      <div class="flex items-center text-sm font-medium">
        <a href="#" class="flex items-center gap-3 mr-6 text-gray-600 dark:text-white hover:underline">
          <?php
          if ($login) {
            ?>
            <svg style="width:24px;height:24px" viewBox="0 0 24 24">
              <path fill="currentColor"
                    d="M14 20H4V17C4 14.3 9.3 13 12 13C13.5 13 15.9 13.4 17.7 14.3C16.9 14.6 16.3 15 15.7 15.5C14.6 15.1 13.3 14.9 12 14.9C9 14.9 5.9 16.4 5.9 17V18.1H14.2C14.1 18.5 14 19 14 19.5V20M23 19.5C23 21.4 21.4 23 19.5 23S16 21.4 16 19.5 17.6 16 19.5 16 23 17.6 23 19.5M12 6C13.1 6 14 6.9 14 8S13.1 10 12 10 10 9.1 10 8 10.9 6 12 6M12 4C9.8 4 8 5.8 8 8S9.8 12 12 12 16 10.2 16 8 14.2 4 12 4Z"/>
            </svg>

            <?php
            echo "<span class='first-letter:uppercase'>$_SESSION[login]</span>";
            ?>

            <?php
          }
          ?>
        </a>
        <a href="#" class="flex items-center gap-3 mr-6 text-gray-600 dark:text-white hover:underline">
          <svg style="width:24px;height:24px" viewBox="0 0 24 24">
            <path fill="currentColor"
                  d="M17,18A2,2 0 0,1 19,20A2,2 0 0,1 17,22C15.89,22 15,21.1 15,20C15,18.89 15.89,18 17,18M1,2H4.27L5.21,4H20A1,1 0 0,1 21,5C21,5.17 20.95,5.34 20.88,5.5L17.3,11.97C16.96,12.58 16.3,13 15.55,13H8.1L7.2,14.63L7.17,14.75A0.25,0.25 0 0,0 7.42,15H19V17H7C5.89,17 5,16.1 5,15C5,14.65 5.09,14.32 5.24,14.04L6.6,11.59L3,4H1V2M7,18A2,2 0 0,1 9,20A2,2 0 0,1 7,22C5.89,22 5,21.1 5,20C5,18.89 5.89,18 7,18M16,11L18.78,6H6.14L8.5,11H16Z"/>
          </svg>
        </a>
        <a href="<?= $login ? 'logout.php' : 'login.php' ?>" class="text-green-600 dark:text-green-500 hover:underline">
          <?php
          if ($login) {
            echo '<svg style="width:24px;height:24px" viewBox="0 0 24 24"><path fill="currentColor" d="M14.08,15.59L16.67,13H7V11H16.67L14.08,8.41L15.5,7L20.5,12L15.5,17L14.08,15.59M19,3A2,2 0 0,1 21,5V9.67L19,7.67V5H5V19H19V16.33L21,14.33V19A2,2 0 0,1 19,21H5C3.89,21 3,20.1 3,19V5C3,3.89 3.89,3 5,3H19Z" /></svg>';
          } else {
            echo "Вход";
          }
          ?>
        </a>
      </div>
    </div>
  </nav>

  <!-- ANCHOR navbar 2 -->
  <nav>
    <div class="py-3 px-4 mx-auto max-w-screen-xl md:px-6 text-white">
      <div class="flex items-center">
        <div class="w-full flex flex-col md:flex-row md:justify-between mt-0 text-sm font-medium">
          <a href="#" class="block lg:inline-block px-3 py-2 hover:underline">
            Женщинам
          </a>
          <a href="#" class="block lg:inline-block px-3 py-2 hover:underline">
            Мужчинам
          </a>
          <a href="#" class="block lg:inline-block px-3 py-2 hover:underline">
            Карты и сертификаты
          </a>
          <?php
          if ($login) {
            ?>
            <a href="#" class="block lg:inline-block px-3 py-2 hover:underline">
              Сессии: <?= $count ?>
            </a>
            <?php
          }
          ?>
          <a href="#" class="block lg:inline-block px-3 py-2 hover:underline">
            Отзывы
          </a>
          <a href="#" class="block lg:inline-block px-3 py-2 hover:underline">
            Контакты
          </a>
        </div>
      </div>
    </div>
  </nav>
</div>
<!-- / SECTION -->

<!-- SECTION ANCHOR content -->
<section class="grow bg-gray-100 dark:bg-gray-900 text-slate-900 dark:text-white dark:text-slate-300">
  <div class="container mx-auto py-6 md:py-12 grid auto-rows-min">

    <div class="px-6">
      <?php
      if ($_SESSION['login']) {
        if ($count >= 2 && $birthday) {
          ?>
          <div
            class="mb-6 p-4 flex justify-center w-full bg-yellow-300 bg-opacity-70 text-gray-700 font-bold rounded-xl">
            <?php
            if ($setBirthday) {
              echo 'Поздравляем с днём рождения! Для Вас скидка 5% на все товары.';
            } else {
              echo 'До Вашего дня рождения осталось совсем немного!';
            }
            ?>
          </div>
          <?php
        }
      }
      ?>
    </div>

    <!-- ANCHOR special offer -->
    <?php
    if ($login) {
      ?>
      <div class="px-6">
        <!-- preview -->
        <a href="#special-offer"
           class="mb-6 flex flex-col w-full overflow-hidden bg-blue-900 bg-opacity-70 rounded-2xl h-72 sm:h-80 md:h-72 lg:h-64 xl:h-80 shadow-xl">
          <div
            class="relative h-full flex flex-col md:flex-row md:justify-between items-center justify-center text-white">
            <!-- img -->
            <img class="hidden md:block md:w-2/6 h-auto object-contain object-left-top" alt=""
                 src="src/spa-preview.svg">

            <!-- info -->
            <div class="flex flex-col px-6 md:px-12 py-6">
              <div class="h-full flex flex-col justify-between md:w-4/5 ml-auto mr-0">
                <div>
                  <h3 class="flex items-center text-4xl font-bold leading-7 lg:uppercase">
                    <?php
                    echo "<span class='hidden xl:inline-block'>$_SESSION[login], </span>";
                    ?>только для Вас!
                  </h3>
                  <p class="mt-6 mb-3 text-lg lg:text-xl">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis et ex in, qui ab cumque alias
                    laborum provident ipsam fugiat nesciunt quas debitis.
                  </p>
                </div>
                <p
                  class="inline-flex items-center rounded-full font-bold text-2xl bg-cool-indigo-200 text-cool-indigo-800">
                  <s>
                    <?= 12 . ' ' . rand(10, 999) . '.' . rand(10, 99) . ' RUB' ?>
                  </s>
                  <sup class="ml-3">
                    <?= 6 . ' ' . rand(10, 999) . '.' . rand(10, 99) . ' RUB' ?>
                  </sup>
                </p>

                <!-- discount time -->
                <div class="hidden xl:block mt-4 bg-red-600 px-3 py-2 rounded text-center">
                  <p>До истечения персональной скидки осталось</p>
                  <p class="text-4xl pt-3">
                    <?php
                    // начало сессии
                    $today = new DateTime('now');

                    // начало следующего дня
                    $tomorrow = new DateTime('tomorrow');

                    // получаем разницу в датах
                    $interval = $tomorrow->diff($today);

                    // выводим разницу
                    echo $interval->format('%H:%m:%s');
                    ?>
                  </p>
                </div>
              </div>
            </div>

            <!-- discount -->
            <div class="absolute right-0 top-0 h-32 w-32">
              <div
                class="absolute transform rotate-45 bg-red-600 text-center text-white font-semibold py-1 right-[-34px] top-[32px] w-[170px]">
                Скидка 50%
              </div>
            </div>
          </div>
        </a>

        <!-- dots -->
        <div class="mt-4 flex justify-center items-center gap-4">
          <div class="w-6 h-6 rounded-full bg-green-600"></div>
          <?php
          for ($n = 0; $n <= 3; $n++) {
            ?>
            <div class="w-4 h-4 rounded-full bg-gray-300"></div>
            <?php
          } ?>
        </div>
      </div>
      <?php
    }
    ?>

    <!-- ANCHOR cards -->
    <div class="px-6">
      <?php
      $titles = [
        '',
        'Новинки и скидки',
        'Возможно, Вам понравится',
        'Вы недавно смотрели'
      ];

      for ($n = 0;
      $n < count($titles);
      $n++) {
      ?>
      <div class=" grid">
        <h2
          class="my-6 text-4xl font-extrabold dark:text-white tracking-tight sm:text-4.5xl font-display sm:leading-extra-tight">
          <?= $titles[$n] ?>
        </h2>

        <!-- cards -->
        <div class="grid md:grid-cols-2 <?php echo $n >= 2 ? 'lg:grid-cols-6' : 'lg:grid-cols-3' ?> gap-6">
          <?php
          $len = 6;

          for ($i = 1; $i <= $len; $i++) {
            ?>
            <!-- card $i -->
            <div>
              <!-- preview -->
              <div
                class="relative overflow flex flex-col w-full overflow-hidden bg-gray-200 dark:bg-gray-800 rounded-2xl <?php echo $n >= 2 ? 'h-72 md:h-32 lg:h-64' : 'h-72 sm:h-80 md:h-72 lg:h-64 xl:h-80' ?>">
                <div class="relative flex items-center justify-center flex-shrink-0 h-full group">
                  <!-- img -->
                  <img
                    class="w-9/10 sm:w-10/12 lg:w-9/10 xl:w-10/12 h-auto rounded-lg shadow-md mx-auto object-cover object-left-top transition ease-in-out duration-300"
                    alt="" src="<?php echo 'src/' . rand(1, $len) . '.svg'; ?>">

                  <!-- discount to happy birthday -->
                  <?php
                  if ($setBirthday) {
                    ?>
                    <div class="absolute right-0 top-0 h-32 w-32">
                      <div
                        class="absolute transform rotate-45 bg-blue-400 text-center text-white font-semibold py-1 right-[-34px] top-[32px] w-[170px]">
                        Скидка 5%
                      </div>
                    </div>
                    <?php
                  }
                  ?>

                  <!-- overlay -->
                  <div
                    class="absolute inset-0 transition duration-200 bg-gray-700 opacity-0 rounded-2xl group-hover:opacity-60"></div>

                  <!-- btn -->
                  <div
                    class="absolute inset-0 flex flex-col items-center justify-center transition duration-200 opacity-0 group-hover:opacity-100">
                    <div class="shadow-sm w-33 rounded-2xl">
                      <a href="#<?= $i ?>"
                         class="w-full justify-center inline-flex items-center px-6 py-2 text-sm font-medium rounded-2xl shadow-sm text-white transition duration-150 bg-cool-green-600 hover:bg-green-600">View
                        details
                      </a>
                    </div>
                  </div>
                </div>
              </div>

              <!-- info -->
              <div>
                <div class="flex flex-col justify-between flex-1 p-6">
                  <a class="block group" href="#<?= $i ?>">
                    <div class="flex justify-between <?php echo $n >= 2 ? 'flex-col' : ' items-center' ?>">
                      <h3
                        class="flex items-center text-xl font-bold leading-7 text-gray-900 group-hover:text-cool-indigo-600 dark:text-white">
                        Product #<?= $i ?>
                      </h3>
                      <span
                        class="inline-flex items-center py-0.5 rounded-full text-sm font-bold font-display bg-cool-indigo-200 text-cool-indigo-800">
														<?= rand(1, 45) . ' ' . rand(10, 999) . '.' . rand(10, 99) . ' RUB' ?>
													</span>
                    </div>
                    <p class="mt-1 text-base leading-6 text-gray-500">
                      Lorem ipsum dolor sit amet consectetur adipisicing elit.
                      <?php
                      if ($n < 2)
                        echo 'Tempora vitae delectus dolores, quod eius laboriosam voluptatibus voluptates quo quasi impedit odit eum ab mollitia, nesciunt, ea consectetur iusto possimus est.';
                      ?>
                    </p>
                  </a>
                </div>
              </div>
            </div>
          <?php }
          ?>
        </div>
        <?php }
        ?>
      </div>
    </div>
  </div>
</section>
<!-- / SECTION -->

<!-- SECTION footer -->
<?php
include 'footer.php';
?>
<!-- / SECTION -->

<script src="https://unpkg.com/flowbite@1.5.2/dist/flowbite.js"></script>

<script>
  const targetEl = document.getElementById('birthday-dialog');
  const modal = new Modal(targetEl);
  modal.show();
</script>

</body>

</html>
