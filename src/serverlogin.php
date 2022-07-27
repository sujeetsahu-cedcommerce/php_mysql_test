<?php
    include 'connection.php';
        
            if(isset($_POST['u_mail'])){
                $loginmail = $_POST['u_mail'];
                $loginpwd = $_POST['u_pass'];
                $sql_login = "SELECT userid,email,user_password,role from Users where email = '$loginmail'";
                $result = mysqli_query($conn,$sql_login);
                // if($result){
                //     echo "success";
                // }
                // else{
                //     echo mysqli_error($conn);
                // }
    
                $row = mysqli_fetch_assoc($result);
                if($row['email'] == $_POST['login_mail']){
                    
                    if($row['user_password'] == $_POST['login_pass']){
                       echo "login successfully";
                    //    if($row['role'] == 'admin'){
                    //         $_SESSION['id']=$row['userid'];
                            
                    //         echo "T";
                    //     }
                    //     elseif($row['role']=='user'){
                    //         $_SESSION['id']=$row['userid'];
                    //         //$_SESSION['id']=38;
                    //         if(count($_SESSION['cart'])!=0){ 
                    //            echo true;}
                    //         else{
                    //           echo "go_to_index";
                    //         }  
                    //     }
                    }
                    else{
                       echo "password doesnot match";
                    //    echo false;
                    }
                }
                else{
                    echo "not registered yet";
                } 
            }
        

?>