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
                
        include "../controller/process-archived-reservations.php";
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
            <th>Remarks</th>
          </tr>
        </thead><tbody>";

        for( $i = 0;  $i < count($listArchivedReservations); $i++ ){
            echo "
            
              <tr>
                <td>".$listArchivedReservations[$i]["reservation_id"]."</td>
                <td>".$listArchivedReservations[$i]["full_name"]."</td>
                <td>".$listArchivedReservations[$i]["email_address"]."</td>
                <td>".$listArchivedReservations[$i]["contact_no"]."</td>
                <td>".$listArchivedReservations[$i]["service_type"]."</td>
                <td>".$listArchivedReservations[$i]["notes"]."</td>
                <td>".$listArchivedReservations[$i]["reservation_date"]."</td>
                <td>".$listArchivedReservations[$i]["time_slot"]."</td>
                <td>".$listArchivedReservations[$i]["time"]."</td>
                <td>".$listArchivedReservations[$i]["time"]."</td>
              </tr>
            ";
        }
        echo "</tbody>
            </table>";
    ?>
    </div>
</body>
</html>