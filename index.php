<?php

// require 'app/leke/demo/Greeting.php';
require 'vendor/autoload.php';
use App\leke\demo\Greeting;

$greet = new Greeting();
print $greet->hello();
