<?php include("connection.php");?>
<?php
    if(isset($_POST['email']) && isset($_POST['password'])){
        $email = $_POST['email'];
        $password = $_POST['password'];

        $flag = 0;

        // Fetch
        $sql = "SELECT * FROM user WHERE email = '$email'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while($row=$result->fetch_assoc()) {
                $opassword = $row['password'];
                if($opassword == $password){
                    //echo 'Successfully logged in';
                    $flag = 1;
                }else{
                    $flag = 2;
                } 
            }
        }


    
        if($flag == 1){
            // Succss
            $valid = time() + (60*60*24);
            setcookie("email", $email, $valid);
            echo "Logged";
            echo '<META http-equiv="refresh" content="0.1;URL=panel.php">';
        }else if($flag == 2){
            // Worng password
            echo "Wrong password";
        }else{
            echo "Something went password";
        }
        
    }
?>