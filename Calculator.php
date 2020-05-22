<?php
class Calculator
{
 
    public function add($a, $b): float
    {
        return $a + $b;
    }

    public function multiply($a, $b): float
    {
        return $a * $b;
    }

    public function division($a, $b): float
    {
        return $a / $b;
    }
	
	public function potencia($a, $b): float
    {
		$contador=0;
		while($contador<$b)
		{
			$a=$a*$b;
			$contador=$contador+1;
		}
        return $a;
    }
	
    public function par($a): float
    {
        return ($a % 2==0);
    }
	
	
}
