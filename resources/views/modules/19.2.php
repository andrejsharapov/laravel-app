<pre><code class="language-sql">
/**
 *
 * CREATE INDEX
 * CREATE UNIQUE INDEX
 *
 */
--  
CREATE INDEX new_index ON clients (name, phone);

CREATE UNIQUE INDEX email_unique_key ON clients (lower(email));

-- 19.2.2
CREATE INDEX category_price_index ON products(category, price);

-- 19.2.3
CREATE INDEX order_index_date_by_desc ON orders(date DESC NULLS FIRST);

-- use
SELECT
  *
FROM
  clients
WHERE
  name = 'Бук Василий Петрович'
  AND phone = '8999233444';

-- 
DROP INDEX new_index;
</code></pre>
