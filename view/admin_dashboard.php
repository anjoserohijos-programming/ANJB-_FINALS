<?php
session_start();
if($_SESSION["isLoggedIn"] == true){
    header("Location: ../admin_login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Roboto Serif' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Italiana' rel='stylesheet'>
    <title>BicyClean+ | Admin Dashboard</title>
	
	<style>
	html{
    margin: 0;
    padding: 0;
    height: 100%;
	}
	body{
    display:flex;
    margin: 0;
    padding: 0;
    height: 100%;
    
    background: url("https://images.unsplash.com/photo-1511884642898-4c92249e20b6?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80");
    background-size: cover;
    background-repeat: no-repeat;
	}
	.sidebar{
    background-color: #FDF4E3;
    margin: 0;
    height: 100%;
    width: 40vh;
	}
	button {
    background-color: #F4D7C8;
    color: black;
    padding: 5px 0;
    margin: 10px 0;
    cursor: pointer;
    width: 100%;
	font-size: 20px;
    font-family: 'Roboto Serif';
    }
	.logopanel {
	float: left;
	width: 20%;
	display: flex;
	align-items: center;
	font-size: 25px;
	color: #372c2e;
    letter-spacing: 3px;
    text-transform: capitalize;
    }
	.logopanel {
	float: none;
	width: auto;
	justify-content: center;
	}
    .logopanel img{
    margin-top: 3px;
    width: 70px;
    height: 60px;
    padding-right:0px;
    }
    
    .system-menu-item{
        height: 7vh;
        cursor:pointer;
        margin: 0;
        align-items: center;
        text-align: center;
        font-size: 20px;
        transition: 2s;
    }
    .system-menu-item h4{
        margin:0;
        padding-top: 20px;
    }
    .system-menu-item:hover{
        background-color: orange;
        transition: .5s;
    }
	</style>
</head>
<body >
    <div class="sidebar">
        <div class="logopanel">
			<img src="../view/styles/bc+.png" alt="wheel"> BICYCLEAN+ 
		</div>
        <div class="logopanel">
			<h4>System Menu</h4>
		</div>
        <div class="system-menu-item" onclick="changePage(1)"><h4>My Profile</h4></div>
        <div class="system-menu-item" onclick="changePage(2)"><h4>Today Reservations</h4></div>
        <div class="system-menu-item" onclick="changePage(3)"><h4>Next Day Reservations</h4></div>
        <div class="system-menu-item" onclick="changePage(4)"><h4>Archived Reservations</h4></div>
        <button id="signOutBtn" name="signOut" onclick="location.href = 'admin_login.php'"> Sign Out </button>
    </div>
    <div class="viewpanel" style="margin-left: 5vh; margin-top: 4vh;">
        <div class="page-title-head">
           <h1 id="page-title">Today Reservations</h1>
        </div>
        <iframe id="tableFrame"src="today_reservations.php" style="width: 120vh; height: 70vh;"frameborder="1"></iframe>
    </div>

    <script>
        function changePage(index){
            switch(index){
                case 1:
                    document.getElementById("page-title").innerHTML = "Admin Profile";
                    document.getElementById("tableFrame").src = "admin-profile.php";
                    break;
                case 2:
                    document.getElementById("page-title").innerHTML = "Today Reservations";
                    document.getElementById("tableFrame").src = "today_reservations.php";
                    break;
                case 3:
                    document.getElementById("page-title").innerHTML = "Next Reservations";
                    document.getElementById("tableFrame").src = "next_reservations.php";
                    break;
                case 4: 
                    document.getElementById("page-title").innerHTML = "Archived Reservations";
                    document.getElementById("tableFrame").src = "archived_reservations.php";
                    break;                    
            }
        }
    </script>
</body>
</html>
