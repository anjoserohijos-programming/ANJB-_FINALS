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
                
        include "../controller/process-next-reservations.php";
        echo "<table style='width: 200vh; text-align: center;'>
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
          </tr>
        </thead><tbody>";

        for( $i = 0;  $i < count($listNextReservations); $i++ ){
            echo "
            
              <tr>
                <td>".$listNextReservations[$i]["reservation_id"]."</td>
                <td>".$listNextReservations[$i]["full_name"]."</td>
                <td>".$listNextReservations[$i]["email_address"]."</td>
                <td>".$listNextReservations[$i]["contact_no"]."</td>
                <td>".$listNextReservations[$i]["service_type"]."</td>
                <td>".$listNextReservations[$i]["notes"]."</td>
                <td>".$listNextReservations[$i]["reservation_date"]."</td>
                <td>".$listNextReservations[$i]["time_slot"]."</td>
                <td>".$listNextReservations[$i]["time"]."</td>
              </tr>
            ";
        }
        echo "</tbody>
            </table>";
    ?>
    </div>
</body>
</html>