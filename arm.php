<html>
<body>
<form method="POST">
Enter a number:<input type="text" name="num">
<button type="submit">check</button>
</form>
<?php
if($_POST)
{
    $num=$_POST['num'];
$total=0;
$x=$num;
while($x!=0)
{
    $rem=$x%10;
    $total=$total+$rem*$rem*$rem;
    $x=$x/10;

}
echo "the given number is $num <br>";
echo "the sum of the digit id $total <br>";
if($num==$total)
{
    echo "the given number is an Armstrong";

}
else{
    echo "the given number is not an armstrong";
}
}
?>
</body>
</html>
