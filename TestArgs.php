<?php
require_once "./ParseArg.php";

$parsed = new ParseArgv();
$arguments = $parsed->getParsed();
// want   $arguments = $parsed->argv;  instead

foreach ($arguments as $k => $v) {
    print("$k=>$v\n");
}