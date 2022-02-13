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
     header('location:index.html');
        $servername = "localhost";
        $username = "";
        $password = "";
        $dbname = "";

        $conn = new mysqli($servername, $username, $password, $dbname);
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
           
        }
       mysqli_select_db($conn, 'subscribers');
        
        if(isset($_POST['submit'])){
      if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
            $foremail = $_POST['email'];
            $date = date("Y.m.d");
          $sql = "INSERT INTO pinaapple_subscribers (id,email,dat) VALUES ('0','$foremail',' $date')";
         mysqli_query($conn, $sql);
    }
}
        mysqli_close($conn);

    

    ?>
</body>
</html>