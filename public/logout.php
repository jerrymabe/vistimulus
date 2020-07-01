<?php
session_start();
unset($_SESSION['Name']);
header("Location:logoutpage.html");
?>