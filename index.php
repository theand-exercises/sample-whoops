<?php

use Whoops\Run;
use Whoops\Handler\PrettyPageHandler;

require __DIR__ . '/vendor/autoload.php';


$run     = new Run;
$handler = new PrettyPageHandler;

$run->pushHandler($handler);

$run->register();

function fooBar() {
    throw new Exception("Something broke!");
}

function bar()
{
    fooBar();
}

bar();

