<?php
include "conn.php";
if(isset($_POST["submit"]))
{
    $FullName=$_POST["fname"];
    $LastName=$_POST["lname"];
    
    $Address=$_POST["address"];
    $Email=$_POST["email"];
    $Date=$_POST["bdate"];
    $Time=$_POST["btime"];
    $City=$_POST["city"];
    $Package=$_POST["package"];
    // echo $Address;
    $query = "INSERT INTO `booking`(`FullName`, `LastName`, `Address`, `Email`, `Date`, `Time`, `City`, `Package`) VALUES
     ('$FullName','$LastName','$Address','$Email','$Date','$Time','$City','$Package')";
     $result = mysqli_query($db,$query);
     if($result){

         echo '<script>
         window.location.href="Booooknow.php";
         </script>';
     }
//         $query = "INSERT INTO booking VALUES (?,?, ?, ?, ?, ?, ?,?,?)";
// $stmt = $db->prepare($query);
// $stmt->bind_param('issssssss',$BID,  $FullName, $LastName, $Address, $Email,$Date,$Time,$City,$Package);
// $stmt->execute();


}
?>