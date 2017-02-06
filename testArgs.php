<?php
require_once "./ParseArg.php";

$parsed = new ParseArg();
$arguments = $parsed->argv;

foreach($arguments as $key=>$val)
{
	print($key . '=>' . $val . "\n");
};