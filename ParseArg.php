<?php

class ParseArg
{
	private $argsParsed;
	private $argsUnparsed;

	public function __construct()
	{
		$this->argsUnparsed = $_SERVER['argv'];
		$this->argsParsed = array
		(
				"One" => "one",
				"Two" => "two",
				"Three" => "three"
		);
	}

	public function getParsed()
	{
		return $this->argsParsed;
	}
}
