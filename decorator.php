<?php

interface Icecream {
  public function cost();
  public function  description();
}

class Sundae implements Icecream {
  public function cost() {
    return 7;
  }

  public function description() {
    return '圣代冰激凌';
  }
}

abstract class IcecreamFlavor implements Icecream {
  protected $icecream;

  public function __construct(Icecream $icecream) {
    $this->icecream = $icecream;
  }

  abstract function cost();
  abstract function description();
}

class Strawberry extends IcecreamFlavor {
  public function cost() {
    return $this->icecream->cost() + 2;
  }

  public function description() {
    return $this->icecream->description() . '+草莓';
  }
}

class Chocolate extends IcecreamFlavor {
  public function cost() {
    return $this->icecream->cost() + 3;
  }

  public function description() {
    return $this->icecream->description() . '+巧克力';
  }
}

$sundae = new Sundae();
// print $sundae->description();
// print $sundae->cost() . '块钱';

$strawberry_sundae = new Strawberry($sundae);
// print $strawberry_sundae->description();
// print $strawberry_sundae->cost() . '块钱';

$chocolate_strawberry_sundae = new Chocolate($strawberry_sundae);
print $chocolate_strawberry_sundae->description();
print $chocolate_strawberry_sundae->cost() . '块钱';
