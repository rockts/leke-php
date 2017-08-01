<?php

// require 'app/leke/demo/Greeting.php';
require 'vendor/autoload.php';
use App\leke\demo\Greeting;

use Monolog\Logger;
use Monolog\Handler\StreamHandler;

$greet = new Greeting();
print $greet->hello();

$log = new Logger('leke');
$log->pushHandler(new StreamHandler('app/log/demo.log', Logger::DEBUG));

$log->info('hello ~ logger.');
