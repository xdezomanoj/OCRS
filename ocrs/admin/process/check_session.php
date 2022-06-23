<?php 
session_start();
if(!$_SESSION['username'] && !$_SESSION['password']){
   ?>
    <meta http-equiv="refresh" content="0; URL=../admin/index.php"/>
   <?php
}

?>
<?php
// session_start();
// if(!$_SESSION['email']) {
//     ?>

 <?php

// }

?>