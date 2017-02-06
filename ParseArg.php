<?php
class ParseArg
{	
	public function __construct()
	{
		$args = $_SERVER['argv'];
		$this->argv = $this->parse($args);
	}
	
	
	 /**
	  * Parse a specified array
	  * @param unknown $arg
	  * @return unknown[]
	  */
	private function parse($a)
	{
		$args = array();
		$i = 0;
		for($i=0; $i < count($a); $i++)
		{
			$args[$i] = $a[$i];
		}
		return $args;
	}
}
