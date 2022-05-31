<!DOCTYPE html>
<html>
    <head>
        <meta char="utf-8">
        <title>Login Form</title>
        <link rel="stylesheet" href="login.css">
        <style>
            .error{
                color:red;
            }
            </style>
</head>

        <body>
            
        <form action="insertt.php"  method="POST">    
            <div class="login-box">
                <h1>Login Here</h1>
                <div class="textbox">
                      *<i class="fa fa-envelope" aria-hidden="true"></i>
                       <input type="text" required name="username"   placeholder="Enter" value=""> 
                     
                </div>
                <div class="textbox">
                    <input type="password" required placeholder="password" name="password"value="">
                    *<i class="fa fa-lock" aria-hidden="true"></i>
                </div>
                 <input  type="submit" name="submit" value="Login" class="btn">
            </div>
            </form>
          
        </body>
    
</html>