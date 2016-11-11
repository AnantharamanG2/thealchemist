<?php
session_start();
session_destroy();
if(isset($_SESSION['studentName']))
unset($_SESSION['studentName']);
header('Location: login/index.html');
?>