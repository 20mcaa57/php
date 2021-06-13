<?php 
$n=$_POST['n'];

switch ($_POST['n1']) {
	case 'n2':
		echo "reverse the string $n is: <br>";
        $mn= strrev($n);
         echo "$mn";
		break;
		case 'n3':
		echo "length of the string $n is:<br>";
		$mn=strlen($n);
		echo "$mn";
		break;
			case 'n4':
		echo "substring the string $n is:<br>";
		$mn=substr($n,"5");
		echo "$mn";
		break;
			case 'n5':
		echo "converting the string to uppercase $n is:<br>";
	$mn=strtoupper($n);
	echo "$mn";
		break;
			case 'n6':
		echo "converting the string to lowercase $n is:<br>";
	$mn=	strtolower($n);
		echo "$mn";
		break;
			case 'n7':
		echo "Counting the number of words $n is:<br>";
	$mn=	str_word_count($n);
		echo "$mn";
		break;
	default:
		# code...
		break;
}

?>