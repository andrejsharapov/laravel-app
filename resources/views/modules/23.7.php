// 23.7. Абстрактные классы и интерфейсы

<p>
  Абстрактный класс — это практически тот же класс, за исключением того, что абстрактный класс нельзя проинициализировать (сделать из него объект), а еще он может содержать абстрактные методы. Абстрактные методы отличаются от обычных тем, что не имеют реализации, ответственность за их реализацию лежит на классах наследниках. Абстрактный класс и методы помечаются ключевым словом abstract. Абстрактный класс помимо абстрактных методов может содержать и простые методы, которые уже имеют свою реализацию.
</p>

<div class="text-2xl mt-4 mb-2">Абстрактные классы</div>

<pre><code class="language-php">
 abstract class Example
{
  abstract public function abstractMethod();
  
  public function method()
  {
    //...
  }
}
</code></pre>

<pre><code class="language-php">
abstract class Animals
{
    protected function sayPhrase()
    {
        // $this указывает на текущий экземпляр класса
        echo $this->phrase;
    }
}

class Tiger extends Animals
{
    protected $phrase = 'Grrrrr!';

    public function eat()
    {
        $this->sayPhrase();
    }
}

class Frog extends Animals
{
    protected $phrase = 'Quark!';

    public function jump()
    {
        // Прыгаем и воспроизводим фразу
        $this->sayPhrase();
    }
}

$frog = new Frog();
$frog->jump();
</code></pre>

<div class="text-2xl mt-4 mb-2">Интерфейсы</div>

<pre><code class="language-php">
interface MyInterface
{
    const c = 'Константа';

    public function exampleMethod();
}
</code></pre>

<p>Интерфейс служит контрактом. Любой класс, который реализует интерфейс, должен реализовать все методы интерфейса.</p>


<pre><code class="language-php">
class NewClass implements MyInterface
{
  // Константа уже есть, переопределять ее нельзя, если мы укажем здесь константу с тем же именем, что в интерфейсе, это будет считаться переопределением, и скрипт завалится в ошибку

  public function exampleMethod()
  {
    // Сигнатура метода, так же как и при абстрактном, должна совпадать
  }
}
</code></pre>

<p>Интерфейс может расширять другой интерфейс и в отличие от классов, интерфейсы поддерживают множественное наследование:</p>

<pre><code class="language-php">

interface A
{
  public function a();
}

interface B
{
  public function b();
}

interface C extends A, B
{
  public function c();
}
</code></pre>
