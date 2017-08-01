<?php

class MountainBike {
  public function hello() {
    return 'hello ~ mountain bike.';
  }
}

class RoadBike {
  public function hello() {
    return 'hello ~ road bike.';
  }
}

class BikeFactory {
  public static function build($type) {
    $bike = $type . 'bike';
    if (class_exists($bike)) {
      return new $bike();
    } else {
      throw new Exception('invalid bike type');
    }
  }
}

// $bike = new MountainBike();
// print $bike->hello();

$bike = BikeFactory::build('Road1');
print $bike->hello();
