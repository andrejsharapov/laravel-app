<!-- MYSQL -->

<div class="mt-4 mb-2 text-3xl uppercase">mysql</div>

<!-- helpers -->

<pre><code class="language-md">
  - db_name;
  - table_name;
  - col_name;
  - row_name;
  - type;
  - val;
  - > далее
</code></pre>

<div class="mt-4 mb-2 text-xl">Базы</div>

<pre><code class="language-sql">
  SHOW DATABASES;
  CREATE DATABASE db_name;
  use db_name;
  DROP DATABASE db_name;
</code></pre>

<div class="mt-4 mb-2 text-xl">Таблицы</div>

<pre><code class="language-sql">
  SHOW TABLES; || SHOW TABLES FROM db_name;
  CREATE TABLE table_name (...);
  RENAME TABLE name_1 TO name_2;
  DROP TABLE table_name;
  TRUNCATE TABLE table_name;

  SELECT COUNT(*) FROM table_name; // Показать количество строк в таблице
  SHOW COLUMNS FROM table_name;

  SELECT * FROM table_name; // Показать все содержимое таблицы
  SELECT * FROM table_name WHERE row_name = "val";
</code></pre>

<div class="mt-4 mb-2 text-xl">Изменение таблиц и столбцов</div>

<pre><code class="language-sql">
UPDATE table_name SET col_name="val" where col_name =val; // обновление колонок

insert table_name(col_name, col_name) VALUES ('val1' ,'val2'); // добавление
insert table_name(col_name, col_name) VALUES ('val1' ,'val2'), ('val1' ,'val2'), ('val1' ,'val2'); // добавление нескольких строк

- ALTER TABLE table_name
    ADD COLUMN col_name type(val);
    DROP COLUMN col_name;
    MODIFY COLUMN col_name character varying(100) NOT NULL; // Изменение типа столбца
    MODIFY Age int NOT NULL;
    CHANGE old_col_name new_col_name varchar (30);

- ALTER COLUMN col_name
    SET DEFAULT `22`; // Изменение значения по умолчанию
</code></pre>

<div class="mt-4 mb-2 text-xl">Типы данных MySQL</div>

<pre><code class="language-sql">
  BOOL;
  INT;
  VARCHAR();
  CHAR();
  TEXT;
  DATE();
  TIME("hh:mm:ss");
  DATETIME(yyyy-mm-dd hh:mm:ss");
  TIMESTAMP();
  YEAR();
</code></pre>

<div class="mt-4 mb-2 text-xl">Атрибуты столбцов и таблиц</div>

<pre><code class="language-sql">
  AUTO_INCREMENT  // Id INT PRIMARY KEY AUTO_INCREMENT,
  UNIQUE  // Phone VARCHAR(13) UNIQUE
  NULL и NOT NULL  // FirstName VARCHAR(20) NOT NULL,
  DEFAULT // Age INT DEFAULT 18,
  CHECK() // Age INT DEFAULT 18 CHECK(Age >0 AND Age < 100),
</code></pre>

<div class="mt-4 mb-2 text-xl">Первичный ключ (PRIMARY KEY)</div>

<pre><code class="language-sql">
- ALTER TABLE table_name
    ADD PRIMARY KEY (col_name);
    DROP PRIMARY KEY;
</code></pre>

<div class="mt-4 mb-2 text-xl">Внешний ключ (FOREIGN KEY)</div>

<pre><code class="language-sql">
- ALTER TABLE table_name
    ADD FOREIGN KEY(col_name) REFERENCES table_name(col_name);
    DROP FOREIGN KEY orders_customers_fk;
</code></pre>

<div class="mt-4 mb-2 text-xl">Ограничения CONSTRAINT</div>

<pre><code class="language-sql">
  FOREIGN KEY(col_name) REFERENCES table_name(col_name); // FOREIGN KEY (столбец текущей таблицы) REFERENCES таблица (столбец связананной таблицы)
  ADD CONSTRAINT orders_customers_fk; // ограничение https://schoolsw3.com/sql/sql_ref_constraint.php
</code></pre>
