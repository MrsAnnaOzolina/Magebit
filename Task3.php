<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    header('location: Task3.html');
   

        $servername = "localhost";
        $username = "";
        $password = "";
        $dbname = "";

        $conn = new mysqli($servername, $username, $password, $dbname);
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
           
        }
       mysqli_select_db($conn, 'subscribers');
        
        if(isset($_POST['email'])){
            $foremail = $_POST['email'];
        

       $sql = "INSERT INTO pinaapple_subscribers (id,email) VALUES ('0','$foremail')";
        mysqli_query($conn, $sql);

        }
      

    ?>
</body>
</html>