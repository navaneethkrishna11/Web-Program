<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tut-8</title>
</head>
<body>
    <h1>Factorial</h1>
    <form action="tut-9-q-1.php" method="post">
        Enter a Number: <br> <input type="number" name="num"> <br><br>
        <input type="submit" value="Find" name="Find">
        <br><br>
    </form>
</body>
</html>

<?php
    function factorial($num){
        if($num==1){
            return 1;
        }else{
            return $num*factorial($num-1);
        }
    }

    if(isset($_POST["Find"])){
        $fact = factorial($_POST["num"]);
        echo "Factorial is $fact";
    }
?>
