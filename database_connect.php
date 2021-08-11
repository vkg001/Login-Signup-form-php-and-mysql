<?php

    include('database_connection.php');
    $var = $_POST['name'];
    
    if($_POST['name'] == "Vikas Kumar"  &&  $_POST['pass'] == "vikas1234")
    {
        header('Location: fetch_data_from_database.php');
        echo "<script> alert (\"WELCOME TO ADMIN PANEL \")</script>";
    }
    else
    {
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $name = mysqli_real_escape_string($conn, $_POST['name']);
        $primary = mysqli_real_escape_string($conn, $_POST['primary']);
        
        
        $var = "SELECT Email FROM details WHERE Email='$email' ";
        $res = mysqli_query($conn, $var);
        $Res2 = mysqli_fetch_all($res, MYSQLI_ASSOC);
        if($Res2)
        {
            foreach($Res2 as $final)
            if($final['Email']==$email)
            {
                $errors = 1;
                header("Location: form.php?errors=<?php echo $errors ?>");
            }
        }


        else
        {
            
            $password = mysqli_real_escape_string($conn, $_POST['pass']);
            $secondary = mysqli_real_escape_string($conn, $_POST['additional']);

            $sql = "INSERT INTO details(Name, Email, PrimaryPhone, SecondaryPhone, Password)  VALUES ('$name','$email','$primary', '$secondary', '$password' )";
        
            //$sql = "INSERT INTO details(Name, Email, Password, PrimaryPhone) VALUES('$name', '$email', '$password', '$primary')";

            if(mysqli_query($conn, $sql))
            {
                header('Location: account.php');
            }
            else
            {
                echo "Link Broken";
            }
        }

        
    }
?>