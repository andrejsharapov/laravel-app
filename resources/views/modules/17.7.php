<pre><code class="language-sql">
/**
 * 
 * inner join on table.y
 * outer join on table.y
 * cross join table
 * full outer join table.x on table.y = table.x
 * left join // исключает NULL
 * 
 */
SELECT
	*
from
	orders
	join clients on orders.client_id = clients.id;

SELECT
	*
FROM
	orders
	cross join clients;

SELECT
	*
FROM
	orders full
	join clients on orders.client_id = clients.id;

-- inner join on аналогично left join on
-- outer join on аналогично right join on
SELECT
	*
FROM
	orders
	inner join clients on orders.client_id = clients.id;

SELECT
	*
FROM
	orders
	left join clients --right join clients
	on orders.client_id = clients.id;

-- 17.7.3
SELECT
	name,
	client_id,
	status
FROM
	clients
	left outer join orders on orders.client_id = clients.id
WHERE
	orders.id is null;

-- 17.7.4
SELECT
	sum(pos.amount),
	p.name
FROM
	positions as pos
	join orders as o on o.id = pos.order_id
	join products as p on p.id = pos.product_id
WHERE
	o.client_id = 5
group by
	p.id;

-- узнать, что заказывал клиент с id x
SELECT
	distinct count(*)
from
	clients as c
	inner join orders as o on c.id = o.client_id
	inner join products as p on p.id is not NULL
	inner join positions as pos on p.id = pos.product_id
WHERE
	o.client_id = 5 -- or o.client_id is not null
group by
	p.id;

--update clients
--set name = 'Андреев Андрей Андреевич'
--WHERE id = 1
--;
-- 17.7.6
SELECT
	name
FROM
	products
WHERE
	id in(
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

SELECT
	id,
	client_id,
	date
FROM
	orders AS o
WHERE
	o.date = (
		SELECT
			max(date)
		FROM
			orders
	);
  
</code></pre>
