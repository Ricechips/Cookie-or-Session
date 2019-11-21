<?php

session_start();
$_SESSION['name'] = 'Ricechips';

// echo session_id;
header('Location:a.php');
