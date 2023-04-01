<?php
session_start();
unset($_SESSION['userlogin']);
unset($_SESSION['user_type']);

echo header("location: login.php");

