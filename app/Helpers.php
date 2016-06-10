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
				throw new \Exception("NaN", 1);
			$total += $i;
		}
		return $total;
	}

	/*
		|____|____|
		   L    R
	*/
	public static function find(array $input, $q){
		$min = 0;
		$max = count($input) - 1;

		while($min <= $max){
			$mid = (int)(($min + $max) / 2);
			
			if($q < $input[$mid]) $max = $mid - 1;
			else if($q > $input[$mid]) $min = $mid + 1;
			else return $mid;
		}

		return -1;
	}

	public static function existsIn(array $inputA, array $inputB){
		array_multisort($inputB);
		
		foreach ($inputA as $i) {
			if(static::find($inputB, $i) < 0) return false;
		}

		return true;
	}
}