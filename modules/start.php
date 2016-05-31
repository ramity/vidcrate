<?php
session_start();
//create a random session id
$_SESSION['id'] = base_convert(microtime(),10,36);
$securelogin=false;
?>