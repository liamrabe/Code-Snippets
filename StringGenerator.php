<?php
	class StringGenerator {

		private static function GetLetters($pos, $string) {
			// Return last x characters of string.
			return str_split(substr($string, $pos));
		}
	
		private static function GetLetter() {

			// Array of alphanumerical characters.
			$chars = [
				"A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N", "O", "P", "R", "S", "T", "U", "V", "W", "X", "Y", "Z", "a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m", "n", "o", "p", "q", "r", "s", "t", "u", "v", "w", "x", "y", "z", "0", "1", "2", "3", "4", "5", "6", "7", "8", "9"
			];

			// Randomize all character position in array.
			shuffle($chars);
	
			// Return random letter from array.
			return $chars[rand(0, count($chars) - 1)];

		}
	
		public static function Generate($length) {
	
			// Create string.
			$string = "";
	
			// Run loop until string has been generated.
			for($i = 0; $i < $length;) {
	
				// Fetch last four letters of string.
				$letters = self::GetLetters(-4, $string);
	
				// Get random letter from array.
				$letter = self::GetLetter();
	
				// If letter isn't in array, add to string.
				if(!in_array($letter, $letters)) {
	
					// Add letter to string.
					$string .= $letter;
	
					// Increment i by one.
					$i++;
	
				}
	
			}
			// Return generated string.
			return $string;
	
		}

	}
?>
