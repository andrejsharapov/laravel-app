<pre><code class="language-sql">
/**
 *
 * DML            CRUD
 *    | INSERT       | Create
 *    | SELECT       | Read
 *    | UPDATE       | Update
 *    | DELETE       | Delete
 *
 */
-- 18.4.1 
INSERT INTO
  products (name, in_stock, category, price)
VALUES
  ('Шампунь', 120, 'косметика', 1200) ON CONFLICT DO NOTHING;

-- SELECT
--   *
-- FROM
--   products
-- WHERE
--   name = 'Шампунь';
--
SELECT
  *
FROM
  pg_catalog.pg_tables
WHERE
  tablename IN ('clients', 'orders', 'positions', 'products');

-- 18.4.3
CREATE TABLE ord_orders (
  /* NOTE error */
  id int PRIMARY KEY,
  client_id int NOT NULL REFERENCES clients(id),
  date date NOT NULL,
  status VARCHAR(100) NOT NULL CHECK (
    status in ('done', 'in progress', 'delivery')
  ),
  address VARCHAR(100) NOT NULL
);

ALTER TABLE
  ord_orders RENAME TO old_orders;

-- 
INSERT INTO
  old_orders (id, client_id, date, status, address) (
    SELECT
      id,
      client_id,
      date,
      status,
      address
    FROM
      orders
    WHERE
      date < '2020-01-01'
  );

--
SELECT
  *
FROM
  oLd_orders;

-- 18.4.4 NOTE нужно потренироваться (ниже 4 варианта написания одного запроса)
-- v1
-- SELECT
--   name,
--   t.full_count
-- FROM
--   products
--   JOIN (
--     SELECT
--       product_id,
--       count(*) AS full_count
--     FROM
--       positions
--     GROUP BY
--       product_id
--   ) AS t ON products.id = t.product_id
-- ;
-- v2
SELECT
  name,
  count(*) AS full_count
FROM
  products,
  positions
WHERE
  products.id = positions.product_id
GROUP BY
  name -- ORDER BY
  --   full_count DESC
;

--v3
SELECT
  name,
  count(*)
FROM
  products
  JOIN positions ON products.id = positions.product_id
GROUP BY
  name;

-- v4
-- SELECT
--   name,
--   (
--     SELECT
--       count(*)
--     FROM
--       positions
--     WHERE
--       positions.product_id = products.id
--   ) as c
-- FROM
--   products
-- ;
-- 18.4.6
UPDATE
  clients
SET
  phone = 85553332211
WHERE
  name = 'Иванов Иван Иванович';

SELECT
  phone
FROM
  clients
WHERE
  name = 'Иванов Иван Иванович';

-- 18.4.7
-- SELECT * FROM products;
SELECT
  name,
  in_stock
FROM
  products
WHERE
  name = 'Гель для душа';

UPDATE
  products
SET
  in_stock = in_stock + 10;

SELECT
  name,
  in_stock
FROM
  products
WHERE
  name = 'Гель для душа';

-- 18.4.8
SELECT
  p.name,
  pos.amount
FROM
  products AS p
  JOIN positions AS pos ON p.id = pos.product_id
WHERE
  pos.order_id IN (
    SELECT
      id
    FROM
      orders AS o
    WHERE
      -- status IN ('done', 'in progress')
      -- AND -- 
      o.client_id = (
        SELECT
          id
        FROM
          clients
        WHERE
          name = 'Бук Василий Петрович'
      )
  );

--18.4.10
SELECT
  DISTINCT *
FROM
  products;

-- SELECT * FROM positions;
-- удаление задвоенного товара с name = 'Велосипед горный'
DELETE FROM
  products
WHERE
  id = 14;

UPDATE
  positions
set
  amount = amount + 1
WHERE
  product_id = (
    SELECT
      id
    FROM
      products
    WHERE
      name = 'Велосипед горный'
  );

-- 18.4.11 имена всех клиентов, которые не совершали заказов
SELECT
  name
FROM
  clients
WHERE
  id NOT IN (
    SELECT
      client_id
    FROM
      orders
  );

-- 18.4.12 удалить всех клиентов, которые не совершали заказов
DELETE FROM
  clients
WHERE
  id NOT IN (
    SELECT
      client_id
    FROM
      orders
  );
  
</code></pre>
