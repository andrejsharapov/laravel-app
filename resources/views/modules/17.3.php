<!--<pre><code class="language-sql">-->
<!--</code></pre>-->

<pre><code class="language-css">
</code></pre>

<pre><code class="language-js">
</code></pre>

<pre><code class="language-sql">
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
