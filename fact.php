<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>

</head>

<body>
    <div>
        <form action="" method="POST">
            <label for="">
                    Enter the number:</label>
            <input type="number" name="num" id="">
            <br><br>
<input type="submit" value="submit" name="submit">
        </form>
        <?php
            function factorial($number)
            {
                $factorial=1;
                for($i = 1; $i <= $number; $i++)
                {
                    $factorial = $factorial * $i;
                }
                return $factorial;
            }
            if(isset($_POST['submit'])){
                $number = $_POST['num'];
                $fact = factorial($number);
                echo "factorial = $fact";

            }
            ?>
    </div>
</body>

</html>