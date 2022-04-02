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
	border-radius: 8px;
    cursor: grabbing;
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
	</style>
</head>
<body >
    <div class="sidebar">
        <div class="logopanel">
			<img src="../view/styles/bc+.png" alt="wheel"> BICYCLEAN+ 
		</div>
        <div class="today-reservations">
            <button id="profileBtn" name="profile"> My Profile </button>
        </div>
        <div class="today-reservations">
           <button id="todayBtn" name="todayreserve"> Today Reservations </button>
        </div>
        <div class="next-reservations">
            <button id="todayBtn" name="todayreserve"> Next Day Reservations </button>
        </div>
        <div class="archived-reservations">
            <button id="todayBtn" name="todayreserve"> Archived Reservations </button>
        </div>
        <div class="archived-reservations">
            <button id="todayBtn" name="todayreserve"> Sign Out </button>
        </div>
    </div>
    <div class="viewpanel">
        asdf
    </div>
</body>
</html>