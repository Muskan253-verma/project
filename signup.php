<?php
    include("connection.php");
?>

                
                <?php
                if(isset($_POST['signup_submit'])){
                 $email=$_POST['email'];
                 $password=$_POST['password'];
                 $sql= "INSERT INTO user(email,password)value('$email','$password')";
                 if($conn->query($sql)){
                    echo'<META http-equiv="refresh" content="0.1;URL=index.php">';
                 }else{
                    echo $conn->error;
                 }
                }



                ?>
                
            