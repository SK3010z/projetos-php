<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="index.php" method="post">
        <label>x:</label>
        <input type="text" name="x">
        <input type="submit" value="total">

    </form>
</body>
</html>

<?php
    

    if($_POST){
        $x = $_POST["x"];
        $total = null;

        $total = abs($x);
        echo $x;
    }


?>