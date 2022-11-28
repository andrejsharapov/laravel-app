<!-- 12.5. Массивы -->
<!-- https://www.php.net/manual/ru/ref.array.php -->

<div class="mt-4 mb-2 text-xl">Массивы</div>

<ul class="p-4 bg-amber-100 bg-opacity-25">
  <li><code>ассоциативные массивы</code> — массивы, в которых ключами являются строки;</li>
  <li><code>рекурсивные массивы</code> — массивы, которые содержат в себе ссылку на самих себя;</li>
</ul>

<p>
  <code>intval</code> — Возвращает целое значение переменной
</p>

<p>
  <code>implode</code> — Объединяет элементы массива в строку
</p>

<pre><code class="language-php">
$arr[2] = '300';
$arr; // заменяем индекс 2 новым значением
</code></pre>

<pre><code class="language-php">
$arr[12] = '1200';
$arr; // добавляем новое значение в массив
</code></pre>

<pre><code class="language-php">
$arr[] = '2400';
$arr; // push() в массив
</code></pre>

<div class="mt-4 mb-2 text-xl">Обход массива (foreach)</div>

<pre><code class="language-php">
// Числовые массивы

$arr = [ 'a', 'b', 'c', 'd', 'e'];

for ($i = 0; $i <= count($arr); $i++) {
  echo "$arr[$i] \n";
}
</code></pre>

<pre><code class="language-php">
// Ассоциативные одномерные массивы

$arr = [
  'a' => 'a1',
  'b' => 'b1',
  'c' => 'c1',
  'd' => 'd1',
  'e' => 'e1',
];

foreach ($arr as $key => $val) {
  echo "<a href='$val'>$key</a> \n";
}
</code></pre>

<pre><code class="language-php">
// Многомерные массивы

$arr = [
  ['a' => 'a1'],
  ['b' => 'b1'],
  ['c' => 'c1'],
  ['d' => 'd1'],
  ['e' => 'e1'],
];

foreach ($arr as $key1 => $val1) {
  foreach ($val1 as $key2 => $val2) {
    echo "<a href='$val2'>$key2</a> \n";
  }
}
</code></pre>

<div class="mt-4 mb-2 text-xl">Операции над массивами</div>

<ul class="p-4 bg-amber-100 bg-opacity-25">
  <li><code>count($array)</code> — // array.length</li>
  <li><code>array_merge($a,$b)</code> — concat(), при этом сохранятся только уникальные ключи (Для числовых массивов просто произойдёт объединение)</li>
  <li><code>array_combine($a,$b)</code> — создаёт новый массив, где $a = ключ, $b = значение</li>
  <li><code>array_values($array)</code> — возвращает <strong>только значения</strong> в виде числового массива</li>
  <li><code>array_keys($array)</code> — возвращает <strong>только ключи</strong> в виде числового массива <strong>(ключи становятся значениями)</strong></li>
  <li><code>array_flip($array)</code> — меняет ключи и значения местами</li>
  <li><code>array_filter($array, $function)</code> — array.filter</li>
  <li><code>array_diff($a, $b)</code> — возвращает новый массив из отличающихся значений</li>
  <li><code>sort($a, $flags)</code> — </li>
  <li>
    <ul class="pl-4">
      <li><code>SORT_REGULAR</code> — обычное сравнение;</li>
      <li><code>SORT_NUMERIC</code> — числовое сравнение;</li>
      <li><code>SORT_STRING</code> — строковое сравнение;</li>
      <li><code>SORT_LOCALE_STRING</code> — сравнивает элементы, как строки с учётом текущей локали. Используется локаль, которую можно изменять с помощью функции setlocale();</li>
      <li><code>SORT_NATURAL</code> — сравнение элементов как строк, используя естественное упорядочение;</li>
      <li><code>SORT_FLAG_CASE</code> — для сортировки строк без учета регистра: <code>SORT_STRING | SORT_FLAG_CASE</code> или <code>SORT_NATURAL | SORT_FLAG_CASE</code> .</li>
    </ul>
  </li>
</ul>

<pre><code class="language-php">
// array_filter()

$arr = ['a', 'b', 'c', 'd'];
$el;

array_filter($arr, function ($el) {
    return $el == 'c';
  })
</code></pre>

<pre><code class="language-php">
// array_diff()

$arr1 = ['a', 'b', 'c', 'd'];
$arr2 = ['a', 'c', 'r', 'd'];

array_diff($arr1, $arr2); // [1] => b
</code></pre>

<pre><code class="language-php">
// sort($arr, $flags)

$arr3 = ['el1', 'el2', 'El3', 'el4', 'el10', 'El6', 'el12'];

sort($arr3, SORT_NATURAL);
sort($arr3, SORT_REGULAR);
sort($arr3, SORT_NUMERIC);
sort($arr3, SORT_STRING);

print_r($arr3);
</code></pre>
