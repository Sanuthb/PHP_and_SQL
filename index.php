<?php
    include('config.php');

    if(isset($_POST['submit'])){
         
        $con->close();
    } 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP And SQL</title>
</head>
<body>
    <form name="myform" action="" method="POST">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required><br><br>
        <label for="age">Age:</label>
        <input type="number" name="age" id="age" require>
        <input type="submit" name="submit" value="Insert">
    </form>
</body>
</html>