<?php

include '../connection.php';

$userEmail = $_POST['user_email'];

$sqlQuery = "SELECT * FROM user WHERE user_email = '$userEmail'";

$resultOfQuery = $connectNow->query($sqlQuery);

if($resultOfQuery -> num_rows > 0)
{
    echo json_encode(array("success" => true));
}
else
{
    echo json_encode(array("success" => false));
}


// 