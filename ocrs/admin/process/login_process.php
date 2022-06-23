<?php
require ('../../connection/config.php');

if(isset($_POST['submit'])){
    $username = $_POST['username'];
    // $name = $_POST['name'];
    $password = md5($_POST['password']);
    $select_query = "SELECT * FROM admin WHERE username='$username' AND password='$password'";
    $select_result= mysqli_query($conn, $select_query);
    $count = mysqli_fetch_row($select_result);
    echo json_encode($count);
    // echo $count;
    if($count){
        session_start();
        $_SESSION['username'] ="$username";  //$_SESSION['SESSION_VARIABLE'] = "value";
        $_SESSION['password'] ="$password";       
         header("Location: ../dashboard.php?msg=loginsuccess"); 
    }

    else{
    
         header("Location: ../index.php?msg=loginerror");
        
    }

}

?>