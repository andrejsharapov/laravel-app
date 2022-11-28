<form
  method="POST"
  action="process.php"
  class="w-full mx-auto max-w-sm flex flex-col gap-5"
>
  <label for="login">
    <input
      id="login"
      class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-indigo-500"
      name="login"
      type="text"
      placeholder="Логин"
    >
  </label>

  <label for="password">
    <input
      id="password"
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
  >
</form>
