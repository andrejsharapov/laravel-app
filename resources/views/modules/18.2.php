<pre><code class="language-sql">
/**
 * 
 * pg_catalog
 * .pg_class
 * .pg_attribute
 *
 */
-- 18.2.1
SELECT
  *
FROM
  pg_catalog.pg_class
WHERE
  relname IN ('orders', 'clients', 'products');

-- 18.2.2
SELECT
  *
FROM
  pg_catalog.pg_attribute
WHERE
  attrelid = 16404;
  
</code></pre>
