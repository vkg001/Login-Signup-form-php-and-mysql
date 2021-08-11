<?php

include('database_connection.php');
if(isset($_GET['user']))
{
    $email = $_GET['user'];
    $var = "DELETE FROM loginuser WHERE Email = '$email' ";
    $var2 = mysqli_query($conn, $var);
}
?>