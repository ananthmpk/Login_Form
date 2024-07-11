<?php

// $connection = mysqli_connect('localhost','root','','login_fom');

// if(!$connection){
//     echo "not connect";
// }

    include("config.php");


    if(isset($_POST['signup'])){

        $firstname = $_POST['uname'];
        $lastname = $_POST['lname'];
        $email = $_POST['email'];
        $password = $_POST['pass'];

        $insert = mysqli_query($connection,"insert into signup(first_name, last_name, email, upassword) values('$firstname','$lastname', '$email', '$password')");

        if($insert){

            echo"<script> window.alert('Sign up Successfully')</script>";

            echo "<script> Window.location.assign('index.php')</script>";

        }else{

            echo"<script> window.alert('Sign up Failed')</script>";
            
        }
    }


    if(isset($_POST['signin'])){

        $uemail = $_POST['uemail'];
        $upass = $_POST['upass'];

        $select = mysqli_query($connection,"select * from signup where email='$uemail' and upassword='$upass'");

        $num_rows = mysqli_num_rows($select);

        if($num_rows == 1 ){

            echo"<script>window.alert('Login Success')</script>";

        }else{

            echo"<script>window.alert('Login failed')</script>";

        }

    }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <!------------- css link ------------ -->
    <link rel="stylesheet" href="css/style.css">
    <!-- ---------- Bootstrap link ------ -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- font awesome link----------- -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <div class="sign_box " id="signUp_box" >

<!-- ---------------------Sign Up --------------------- -->

        <div class=" d-flex flex-column align-items-center  p-5 box_box" >

            <h3 class="form-title">Sign Up</h3>
            <form  method="post" enctype="multipart/form-data">

                <div class="input_group">
                    <i class="fas fa-user me-1"></i>
                    <input type="text" name="uname" id="uName" placeholder="Enter your first name" required>
                </div>

                <div class="input_group">
                    <i class="fas fa-user me-1"></i>
                    <input type="text" name="lname" id="lName" placeholder="Enter your last name" required>
                </div>

                <div class="input_group">
                    <i class="fas fa-envelope me-1"></i>
                    <input type="email" name="email" id="yEmail" placeholder="Enter your email" required>
                </div>

                <div class="input_group ">
                    <i class="fas fa-lock me-1"></i>
                    <input type="password" name="pass" id="passWord" placeholder="Enter your password" required>
                </div>

                <input class="sign_btn btn my-3" type="submit" name="signup" value="Sign In">

                
            </form>

            <p class="or ">
                -----------or------------
            </p>

            <div class="icons my-3">
                <i class="fa-brands fa-facebook fs-3 me-3 p-2 rounded"></i>
                <i class="fa-brands fa-google fs-3 p-2 rounded"></i>
            </div>

            <div class="links d-flex justify-content-between">
                <p class=" fw-bold me-3">Already Have Account! <button class="ms-2 fw-bold" type="button" id="signInButton">Sign in</button></p>
            </div>
        </div>

    </div>

<!-- ---------------------Sign In --------------------- -->
<div class="sign_box " id="signIn_box" >

   <div class=" d-flex flex-column align-items-center p-5 box_box"> 

            <h3 class="form_title"> Sign In</h3>

            <form method="post" enctype="multipart/form-data">

                <div class="input_group">
                    <i class="fas fa-envelope me-1"></i>
                    <input type="email" name="uemail" id="yEmail" placeholder="Enter your email" required>
                </div>

                <div class="input_group my-2">
                    <i class="fas fa-lock me-1"></i>
                    <input type="password" name="upass" id="passWord" placeholder="Enter your password" required>
                </div>

                <input class="sign_btn btn my-3" type="submit" name="signin" value="Sign In">

                <p class="recoverd">
                    <a href="#">Recoverd Password</a>
                </p>


            </form>

            <p class="or ">
                -----------or------------
            </p>

            <div class="icons my-3">
                <i class="fa-brands fa-facebook fs-3 me-3 p-2 rounded"></i>
                <i class="fa-brands fa-google fs-3 p-2 rounded"></i>
            </div>

            <div class="links">
                <p class=" fw-bold me-3">Don't have account yet? <button class="ms-2 fw-bold" type="button" id="signUpButton">Sign Up</button></p>  
            </div>

        </div>

    </div>




    <script src="js/script.js"></script>
    <!-- ---------- Bootstrap js link ------ -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <!-- ---------- Bootstrap js link ------ -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
</body>

</html>