<?php
class ParseArg
{	
	public function __construct($args)
	{
		$this->argv = $_SERVER['argv'];
		$this->parse();
	}
	
	private function parse()
	{
		
	}
}
