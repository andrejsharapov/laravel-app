/**
 * tables for 17-19 modules
 */

-- clients
SELECT *
FROM clients AS c;

-- products
SELECT *
FROM products AS p;

-- orders
SELECT *
FROM orders AS o;

-- positions
SELECT *
FROM positions AS pos;

-- show info columns from table
-- this alternate SHOW COLUMNS FROM x;
SELECT column_name,
       data_type,
       column_default,
       is_nullable
FROM information_schema.columns
-- WHERE
-- table_name = 'clients' --
-- table_name = 'products' --
-- table_name = 'orders' --
-- table_name = 'positions' --
;
