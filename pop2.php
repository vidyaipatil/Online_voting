<?php 
    //  echo "hello word";
     if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        $mobile =intval($_POST['mobile']);
        $pass=$_POST['password'];
    
        
      
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
        $sql = "SELECT*FROM `en` WHERE `password`='$pass' AND `mobile`=$mobile ";
        $result = mysqli_query($conn, $sql);
        // echo "wE are at 126 liine";
        if($result){
            // $row = mysqli_fetch_assoc($result);
            session_start();
            $_SESSION['row']=mysqli_fetch_row($result);
            $b=$_SESSION['row'];
            echo var_dump($b);
            // echo var_dump($_SESSION['row']);

            if(!$b){
               
                header("Location: failure2.html");


            }
            else{
          
        header("Location: success2.html");
            }
      
            
           
        }
        else{
            
            echo "The record was not inserted successfully because of this error ---> ". mysqli_error($conn);
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