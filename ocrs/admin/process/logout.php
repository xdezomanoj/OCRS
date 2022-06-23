<?php
session_start();

// session_destroy($_SESSION['username']);
// session_destroy($_SESSION['password']);
echo $_SESSION['username'];
echo $_SESSION['password'];
session_destroy();
echo '<meta http-equiv="refresh" content="0; URL=../index.php?msg=logoutsuccess"/>';
?>