<?php
require 'vendor/autoload.php';

use CowSay\Cow;

$cow = new Cow('Hello World!');
echo $cow->say();
