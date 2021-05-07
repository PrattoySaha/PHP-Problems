<!-- How to check whether a given year is leap year or not. -->

<?php 

echo "<center><h2>How to check whether a given year is leap year or not. <br> Given year 2024</h2></center>";

$year =2024;


if ($year % 4 == 0){
	if ($year % 100 == 0 && $year % 400 != 0){
		echo "<center><h3>$year is not Leap Year</h3></center>" ;
	}
	else{
		echo "<center><h3>$year is Leap Year </h3></center>";
	}
}



?>