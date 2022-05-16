<?php 
session_start();

// if(!isset($_SESSION['name'])) {
//     header('location:login.php');
// }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php include 'links/links.php'; ?>
    <style><?php include 'css/styles.css'; ?></style>
    <title>Login</title>
</head>
<body>

<?php
    include 'connection.php';
    if(isset($_POST['login'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];

        $emailquery = "select * from registration where email = '$email'";
        $query = mysqli_query($con, $emailquery);

        if($emailcount = mysqli_num_rows($query)) {
            $emailpass = mysqli_fetch_assoc($query);

            $dbpass = $emailpass['password'];
            $_SESSION['name'] = $emailpass['name'];
            $passdecode = password_verify($password, $dbpass);

            if($passdecode) {
                ?> <script>alert('Login Successful')</script> <?php
                ?> 
                <script>location.replace("home.php")</script>
                <?php
            } else {
                ?> <script>alert('Login Not Successful')</script> <?php
            }

        } else {
            ?> <script>alert('Email not registered.') ?>)</script> <?php
        }
    }
?>
<div class="login">
  <div class="form">
    <form class="login-form" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST">
      <span class="material-icons" style="color : #da5767;">Sign In</span>
      <input type="text" name="email" placeholder="email" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" required/>
      <input type="password" name="password" placeholder="password" required />
      <button class="btn btn-primary" name="login">Login</button>
    </form>  
  </div>
</div>
</body>
</html>