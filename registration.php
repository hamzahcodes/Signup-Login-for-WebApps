<?php
session_start();
?>

<html>
    <head>
        <title>Sign Up</title>
        <?php include 'links/links.php'; ?>
        <style><?php include 'css/styles.css'; ?></style> 
    </head>
    <body>

    <?php
        include 'connection.php';
        if(isset($_POST['signup'])) {
            $name = mysqli_real_escape_string($con, $_POST['name']);
            $email = mysqli_real_escape_string($con, $_POST['email']);
            $pass = mysqli_real_escape_string($con, $_POST['password']);
            $confpass = mysqli_real_escape_string($con, $_POST['confpassword']);

            $passw = password_hash($pass, PASSWORD_BCRYPT);
            $confpassw = password_hash($confpass, PASSWORD_BCRYPT);

            // emailquery to check if email is already registered
            $emailquery = " select * from registration where email='$email'";
            $query = mysqli_query($con, $emailquery);
            // this function returns no. of rows in resultset. it is used to check data is present in db or not.

            if($emailcount = mysqli_num_rows($query)) {
                ?> <script>alert('Email already exists !! ')</script> <?php
            } else {
                if($pass === $confpass) {
                    ?> <script>alert('In password check !! ')</script> <?php
                    $insertquery = " INSERT INTO `registration`(`name`, `email`, `password`, `confirmpass`) VALUES ('$name','$email','$passw','$confpassw')";
                    $iquery = mysqli_query($con, $insertquery);
                    if($iquery) {
                        ?> <script>alert('Signed Up Successfully')</script> <?php
                    } else {
                        ?> <script>alert('Not Signed Up Successfully')</script> <?php
                    }
                } else {
                    ?> <script>alert('Password not matching')</script> <?php
                }
            }   
        }  
    ?>

        <div class="container">
        <div class="row justify-content-center">
        <div class="col-md-5">
        <div class="card">
            <h2 class="card-title text-center material-icons" style="color : #da5767;">SignUp</h2>
            <div class="card-body py-md-2">
            <form _lpchecked="1" method="POST">
                <div class="form-group">
                    <input type="text" class="form-control" id="name" name="name" placeholder="Name" required/>
                </div>
                <div class="form-group">
                    <input type="email" class="form-control" id="email" name="email" placeholder="Email" required/>
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" id="password" name="password" placeholder="Password" required/>
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" id="confirm-password" name="confpassword" placeholder="confirm-password" required/>
                </div>
                <div class="d-flex flex-row align-items-center justify-content-between">
                    <button class="btn btn-primary" name="login"><a href="login.php" id="loginlink">Login</a></button>          
                    <button class="btn btn-primary" name="signup">Create Account</button>
                </div>
            </form>
            </div>
        </div>
        </div>
        </div>
        </div>
    </body>
</html>