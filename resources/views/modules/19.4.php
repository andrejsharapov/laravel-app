<pre><code class="language-sql">
/**
 *
 * CREATE VIEW ... AS
 *     SELECT ...
 *
 * SELECT * FROM view_name;
 *
 */
--  
CREATE VIEW cat_sport_view AS
SELECT
  *
FROM
  products as p
WHERE
  category = 'спорт';

-- 19.4.1
SELECT
  name,
  amount,
  order_id
FROM
  products AS p,
  positions AS pos,
  orders AS o -- 
WHERE
  p.id = pos.product_id
  AND pos.order_id = o.id
  AND o.address = 'Казань'
  AND o.status = 'in progress' -- 
  -- GROUP BY count(amount)
;

-- 19.4.2
CREATE VIEW orders_for_kazan AS
SELECT
  name,
  amount,
  order_id
FROM
  products AS p,
  positions AS pos,
  orders AS o -- 
WHERE
  p.id = pos.product_id
  AND pos.order_id = o.id
  AND o.address = 'Казань'
  AND o.status = 'in progress';

-- 19.4.4
SELECT
  orders.id,
  SUM(positions.amount * products.price)
FROM
  orders
  JOIN positions ON orders.id = positions.order_id
  JOIN products ON positions.product_id = products.id
GROUP BY
  orders.id;

-- USE
SELECT
  *
FROM
  orders_for_kazan;

-- 19.4.7
SELECT
  sum(pos.amount),
  p.name
FROM
  clients AS c,
  products AS p,
  positions AS pos
WHERE
  pos.order_id = o.id
  AND p.id = pos.product_id
  AND o.client_id = 5
GROUP BY
  p.id;
  
</code></pre>
