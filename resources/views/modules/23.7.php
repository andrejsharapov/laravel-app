// 23.7. Абстрактные классы и интерфейсы


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
