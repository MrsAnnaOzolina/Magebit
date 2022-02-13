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

        $servername = "localhost";
        $username = "";
        $password = "";
        $dbname = "";

        $connection = mysqli_connect($servername, $username, $password, $dbname);
        if ($connection->connect_error) {
            die("Connection failed: " . $conn->connect_error);  
        }
        mysqli_select_db($connection, 'subscribers');
          $sql = "SELECT email,dat FROM `pinaapple_subscribers`";
        $results =  mysqli_query($connection, $sql);
    if (mysqli_num_rows($results) > 0){
        echo"
        <table border= '1'> 
        <tr> 
        <th> EMAIL </th>
        <th> Date </th> 
        </tr>
        ";
        while($row= mysqli_fetch_array($results)){
            $rowEmail =$row[0];
            $rowDate = $row[1];
            echo "
            <tr>
            <th> $rowEmail </th>
            <th> $rowDate </th> <br>
            </tr>
            ";
        }
        echo " </table>";
    }
        mysqli_close($connection);
    ?>
   
</body>
</html>