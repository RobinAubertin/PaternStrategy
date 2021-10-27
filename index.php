<?php

require_once 'Strategy.php';

// Client code

$printer = new Printer();
$fileCreator = new FileCreator();
$context = new Context($printer);
$context->doSomething();

$context->setStrategy($fileCreator);
$context->doSomething();
