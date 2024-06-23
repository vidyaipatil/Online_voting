<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        $name = $_POST['name'];
        $mobile =intval($_POST['mobile']);
        $state = $_POST['state'];
        $city =  $_POST['city'];
        $pass=  $_POST['password'];
        $cpassword =  $_POST['cpassword'];
        $voter =  $_POST['voter'];
        $adhar =  intval($_POST['adhar']);
        $Date =  $_POST['date'];
        $address = $_POST['address'];
        echo "$Date";
        
      
      // Connecting to the Database
      $servername = "localhost";
      $username = "root";
      $password = "";
      $database = "register";

      // Create a connection
      $conn = mysqli_connect($servername, $username, $password, $database);
      // Die if connection was not successful
      if (!$conn){
          die("Sorry we failed to connect: ". mysqli_connect_error());
      }
      else{ 
        // echo "Connection established successfully";
        // Submit these to a database
        // Sql query to be executed 
        
        $sql = "INSERT INTO `en` (`name`, `mobile`, `state`, `city`, `password`, `cpassword`,`dt`,`address`, `voter`, `adhar`) VALUES ('$name', '$mobile', '$state', '$city', '$pass', '$cpassword', '$Date','$address' , '$voter', '$adhar')";
        $result = mysqli_query($conn, $sql);
        // echo "wE are at 126 liine";
        if($result){
          
          header("Location: success.html");

        }
        else{
            // echo "The record was not inserted successfully because of this error ---> ". mysqli_error($conn);
            header("Location: failure.html");
        
        }

      }

    }

    
?>