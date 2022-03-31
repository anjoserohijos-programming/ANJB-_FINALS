<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Roboto Serif' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Italiana' rel='stylesheet'>
    <link href='view/styles/reservation-page.css' rel='stylesheet'>
    <title>BicyClean+ | Reservation Page | Bicycle Services Reservation System</title>
</head>

<body>
    <form action="controller/process-reservation.php" method="post">
        <h1 style="text-align: center;">Bicyclean+: Bicycle Services Reservation Form </h2>
    
        <hr class ="solid">

        <h3>Full Name</h3>
        <input type="text" name="fullName"placeholder="Enter your Full Name" required>
        <h3>Email Address</h3>
        <input type="text"   name="email"placeholder="Enter you email address" required>
        <h3>Contact No.</h3>
        <input type="number" name="contactNo" placeholder="Enter your phone number (+63)" required>
        <h3>Service Type</h3>
        <label for="service-type"></label>
        <?php
        include "controller/process-service-types.php";
        echo "<select style ='border-radius: 4px; width: 100%; height: 50px; padding: 5px; outline: none;' name='serviceType' id='service-type'>";
        for( $i = 0;  $i < count($listServiceTypes); $i++ ){
            echo "<option style='font-size: 17px;'value=".$listServiceTypes[$i]["service_id"].">".$listServiceTypes[$i]["service_name"]."</option>";
        }
        echo "</select>";
        ?>
        <br>
        <br>

        <textarea name="notes" style = "width: 100%; height: 90px; outline: none; border-radius: 10px; padding: 5px;"placeholder="Please mention your additional requests here. Type N/A if none." ></textarea>
        <h3>Date</h3>
        <?php 
         $mindate = date("Y-m-d");
        ?>
         <input type="date" style ="border-radius: 4px; font-family: 'Roboto Serif';" required id="res_date" name="reservation_date" min="<?=$mindate?>">
         <br>
        <label for="timeslot"><h3>Select Time Slot (AM or PM only)</h3></label>
        <select name="timeslot" style ="border-radius: 4px;     font-family: 'Roboto Serif';"id="timeslot">
            <option value="AM">AM</option>
            <option value="PM">PM</option>
        </select>
        <br>
        <br>
        <button id="submitBtn" type="submit" name="submit"> SUBMIT</button>
    </form>
</body>
</html>
