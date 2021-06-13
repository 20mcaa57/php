<?php
$n=$_POST["num"];
$n1=$_POST["num"];
$rev=0;
$sum=0;
while ( $n > 1) 
{
	$rem=$n%10;
	$rev=$rev*10+$rem;
	$sum=$sum+$rem;
	$n=$n/10;

}

echo "reverse of $n1 is $rev";
echo '<br>';
echo "sum of $n1 is $sum";
echo '<br>';
if($n1==$rev )
{
	echo " palindrome";
}
else
{
	echo " not palindrome";
}
?>