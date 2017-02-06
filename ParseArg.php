<?php
class ParseArg
{	
	public function __construct()
	{
		$args = $_SERVER['argv'];
		$this->argv = $this->parse($args);
	}
	
	/**
	 * Parse command-line arguments
	 * @param array $a the command-line arguments
	 * @return array of parsed arguments
	 */
	private function parse(array $a)
	{
		$args = array();
		
		for($i = 0; $i < count($a); $i++)
		{
			$val = $a[$i];
			
			//A single-dash followed by a single letter
			if($val[0] == "-" and $val[1] != "-")
			{
				//A single-dash that is self-contained
				if($a[$i + 1] == null or $a[$i + 1][0] == "-")
				{
					$args[$val[1]] = 'true';
				}
			}
		}
		return $args;
	}
}
