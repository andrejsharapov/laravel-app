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

-- update single column in row
UPDATE
  clients
SET
  surname = 'Петр'
WHERE
    id = 2;

-- update multi columns in row
UPDATE
  clients
SET
  name = 'Василий',
  surname = 'Петров',
  patronymic = 'Петрович'
WHERE
    name = 'Васильев Василий Петрович';

-- delete row
DELETE from
  products
WHERE
    id = 18;

--drop CONSTRAINT order_fk;
-- add FOREIGN KEY(id) REFERENCES orders(id);
SELECT
  count(*)
FROM
  clients;

DELETE FROM table_name;

ALTER SEQUENCE positions_id_seq RESTART WITH 1;

DROP TABLE table_name;
