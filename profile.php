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
        .head {
            height: auto;
            background-color: rgb(12, 219, 12);
        }

        .img1 {
            height: 70px;
            width: 100px;
        }
        .logo {
            width: 150px;
            height: 130px;
        }
        .con{
            height: auto;
            border:2px solid black;
            background-color: rgb(245, 224, 224);
        }
        .font{
            font-size: 19px;
            font-weight: 700;
        }
        .font2{
            font-size: 2vw;
            font-family: 'Times New Roman', Times, serif;
        }
        .bagwh{
            background-color: aliceblue;
        }
    </style>
</head>
<body>
    <?php
    //   include 'dbms1.php';
      session_start();
      $v=$_SESSION['row'];
    // echo var_dump($v);
    $name =$v[0];
    $mobile =$v[1];
    $state = $v[2];
    $city = $v[3];
    $password =$v[4];
    $cpassword =$v[5];
    $date =  $v[6];
    $address = $v[7];
    $voter =  $v[8];
    $adhar =  $v[9];
 ?>
    <div class="container-fluid">
        <header
            class="row border-primary head d-flex align-item-center justify-content-center  gap-2 navbar navbar-expand-lg">
            <div class="col-auto align-self-center fs-2 text-light fw-bold fst-italic">
                Online Voting System
            </div>
            <img class="img-fluid img1 align-self-center" src="vote.jpg">
        </header>
        
        <div class="row  mt-10  d-flex justify-content-around" style="height:auto;">
            <div class="col-md-4 m-3  con">
                <div class="row d-flex justify-content-center" >
                    <img class="img-fluid logo" src="logo.png">
                </div>
                <div class="row mt-3 ms-4">
                    <p class="font" >Name     : <?php echo $name;?></p>

                </div>
                <div class="row mt-3 ms-4">
                    <p class="font" >Mobile   : <?php echo $mobile;?> </p>
               
                </div>
                <div class="row mt-3 ms-4">
                    <p class="font" > D.O.B    : <?php echo $date;?> </p>
                </div>
                <div class="row  mt-3 ms-4">
                    <p class="font" >State    : <?php echo $state;?> </p>
                </div>
                <div class="row mt-3 ms-4">
                    <p class="font" >City  :  <?php echo $city;?> </p></div>
                <div class="row mt-3 ms-4">
                    <p class="font" >Address  : <?php echo $address;?> </p>
                </div>
                <div class="row mt-3 ms-4">
                    <p class="font text-success
                    " >Status   :  voted</p>
                    
                </div>
            </div>
            
            

        </div>
        </div>
    
</body>
</html>