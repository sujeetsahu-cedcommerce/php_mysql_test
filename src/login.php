<?php
     include "connection.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

</head>
<body>
    <h1>login</h1>
    <input type="email" placeholder="enter email" id="email"><br>
    <input type="password" placeholder="enter password" id="password"><br>
    <input type="password" placeholder="enter password" id="con_pass"><br>
    <button id="register" onclick="register_user()">login</button>

    <script>
       function register_user(){
            var user_email = document.getElementById("email").value;
            var user_password = document.getElementById("password").value;            
            $.ajax({
                        url:"serverlogin.php",
                        method:"POSt",
                        data:{'u_mail':user_email,'u_pass':user_password},
                        success:function(result){
                            console.log(result);             
                        }
                    });

       }
    </script>

</body>
</html>