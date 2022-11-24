<pre><code class="language-sql">
/**
 *
 * DDL
 *    | RESTRICT        запретить удаление записи
 *    | CASCADE         удалить все связанные записи
 *    | SET DEFAULT
 *    | SET NULL
 *    | SET ACTION
 * CREATE TABLE
 * DROP TABLE
 *    | IF EXISTS x
 * ALTER TABLE
 *    | ADD/DROP/ COLUMN
 *    | RENAME COLUMN name TO x
 *    | ADD/DROP CONSTRAINT
 *    | ALTER COLUMN
 *
 */
-- 
DROP TABLE x,
users CASCADE;

-- 
ALTER TABLE
  x
ALTER COLUMN
  price
SET
  DEFAULT 100;

-- 
ALTER TABLE
  x
ALTER COLUMN
  price DROP DEFAULT;

--  18.5.3
CREATE TABLE x (
  id serial PRIMARY KEY,
  user_id INTEGER REFERENCES users (id) ON DELETE RESTRICT,
  film_id INTEGER REFERENCES films ON DELETE CASCADE
);

-- 18.5.4
DELETE CASCADE
FROM
  clients
WHERE
  id = (
    SELECT
      id
    FROM
      clients
    WHERE
      name = 'Петрова Мария Петровна'
  );

-- 
ALTER TABLE
  products
ADD
  COLUMN description text;

SELECT
  *
FROM
  products;

ALTER TABLE
  products DROP COLUMN description CASCADE;

-- 18.5.6 Добавьте в таблицу с клиентами ограничение уникальности для номера телефона
ALTER TABLE
  clients
ADD
  CONSTRAINT unique_phone UNIQUE (phone);

ALTER TABLE
  products DROP CONSTRAINT unique_phone;

-- 18.5.7 Удалите ограничение NOT NULL для колонки с адресом в таблице с заказами
ALTER TABLE
  orders
ALTER COLUMN
  address DROP NOT NULL;

-- Установить значение по умолчанию
ALTER TABLE
  products
ALTER COLUMN
  price -- DROP DEFAULT;
SET
  DEFAULT 100;
  
</code></pre>
