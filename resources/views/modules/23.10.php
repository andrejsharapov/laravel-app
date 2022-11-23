<?php

/**
 * Модуль 23.10. Практическое задание
 *
 * У нас есть:
 *    машина: class Auto,
 *    танк: class Tank,
 *    спецтехника: class Bulldozer,
 *        которые имеют свой набор характеристик:
 *            умеют ехать вперед и назад,
 *            могут размахивать ковшом
 *
 * На основе этой информации постройте классы с использованием абстрактного класса и интерфейса.
 * Напишите принимающую объект машины функцию, которая:
 *    заставляла бы ее ехать и
 *    вызвала одну из способностей машины:
 *        если это легковое авто - будет закись азота,
 *        если это бульдозер — управление ковшом.
 * Принимающая функция должна быть полиморфной.
 * + добавить машинам способность сигналить и включать дворники.
 *
 */

// интерфейсы
interface CarsMove
{
  public function move();

  public function useWipers();
}

abstract class Cars implements CarsMove
{
  public $ridingForward = true; // движение вперед
  public $ridingBack = true; // движение назад
  protected $fuel; // заправка
  protected $shoots; // заряды для танка
  public $wipers = true; // дворники

  //  function __construct($ridingForward = true, $ridingBack = true, string $fuel)
  //  {
  //    $this->forward = $ridingForward;
  //    $this->back = $ridingBack;
  //    $this->fuel = $fuel;
  //  }

  /**
   * применение интерфейса
   * если убрать, то танк и бульдозер выведут ошибку
   */
  public function move()
  {
  }

  public function useWipers()
  {
  }

  /**
   * все авто могут ехать вперед и назад
   */
  public function riding()
  {
    if ($this->ridingForward && $this->ridingBack) {
      echo 'я могу ездить вперед и назад, ';
    } else if (!$this->ridingForward) {
      echo 'я могу ездить только назад, ';
    } else if (!$this->ridingBack) {
      echo 'я могу ездить только вперед, ';
    }
  }

  /**
   * все авто могут заправляться ->
   */
  public function getRefuel()
  {
    return $this->fuel;
  }

  /**
   * но у каждого авто свой тип двигателя и топлива
   *
   * @param string $fuel
   *
   * @return string | null
   */
  public function setRefuel(string $fuel): ?string
  {
    return $this->fuel = $fuel;
  }
}

/**
 * класс 1/3 для машины
 */
class Auto extends Cars
{
  protected $fuel = 'Azot';
  protected $signals = true;

  public function move()
  {
    $this->riding();

    return 'у меня под капотом ' . $this->getRefuel() . ' ';
  }

  /**
   * авто может сигналить
   */
  public function setSignal()
  {
    $this->signals;
  }

  /**
   * авто использует дворики
   *
   * @param boolean $wipers
   *
   * @return string | null
   */
  public function useWipers()
  {
    if ($this->wipers) {
      return 'и я использую дворники ';
    }

    return null;
  }
}

$auto = new Auto();

echo $auto->move();
echo $auto->setSignal();
echo $auto->useWipers();
echo '<br />';


/**
 * класс 1/3 для танка
 */
class Tank extends Cars
{
  public $ridingBack = false;
  protected $shoots = 2;

  public function shoot()
  {
    $this->riding();

    if ($this->shoots > 0) {
      echo 'у меня есть ' . $this->shoots . ' заряда ';
    } else {
      echo 'зарядов не осталось ';
    }
  }
}

$tank = new Tank();

echo $tank->shoot();
echo '<br />';


/**
 * класс 1/3 для спецтехники
 */
class Bulldozer extends Cars
{
  /**
   * бульдозер может использовать ковш,
   * и у него нет родительского метода move();
   */
  public function ladle()
  {
    $this->riding();

    echo 'я могу размахивать ковшом ';
  }


  /**
   * бульдозер использует дворики
   *
   * @param boolean $wipers
   *
   * @return string | null
   */
  public function useWipers()
  {
    if ($this->wipers) {
      return 'и я использую дворники ';
    }

    return null;
  }
}

$bulldozer = new Bulldozer();
$bulldozer->setRefuel('G-Drive 95');

echo $bulldozer->ladle() . ' и заправляться ';
echo $bulldozer->getRefuel() . ' ';
echo $bulldozer->useWipers();
echo '<br />';

// return
// я могу ездить вперед и назад, у меня под капотом Azot и я использую дворники
// я могу ездить только вперед, у меня есть 2 заряда
// я могу ездить вперед и назад, я могу размахивать ковшом и заправляться G-Drive 95 и я использую дворники
