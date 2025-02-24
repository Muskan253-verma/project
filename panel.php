<?php include("connection.php");?>

<?php
    if(!isset($_COOKIE['email'])){
        echo 'You are not logged in';
        exit(0);
    }else{
        $logged_email = $_COOKIE['email'];
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="row text-center">
            <h1>User Panel</h1>
            <a href="logout.php" class="btn btn-danger">Logout</a>

            <?php
                $sql = "SELECT * FROM user WHERE email = '$logged_email'";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    while($row=$result->fetch_assoc()) {
                        $name = $row['name'];
                    }
                }
            ?>

            <hr/>
            <h1>Hi <?=$name;?></h1>
            <hr/>

            <?php
                if(isset($_POST['post_submit'])){
                    $heading = $_POST['heading'];
                    $content = $_POST['content'];
                    $sql = "INSERT INTO course (heading, content)value('$heading', '$content')";
                    if($conn->query($sql)){
                        echo 'Successfully submitted';
                    }
                }

                if(isset($_GET['del_id'])){
                    $del_id = $_GET['del_id'];

                    $sql = "DELETE FROM course WHERE id=$del_id LIMIT 1";
                    if($conn->query($sql)){
                        echo 'Successfully deleted';
                    }
                }
            ?>

            <form action="panel.php" method="POST">
                <input type="text" name="heading" placeholder="Enter heading" class="form-control"/>
                <textarea name="content" class="form-control" placeholder="Content"></textarea>
                <input type="submit" name="post_submit" class="btn btn-primary"/> 
            </form>

            <?php
                $sql = "SELECT * FROM course";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    while($row=$result->fetch_assoc()) {
                        $id = $row['id'];
                        $heading = $row['heading'];
                        $content = $row['content'];
                        $cdate = $row['cdate'];
                        
                        echo '<div class="row border">';
                        echo '<h2>'.$heading.'</h2>';
                        echo '<p>'.$content.'</p>';
                        echo '<p><small>'.$cdate.'</small></p>';
                        echo '<a href="?del_id='.$id.'" onclick="return confirm(\'Are you sure?\')">Delete</a>';
                        echo '</div>';
                    }
                }
            ?>

        </div>
    </div>
</body>
</html>