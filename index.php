<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">

    <title>BicyClean+ | Reservation Page |Bicycle Services Reservation System</title>
</head>

<style>
    html, body{
      display: flex;
      justify-content: center;
      font-family: Roboto, Arial, sans-serif;
      font-size: 15px;
      background-color: #e6ccb2;
      }

      form {
      background-color: #fff;
  padding: 2rem 3rem 4rem;
  box-shadow: 2px 2px 16px 3px rgba(0, 0, 0, 0.4);
      color: #f2cc8f;
      background-color: #3d405b;
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
         font-family: Roboto, Arial, sans-serif;
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
      font-size:22px;
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

</style>



<body>
       

    <form action="controller/process-reservation.php" method="post">
    <h1 style="text-align: center;">Bicyclean+: Bicycle Services Reservation </h2>
    <h1 style="text-align: center;">Reservation Form</h3>

        <h3>Full Name</h3>
        <input type="text" placeholder="Enter your Full Name" required>
        <h3>Email Address</h3>
        <input type="text" placeholder="Enter your email address" required>
        <h3>Contact No.</h3>
        <input type="number" placeholder="Enter your phone number (+63)" required>
        <h3>Service Type</h3>
        <label for="service-type"></label>
        <select style ="border-radius: 4px;"name="service-type" id="service-type">
            <option value="1">Wheel Truing with Tensioning Application</option>
            <option value="2">Wheel build with tension application</option>
            <option value="3">Install Bike Rack</option>
            <option value="4">Install Groupset</option>
            <option value="5">Basic Suspension Service</option>
        </select>
        <br>
        <br>
       
        <textarea name="notes" id="" cols="30" rows="10" placeholder="Please mention your additional requests here. Type N/A if none." ></textarea>
        <h3>Date</h3>
        <?php 
         $mindate = date("Y-m-d");
        ?>
         <input type="date" style ="border-radius: 4px;" required id="res_date" name="date" min="<?=$mindate?>">
         <br>
        <label for="timeslot"> <h3>Select Time Slot (AM or PM only)</h3></label>
        <select name="timeslot" style ="border-radius: 4px;"id="timeslot">
            <option value="AM">AM</option>
            <option value="PM">PM</option>
        </select>
        <br>
        <br>
        <button><input type="submit" style = "background: none; border: none; color: dimgrey;"name="submit"></button>
    </form>
</body>
</html>
