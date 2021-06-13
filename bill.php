<?php
$previous=$_POST["t2"];
$present=$_POST["t3"];
if ($previous<$present) 
{
$current=$present - $previous ;
echo "consumed unit is : $current <br>";
if ($current<100) 
{
	$current1=$current*3;	
}
elseif ($current>=100 && $current<200) 
{
	$current1=$current*4;
}
elseif ($current>=200 && $current<300)
 {
	$current1=$current*5;
}
elseif ($current>300) 
{
	$current1=$current*6;
}
echo "Amount is:  $current1";
}
else
{
	echo " Current Reading is less than Previous reading .";
}
?>