<?php
session_start();
if(!isset($_SESSION['username'])){
    header('location:login.php');
}
?>
<!DOCtype html>
<html>
    <head>
        <title>Admin site</title>
        <link rel="stylesheet" type="text/css" href="comingBooking.css">
        <style>
            table{
            border-collapse: collapse;
            width:75%;
            font-family:monospace;
            position:absolute;
            top:30%;
            left:300px;
            text-align:left;
            font-size:18px;
          
            }
            th{
                color:black;
                padding: 5px;
                word-spacing:20px;
            }
            td{
                padding: 5px;
                color:black;
                font-size:15px;
                padding-top:20px;
            }
            tr:nth-child(even){background-color:lightgrey};
            </style>
            
    </head>
    <body>
        <div class="container">
            <div class="navigation">
                <ul>
                    <li>
                        <a href="#">
                            <span class="icon"><ion-icon name="camera-outline"></ion-icon></span>
                            <span class="Ttitle">Sulphites Studio</span>
                        </a>
                    </li>
                    <li>
                        <a href="admin.php">
                            <span class="icon"><ion-icon name="home-outline"></ion-icon></span>
                            <span class="title">Main Page</span>
                        </a>
                    </li>
                    <li>
                        <a href="comingBookings.php">
                            <span class="icon"><ion-icon name="play-skip-forward-outline"></ion-icon></span>
                            <span class="title">Coming Bookings</span>
                        </a>
                    </li>
                    <li>
                        <a href="previousBooking.php">
                            <span class="icon"><ion-icon name="play-skip-back-outline"></ion-icon></span>
                            <span class="title">Previous Bookings</span>
                        </a>
                    </li>
                  
                    <li>
                        <a href="logout.php">
                            <span class="icon"><ion-icon name="log-out-outline"></ion-icon></span>
                            <span class="title">Logout</span>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="main">
                <div class= "top">
                    <p>ADMIN SIDE</p>
                </div>
                <div class="topbar">
                    <div class="toggle"><ion-icon name="grid-outline"></ion-icon></div>
                </div>
            </div>
        </div>
        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
        <script>
        
           let toggle=document.querySelector('.toggle');
           let navigation=document.querySelector('.navigation');
           let main=document.querySelector('.main');
           toggle.onclick=function(){
            navigation.classList.toggle('active');
            main.classList.toggle('active');
           }
        </script>
 <table>
    <thead>
            <tr>
                 <th>BookingID</th>
                <th>Name</th>
                <th>SurName</th>
               
                <th>Address</th>
                <th>Email</th>
                <th>Date</th>
                <th>Time</th>
                <th>City</th>
                <th>Package</th>
            </tr>
    </thead>
    <tbody>
    <?php
     include "conn.php";
     $query = "SELECT BID, FullName,LastName,Address,Email,Date,Time,City,Package
     FROM booking where (Date  < CURRENT_DATE )";
     $stmt = $db->prepare($query);
     $stmt->execute();
     $stmt->store_result();
     $stmt->bind_result($BID,$FullName, $LastName,$Address,$Email,$Date,$Time,$City,$Package);
     while($stmt->fetch()) {
     echo '<tr><td>'.$BID.'</td><td>'.$FullName.'</td><td>'.$LastName.'</td><td>'.$Address.'</td><td>'.$Email.'</td><td>'.$Date.'</td><td>'.$Time.'</td><td>'.$City.'</td><td>'.$Package.'</td><td><a href="mail.php?Mail='.$Email.'" >Send mail</a></td></tr>';
     }
     ?>
       </tbody>
     </table>;
     
    
  
    </body>
</html>