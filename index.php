<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Roboto Serif' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Italiana' rel='stylesheet'>

    <title>BicyClean+ | Reservation Page |Bicycle Services Reservation System</title>
</head>

<style>
    html, body{
      display: flex;
      justify-content: center;
      font-family: 'Roboto Serif';
      font-size: 15px;
    background-image: url(https://drive.google.com/uc?export=view&id=1JV_hqD4UNi96ZXQEuPYGl6t5bYVq4yGC);
    background-size: cover;

      }

      form {
      
  padding: 2rem 3rem 4rem;
  box-shadow: 2px 2px 16px 3px rgba(0, 0, 0, 0.4);
      color: black;
      background-color: transparent;
      border-radius: 8px;

      }

      input[type=text], input[type=number] {
      width: 100%;
      padding: 16px 8px;
      margin: 8px 0;
      display: inline-block;
      border: 1px solid #ccc;
      box-sizing: border-box;
      }

       input[type=submit]{
        color: white;
    font-family: 'Roboto Serif';
      font-size: 15px;
       }

      button {
      background-color: beige;
      color: white;
      padding: 14px 0;
      margin: 10px 0;
    border-radius: 8px;
      cursor: grabbing;
      width: 100%;
      }

      h1 {
      text-align:center;
      font-size:30px;
      font-family: 'Italiana';

      }

      button:hover {
      opacity: 0.8;
      }
      .formcontainer {
      text-align: left;
      margin: 24px 50px 12px;
      }
      .container {
      padding: 16px 0;
      text-align:left;
      }
      span.psw {
      float: right;
      padding-top: 0;
      padding-right: 15px;
      }
      /* Change styles for span on extra small screens */
      @media screen and (max-width: 300px) {
      span.psw {
      display: block;
      float: none;
      }
hr.solid {
    border-top: 4px solid #6c757d;
}

</style>



<body>
   

    <form action="controller/process-reservation.php" method="post">
    <h1 style="text-align: center;">Bicyclean+: Bicycle Services Reservation Form </h2>
    
        <hr class ="solid">

        <h3>Full Name</h3>
        <input type="text" placeholder="Enter your Full Name" required>
        <h3>Email Address</h3>
        <input type="text" placeholder="Enter your email address" required>
        <h3>Contact No.</h3>
        <input type="number" placeholder="Enter your phone number (+63)" required>
        <h3>Service Type</h3>
        <label for="service-type"></label>
        
        <?php
        include "controller/getServiceTypes.php";
        echo "<select style ='border-radius: 4px;'name='service-type' id='service-type'>";
        for( $i = 0;  $i < count($listServiceTypes); $i++ ){
            echo "<option value=".$listServiceTypes[$i]["service_id"].">".$listServiceTypes[$i]["service_name"]."</option>";
        }
        echo "</select>";
        ?>
        <br>
        <br>
       
        <textarea name="notes" id="" cols="30" rows="10" placeholder="Please mention your additional requests here. Type N/A if none." ></textarea>
        <h3>Date</h3>
        <?php 
         $mindate = date("Y-m-d");
        ?>
         <input type="date" style ="border-radius: 4px;     font-family: 'Roboto Serif';" required id="res_date" name="date" min="<?=$mindate?>">
         <br>
        <label for="timeslot"> <h3>Select Time Slot (AM or PM only)</h3></label>
        <select name="timeslot" style ="border-radius: 4px;     font-family: 'Roboto Serif';"id="timeslot">
            <option value="AM">AM</option>
            <option value="PM">PM</option>
        </select>
        <br>
        <br>
        <button><input type="submit" style = "background: none; border: none; color: dimgrey;"name="submit"></button>
    </form>
</body>
</html>
