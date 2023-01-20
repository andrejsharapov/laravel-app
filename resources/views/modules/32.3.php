// 32.3. Docker

<div class="text-2xl mt-4 mb-2">Установка и настройка для Windows</div>

<pre><code class="language-md">
- https://docs.docker.com/desktop/install/windows-install/
- https://learn.microsoft.com/ru-ru/windows/wsl/install/
- https://www.privateinternetaccess.com/blog/changing-your-dns-settings-on-windows-10/
</code></pre>

<pre><code class="language-md">
- Docker Engine — это установленный вами пакет, который включает в себя сам Docker-сервер, с которым мы будем работать, API для взаимодействия и интерфейс командной строки (CLI). Это сердце Docker.
- Docker Контейнер — рабочий экземпляр, содержащий наше ПО. Создаётся из образа. Может открывать порты (вспоминаем проброс портов для виртуалок) и работать с директориями хостовой машины.
- Docker Образ — основа для контейнера. После того, как образ создан, каждый шаг кэшируется и может быть использован повторно. Время построения образа напрямую зависит от количества шагов.
- Volume — общая директория между контейнером и хостовой ОС. Обратите внимание, что все данные внутри контейнера, если они не сохранены в Volume, будут уничтожены при остановке контейнера!
- Реестр — аналог Git-репозитория для Docker. Содержит готовые образы Docker.
- Docker Hub — аналог GitHub, хранящий публичные доступные образы.
</code></pre>

<div class="text-2xl mt-4 mb-2">Запуск контейнера</div>

<pre><code class="language-shell">
$ docker run ubuntu /bin/echo 'ContainerName'
</code></pre>

<ul>
    <li>Docker run — команда запуска контейнера.</li>
    <li>Ubuntu — образ, который хотим запустить. В данном случае — эмуляция ОС Ubuntu (не сама система, но внутри
        контейнера будут понятны те же команды, что и в обычной ОС). Когда мы вызываем образ по имени, Docker будет
        искать образ сначала на хосте. Если его там нет, то поиск продолжится на Docker Hub.
    </li>
</ul>

<div class="text-2xl mt-4 mb-2">Dockerfile</div>

<pre><code class="language-md">
- FROM — базовый образ; в предыдущем примере это был Ubuntu,
- RUN — выполнение команды в образе при его сборке,
- EN — установка переменной окружения,
- WORKDIR — установка рабочей директории,
- VOLUME — создание общей папки,
- CMD — выполнение команды при запуске контейнера.
</code></pre>

<pre><code class="language-php">
FROM ubuntu:latest

RUN apt-get update
RUN apt-get install -y nginx

COPY ./conf/nginx/hosts/mysite.local.conf /etc/nginx/sites-enabled/mysite.local.conf

WORKDIR /data

VOLUME /data

EXPOSE 80

CMD ["nginx", "-g", "daemon off;"]
</code></pre>

<div class="text-2xl mt-4 mb-2">conf/nginx/hosts/</div>

<pre><code class="language-php">
server {
    # указываем 80 порт для соединения
    listen 80;

    # нужно указать, какому доменному имени принадлежит наш конфиг
    server_name mysite.local;

    # задаём корневую директорию
    root /data/mysite.local;

    # стартовый файл
    index index.html;

    # при обращении к статическим файлам логи не нужны, равно как и обращение к fpm
    location ~* .(jpg|jpeg|gif|css|png|js|ico|html)$ {
        access_log off;
        expires max;
    }
}
</code></pre>

<div class="text-2xl mt-4 mb-2">Запуск локального образа</div>

<pre><code class="language-shell">
$ docker build -t test-nginx .
</code></pre>

<ul>
    <li><code>docker bulid</code> создаcт новый локальный образ, смотря на файл Dockerfile в той же директории (точка в
        команде — это ссылка на текущую директорию).
    </li>
    <li><code>-t</code> задаст имя для образа.</li>
</ul>

<div class="text-2xl mt-4 mb-2"></div>

<ul>
    <li><code>docker images</code> — увидеть список образов, которые нам доступны в локальном репозитории.</li>
    <li><code>docker rmi IMAGE_ID</code> — удалить любой из образов.</li>
    <li><code>docker ps</code> — увидеть, какие контейнеры сейчас запущены.</li>
    <li><code>docker exec -ti IMAGE_ID /bin/bash</code> — заходить на сам контейнер с хостовой машины, например, если мы
        хотим почитать логи на нём.
    </li>
</ul>

<pre><code class="language-shell">
$ docker run -d -p 80:80 -v C:\Users\user\code:/data/mysite.local/:rw test-nginx
</code></pre>

<pre><code class="language-shell">
Эта команда:
    - в фоновом режиме (-d)
    - запустит контейнер
    - на базе образа test-nginx и пробросом портов (-p) 80->80,
    - а также общей директорией (-v)
    - из C:\Users\user\code (создать index.html файл в директории)
    - на хосте в /data/mysite.local (прописать хост в hosts)
    - в контейненере с правами на запись и чтение (:rw).
</code></pre>
