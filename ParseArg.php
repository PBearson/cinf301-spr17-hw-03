<?php
class ParseArg
{
	public $argv;

	public function __construct()
	{
		$this->argv = $_SERVER['argv'];
		$this->parse();
	}
	
	private function parse()
	{
		
	}
}
