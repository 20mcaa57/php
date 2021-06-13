<?php
$img=$_POST["t1"];
$empno=$_POST["t2"];
$fname=$_POST["t3"];
$lname=$_POST["t4"];
$address=$_POST["t5"];
$designation=$_POST["t6"];
$phoneno=$_POST["t7"];
$basic=$_POST["t9"];
echo("Emp Image: $img <br>");
echo("Emp No: $empno  <br>");
echo("First Name: $fname  <br>");
echo("Last Name: $lname  <br>");
echo("Address: $address  <br>");


if($_POST['g']=='Male')
{
echo "Gender: Male  <br>";
}
elseif ($_POST['g']=='Female') 
{
	echo "Gender: Female  <br>";
}

echo "Designation: $designation  <br>";
echo "Phone no: $phoneno  <br>";
if($_POST['c']=='Full time')
	{ echo "Emp Category: Full Time  <br>";
}elseif ($_POST['c']=='Part time') {
	echo "Emp Category: Part Time  <br>";
}
elseif($_POST['c']=='Contract') {
	echo "Emp Category: Category  <br>";
}

echo "Basic Salary: $basic  <br>";

if ($_POST['c']=='Part time') {
	$noofhour=$_POST["t8"];
	$gross=$noofhour*100;
	$da=0;
	$hra=0;
	$pf=0;
	$tax=0;
	$net=$gross-$da-$hra-$pf-$tax;
	echo "da : $da <br>";
	echo "hra : $hra <br>";
	echo "pf : $pf <br>";
	echo "Gross : $gross <br>";
	echo "Net Amount : $net <br>";
}
elseif ($_POST['c']=='Full time') {
	if($basic<10000)
	{
		$da=$basic*0.45;$hra=$basic*0.1;$tax=0;$pf=0;$gross=$basic+$da+$hra+$pf+$tax;$net=$gross-$da-$hra-$pf-$tax;
	}
	elseif($basic>=10000 && $basic<=50000)
	{
		$da=$basic*0.75;$hra=$basic*0.2;$pf=1200;$tax=$basic*0.05;$gross=$basic+$da+$hra+$pf+$tax;$net=$gross-$da-$hra-$pf-$tax;
	}
	elseif($basic>50000)
	{
		$da=$basic*0.9;$hra=$basic*0.3;$pf=$basic*0.05;$tax=$basic*0.15;$gross=$basic+$da+$hra+$pf+$tax;$net=$gross-$da-$hra-$pf-$tax;
	}
	echo "da : $da <br>";
	echo "hra : $hra <br>";
	echo "pf : $pf <br>";
echo "tax : $tax <br>";
echo "gross: $gross <br>";
	echo "Net Amount : $net <br>";
}
elseif ($_POST['c']=='Contract') {
	if($basic<5000)
	{
		$da=200;$hra=0;$tax=0;$pf=0;$gross=$basic+$da+$hra+$pf+$tax;$net=$gross-$da-$hra-$pf-$tax;
	}
	elseif($basic>=5000 && $basic<=25000)
	{
		$da=$basic*0.15;$hra=1000;$pf=0;$tax=$basic*0.03;$gross=$basic+$da+$hra+$pf+$tax;$net=$gross-$da-$hra-$pf-$tax;
	}
	elseif($basic>25000)
	{
		$da=$basic*0.2;$hra=$basic*0.05;$pf=0;$tax=$basic*0.09;$gross=$basic+$da+$hra+$pf+$tax;$net=$gross-$da-$hra-$pf-$tax;
	}
	echo "da : $da <br>";
	echo "hra : $hra <br>";
	echo "pf : $pf <br>";
echo "tax : $tax <br>";
echo "gross: $gross <br>";
	echo "Net Amount : $net <br>";
}


?>
<br><br>

for Part time employees – per hour 100Rs salary, no DA, HRA, PF<br>
for Full time employees-<br>
DA=45% and HRA=10%, PF=0 TAX=0 if basic &lt; 10000<br>
DA=75% and HRA=20%. PF=1200 TAX=5% if basic &lt; 50000 basic&gt;=10000<br>
DA=90% and HRA=30%. PF=5% TAX=15% if basic &gt; 50000 basic<br>
For Contract employees – monthly salary<br>
DA=200 and HRA=0, TAX=0 if basic &lt; 5000<br>
DA=15% and HRA=1000 TAX=3% if basic &lt; 5000 basic&gt;=25000<br>
DA=20% and HRA=5%. TAX=9% if basic &gt; 25000 basic<br>	