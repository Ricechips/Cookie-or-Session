<?php

session_start();
$_SESSION['name'] = 'Ricechips';

// session_destroy();
// echo session_id;
header('Location:a.php');
