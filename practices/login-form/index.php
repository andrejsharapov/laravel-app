<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/milligram/1.4.1/milligram.css">
</head>

<body style="display: grid; place-content: center;height: 100vh; margin: 0;">

<div class="container">
    <form
            method="POST"
            action="login.php"
            class="w-full mx-auto max-w-sm flex flex-col gap-5"
    >
        <label for="login">
            login
            <input
                    id="login"
                    class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-indigo-500"
                    name="login"
                    type="text"
                    placeholder="Логин"
            >
        </label>

        <label for="password">
            password
            <input
                    id="login"
                    class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-indigo-500"
                    name="password"
                    type="password"
                    placeholder="Пароль"
            >
        </label>

        <input
                class="shadow bg-indigo-500 hover:bg-indigo-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded"
                name="submit"
                type="submit"
                value="Войти"
                style="width: 100%;"
        >
    </form>

</div>

</body>
</html>