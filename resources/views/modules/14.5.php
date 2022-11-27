<!-- 14.5. Загрузка файлов на сервер -->

<p>
  <a href="" class="underline">upload-form</a>
</p>

<pre><code class="language-php">
var_dump($_FILES['fileToUpload']);

if (isset($_FILES['fileToUpload']) && UPLOAD_ERR_OK === $_FILES['fileToUpload']['error']) {
  echo 'Файл ' . $_FILES['fileToUpload']['name'] . ' успешно загружен на сервер!';
}

</code></pre>
