<?php
var_dump($_FILES['fileToUpload']);

if (isset($_FILES['fileToUpload']) && UPLOAD_ERR_OK === $_FILES['fileToUpload']['error']) {
  echo 'Файл ' . $_FILES['fileToUpload']['name'] . ' успешно загружен на сервер!';
}
