<?php
session_start();
$_SESSION['MM_User_User'] = NULL;
$_SESSION['MM_User_tipo'] = NULL;
unset($_SESSION['MM_User_User']);
unset($_SESSION['MM_User_tipo']);
header("Location: index.php" );
?>