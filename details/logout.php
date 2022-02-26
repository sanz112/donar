<?php
session_start();
include 'conn.php';

 session_unset();
 session_destroy();
header("Location: ../index.php");
exit();
//These code is not to be used in anyways whatsoever on any project without the permission of Wittstack. Signed-Management
?>

