<?php
require_once "./ParseArg.php";

$parsed = new ParseArg($argv);
$arguments = $parsed->argv;

foreach($arguments as $args)
{
	print($args . "\n");
};