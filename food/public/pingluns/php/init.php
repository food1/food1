<?php

require_once 'config.php';
$conn = mysqli_connect($host,$account,$password,$database);
mysqli_query($conn,'set names '.$coding);