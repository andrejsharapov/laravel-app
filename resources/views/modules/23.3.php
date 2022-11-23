// 23.3. Объекты и классы

<div>
  Класс — это, по сути, заготовка объекта, он определяет, какие данные будет содержать объект и какими функция будет обладать. Чтобы сделать из класса объект, достаточно проинициализировать его с помощью ключевого слова new. Давайте рассмотрим простой пример:
</div>

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

$shooter = new Shooter();
$shooter->shoot();
</code></pre>
