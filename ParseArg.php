<?php
class ParseArg
{	
	public function __construct($args)
	{
		$arg = $_SERVER['argv'];
		$this->argv = $this->parse($arg);
	}
	
	
	 /**
	  * Parse a specified array
	  * @param unknown $arg
	  * @return unknown[]
	  */
	private function parse($arg)
	{
		$args = array();
		$i = 0;
		for($i=0; $i < count($arg); $i++)
		{
			$args[$i] = $arg[$i];
		}
		return $args;
	}
}
