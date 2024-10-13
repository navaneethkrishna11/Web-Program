<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tut-8</title>
</head>
<body>
    <h1>Pallindrome</h1>
    <form action="tut-8-q3.php" method="post">
        Enter text: <br>
        <textarea name="sentence" id="">Enter text here</textarea><br><br>
        Enter pattern to search: <br> <input type="text" name="string"> <br><br>
        <input type="submit" value="Search" name="Check">
        <br><br>
    </form>
</body>
</html>

<?php
    
    if(isset($_POST["Check"])){
        $pattern = $_POST["string"];
        if(preg_match("/$pattern/", $_POST["sentence"])){
            echo "<h1>Pattern Found!</h1>";
        }else{
            echo "<h1>Pattern not Found!</h1>";
        }
    }
?>
