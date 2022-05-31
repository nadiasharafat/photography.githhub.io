
<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>bookNow</title>
    
   
    <link rel="stylesheet" href="boooknow.css">   
    <link rel="stylesheet" href=" https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">   
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Corinthia&family=Josefin+Slab:ital,wght@0,500;1,500&family=Nunito:wght@200&family=Special+Elite&display=swap" rel="stylesheet">
    <style type="text/css">
         .error{
                color:#FF0000;
                font-size:5pt;
            }
        label{
            width:100px;
            display:inline-block;
            
        }
    </style>
</head>

   
    
    <div class="whole">
     
        <div class="logo">
            <img src= "logoo.jpeg" height="100px "width="170px">
            <ul class="nav-area">
                <li><a href="home.html">Home</a></li>
                <li><a href="Gallery.html">Portfolio</a></li>
                <li><a href="Packages.html">Packages</a></li>
                
                <li><a href="contact.html">Contact Us</a></li>
                <li><a href="Booooknow.php">Booking</a></li>
                <li><a href="About.html">About</a></li>
                </ul>
        </div>
        


</div>
<body>
<?php
$fnameErr=$lnameErr=$emailErr="";
$fname =$lname=$address= $email = $bdate = $btime = $city = "";

if (isset($_POST["submit"]) ) {
  if (empty($_POST["fname"])) {
    $fnameErr = "Name is required";
  } else {
    $fname = test_input($_POST["fname"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$fname)) {
      $fnameErr = "Only letters and white space allowed";
    }
  }
   
        



  if (empty($_POST["address"])) {
    $address="";
  } else {
    $address = test_input($_POST["address"]);
   
  }
  if (empty($_POST["email"])) {
    $emailErr = " valid email address";
  } else {
    $email = test_input($_POST["email"]);
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $emailErr="the email address is incorrect";
    }
  }
  if (empty($_POST["bdate"])) {
    $bdate="";
  } else {
    $bdate =test_input($_POST["bdate"]);
   
  }
  if (empty($_POST["btime"])) {
    $btime="";
  } else {
    $btime =test_input ($_POST["btime"]);
   
  }
  if (empty($_POST["city"])) {
    $city="";
  } else {
    $city =test_input($_POST["city"]);
   
  }
}
  ?>
  <?php
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
?>
<div class="booking">
            <h3>BOOKING FORM</h3>
           
            <form action="insert.php" id="BOOKING"  method="POST">                                                                                                                                                                                                                                                                                                               
             <label>First Name </label>
                
              <input type="text" required name="fname" id="name" placeholder="enter your first name" value="<?php echo $fname;?>" >
              <span class="error">*<?php echo $fnameErr;?></span>
                <br><br>
                <label>Last Name </label>
                
                <input type="text" name="lname" id="name" placeholder="enter your last name" value="<?php echo $lname;?>">
                <span class="error"><?php echo $lnameErr;?></span>
                <br><br> 
                <label>Address</label>
                <input type="text"required  name="address" id="address" placeholder="enter your address" value="<?php echo $address;?>">
                <br><br> 
                <label>Email</label>
                <input type="email" required name="email"  id="email" placeholder="enter your email" value="<?php echo $email;?>"> 
                <span class="error">*<?php echo $emailErr;?></span>
                <br><br>
                <label>Booking Date</label>
                <input type="date" min="<?php echo date('Y-m-d'); ?>" required name="bdate" id="bdate" placeholder="enter booking date"value="<?php echo $bdate;?>"  >
                <span class="error">*</span>
                <br><br>
                <label>Booking Time</label>
                <input type="time" required name="btime" id="btime"placeholder="enter booking time" value="<?php echo $btime;?>">
                <span class="error">*</span>
                <br><br>
               
                <label>Select City</label>
                
                <select class="custom-select"  required name="city">
                    <option value="city" disabled selected id="city">Select The City</option>
                    <option value="Islamabad">Islamabad</option>
                    <option value="" disabled>Punjab Cities</option>
                    <option value="Ahmed Nager Chatha">Ahmed Nager Chatha</option>
                    <option value="Ahmadpur East">Ahmadpur East</option>
                    <option value="Ali Khan Abad">Ali Khan Abad</option>
                    <option value="Alipur">Alipur</option>
                    <option value="Arifwala">Arifwala</option>
                    <option value="Attock">Attock</option>
                    <option value="Bhera">Bhera</option>
                    <option value="Bhalwal">Bhalwal</option>
                    <option value="Bahawalnagar">Bahawalnagar</option>
                    <option value="Bahawalpur">Bahawalpur</option>
                    <option value="Bhakkar">Bhakkar</option>
                    <option value="Burewala">Burewala</option>
                    <option value="Chillianwala">Chillianwala</option>
                    <option value="Chakwal">Chakwal</option>
                    <option value="Chichawatni">Chichawatni</option>
                    <option value="Chiniot">Chiniot</option>
                    <option value="Chishtian">Chishtian</option>
                    <option value="Daska">Daska</option>
                    <option value="Darya Khan">Darya Khan</option>
                    <option value="Dera Ghazi Khan">Dera Ghazi Khan</option>
                    <option value="Dhaular">Dhaular</option>
                    <option value="Dina">Dina</option>
                    <option value="Dinga">Dinga</option>
                    <option value="Dipalpur">Dipalpur</option>
                    <option value="Faisalabad">Faisalabad</option>
                    <option value="Ferozewala">Ferozewala</option>
                    <option value="Fateh Jhang">Fateh Jang</option>
                    <option value="Ghakhar Mandi">Ghakhar Mandi</option>
                    <option value="Gojra">Gojra</option>
                    <option value="Gujranwala">Gujranwala</option>
                    <option value="Gujrat">Gujrat</option>
                    <option value="Gujar Khan">Gujar Khan</option>
                    <option value="Hafizabad">Hafizabad</option>
                    <option value="Haroonabad">Haroonabad</option>
                    <option value="Hasilpur">Hasilpur</option>
                    <option value="Haveli Lakha">Haveli Lakha</option>
                    <option value="Jatoi">Jatoi</option>
                    <option value="Jalalpur">Jalalpur</option>
                    <option value="Jattan">Jattan</option>
                    <option value="Jampur">Jampur</option>
                    <option value="Jaranwala">Jaranwala</option>
                    <option value="Jhang">Jhang</option>
                    <option value="Jhelum">Jhelum</option>
                    <option value="Kalabagh">Kalabagh</option>
                    <option value="Karor Lal Esan">Karor Lal Esan</option>
                    <option value="Kasur">Kasur</option>
                    <option value="Kamalia">Kamalia</option>
                    <option value="Kamoke">Kamoke</option>
                    <option value="Khanewal">Khanewal</option>
                    <option value="Khanpur">Khanpur</option>
                    <option value="Kharian">Kharian</option>
                    <option value="Khushab">Khushab</option>
                    <option value="Kot Addu">Kot Addu</option>
                    <option value="Jauharabad">Jauharabad</option>
                    <option value="Lahore">Lahore</option>
                    <option value="Lalamusa">Lalamusa</option>
                    <option value="Layyah">Layyah</option>
                    <option value="Liaquat Pur">Liaquat Pur</option>
                    <option value="Lodhran">Lodhran</option>
                    <option value="Malakwal">Malakwal</option>
                    <option value="Mamoori">Mamoori</option>
                    <option value="Mailsi">Mailsi</option>
                    <option value="Mandi Bahauddin">Mandi Bahauddin</option>
                    <option value="Mian Channu">Mian Channu</option>
                    <option value="Mianwali">Mianwali</option>
                    <option value="Multan">Multan</option>
                    <option value="Murree">Murree</option>

                </select>
                <span class="error">*</span>
                <label>Select Package</label>
                <select class="customm-select" required name="package">
                <option value="Package" disabled selected id="package">Select Package</option>
                    <option value="silver">Silver</option>
                    <option value="gold">Gold</option>
                    <option value="platinum">Platinum</option>
                </select>
                <span class="error">*</span>

                <button class="btn">
                    <input type="submit" name="submit" value="Submit">
                </button>
          
            </form>
         
        </div>
 
       
        <footer class= "footer">
            <div class= "footer-left">
                <h4 style="color: darkturquoise"><br><br>Sulphites</h4><br><br>
                <p>Sulphite is one of the leading studios of Pakistan specialized for wedding photography and cinematography</p><br><br>
                <div class="socials">
                    <a href ="#"><i class="fa fa-facebook"></i></a>
                    <a href ="#"><i class="fa fa-twitter"></i></a>
                    <a href ="#"><i class="fa fa-instagram"></i></a>
                    <a href ="#"><i class="fa fa-youtube"></i> </a>
                </div>
            
            
            </div>
            <ul class="footer-right">
            <li>
                <h2 style="color: darkturquoise">Useful Links</h2> 
                <ul class= "box">
                    <li> <a href="home.html">Home</a></li>
                    <li> <a href="Gallery.html">Portfolio</a></li>
                    <li> <a href="Packages.html">Packages</a></li>
                    <li> <a href="contact.html">Contact Us</a></li>
                    <li> <a href="Booooknow.php">Book now</a></li>
                    <li> <a href="About.html">About Us</a></li>
                </ul>
            </li>
            <li>
                <h2 style="color: darkturquoise">Address</h2> 
                <ul class= "box">
                    
                    <li> <a href="#">Block D, Street#5 </a></li>
                    <li> <a href="#">F-6/2, Islamabad</a></li>
                    <li> <a href="#">Pakistan</a></li>
                </ul>
            </li>
            </ul>
            <div class="footer-bottom">
            <p style="color: darkturquoise"> All rights reserverd by &copy; sulphite2021</p>
            </div>
            </footer>
        </body>
        </html>

    