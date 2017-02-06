<?php
require_once "./ParseArg.php";

$parsed = new ParseArg();
$arguments = $parsed->argv;

var_dump($arguments);