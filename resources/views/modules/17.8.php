<pre><code class="language-sql">
/**
 * 
 * UNION	-- обьединение
 * INTERSECT	-- перечисление
 * EXCEPT	-- исключение
 * 
 * ON CONFLICT DO NOTHING -- В СЛУЧАЕ ОШИБКИ НЕ ДЕЛАЙ НИЧЕГО
 * 
 */
-- 17.8
SELECT
  id
FROM
  orders
union
SELECT
  id
FROM
  orders
WHERE
  status = 'done';

SELECT
  id
FROM
  orders
intersect
SELECT
  id
FROM
  orders
WHERE
  status = 'done';

SELECT
  id
FROM
  orders
except
SELECT
  id
FROM
  orders
WHERE
  status = 'done';
  
</code></pre>
