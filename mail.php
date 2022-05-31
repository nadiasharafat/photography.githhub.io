
<?php

 $pp="";
$ab= $_GET['Mail'];  
$p=$_GET['pkg'];

if($p=="silver")
{
    $pp= "Total amount of this package 30000";
}
else if($p=="platinum"){
    $pp="Total amount of this package 60000";
}
else{
$pp="Total amount of this package 50000";

}



$subject=$pp;
$body = "Hi, there sulphites studio.. confirming your booking . And your total amount for this package is ";
$sender = "From:up431785@gmail.com";
if(mail($ab, $subject, $body, $sender)){
    //echo "<script>alert('Email  sent')</script>";
    echo "<script>
    alert('Email sent successfully');
    window.location.href='comingBookings.php';</script>";
    
}
    else{
    echo "<script>alert('Email not sent');
    window.location.href='comingBookings.php';
    </script>";
}

?>