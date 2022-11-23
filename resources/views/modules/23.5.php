// 23.5. Наследование

<p>
    Наследование — это механизм, который позволяет унаследовать данные и функциональность родительского класса с
    возможностью их расширения. Иными словами — мы можем описать какой-то класс. Давайте возьмем уже существующий класс
    стрелка:
</p>

<pre><code class="language-php">
class Shooter
{
  public $bullets = 8;
  public $weapon = 'colt';

  public function shoot()
  {
    //...
  }
}

class Miner extends Shooter
{
  public $mines = 11;
  public $weapon = 'Glock';

  public function shoot()
  {
    // Стреляем, если есть патроны
    if ($this->checkBullets) {
      //Вызываем родительский метод с помощью ключевого слова parent
      parent::shoot();
    }
  }

public function plantMine()
  {
    //...
  }

  public function checkBullets()
  {
    return $this->bullets > 0;
  }
}
</code></pre>
