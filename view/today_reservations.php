<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style media="screen">
    html, body{
        margin: 0;
        padding: 0;
        background: #ffffff;
    }
    body{
       
    }
    .page-title-head{
        width: 100%;
        height: 100%;
    }
</style>
<body>
    <div class="page-content">
        <?php
        session_start();
        
        include "../controller/process-today-reservations.php";
        if(isset($_POST["acceptReservation"])){
            extract($_POST);
            $database->addArchivedReservation($reservation_id, $full_name, $email_address, $contact_no, $service_type, $notes, $reservation_date, $time_slot, $_SESSION["s_AdminId"]);
        }
        echo "<table style='width: 200vh; text-align: center; '>
        <thead>
          <tr>
            <th>Reservation ID</th>
            <th>Full Name</th>
            <th>Email Address</th>
            <th>Contact No.</th>
            <th>Service Type</th>
            <th>Notes</th>
            <th>Reservation Date</th>
            <th>Time Slot</th>
            <th>Time</th>
            <th>Action</th>
          </tr>
        </thead><tbody>";
        
        for( $i = 0;  $i < count($listTodayReservations); $i++ ){
            echo "
            
              <tr>
                <td>".$listTodayReservations[$i]["reservation_id"]."</td>
                <td>".$listTodayReservations[$i]["full_name"]."</td>
                <td>".$listTodayReservations[$i]["email_address"]."</td>
                <td>".$listTodayReservations[$i]["contact_no"]."</td>
                <td>".$listTodayReservations[$i]["service_type"]."</td>
                <td>".$listTodayReservations[$i]["notes"]."</td>
                <td>".$listTodayReservations[$i]["reservation_date"]."</td>
                <td>".$listTodayReservations[$i]["time_slot"]."</td>
                <td>".$listTodayReservations[$i]["time"]."</td>
                <td><form class='' action='' method='post'>
                <input type='text' name='reservation_id' value=".$listTodayReservations[$i]["reservation_id"]." hidden>
                <input type='text' name='full_name' value=".$listTodayReservations[$i]["full_name"]." hidden>
                <input type='text' name='email_address' value=".$listTodayReservations[$i]["email_address"]." hidden>
                <input type='text' name='contact_no' value=".$listTodayReservations[$i]["contact_no"]." hidden>
                <input type='text' name='service_type' value=".$listTodayReservations[$i]["service_type"]." hidden>
                <input type='text' name='notes' value=".$listTodayReservations[$i]["notes"]." hidden>
                <input type='text' name='reservation_date' value=".$listTodayReservations[$i]["reservation_date"]." hidden>
                <input type='text' name='time_slot' value=".$listTodayReservations[$i]["time_slot"]." hidden>
                <input type='text' name='time' value=".$listTodayReservations[$i]["time"]." hidden>
                <input type='submit' name='acceptReservation' value='ACCEPT'>
              </form></td>
              </tr>
            ";
        }
        echo "</tbody>
            </table>";
        ?>
       
    </div>
</body>
</html>