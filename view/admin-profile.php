
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    session_start();
    echo "<h2>Administrator ID: ".$_SESSION["s_AdminId"]."</h2>";
    echo "<h2>Username        : ".$_SESSION["s_Username"]."</h2>";
    echo "<h2>Full Name       : ".$_SESSION["s_FullName"]."</h2>";
    echo "<h2>Email Address   : ".$_SESSION["s_Email"]."</h2>";
    echo "<h2>Contact Number  : +63".$_SESSION["s_ContactNo"]."</h2>";
    echo "<h2>Home Address    : ".$_SESSION["s_HomeAddress"]."</h2>";
    echo "<h2>Date Registered : ".$_SESSION["s_DateRegistered"]."</h2>";
    
    ?>
    <h2></h2>
</body>
</html>