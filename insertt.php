<?php
session_start();
            include "conn.php";
            if(isset($_POST["submit"]))
            {
                $adminuser=$_POST['username'];
                $adminPassword=$_POST["password"];
                $query="SELECT * FROM login WHERE adminName='$adminuser'and adminPass= '$adminPassword'";
                $result = mysqli_query($db,$query);
               $row=mysqli_num_rows($result);
                if($row){
                    $_SESSION['username']=$adminuser;
           
                   header('location:admin.php');
                }
                else{
                  
                   // header('location:login.php');
                    echo  "<script>
                    alert('invalid username or password');
                    window.location.href='login.php';
                    </script>";
                }
                




            }
 ?>