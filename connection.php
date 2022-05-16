<?php

$username = 'root';
$password = '';
$server = 'localhost';
$db = 'signup';

$con = mysqli_connect($server, $username, $password, $db);

if($con) {
    ?>
        <script>alert('Connection successfull')</script>
    <?php
} else {
    ?>
        <script>alert('Connection not successfull')</script>
    <?php
}
?>