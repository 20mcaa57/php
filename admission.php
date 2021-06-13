<?php
$percent=$_POST["t8"];

switch ($_POST['s1']) 
{
	case 'MCA':
		         if($percent>70  )
		         {
                   if($_POST['s']=='BCA' || $_POST['s']=='BSc')
                   {
                   	echo"your admisiion sucessful";
                   }
                   else
                   {
                   	echo"no admission";
                   }

		         }
		         else
		         {
		         	echo" low percentage/not your stream, choose other course";
		         }
		break;
		case 'MSc':
		if($percent>40  )
		         {
                   if($_POST['s']=='BCA' || $_POST['s']=='BSc')
                   {
                   	echo"your admisiion sucessful";
                   }
                   else
                   {
                   	echo "no admission";
                   }

		         }
		         else {
		         	echo "noo";
		         	# code...
		         }
	
		break;
		case 'MBA':
		if($percent>60  )
		         {                  
                   	echo"your admisiion sucessful";
                   }
                   else
                   {
                   	echo "no admission";
                   }

		         
		break;
		case 'Mtech':
		if($percent>70  )
		         {
                   if($_POST['s']=='BE' )
                   {
                   	echo"your admisiion sucessful";
                   }
                   else
                   {
                   	echo "no admission";
                   }

		         }	
		         else
		         {
		         	echo "noooo";
		         }
		break;
	
	default:
		echo "loading......";
		break;
}
?>