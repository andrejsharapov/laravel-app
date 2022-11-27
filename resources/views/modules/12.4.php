<!-- 12.4. Строки -->

<div class="mt-4 mb-2 text-xl">Управляющие последовательности в строке в двойных кавычках</div>

<ul class="bg-amber-100 bg-opacity-25 p-4">
  <li><code>\n</code> — новая строка</li>
  <li><code>\r</code> — возврат каретки</li>
  <li><code>\t</code> — горизонтальная табуляция</li>
  <li><code>\v</code> — вертикальная табуляция</li>
  <li><code>\\</code> — обратная косая черта</li>
  <li><code>\$</code> — знак доллара</li>
  <li><code>\"</code> — двойная кавычка</li>
  <li><code>\xномерсимвола</code> — символ ASCII, например <code>\x64</code></li>
  <li><code>\u{номерсимвола}</code> — символ unicode, например <code>\u{1F525}</code></li>
</ul>

<div class="mt-4 mb-2 text-xl">Управляющие последовательности в строке в одинарных кавычках</div>

<ul class="bg-amber-100 bg-opacity-25 p-4">
  <li><code>\\</code> — обратная косая черта</li>
  <li><code>\'</code> — одинарная кавычка</li>
</ul>

<div class="mt-4 mb-2 text-xl">Конкатенация в PHP</div>

<pre><code class="language-php">
  $name = "Andrej";
  $last_name = "Sharapov";

  echo $name . ' ' . $last_name // Andrej Sharapov
</code></pre>

<p>Можно записать все одной переменной и оператор конкатенации можно объединять с оператором присваивания:</p>

<pre><code class="language-php">
  $full_name = 'Andrej';
  $full_name .= ' ';
  $full_name .= 'Sharapov';

  echo $full_name; // Andrej Sharapov
</code></pre>

<div class="mt-4 mb-2 text-xl">Функции для работы со подстроками</div>

<ul class="bg-amber-100 bg-opacity-25 p-4">
  <li><code>strlen()</code> — определяет длину строки</li>
  <li><code>mb_strlen()</code> — определяет длину строки (рек.)</li>
  <li><code>mb_strpos()</code> — функция для поиска первого вхождения подстроки</li>
  <li><code>mb_substr()</code> — возвращает часть строки</li>
</ul>

<pre><code class="language-php">
  echo 'length: ' . strlen('strlen'); // length: 6
  echo 'length: ' . mb_strlen('strlen'); // length: 6
  echo mb_strpos('Привет, Мир!', 'Мир'); // 8
  echo mb_substr('Привет, Мир!', 8, -1); // Мир
  echo mb_substr('Привет, Мир!', -4, 3); // Мир
  </code></pre>

<div class="text-2xl mb-3">Функции для преобразования регистра текста</div>

<ul class="bg-amber-100 bg-opacity-25 p-4">
  <li><code>mb_strtolower</code> — преобразует в нижний регистр;</li>
  <li><code>mb_strtoupper</code> — преобразует в верхний регистр;</li>
  <li><code>mb_convert_case</code> — изменяет регистр в соответствии с заданным <strong>$mode</strong>.</li>
</ul>

<pre><code class="language-php">
  $greeting = 'меняем регистр';

  echo mb_strtolower($greeting) . "\n";
  echo mb_strtoupper($greeting) . "\n";
  echo mb_convert_case($greeting, 2) . "\n"; // 0 - нижний, 1 - верхний, 2 - каждая первая заглавная
  </code></pre>

<ul class="bg-amber-100 bg-opacity-25 p-4">
  <li><code>trim()</code> — удаляет пробелы в начале и конце строки;</li>
  <li><code>explode()</code> — разбивает строку по указанной подстроке и помещает в массив;</li>
  <li><code>str_replace</code> — меняет части строки на другие.</li>
</ul>

<pre><code class="language-php">
 $msg = 'explode — удаляет пробелы в начале и конце строки';
 $separator = ' — ';

 print_r(explode($separator, $msg)); // Array ( [0] => explode [1] => удаляет пробелы в начале и конце строки )
</code></pre>

<pre><code class="language-php">
  $msg = 'str_replace() — меняет части строки на другие';
  $from = 'части';
  $to = 'часть';

  echo str_replace($from, $to, $msg);
</code></pre>
