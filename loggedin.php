<?php

include('database_connection.php');
include('check_log.php');

    $flag = 1;
    $errors = 0;
    if(isset($_GET['errors']))
    {
        $errors=1;
    }
else
{
if(isset($_POST['submit']))
{
    $flag = 0;
    
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    

    $var = "SELECT Password FROM details WHERE Email='$email' ";

    $res = mysqli_query($conn, $var);

    $Res2 = mysqli_fetch_all($res, MYSQLI_ASSOC);
    if($Res2)
    {
        
    foreach($Res2 as $final)
    if($final['Password']==$pass)
    {
        $flag++;
        $var2 = "INSERT INTO loginuser (Email, Password) VALUES ('$email', '$pass')";
        $var3 = mysqli_query($conn, $var2);
        if($var3)
        {
            header("Location: account_logged.php?user=$email");
        }
        else
        {
            echo "Link broken.";
        }
        
    }
    }
    if($flag==0)
    {
        $errors = 1;
        header("Location: login.php?errors=<?php echo $errors ?> ");
    }
}
}
?>