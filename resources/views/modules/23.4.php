// 23.4. Инкапсуляция

<div>
  Инкапсуляция — это механизм, который объединяет данные и логику (код, который оперирует этими данными) в один объект и делает их недоступными для внешнего вмешательства
</div>

<pre><code class="language-php"> 
class Tiger
{
    public $phrase = 'Grrrr!';    
    public function sayPhrase()
    {
        echo $this->phrase;
    }    
    public function eat()
    {
        $this->sayPhrase();
    }
}
</code></pre>

<div class="text-2xl mt-4 mb-2">Модификаторы доступа</div>

<pre><code class="language-md">
  - public — если наши данные и методы помечены таким модификатором, то они будут доступны вне объекта всем.
  - protected — при таком модификаторе, данные и методы будут доступны внутри объекта и в объектах потомках.
  - private — такой модификатор говорит нам о том, что данные и методы будут доступны только внутри объекта.
</code></pre>

<pre><code class="language-php">
class Animals
{
    protected function sayPhrase()
    {
        echo $this->phrase;
    }
}

class Tiger extends Animals 
{
    protected $phrase = 'Grrrr!';    
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
        $this->sayPhrase();
    }
}

// Инициализируем объект
$frog = new Frog();
// Вызываем метод объекта
$frog->jump();
</code></pre>

<div class="text-2xl mt-4 mb-2">Геттеры и Сеттеры</div>

<pre><code class="language-php">
class Animals
{
    protected function sayPhrase()
    {
        echo $this->phrase;
    }

  public function getPhrase()
    {
        return $this->phrase;
    }

    public function setPhrase($phrase)
    {
        $this->phrase = $phrase;
    }
}

$tiger = new Tiger();
$tiger->setPhrase('MEOW!');

echo $tiger->getPhrase();

$tiger->eat();

$frog = new Frog();

echo $frog->getPhrase();
</code></pre>
