<pre><code class="language-sql">
/**
 *
 * Транзакции | ACID | « всё или ничего »
 *    | Atomic (атомарность)
 *    | Consistent (целостность)
 *    | Isolated (изолированность)
 *    | Durable (постоянство)
 *
 * BEGIN
 * COMMIT фиксировать текущую транзакцию
 * ROLLBACK откатить текущую транзакцию && ROLLBACK TO
 *
 * SAVEPOINT
 *
 */
--  
--  example
BEGIN --
-- COMMIT-- 
;

-- 
UPDATE
  accounts
SET
  balance = balance - 100.00
WHERE
  name = 'Маша';

ROLLBACK;

-- 
CREATE TABLE x (
  id serial PRIMARY KEY,
  user_id INTEGER REFERENCES users (id) ON DELETE RESTRICT,
  film_id INTEGER REFERENCES films ON DELETE CASCADE
);

-- 
DROP TABLE x,
users CASCADE;

-- 
ALTER TABLE
  x
ALTER COLUMN
  price
SET
  DEFAULT 100;

-- 
ALTER TABLE
  x
ALTER COLUMN
  price DROP DEFAULT;

-- start
BEGIN;

-- 
UPDATE
  accounts
SET
  balance = balance - 100.00
WHERE
  name = 'Маша';

-- 
UPDATE
  bank_balance
SET
  balance = balance - 100.00
WHERE
  name = (
    SELECT
      bank_name
    FROM
      accounts
    WHERE
      name = 'Маша'
  );

-- 
UPDATE
  accounts
SET
  balance = balance + 100.00
WHERE
  name = 'Ваня';

-- 
UPDATE
  bank_balance
SET
  balance = balance + 100.00
WHERE
  name = (
    SELECT
      bank_name
    FROM
      accounts
    WHERE
      name = 'Ваня'
  );

COMMIT -- end
;

</code></pre>
