<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BicyClean+ | Reservation Page</title>
</head>
<body>
    <h2>Bicyclean+: Bicycle Services Reservation System</h2>
    <h3>Reservation Page</h3>

    <form action="controller/process-reservation.php" method="post">
        <h3>Full Name</h3>
        <input type="text" placeholder="Enter your Full Name" required>
        <h3>Email Address</h3>
        <input type="text" placeholder="Enter your email address" required>
        <h3>Contact No.</h3>
        <input type="number" placeholder="Enter your phone number (+63)" required>
        <h3>Service Type</h3>
        <label for="service-type"></label>
        <select name="service-type" id="service-type">
            <option value="1">Wheel Truing with Tensioning Application</option>
            <option value="2">Wheel build with tension application</option>
            <option value="3">Install Bike Rack</option>
            <option value="4">Install Groupset</option>
            <option value="5">Basic Suspension Service</option>
        </select>
        <br>
       
        <textarea name="notes" id="" cols="30" rows="10" placeholder="Please mention your additional requests here. Type N/A if none." ></textarea>
        <h3>Date</h3>
        <?php 
         $mindate = date("Y-m-d");
        ?>
         <input type="date" required id="res_date" name="date" min="<?=$mindate?>">
         <br>
        <label for="timeslot"> <h3>Select Time Slot (AM or PM only)</h3></label>
        <select name="timeslot" id="timeslot">
            <option value="AM">AM</option>
            <option value="PM">PM</option>
        </select>
        <input type="submit" name="submit">
    </form>
</body>
</html>