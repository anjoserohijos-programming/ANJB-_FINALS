<?php



?>

<!DOCTYPE html>
<html lang="en" style="padding-top: 20vh;">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Roboto Serif' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Italiana' rel='stylesheet'>
	<link href='../view/styles/login-page.css' rel='stylesheet'>
    <title>BicyClean+ | Admin Login Page</title>
</head>
<body >
    <form action="../controller/process-admin-login.php" method="post">
		<h1 style="text-align: center;">BicyClean+ Admin Login Page</h1>
        
		<hr class ="solid">
		
		<h3>Username</h3>
		<input name="username"type="text" placeholder="Enter your Username" required>
		
		<h3>Password</h3>
        <input   name="password"type="password" placeholder="Enter your Password" required>
		
		<br>
		<br>
        <input style="
    background-color: beige;
    color: black;
    padding: 14px 0;
    margin: 10px 0;
    border-radius: 8px;
    cursor: pointer;
    width: 100%;"type="submit" name="submit" value="LOGIN">
    </form>
</body>
</html>