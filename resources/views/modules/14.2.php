<!-- 14.2. HTTP. HTTP-коды. HTTP-методы -->

<p>
  HTTP расшифровывается как HyperText Transfer Protocol (протокол передачи гипертекста). Сейчас с помощью HTTP
  отправляют и любые другие типы данных. Это протокол, который описывает взаимодействие двух машин — как правило,
  клиента и сервера. Взаимодействие осуществляется на базе сообщений двух видов — запрос (Request) и ответ (Response).
</p>

<p>
  <a href="https://curl.se/download.html" class="underline">cURL (Client URL)</a>.
</p>

<div class="mt-4 mb-2 text-xl">Ошибки</div>

<ul class="p-4 bg-amber-100 bg-opacity-25">
  <li><code>102</code> — обработка</li>
  <li><code>301</code> — перемещено навсегда</li>
  <li><code>302</code> — перемещено временно</li>
  <li><code>400</code> — некорректный запрос</li>
  <li><code>401</code> — не авторизован</li>
  <li><code>403</code> — запрещено</li>
  <li><code>500</code> — внутренняя ошибка сервера</li>
  <li><code>502</code> — ошибочный шлюз</li>
  <li><code>504</code> — шлюз не отвечает</li>
</ul>

<div class="mt-4 mb-2 text-xl">Методы в HTTP</div>

<table class="w-full mb-6 overflow-hidden shadow md:rounded-lg">
  <thead class="bg-gray-100">
  <tr>
    <th>Метод</th>
    <th>Описание метода</th>
  </tr>
  </thead>
  <tbody class="divide-y">
  <tr class="hover:bg-gray-50">
    <td>GET</td>
    <td>Запрашивает представление ресурса. Запросы с использованием этого метода могут только извлекать данные.</td>
  </tr>
  <tr class="hover:bg-gray-50">
    <td>HEAD</td>
    <td>Запрашивает ресурс так же, как и метод GET, но без тела ответа.</td>
  </tr>
  <tr class="hover:bg-gray-50">
    <td>POST</td>
    <td>Используется для отправки сущностей к определенному ресурсу. Часто вызывает изменение состояния или какие-то
      побочные эффекты на сервере.
    </td>
  </tr>
  <tr class="hover:bg-gray-50">
    <td>PUT</td>
    <td>Заменяет все текущие представления ресурса данными запроса.</td>
  </tr>
  <tr class="hover:bg-gray-50">
    <td>DELETE</td>
    <td>Удаляет указанный ресурс.</td>
  </tr>
  <tr class="hover:bg-gray-50">
    <td>CONNECT</td>
    <td>Устанавливает «туннель» к серверу, определённому по ресурсу.</td>
  </tr>
  <tr class="hover:bg-gray-50">
    <td>OPTIONS</td>
    <td>Используется для описания параметров соединения с ресурсом.</td>
  </tr>
  <tr class="hover:bg-gray-50">
    <td>TRACE</td>
    <td>Выполняет вызов возвращаемого тестового сообщения с ресурса.</td>
  </tr>
  <tr class="hover:bg-gray-50">
    <td>PATCH</td>
    <td>Используется для частичного изменения ресурса.</td>
  </tr>
  </tbody>
</table>

<style>
  table th,
  table td {
    padding: 0.75rem;
  }
</style>

