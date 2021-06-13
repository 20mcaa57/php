<?php

$n1=$_POST["t1"];
$n2=$_POST["t2"];


 				 															
switch ($_POST['cal']) {
	case 'Add':
		$a=$n1+$n2;
		echo "addition of $n1 and $n2 is $a";
		break;
			case 'Subtract':
		$b=$n1-$n2;
		echo "subtraction of $n1 and $n2 is $b";
		break;
			case 'Multiply':
		$c=$n1*$n2;
		echo "multiplication of $n1 and $n2 is $c";
		break;
			case 'Divide':
		$d=$n1/$n2;
		echo "division of $n1 and $n2 is $d";
		break;
	
	default:
		echo".";
		break;


}


?>