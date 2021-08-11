
<!DOCTYPE html>
<html>
<?php include 'header.php' ?>
<h1 id="HELLO"> HELLO WORLD </h1>
<br>
<button onclick="Fun()" class="btn" style="margin-left: 30px;">Click Me</button>
</body>
</html>


<?php

    $first_name = 'Vikas';
    $Last_name = 'Kumar';

    //echo "$first_name $Last_name";

    $n = 10;
    echo "<br>";
    /*
    for($i = 0; $i < $n;  $i++)
    {
        echo "$i" . "<span style=\"margin-left: 20px;\">  </span>";
    }

    echo "Included file";
    */
    //include 'function_and_include.php';
    //include('index.html');
?>

<?php

include 'footer.html';

?>

<script>
    var x = 0;
    function Fun()
    {
        if(x==0)
        {
            document.getElementById("HELLO").innerHTML = "Try sign up and login feature from navigation bar  :)";
            x++;
        }
        else
        {
            document.getElementById("HELLO").innerHTML = "HELLO WORLD";
            x--;
        }
    }
</script>