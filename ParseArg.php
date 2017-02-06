<?php
class ParseArg
{	
	public function __construct()
	{
		$args = $_SERVER['argv'];
		$this->argv = $this->parse($args);
	}
	
	private function parse($a)
	{
		$args = array();
		
		for($i = 0; $i < count($a); $i++)
		{
			$val = $a[$i];
			if($val[0] == "-" and $val[1] != "-")
			{
				if($a[$i + 1] == null or $a[$i + 1][0] == "-");
				{
					
					$args[$val[1]] = 'true';
				}
			}
		}
		return $args;
	}
}
