<?php
$f1=-1;
$f2=1;
$i=0;
$n=$_POST["t1"];
echo "fibonacci of $n is:";
while($i<$n)
{
	$f3=$f1+$f2;
	echo "<br>$f3";
    $f=$f3;
   
	    
	$f1=$f2;
	$f2=$f3;
	$i++;


}
$f1=-1;
$f2=1;
$i=0;
$n=$_POST["t1"];
while($i<$n)
{
	$f3=$f1+$f2;
	
    $f=$f3;
   
	    
	$f1=$f2;
	$f2=$f3;
	$i++;
echo "<br><br>";
	 if($f%2==0)
    {
    	echo "$f is prime<br>";
    }
    else
    {
    	echo "$f is not prime<br>";
    }
}

?>