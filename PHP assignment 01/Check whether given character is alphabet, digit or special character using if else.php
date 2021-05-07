<!-- A character from user and check whether given character is alphabet, digit or special character using if else. -->

<?php 

echo "<center><h2>A character from user and check whether given character is alphabet, digit or special character using if else. <br> Given Character A</h2></center>";

$char = "A";

	if ($char >= "a" && $char <= "z" || $char >= "A" && $char <= "Z") {
		echo "<center><h3>$char is Alphabet</h3><center>" ;
	}
	
	
	else if ($char >= 0 ) {
		echo "<center><h3>$char is Digit</h3><center>" ;
	}
	
	else {
		echo "<center><h3>It's Special Character</h3><center>";
	}

?>