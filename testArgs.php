<?php
require_once "./ParseArg.php";

$parsed = new ParseArg();
$arguments = $parsed->getParsed();
// want   $arguments = $parsed->argv;  instead

foreach ($arguments as $k => $v) {
	print("$k=>$v\n");
}