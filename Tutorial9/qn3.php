<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tut-8</title>
</head>
<body>
    <h1>Odd or Even</h1>
    <form action="tut-9-q-3.php" method="post">
        Enter a Number: <br> <input type="number" name="num"> <br><br>
        <input type="submit" value="submit" name="submit">
        <br><br>
    </form>
</body>
</html>

<?php
    function oddeven($num){
        if($num%2==0){
            echo "$num is Even";
        }else{
            echo "$num is Odd";
        }
    }

    if(isset($_POST["submit"])){
        oddeven($_POST["num"]);
    }
?>
