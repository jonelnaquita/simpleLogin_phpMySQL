<?php

session_start();
include 'includes/conn.php';

if(isset($_POST['register'])){
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $address = $_POST['address'];
    $username = $_POST['email'];
    $password = md5($_POST['password']);
    $retypePassword = md5($_POST['retypePassword']);

    $user_check_query = "SELECT * FROM tbluser WHERE username='$username' LIMIT 1";
    $result = mysqli_query($conn, $user_check_query);
    $user = mysqli_fetch_assoc($result);

    if(mysqli_num_rows($result) > 0){
        $_SESSION['error'] = "Sorry, email is already taken";
        header("Location: register.php");
    } else{
        if($password == $retypePassword){
            $query = "INSERT INTO tbluser (firstname, lastname, address, username, password) 
            VALUES('$firstname', '$lastname', '$address', '$username', '$password')";
            $result = mysqli_query($conn, $query);

            if($result){
                $_SESSION['success'] = "Successfully Registered.";
            }
        }
        else {
            $_SESSION['error'] = "Password and Confirm Password do not match";
        }

    }

    header('location: register.php');
}
?>