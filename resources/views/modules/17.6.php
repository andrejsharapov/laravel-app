/**
 * 
 * count();
 * min();
 * max();
 * sum();
 * avg(); // среднее, работает только с числами
 * 
 * DISTINCT выбрать из таблицы только уникальные данные
 * GROUP BY группировка
 * ORDER BY сортировка
 * having
 * 
 * char_length()
 * 
 */
SELECT
	avg(id)
FROM
	products;

--17.6.1
SELECT
	DISTINCT category
FROM
	products
WHERE
	category IS NOT NULL;

--17.6.2
SELECT
	id,
	name
FROM
	products --	ORDER BY id desc;
WHERE
	category = 'товары для дома'
ORDER BY
	price;

--17.6.3
SELECT
	DISTINCT name,
	price
FROM
	products -- ORDER BY price desc;
WHERE
	price = (
		SELECT
			max(price)
		FROM
			products
	);

--17.6.4
SELECT
	address,
	count(*) as c
FROM
	orders
GROUP BY
	address
ORDER BY
	c DESC;

--17.6.5
SELECT
	category,
	avg(price) AS avg_price
FROM
	products
GROUP BY
	category
ORDER BY
	avg_price ASC;

--17.6.6
--SELECT order_id from positions;
SELECT
	order_id,
	count(*) AS c
FROM
	positions --	WHERE
	--	order_id = (SELECT max(order_id) FROM positions)
GROUP BY
	order_id
ORDER BY
	c DESC;

--17.6.7
--SELECT status, address FROM orders;
--SELECT count(*) FROM orders where status='done';
--SELECT count(*) FROM orders where status='in progress';
--SELECT count(*) FROM orders where status='delivery';
SELECT
	status,
	count(*) AS c
FROM
	orders
WHERE
	status IN ('done', 'in progress', 'delivery')
	AND address != 'Казань'
GROUP BY
	status;

--17.6.8
SELECT
	category,
	price,
	name
FROM
	products
WHERE
	price = (
		SELECT
			max(price)
		FROM
			products
	)
GROUP BY
	category,
	price,
	name;

--17.6.9
--SELECT max(date) FROM orders;
--SELECT name FROM products;
SELECT
	*
FROM
	products
WHERE
	id IN (
		SELECT
			product_id
		FROM
			positions
		WHERE
			order_id = (
				SELECT
					id
				FROM
					orders
				WHERE
					date = (
						SELECT
							max(date)
						FROM
							orders
					)
			)
	);

--17.6.10
SELECT
	category,
	count(*)
FROM
	products
WHERE
	price > 100
GROUP BY
	category
HAVING
	count(*) > 3;

--17.6.11
SELECT
	name AS client_full_name,
	length(name) AS len
FROM
	clients
ORDER BY
	length(name) DESC;
