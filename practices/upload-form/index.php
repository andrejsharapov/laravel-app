<form
  method="POST"
  action="upload.php"
  enctype="multipart/form-data"
  class="w-full mx-auto max-w-sm flex flex-col gap-5"
>
    Выберите изображение для загрузки:
    <input
      type="hidden"
      name="MAX_FILE_SIZE"
      value="30000"
    >
    <input
      class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-indigo-500"
      name="fileToUpload"
      id="fileToUpload"
      type="file"
    >

    <input
      class="shadow bg-indigo-500 hover:bg-indigo-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded cursor-pointer"
      name="submit"
      type="submit"
      value="Загрузить"
    >
</form>
