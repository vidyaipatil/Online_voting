<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>page 1</title>
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

        .main {
            height: 50vh;
            width: 100%;
            /* border:4px solid green */

        }

        .card-img-top {
            height: 120px;
            width: 170px;
            margin-left: 20px;
            

        }

        .bor {
            border: 3px solid green;
            border-radius: 10px;
        }

        .card {
            border: 3px solid green;
            border-radius: 10px;

        }

        .logo {
            width: 150px;
            height: 130px;
        }
    </style>
</head>

<body>
    <div class="container-fluid">
        <header
            class="row border-primary head d-flex align-item-center justify-content-center  gap-2 navbar navbar-expand-lg">
            <div class="col-auto align-self-center fs-2 text-light fw-bold fst-italic">
                Online Voting System
            </div>
            <img class="img-fluid img1 align-self-center" src="vote.jpg">



        </header>
        <?php 
        // session_start();
        // $_SESSION['count']=1;
        // $_SESSION['count2']=0;

      $servername = "localhost";
         $username = "root";
        $password = ""; 
        $database = "voting";
        $conn = mysqli_connect($servername, $username, $password, $database);
        if (!$conn){
                 die("Sorry we failed to connect: ". mysqli_connect_error());
             }
              else{ 
                $sql = "SELECT*FROM `computer`";
                $result = mysqli_query($conn,$sql);
                $num1 = mysqli_num_rows($result);
                // echo $num1;
                $sql = "SELECT*FROM `civil`";
                $result = mysqli_query($conn,$sql);
                $num2 = mysqli_num_rows($result);

                $sql = "SELECT*FROM `electrical`";
                $result = mysqli_query($conn,$sql);
                $num3 = mysqli_num_rows($result);
                $sql = "SELECT*FROM `mechanical`";
                $result = mysqli_query($conn,$sql);
                $num4 = mysqli_num_rows($result);
              }

    

    ?>
        <div class="container-fluid  m-3 p-0">
            <div class="row main border-success d-flex justify-content-evenly">
                <div class=" col border-success m-1">
                    <div class="row  ">
                        <div class="col fs-2 text-success text-center fw-bold fst-italic ">Groups</div>
                    </div>
                    <div class="row m-6 d-flex gap-4 m-3 align-item-center justify-content-center">
                        <div class="col-6 card align-self-center p-3" style="width: 18rem;">
                            <h5 class="card-title text-center image2 text-success">Computer</h5>
                            <img src="comp.jpg" class="card-img-top img-fluid " alt="...">
                            <div class="card-body text-center">
                                <h5 class="card-title text-success">Vote :  <?php echo $num1;?></h5>

                            </div>
                        </div>
                        <div class="col-6 card align-self-center p-3" style="width: 19rem;">
                            <h5 class="card-title text-center text-success">Mechanical</h5>
                            <img src="mech.jpg" class="card-img-top image2" alt="...">
                            <div class="card-body">
                                <h5 class="card-title text-center text-success">Vote : <?php echo $num4;?></h5>

                            </div>
                        </div>
                    </div>
                    <div class="row m-6 d-flex gap-4  align-item-center justify-content-center">
                        <div class="col-6 card align-self-center p-3" style="width: 18rem;">
                            <h5 class="card-title text-center text-success">Electrical</h5>
                            <img src="electrical.jpg" class="card-img-top image2" alt="...">
                            <div class="card-body text-center">
                                <h5 class="card-title text-success">Vote : <?php echo $num3;?></h5>

                            </div>
                        </div>
                        <div class="col-6 card align-self-center p-3" style="width: 19rem;">
                            <h5 class="card-title text-center text-success">Civil</h5>
                            <img src="civil.jpg" class="card-img-top image2" alt="...">
                            <div class="card-body">
                                <h5 class="card-title text-center text-success">Vote : <?php echo $num2;?></h5>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="row ">
                        <div class="col fs-2 text-success text-center fw-bold fst-italic ">login</div>
                    </div>

                    <form class="row d-flex justify-content-center mt-3 bor" action="/vidya/pop2.php" method="post">
                        <div class="row d-flex justify-content-center mt-3">
                            <img class="img-fluid logo" src="logo.png">
                        </div>
                        <div class="mb-3 col-7">
                            <label for="exampleInputEmail1" class="form-label">Mobile Number</label>
                            <input type="number" name="mobile" class="col-7 form-control border-success border-2 " id="exampleInputEmail1"
                                aria-describedby="emailHelp">
                            <div id="emailHelp" class="form-text">We'll never share your mobile no. with anyone else.
                            </div>
                        </div>
                        <div class="mb-3 ms-3 col-7 row d-block">
                            <label for="exampleInputPassword1" class="form-label">Password</label>
                            <input type="password" name="password" class="form-control border-success border-2" id="exampleInputPassword1">
                        </div>
                        <div class="mb-5 ms-3 col-7 row d-block">
                            <label for="exampleInputPassword1" class="form-label">Voter</label>
                            <input type="text" class="form-control border-success border-2" id="exampleInputPassword1">
                        </div>
                       
                     
                        <button type="submit" class="col-7 ms-3 btn btn-success fs-4 rounded-3">Login</button>
                    
                        <div class="mb-3 mt-3 col-6 row d-flex justify-content-center gap-0">
                            <p class="col-auto">Not registered?</p>
                            <a class="col"  href="registration.php">Register here</a>
                        </div>

                    </form>
                </div>
            </div>

        </div>
    </div>
</body>

</html>








</body>