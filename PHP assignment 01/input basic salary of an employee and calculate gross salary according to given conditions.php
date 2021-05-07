<!-- Write a program to input basic salary of an employee and calculate gross salary according to given conditions.
Basic Salary <= 10000 : HRA = 20%, DA = 80%
Basic Salary is between 10001 to 20000 : HRA = 25%, DA = 90%
Basic Salary >= 20001 : HRA = 30%, DA = 95% -->



<?php

echo "<center><h2>Write a program to input basic salary of an employee and calculate gross salary according to given conditions.<br>
Basic Salary <= 10000 : HRA = 20%, DA = 80% <br>
Basic Salary is between 10001 to 20000 : HRA = 25%, DA = 90% <br>
Basic Salary >= 20001 : HRA = 30%, DA = 95% </h2></center>";

$basic = "1200000";


if ($basic <= 10000) {
	$hra = $basic*20/100;
	$da = $basic*80/100;
}
if ($basic <= 20000) {
	$hra = $basic*25/100;
	$da = $basic*90/100;
}
else {
	$hra = $basic*30/100;
	$da = $basic*95/100;
}


$gross = $basic + $hra + $da;


echo "<center><h3>Basic salary = $basic <br> HRA = $hra <br> DA = $da</h3><center>" ;
echo "<center><h3>Gross salary: $basic + $hra + $da = $gross</h3><center>" ;


?>