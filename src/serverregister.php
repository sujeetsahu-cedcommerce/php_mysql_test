<?php
    include 'connection.php';

        if(isset($_POST['u_name'])){
            $username=$_POST['u_name'];
            $email=$_POST['u_mail'];
            $password=$_POST['u_pass'];
            $repassword=$_POST['r_pass'];

            // echo $username;
            //create table
            // $sql = "CREATE TABLE Users (
            //     userid INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            //     username VARCHAR(30) NOT NULL,
            //     email VARCHAR(50) NOT NULL,
            //     user_password VARCHAR(50)
            //     )";
        
            //  $result = mysqli_query($conn,$sql);
        
           // check for the table creation
            // if(!$result){
            //     echo "table_error".mysqli_error($conn);
            // }
            // else{
            //     echo "created table successfully";
            // }
        
                // $stmt = "INSERT INTO Users (username,email,user_password)
                // VALUE('$username','$email','$password')";
                // $result = mysqli_query($conn,$stmt);

                $stmt = "INSERT INTO `Users` (`username`, `email`, `user_password`) VALUES ('$username','$email','$password')";
                $result = mysqli_query($conn,$stmt);


                // add a new user to the user table
                if(!$result){
                echo "the record was not inserted".mysqli_error($conn);
                }
                else{
                echo "record inserted successfully";
                }
               
        }

?>