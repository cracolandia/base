<?php

namespace App;

class Helpers{
	/*	
		Receba um array de inteiros e some-os.
	*/
	public static function reduce(array $input){
		$total = 0;
		foreach($input as $i){
			if(!is_numeric($i)) 
				throw new Exception("NaN", 1);

			$total += $i;
		}

		return $total;
	}
}