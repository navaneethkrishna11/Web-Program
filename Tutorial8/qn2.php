<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tut-8</title>
</head>
<body>
    <h1>Pallindrome</h1>
    <form action="tut-8-q2.php" method="post">
        Enter String: <input type="text" name="string"> <br><br>
        <input type="submit" value="Check" name="Check">
        <br><br><br>
    </form>
</body>
</html>

<?php
    
    if(isset($_POST["Check"])){
        if(strrev($_POST["string"])==$_POST["string"]){
            echo "The string is a pallindrome";
        }else{
            echo "The string is not a pallindrome";
        }
    }
?>
