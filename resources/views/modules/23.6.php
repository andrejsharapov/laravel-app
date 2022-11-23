// 23.6. Полиморфизм

<p>
  Полиморфизм решает ряд проблем: переиспользование кода, дублирование и уменьшение его связности.
</p>

<pre><code class="language-php">
interface AnimalInterface {
  public function sound();
}

class Animals implements AnimalInterface 
{
  public function sound()
  {
    
  }
}
  
class Wolf extends Animals
{
  public function sound() {}
}

class Rabbit extends Animals
{
  public function sound() {}
}

class Owl extends Animals
{}

$animal = new Owl();
// функция с явным указанием типа (родительского типа)
function testAnimals(AnimalInterface $animal) {
  $animal->sound();
}
</code></pre>
