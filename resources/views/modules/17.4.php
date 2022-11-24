<pre><code class="language-sql">
/**
 * select
 * from
 * where
 * and / or
 * in / not in
 */

-- rename cols
SELECT name     AS "Название товара",
       price    AS "Цена",
       category AS "Категория",
       in_stock AS "В наличии"
FROM products;

-- only ...
SELECT name  AS "product name",
       price AS "amount"
FROM products
WHERE name IN ('Велосипед горный', 'Гель для душа');

-- where ...
SELECT name
FROM products
WHERE category = 'товары для дома';

-- and / or
SELECT name,
       price,
       in_stock
FROM products
WHERE (
      in_stock > 3
    AND price <= 500
  )
   OR (price > 5000);

-- in
SELECT *
FROM orders
WHERE status != 'done'
	AND address IN ('Казань', 'Новосибирск', 'Мурманск');

-- NOT IN
SELECT name
FROM clients
WHERE id NOT IN (
  SELECT client_id
  FROM orders
);

-- set FOREIGN KEY FROM table edit
ALTER TABLE
  positions
  add
    FOREIGN KEY (order_id) REFERENCES orders (id);

--17.4.2
SELECT name             AS "product",
       price * in_stock AS "amount"
FROM products;

--17.4.3
SELECT name AS "product"
FROM products
WHERE category = 'товары для дома';

--17.4.4
SELECT name,
       price,
       in_stock
FROM products
WHERE in_stock > 3
  AND price <= 500
   OR price > 5000;

--17.4.6
SELECT *
FROM orders
where status != 'done'
	AND address IN ('Казань', 'Мурманск', 'Новосибирск');

--17.4.8
SELECT count(name)
FROM clients
WHERE id NOT IN (
  SELECT client_id
  FROM orders
);

-- SELECT where x1 in (SELECT where x2 in (SELECT where x3));
--17.4.9
SELECT name
FROM products
WHERE id IN (
  SELECT product_id
  FROM positions
  WHERE order_id IN (
    SELECT id
    FROM orders
    WHERE address = 'Москва'
  )
);

</code></pre>
