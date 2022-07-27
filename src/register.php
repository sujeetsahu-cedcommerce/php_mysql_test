<?php
     include "connection.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

</head>
<body>
    <h1>Register </h1>
    <input type="text" placeholder="enter name" id="name"><br>
    <input type="email" placeholder="enter email" id="email"><br>
    <input type="password" placeholder="enter password" id="password"><br>
    <input type="password" placeholder="enter password" id="con_pass"><br>
    <button id="register" onclick="register_user()">register</button>
    <button href="login.php">Login</button>

    <script>
       function register_user(){
            var user_name = document.getElementById("name").value;
            var user_email = document.getElementById("email").value;
            var user_password = document.getElementById("password").value;
            var con_password = document.getElementById("con_pass").value;
            
            $.ajax({
                        url:"serverregister.php",
                        method:"POSt",
                        data:{'u_name':user_name,'u_mail':user_email,'u_pass':user_password,'r_pass':con_password},
                        success:function(result){
                            console.log(result);
                            // if(result=='exist'){
                            //   // alert("exist");
                            // }else{
                            // //   window.location='login.php'; 
                            // }                
                        }
                    });

       }
    </script>

</body>
</html>