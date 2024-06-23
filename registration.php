<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <style>
        body{
            margin: 0;padding: 0;
        }
        .head {
            height: auto;
            background-color: rgb(12, 219, 12);
        }
       
    
        span{
            margin-top: 25px;
            display: inline-block;
            margin-left: 35vw;
            font-size: 35px;
            font-weight: 800;
            font-style: oblique;
            text-align: center;
            position: fixed;
            margin-bottom: 15px;
            text-align: center;
            margin-right: 10px;
        }
        #id1{
            height: 70vh;
            width:80%;
            border: 3px solid green;
            border-radius: 10px;
            margin-left: 10vw;
            margin-top: 20px;

        }
        .c1{
            height: 5vh;
            width: 30vw;
            margin: 10px;
            border: 2px solid green;
            margin-bottom: 20px;
            border-radius: 8px;
        }
        .id2{
            height: 5vh;
            width: 15vw;
            margin: 10px;
            border: 2px solid green;
            margin-bottom: 20px;
            border-radius: 8px; 
        }
        .img1 {
            height: 70px;
            width: 100px;
        }
        .head {
            height: auto;
            background-color: rgb(12, 219, 12);
        }
        .id3{
            height: 5vh;
            width: 45vw;
            margin: 10px;
            border: 2px solid green;
            margin-bottom: 20px; 
            border-radius: 8px;
        }
        #id4{
            height: 6vh;
            width: 25vw;
            border-radius: 10px;
            background-color: rgb(14, 186, 14);
            color: white;
            font-size: 20px;
        }
       
    </style>
    
    
</head>

<body>
<div class="container-fluid">
<header
            class="row border-primary head d-flex align-item-center justify-content-center  gap-2 navbar navbar-expand-lg">
            <div class="col-auto align-self-center text-light fw-bold fst-italic  fs-2">
                Online Voting System
            </div>
            <img class="img-fluid img1 align-self-center" src="vote.jpg">



        </header>
    
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
          echo '<div style=" margin-left:400px;margin-top:20px; font-size:30px; height: 100px; width: 500px;border:4px solid black; background-color:blueviolet; color:white;" class="alert alert-success alert-dismissible fade show" role="alert">
          <strong>Success!</strong> You have registered successfully!
          <a href="dbms1.php" style="color:white;">Go to login page</a>
         
        </div>';
        }
        else{
            // echo "The record was not inserted successfully because of this error ---> ". mysqli_error($conn);
            echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
          <strong>Error!</strong> We are facing some technical issue and your entry ws not submitted successfully! We regret the inconvinience caused!
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>';
        }

      }

    }

    
?> 
    <main>
        <form id="id1" align="center" action="/vidya/pop.php" method="post">
            <h1>Registration</h1>
            <input type="text" class="c1" placeholder="Name" name="name" required>
            <input type="text" class="c1" placeholder="Mobile no." name="mobile" required pattern="[1-9]{1}[0-9]{9}">
            <input type="text" class="c1" placeholder="State" name="state" required>
            <input type="text" class="c1" placeholder="City" name="city" required>
            <input type="password" class="c1"id="pass" placeholder="Password" name="password"required>
            <input type="password" class="c1"  id="confirm_pass" placeholder="Confirm Password" name="cpassword"required  ">
            <input type="text" class="id2" placeholder="Date" onfocus="(this.type='date')" pattern="\d{2}-\d{2}-\d{4}" name="date" required>
            <input type="text" class="id3" placeholder="Address" name="address" required>
            <input type="text" class="id2" placeholder="Voter/group" name="voter">
            <input type="text" class="id3"  placeholder="adhar number" name="adhar" required>
            <button id="id4">Register</button>

        </form>
    </main>
    </div>  
</body>
</html>