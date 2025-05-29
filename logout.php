<?php
sesion_start();
session_destroy();
header('Location: login.php');
exit;