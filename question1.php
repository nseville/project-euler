<?php
	// WARNING -- Please do not view before you solve the problems on your own, you are cheating yourself out of
	// a good learning experience.

	// #1 - If we list all the natural numbers below 10 that are multiples of 3 or 5, we get 3, 5, 6 and 9. The sum of these multiples is 23.
	// Find the sum of all the multiples of 3 or 5 below 1000.
	
	/**
	 * Finds the sum of all the numbers divisible by 3 or 5 under a specified number
	 * @param  Max    $max  The upper bound number.
	 */ 
	function question1($max) {	
		$sum = 0;
		$num = 0;

		while ($num < $max) {
		$num++;
			if ($num % 3 == 0) {
				$sum = $sum + $num;
				
			} elseif ($num % 5 == 0) { 
				$sum = $sum + $num;
				
			}

		}

		echo "The sum of all numbers divisible by 3 or 5 less than " . ($max + 1) ." is " . $sum;

	}

	question1(999);

?>