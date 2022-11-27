<table class="w-full mb-6 overflow-hidden md:rounded-lg">
  <thead class="bg-gray-100">
  <tr>
    <th class="border-r">A</th>
    <th class="border-r">B</th>
    <th class="border-r">!A</th>
    <th class="border-r">A || B</th>
    <th class="border-r">A && B</th>
    <th>A xor B</th>
  </tr>
  </thead>
  <tbody>
  <!-- ANCHOR row 1 -->
  <tr class="bg-white hover:bg-gray-50 border-b">
    <td>0</td>
    <td>0</td>
    <td>
      <?php
      $a = 0;
      echo !$a;
      ?>
    </td>
    <td>
      <?php
      $a = 0;
      $b = 0;

      print $a || $b;
      ?>
    </td>
    <td>
      <?php
      $a = 0;
      $b = 0;

      echo $a && $b;
      ?>
    </td>
    <td>
      <?php
      $a = 0;
      $b = 0;

      echo $a xor $b;
      ?>
    </td>
  </tr>
  <!-- ANCHOR row 2 -->
  <tr class="bg-white hover:bg-gray-50 border-b">
    <td>0</td>
    <td>1</td>
    <td>
      <?php
      if ($a === 0) echo !$a
      ?>
    </td>
    <td>
      <?php
      $a = 0;
      $b = 1;

      echo $a || $b
      ?>
    </td>
    <td>
      <?php
      $a = 0;
      $b = 1;

      echo $a && $b;
      if ($a == 0 && $b == 1) print $b;
      ?>
    </td>
    <td>
      <?php
      $a = 0;
      $b = 1;

      echo $a xor $b;
      ?>
    </td>
  </tr>
  <!-- ANCHOR row 3 -->
  <tr class="bg-white hover:bg-gray-50 border-b">
    <td>1</td>
    <td>0</td>
    <td>
      <?php
      $a = 1;

      echo !$a;
      ?>
    </td>
    <td>
      <?php
      $a = 1;
      $b = 0;

      echo $a || $b;
      ?>
    </td>
    <td>
      <?php
      $a = 1;
      $b = 0;

      echo $a && $b;
      ?>
    </td>
    <td>
      <?php
      $a = 1;
      $b = 0;

      echo $a xor $b;
      ?>
    </td>
  </tr>
  <!-- ANCHOR row 4 -->
  <tr class="bg-white hover:bg-gray-50">
    <td>1</td>
    <td>1</td>
    <td>
      <?php
      if ($a === 1) echo !$a;
      ?>
    </td>
    <td>
      <?php
      $a = 1;
      $b = 1;

      echo $a || $b;
      ?>
    </td>
    <td>
      <?php
      $a = 1;
      $b = 1;

      echo $a && $b;
      ?>
    </td>
    <td>
      <?php
      $a = 1;
      $b = 1;

      echo $a xor $b;
      ?>
    </td>
  </tr>
  </tbody>
</table>

<style>
  table th,
  table td {
    padding: 0.75rem;
  }
</style>

<div class="grid lg:grid-cols-2 gap-6">
  <!-- ANCHOR == Равно: сравнивает значения двух операндов-->
  <div>
    <div class="mb-3 ml-6 text-sm font-semibold">Гибкое сравнение в PHP</div>

    <table class="w-full mb-6 overflow-hidden md:rounded-lg">
      <thead class="bg-gray-100">
      <tr>
        <th class="border-r bg-gray-300"></th>
        <th class="border-r">true</th>
        <th class="border-r">false</th>
        <th class="border-r">1</th>
        <th class="border-r">0</th>
        <th class="border-r">-1</th>
        <th class="border-r">"1"</th>
        <th class="border-r">null</th>
        <th class="border-r">"php"</th>
      </tr>
      </thead>
      <tbody>
      <tr class="bg-white hover:bg-gray-50 border-b">
        <td class="bg-gray-100 font-bold border-r">true</td>
        <td><?php echo true == true ?></td>
        <td><?php echo true == false ?></td>
        <td><?php echo true == 1 ?></td>
        <td><?php echo true == 0 ?></td>
        <td><?php echo true == -1 ?></td>
        <td><?php echo true == "1" ?></td>
        <td><?php echo true == null ?></td>
        <td><?php echo true == "php" ?></td>
      </tr>
      <tr class="bg-white hover:bg-gray-50 border-b">
        <td class="bg-gray-100 font-bold border-r">false</td>
        <td><?php echo false == true ?></td>
        <td><?php echo false == false ?></td>
        <td><?php echo false == 1 ?></td>
        <td><?php echo false == 0 ?></td>
        <td><?php echo false == -1 ?></td>
        <td><?php echo false == "1" ?></td>
        <td><?php echo false == null ?></td>
        <td><?php echo false == "php" ?></td>
      </tr>
      <tr class="bg-white hover:bg-gray-50 border-b">
        <td class="bg-gray-100 font-bold border-r">1</td>
        <td><?php echo 1 == true ?></td>
        <td><?php echo 1 == false ?></td>
        <td><?php echo 1 == 1 ?></td>
        <td><?php echo 1 == 0 ?></td>
        <td><?php echo 1 == -1 ?></td>
        <td><?php echo 1 == "1" ?></td>
        <td><?php echo 1 == null ?></td>
        <td><?php echo 1 == "php" ?></td>
      </tr>
      <tr class="bg-white hover:bg-gray-50 border-b">
        <td class="bg-gray-100 font-bold border-r">0</td>
        <td><?php echo 0 == true ?></td>
        <td><?php echo 0 == false ?></td>
        <td><?php echo 0 == 1 ?></td>
        <td><?php echo 0 == 0 ?></td>
        <td><?php echo 0 == -1 ?></td>
        <td><?php echo 0 == "1" ?></td>
        <td><?php echo 0 == null ?></td>
        <td><?php echo 0 == "php" ?></td>
      </tr>
      <tr class="bg-white hover:bg-gray-50 border-b">
        <td class="bg-gray-100 font-bold border-r">-1</td>
        <td><?php echo -1 == true ?></td>
        <td><?php echo -1 == false ?></td>
        <td><?php echo -1 == 1 ?></td>
        <td><?php echo -1 == 0 ?></td>
        <td><?php echo -1 == -1 ?></td>
        <td><?php echo -1 == "1" ?></td>
        <td><?php echo -1 == null ?></td>
        <td><?php echo -1 == "php" ?></td>
      </tr>
      <tr class="bg-white hover:bg-gray-50 border-b">
        <td class="bg-gray-100 font-bold border-r">"1"</td>
        <td><?php echo "1" == true ?></td>
        <td><?php echo "1" == false ?></td>
        <td><?php echo "1" == 1 ?></td>
        <td><?php echo "1" == 0 ?></td>
        <td><?php echo "1" == -1 ?></td>
        <td><?php echo "1" == "1" ?></td>
        <td><?php echo "1" == null ?></td>
        <td><?php echo "1" == "php" ?></td>
      </tr>
      <tr class="bg-white hover:bg-gray-50 border-b">
        <td class="bg-gray-100 font-bold border-r">null</td>
        <td><?php echo null == true ?></td>
        <td><?php echo null == false ?></td>
        <td><?php echo null == 1 ?></td>
        <td><?php echo null == 0 ?></td>
        <td><?php echo null == -1 ?></td>
        <td><?php echo null == "1" ?></td>
        <td><?php echo null == null ?></td>
        <td><?php echo null == "php" ?></td>
      </tr>
      <tr class="bg-white hover:bg-gray-50">
        <td class="bg-gray-100 font-bold border-r">"php"</td>
        <td><?php echo "php" == true ?></td>
        <td><?php echo "php" == false ?></td>
        <td><?php echo "php" == 1 ?></td>
        <td><?php echo "php" == 0 ?></td>
        <td><?php echo "php" == -1 ?></td>
        <td><?php echo "php" == "1" ?></td>
        <td><?php echo "php" == null ?></td>
        <td><?php echo "php" == "php" ?></td>
      </tr>
      </tbody>
    </table>
  </div>

  <!-- ANCHOR === Тождественно равно: сравнивает значение и тип операндов -->
  <div>
    <div class="mb-3 ml-6 text-sm font-semibold">Жёсткое сравнение в PHP</div>

    <table class="w-full mb-6 overflow-hidden md:rounded-lg">
      <thead class="bg-gray-100">
      <tr>
        <th class="border-r bg-gray-300"></th>
        <th class="border-r">true</th>
        <th class="border-r">false</th>
        <th class="border-r">1</th>
        <th class="border-r">0</th>
        <th class="border-r">-1</th>
        <th class="border-r">"1"</th>
        <th class="border-r">null</th>
        <th class="border-r">"php"</th>
      </tr>
      </thead>
      <tbody>
      <tr class="bg-white hover:bg-gray-50 border-b">
        <td class="bg-gray-100 font-bold border-r">true</td>
        <td><?php echo true === true ?></td>
        <td><?php echo true === false ?></td>
        <td><?php echo true === 1 ?></td>
        <td><?php echo true === 0 ?></td>
        <td><?php echo true === -1 ?></td>
        <td><?php echo true === "1" ?></td>
        <td><?php echo true === null ?></td>
        <td><?php echo true === "php" ?></td>
      </tr>
      <tr class="bg-white hover:bg-gray-50 border-b">
        <td class="bg-gray-100 font-bold border-r">false</td>
        <td><?php echo false === true ?></td>
        <td><?php echo false === false ?></td>
        <td><?php echo false === 1 ?></td>
        <td><?php echo false === 0 ?></td>
        <td><?php echo false === -1 ?></td>
        <td><?php echo false === "1" ?></td>
        <td><?php echo false === null ?></td>
        <td><?php echo false === "php" ?></td>
      </tr>
      <tr class="bg-white hover:bg-gray-50 border-b">
        <td class="bg-gray-100 font-bold border-r">1</td>
        <td><?php echo 1 === true ?></td>
        <td><?php echo 1 === false ?></td>
        <td><?php echo 1 === 1 ?></td>
        <td><?php echo 1 === 0 ?></td>
        <td><?php echo 1 === -1 ?></td>
        <td><?php echo 1 === "1" ?></td>
        <td><?php echo 1 === null ?></td>
        <td><?php echo 1 === "php" ?></td>
      </tr>
      <tr class="bg-white hover:bg-gray-50 border-b">
        <td class="bg-gray-100 font-bold border-r">0</td>
        <td><?php echo 0 === true ?></td>
        <td><?php echo 0 === false ?></td>
        <td><?php echo 0 === 1 ?></td>
        <td><?php echo 0 === 0 ?></td>
        <td><?php echo 0 === -1 ?></td>
        <td><?php echo 0 === "1" ?></td>
        <td><?php echo 0 === null ?></td>
        <td><?php echo 0 === "php" ?></td>
      </tr>
      <tr class="bg-white hover:bg-gray-50 border-b">
        <td class="bg-gray-100 font-bold border-r">-1</td>
        <td><?php echo -1 === true ?></td>
        <td><?php echo -1 === false ?></td>
        <td><?php echo -1 === 1 ?></td>
        <td><?php echo -1 === 0 ?></td>
        <td><?php echo -1 === -1 ?></td>
        <td><?php echo -1 === "1" ?></td>
        <td><?php echo -1 === null ?></td>
        <td><?php echo -1 === "php" ?></td>
      </tr>
      <tr class="bg-white hover:bg-gray-50 border-b">
        <td class="bg-gray-100 font-bold border-r">"1"</td>
        <td><?php echo "1" === true ?></td>
        <td><?php echo "1" === false ?></td>
        <td><?php echo "1" === 1 ?></td>
        <td><?php echo "1" === 0 ?></td>
        <td><?php echo "1" === -1 ?></td>
        <td><?php echo "1" === "1" ?></td>
        <td><?php echo "1" === null ?></td>
        <td><?php echo "1" === "php" ?></td>
      </tr>
      <tr class="bg-white hover:bg-gray-50 border-b">
        <td class="bg-gray-100 font-bold border-r">null</td>
        <td><?php echo null === true ?></td>
        <td><?php echo null === false ?></td>
        <td><?php echo null === 1 ?></td>
        <td><?php echo null === 0 ?></td>
        <td><?php echo null === -1 ?></td>
        <td><?php echo null === "1" ?></td>
        <td><?php echo null === null ?></td>
        <td><?php echo null === "php" ?></td>
      </tr>
      <tr class="bg-white hover:bg-gray-50">
        <td class="bg-gray-100 font-bold border-r">"php"</td>
        <td><?php echo "php" === true ?></td>
        <td><?php echo "php" === false ?></td>
        <td><?php echo "php" === 1 ?></td>
        <td><?php echo "php" === 0 ?></td>
        <td><?php echo "php" === -1 ?></td>
        <td><?php echo "php" === "1" ?></td>
        <td><?php echo "php" === null ?></td>
        <td><?php echo "php" === "php" ?></td>
      </tr>
      </tbody>
    </table>
  </div>
</div>
