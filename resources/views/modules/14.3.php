<!--14.3. GET- и POST-запросы. Сценарии их использования-->

<p>
  GET — это самый простой тип HTTP-запроса, которым браузер пользуется каждый раз, когда вы нажимаете ссылку или вводите
  URL-адрес в адресную строку. В результате запроса GET никогда не последует изменений данных на стороне сервера.
</p>

<p>
  POST —
</p>

<p>
  <a href="#" class="underline">Login form</a>
</p>

<pre><code class="language-php">
echo 'REQUEST: ' . PHP_EOL;

var_dump($_REQUEST);

echo 'GET REQUEST: ' . PHP_EOL;

var_dump($_GET);

echo 'POST REQUEST: ' . PHP_EOL;

var_dump($_POST);

echo 'Привет, пользователь ' . $_POST['login'] . '!' . PHP_EOL;

</code></pre>
