<?php
session_start();
session_destroy();
header("Location:index-login.php");
//now login part completed