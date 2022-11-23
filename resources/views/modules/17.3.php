<pre><code class="language-sql">
--17.3.1
CREATE TABLE clients (
  id SERIAL PRIMARY KEY, 
  name character varying(200) NOT NULL, 
  phone character varying(30) NOT NULL, 
  email character varying(200) NOT NULL
);
</code></pre>

<pre><code class="language-sql">
INSERT INTO clients (name, phone, email) VALUES ('', '', '');
INSERT INTO clients (name, phone, email) VALUES ('', '', '');
INSERT INTO clients (name, phone, email) VALUES ('', '', '');
INSERT INTO clients (name, phone, email) VALUES ('', '', '');
INSERT INTO clients (name, phone, email) VALUES ('', '', '');
INSERT INTO clients (name, phone, email) VALUES ('', '', '');
INSERT INTO clients (name, phone, email) VALUES ('', '', '');
INSERT INTO clients (name, phone, email) VALUES ('', '', '');
</code></pre>

<pre><code class="language-sql">
--17.3.2
CREATE TABLE products (
  id SERIAL PRIMARY KEY,
  name VARCHAR(200) NOT NULL,
  price numeric NOT NULL,
  category VARCHAR(100),
  in_stock INT default 0
);</code></pre>

<pre><code class="language-sql">
INSERT INTO clients (name, price, category, in_stock) VALUES ('', 1000, '', 5);
INSERT INTO clients (name, price, category, in_stock) VALUES ('', 1000, '', 5);
INSERT INTO clients (name, price, category, in_stock) VALUES ('', 1000, '', 5);
INSERT INTO clients (name, price, category, in_stock) VALUES ('', 1000, '', 5);
INSERT INTO clients (name, price, category, in_stock) VALUES ('', 1000, '', 5);
INSERT INTO clients (name, price, category, in_stock) VALUES ('', 1000, '', 5);
INSERT INTO clients (name, price, category, in_stock) VALUES ('', 1000, '', 5);
INSERT INTO clients (name, price, category, in_stock) VALUES ('', 1000, '', 5);
</code></pre>

<pre><code class="language-sql">
--17.3.3
CREATE TABLE orders (
  id SERIAL PRIMARY KEY,
  client_id INT NOT NULL REFERENCES clients(id),
  date date NOT NULL,
  status VARCHAR(100) NOT NULL CHECK(
    status in ('done', 'in progress', 'delivery')
  ),
  address VARCHAR(100) NOT NULL
);</code></pre>

<pre><code class="language-sql">
INSERT INTO clients (client_id, date, status, address) VALUES (1, '', '', '');
INSERT INTO clients (client_id, date, status, address) VALUES (1, '', '', '');
INSERT INTO clients (client_id, date, status, address) VALUES (1, '', '', '');
INSERT INTO clients (client_id, date, status, address) VALUES (1, '', '', '');
INSERT INTO clients (client_id, date, status, address) VALUES (1, '', '', '');
INSERT INTO clients (client_id, date, status, address) VALUES (1, '', '', '');
INSERT INTO clients (client_id, date, status, address) VALUES (1, '', '', '');
INSERT INTO clients (client_id, date, status, address) VALUES (1, '', '', '');
</code></pre>

<pre><code class="language-sql">
--17.3.4
CREATE TABLE positions (
  id SERIAL,
  order_id INT NOT NULL,
  product_id INT NOT NULL,
  amount INT NOT NULL,
  CONSTRAINT positions_pk PRIMARY KEY (id),
  CONSTRAINT order_fk FOREIGN KEY (order_id) REFERENCES orders(id),
  CONSTRAINT product_fk FOREIGN KEY (product_id) REFERENCES products(id)
);</code></pre>

<pre><code class="language-sql">
INSERT INTO clients (order_id, product_id, amount) VALUES (1, 2, 3);
INSERT INTO clients (order_id, product_id, amount) VALUES (1, 2, 3);
INSERT INTO clients (order_id, product_id, amount) VALUES (1, 2, 3);
INSERT INTO clients (order_id, product_id, amount) VALUES (1, 2, 3);
INSERT INTO clients (order_id, product_id, amount) VALUES (1, 2, 3);
INSERT INTO clients (order_id, product_id, amount) VALUES (1, 2, 3);
INSERT INTO clients (order_id, product_id, amount) VALUES (1, 2, 3);
INSERT INTO clients (order_id, product_id, amount) VALUES (1, 2, 3);
</code></pre>
