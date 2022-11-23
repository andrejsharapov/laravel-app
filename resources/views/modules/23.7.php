// 23.7. Абстрактные классы и интерфейсы

<p>
  Абстрактный класс — это практически тот же класс, за исключением того, что абстрактный класс нельзя проинициализировать (сделать из него объект), а еще он может содержать абстрактные методы. Абстрактные методы отличаются от обычных тем, что не имеют реализации, ответственность за их реализацию лежит на классах наследниках. Абстрактный класс и методы помечаются ключевым словом abstract. Абстрактный класс помимо абстрактных методов может содержать и простые методы, которые уже имеют свою реализацию.
</p>

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
