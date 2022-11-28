<!--// 11.6. Типы данных. Операции над числами и строками -->
<?php
$caption = "11.6. Типы данных. Операции над числами и строками";
?>

<div class="mt-4 mb-2 text-xl">
  Приведение типа — преобразование значения одного типа в значение другого типа.
</div>

<pre><code class="language-php">
  (int), (integer) — приведение к integer;
  (bool), (boolean) — приведение к boolean;
  (float), (double), (real) — приведение к float;
  (string) — приведение к string;
  (array) — приведение к array;
  (object) — приведение к object.
  </code></pre>

<div class="mt-4 mb-2 text-xl">Явное приведение типов</div>

<pre><code class="language-php">
  $x = 3; // число 3
  $str = (string)$x; // строка '3'
  </code></pre>

<div class="mt-4 mb-2 text-xl">Неявное приведение типов</div>

<pre><code class="language-php">
  $x = "0"; // $x это строка '0'
  $x += 2; // $x теперь целое число (2)
  $x = $foo + 1.3; // $x число с плавающей точкой (3.3)
  $x = 5 + "10 php"; // $foo это целое число (15)
  </code></pre>

<div class="mt-4 mb-2 text-xl">11.6.3. Арифметические операторы</div>

<ul class="mt-3 p-4 rounded bg-blue-100 bg-opacity-40">
  <li><s>1. Сравнение</s></li>
  <li><s>2. Логическое отрицание</s></li>
  <li><s>3. Присваивание</s></li>
  <li>4. Сложение</li>
  <li>5. Вычитание</li>
  <li>6. Возведение в степень</li>
  <li><s>7. Инкремент</s></li>
</ul>

<div class="mt-4 mb-2 text-xl">11.6.8. Какие операторы используются в работе с числами?</div>

<ul class="mt-3 p-4 rounded bg-blue-100 bg-opacity-40">
  <li><s>1. Конкатенация</s></li>
  <li>2. Арифметические</li>
  <li>3. Инкремента</li>
  <li><s>4. Логические</s></li>
  <li>5. Присваивания</li>
  <li>6. Декремента</li>
  <li>7. Сравнения</li>
</ul>

<style>
  s {
    color: red;
    opacity: 0.47;
  }
</style>
