<pre><code class="language-sql">
/**
 * 
 * current_date
 * current_time
 * extract
 * similar 
 * lower()
 * upper()
 * like
 * overlay(x placing y FROM a fro b) 
 * char_length
 *
 */
SELECT
	current_date;

SELECT
	current_time;

SELECT
	extract(
		--'year'
		'mon' --'day'
		FROM
			current_date
	);

SELECT
	date
FROM
	orders;

SELECT
	max(date) - min(date) AS "Difference"
SELECT
	orders;

--17.5.5
--select count(date) FROM orders;
SELECT
	current_date - (
		SELECT
			max(date)
		FROM
			orders
	) AS "diff days";

--17.5.6
SELECT
	extract(
		'month'
		FROM
			max(date)
	) AS "count"
FROM
	orders;

--17.5.7
SELECT
	count(date)
FROM
	orders
WHERE
	date > '2020-03-12';

--17.5.8
SELECT
	id,
	lower(name)
FROM
	clients
WHERE
	id % 2 = 0;

SELECT
	id,
	upper(name)
FROM
	clients
WHERE
	id % 2 = 0;

--17.5.9
SELECT
	'Номер телефона ' || (name) || ': ' || (phone) AS "Информация о клиенте"
FROM
	clients;

--17.5.11
SELECT
	'Номер телефона ' || (name) || ': ' || overlay(
		phone placing '***'
		FROM
			5 for 3
	) AS "Информация о клиенте"
FROM
	clients;

--17.5.12
SELECT
	id,
	address
FROM
	orders
WHERE
	address LIKE '%ск';

--17.5.13
SELECT
	name,
	phone
FROM
	clients
WHERE
	phone similar TO '%(67|76)%';

--17.5.14
SELECT
	count(phone)
FROM
	clients
WHERE
	--		phone similar to '%444%';
	phone similar TO ('%4{3,}%');

--17.5.15
UPDATE
	products
SET
	category = NULL
WHERE
	name = 'Стиральный порошок';

UPDATE
	products
SET
	category = NULL
WHERE
	name = 'Перчатки';

--17.5.16
SELECT
	name
FROM
	products
WHERE
	category IS NULL;
  
</code></pre>
