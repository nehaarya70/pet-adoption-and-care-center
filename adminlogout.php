<?php
@session_start();

if(isset($_SESSION['admin_email']))
{
    unset($_SESSION['admin_email']);
    header("location:adminlogin.php");

}
