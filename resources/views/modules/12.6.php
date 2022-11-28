<!-- 12.6. Практическая работа -->

<div class="mt-4 mb-2 text-xl">Task 1 Разбиение и объединение ФИО</div>

<pre><code class="language-php">
$example_persons_array = [
  [
      'full_name' => 'Иванов Иван Иванович',
      'job' => 'tester',
  ],
  [
      'full_name' => 'Степанова Наталья Степановна',
      'job' => 'frontend-developer',
  ],
  [
      'full_name' => 'Пащенко Владимир Александрович',
      'job' => 'analyst',
  ],
  [
      'full_name' => 'Громов Александр Иванович',
      'job' => 'fullstack-developer',
  ],
  [
      'full_name' => 'Славин Семён Сергеевич',
      'job' => 'analyst',
  ],
  [
      'full_name' => 'Цой Владимир Антонович',
      'job' => 'frontend-developer',
  ],
  [
      'full_name' => 'Быстрая Юлия Сергеевна',
      'job' => 'PR-manager',
  ],
  [
      'full_name' => 'Шматко Антонина Сергеевна',
      'job' => 'HR-manager',
  ],
  [
      'full_name' => 'аль-Хорезми Мухаммад ибн-Муса',
      'job' => 'analyst',
  ],
  [
      'full_name' => 'Бардо Жаклин Фёдоровна',
      'job' => 'android-developer',
  ],
  [
      'full_name' => 'Шварцнегер Арнольд Густавович',
      'job' => 'babysitter',
  ],
];

// Выбираем пользователя
$select_user = $example_persons_array[1];

// Получаем ФИО пользователя из массива
$user = $select_user['full_name'];

// echo $user; // string
// echo "<br />";

$split_full_name = explode(' ', $user);

// print_r($split_full_name); // array
// echo "<br />";

// Формируем 3 строки из массива
$surname = $split_full_name[0]; // var_dump($surname); // string
$name = $split_full_name[1];
$patronymic = $split_full_name[2];

/**
 * ANCHOR task function 1.1
 * Принимает как аргумент три строки,
 * возвращает как результат их же,
 * но склеенные через пробел.
 *
 * @param $surname
 * @param $name
 * @param $patronymic
 * @return string
 */
function getFullNameFromParts($surname, $name, $patronymic)
{
    return $surname . ' ' . $name . ' ' . $patronymic;
}

echo getFullNameFromParts($surname, $name, $patronymic); // string
echo "<br />";

/**
 * ANCHOR task function 1.2
 * Принимает как аргумент одну строку,
 * возвращает как результат массив
 * из трёх элементов.
 */

// Get full name
$user = getFullNameFromParts($surname, $name, $patronymic);

// Remove spaces in a string (only for a task)
$sticky_full_name = preg_replace('/\s+/', '', $user);

// echo $sticky_full_name;
// echo "<br />";

/**
 * @param $sticky_full_name
 * @return array
 */
function getPartsFromFullName($sticky_full_name)
{
    $new_arr = explode(' ', $sticky_full_name);

    // print_r($new_arr);
    // echo "<br />";

    $new_arr = [
        'surname' => $new_arr[0],
        'name' => $new_arr[1],
        'patronymic' => $new_arr[2],
    ];

    return $new_arr;
}

print_r(getPartsFromFullName($user));

echo "<br />";

</code></pre>

<div class="mt-4 mb-2 text-xl">Task 2 Сокращение ФИО</div>

<pre><code class="language-php">
// Получаем ФИО пользователя из массива

$user = $example_persons_array[5]['full_name'];

// echo $user;
// echo "<br />";

/**
 * ANCHOR task function
 * Принимает как аргумент строку вида «Иванов Иван Иванович»,
 * возвращает строку вида «Иван И.».
 *
 * @param $user
 * @return string
 */

function getShortName($user)
{

  $full_name = getPartsFromFullName($user);

  $short_user_name = $full_name['name'];
  $short_user_name .= ' ';
  $short_user_name .= mb_substr($full_name['surname'], 0, 1);

  return $short_user_name . '.';
}

echo getShortName($user);
</code></pre>

<div class="mt-4 mb-2 text-xl">Task 3 Функция определения пола по ФИО</div>

<pre><code class="language-php">
// Получаем ФИО пользователя из массива

$user = $example_persons_array[7]['full_name'];

//echo $user;
//echo "<br />";

/**
 * ANCHOR function
 * Принимает как аргумент значения:
 * строку и искомую часть строки,
 * возвращает 1 если окончание строки соответствует искомой части
 * или -1, если не соответствует
 *
 * @param $str
 * @param $el
 * @param $x1
 * @param $x2
 * @return mixed|void
 */

function getSubStr($str, $el, $x1, $x2)
{
  if (mb_substr($str, $x1, $x2) == $el) {
    return $str;
  }
}

/**
 * ANCHOR task function
 * Принимает как аргумент значения:
 * строку и искомую часть строки,
 * возвращает 1 если окончание строки соответствует искомой части
 * или -1, если не соответствует
 *
 * @param $user
 * @return int|void
 */

function getGenderFromName($user)
{
  $patronymic = getPartsFromFullName($user)['patronymic'];
  $name       = getPartsFromFullName($user)['name'];
  $surname    = getPartsFromFullName($user)['surname'];

  // Задаем признаки женского пола
  $woman_patronymic = getSubStr($patronymic, 'вна', -3, 3);
  $woman_name       = getSubStr($name, 'а', -1, 1);
  $woman_surname    = getSubStr($surname, 'ва', -2, 2);

  // Задаем признаки мужского пола
  $man_patronymic   = getSubStr($patronymic, 'ич', -2, 2);
  $man_name         = getSubStr($name, 'й', -1, 1) || getSubStr($name, 'н', -1, 1);
  $man_surname      = getSubStr($surname, 'в', -1, 1);

  $sum = 0;

  // Проверка признаков
  if ($woman_patronymic || $woman_name || $woman_surname) {
    return $sum + -1; // женский пол
  } else if ($man_patronymic || $man_name || $man_surname) {
    return $sum + 1; // мужской пол
  } else {
    return; // неопределенный пол
  }
}

echo getGenderFromName($user);

</code></pre>

<div class="mt-4 mb-2 text-xl">Task 4 Определение возрастно-полового состава</div>

<pre><code class="language-php">
// Определение возрастно-полового состава

$array = $example_persons_array;
$array[1] = [
  "full_name" => "Шарапов Андрей Николаевич",
  "job"       => "Web Designer, Frontend Developer",
];
$array[12] = [
  "full_name" => "Петров Петр Петрович",
  "job"       => "fullstack-developer",
];
$array[14] = [
  "full_name" => "Сидров Сергей Сергеевич",
  "job"       => "babysitter",
];

// print_r($array);

/**
 * @param $array
 * @return void
 */
function getGenderDescription($array)
{
  $count = count($array);
  $new_arr = array_map(function ($person) {
    return $person['full_name'];
  }, $array);

  // foreach ($new_arr as $user) {
  //   getGenderFromName($user);
  // }

  $mans = array_filter($new_arr, function ($el) {
    return getGenderFromName($el) == 1;
  });

  $womans = array_filter($new_arr, function ($el) {
    return getGenderFromName($el) == -1;
  });

  $mans           = count($mans);
  $womans         = count($womans);
  $other          = $count - $mans - $womans;
  $mans_percent   = ($mans * 100) / $count;
  $womans_percent = ($womans * 100) / $count;
  $other_percent  = ($other * 100) / $count;
  $mans_percent   = round($mans_percent, 1) . '%';
  $womans_percent = round($womans_percent, 1) . '%';
  $other_percent  = round($other_percent, 1) . '%';

  echo "<div class='w-full divide-y'>";
  echo "<div class='p-2 text-lg font-semibold'>Гендерный состав аудитории</div>";
  echo "<div class='p-2 flex justify-between hover:bg-gray-50'><span>Мужчины</span> <strong>$mans ($mans_percent)</strong></div>";
  echo "<div class='p-2 flex justify-between hover:bg-gray-50'><span>Женщины</span> <strong>$womans ($womans_percent)</strong></div>";
  echo "<div class='p-2 flex justify-between hover:bg-gray-50'>Не удалось определить <strong>$other ($other_percent)</strong></div>";
  echo "<div class='h-1 bg-gray-400'></div>";
  echo "<div class='p-2 flex justify-between bg-green-500'><span>Всего человек:</span> <strong>$count</strong></div>";
  echo "</div>";
};

echo getGenderDescription($array);

</code></pre>

<div class="mt-4 mb-2 text-xl">Task 5 Идеальный подбор пары</div>

<pre><code class="language-php">
// Преобразуем массив в схожий по структуре с массивом $example_persons_array

$array = $example_persons_array;
$array[1] = [
    "full_name" => "ДОБРОВ Андрей АлекСеевИч",
    "job"       => "Web Designer, Frontend Developer",
];
$array[12] = [
    "full_name" => "ПетровА Анна ВАСИЛЬЕВНА",
    "job"       => "fullstack-developer",
];
$array[8] = [
    "full_name" => "СИДОРОВ сергей СЕРГЕЕВИЧ",
    "job"       => "babysitter",
];

// Получаем данные пользователя из массива
$user = $array[12]['full_name'];

echo $user;
echo "<br />";

// Задаем регистр ФИО пользователя
$user = mb_convert_case($user, 2);

// Подготавливаем необходимые строки для работы с функцией
$surname        = getPartsFromFullName($user)['surname'];
$name           = getPartsFromFullName($user)['name'];
$patronymic     = getPartsFromFullName($user)['patronymic'];

/**
 * @param $surname
 * @param $name
 * @param $patronymic
 * @param $array
 * @return void
 */
function getPerfectPartner($surname, $name, $patronymic, $array)
{
    // Склеиваем ФИО пользователя
    $user = getFullNameFromParts($surname, $name, $patronymic);

    // Рандомно достаем пользователя из массива
    $random_user = array_rand($array);
    $random_user = $array[$random_user]['full_name'];

    // Задаем правильный регистр
    $random_user = mb_convert_case($random_user, 2);

    // Генерируем процент совместимости
    $min     = 50;
    $max     = 100;
    $percent = rand($min, $max) . '.' . (rand(0, 99) * 100) / $max;

    if ($random_user !== $user) {
        // Проверяем, что искомый объект - действительно человек
        if (getGenderFromName($random_user) == 0) {
            echo '<div class="p-3 text-center rounded bg-red-400">';
            echo 'Этот человек Вам определённо не подходит!';
            echo '</div>';
        } else {
            if (getGenderFromName($random_user) != getGenderFromName($user)) {
                // Если проверка на совместимость успешна
                echo '<div class="p-3 text-center rounded bg-pink-300">';
                echo getShortName($user) . ' + ' . getShortName($random_user) . " = 💕 Идеально на $percent% 💕";
                echo '</div>';
            } else {
                // Если есть совпадение по половому признаку
                echo getPerfectPartner($surname, $name, $patronymic, $array);
            }
        }

        // Когда всё идеально...
    } else {
        echo '<div class="p-3 text-center rounded bg-green-200">';
        echo "✨ $user = 💕 Идеально на $max% 💕 ✨";
        echo '</div>';
    }
}

getPerfectPartner($surname, $name, $patronymic, $array);

</code></pre>
