<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tut-8</title>
</head>
<body>
    <h1>Calculator</h1>
    <form action="tut-8-q1.php" method="post">
        Enter NUM1: <input type="number" name="num1"> <br><br>
        Enter NUM2: <input type="number" name="num2"><br><br>
        <input type="submit" value="add" name="add">
        <input type="submit" value="subtract" name="subtract">
        <input type="submit" value="multiply" name="multiply">
        <input type="submit" value="divide" name="divide">
        <br><br><br>
    </form>
</body>
</html>

<?php
    
    if(isset($_POST['add'])){
        $result= $_POST['num1']+$_POST['num2'];
    }
    if(isset($_POST['subtract'])){
        $result= $_POST['num1']-$_POST['num2'];
    }
    if(isset($_POST['multiply'])){
        $result= $_POST['num1']*$_POST['num2'];
    }
    if(isset($_POST['divide'])){
        if($_POST['num2']==0){
            $result="Cannot divide with 0";
        }else{
            $result= $_POST['num1']/$_POST['num2'];
        }
    }
    echo "RESULT : ".$result;
?>
