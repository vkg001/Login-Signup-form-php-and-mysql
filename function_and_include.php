<?php

$name = 'Vikas';
function FirstFunc($name)
{
    echo $name;
}

FirstFunc($name);
FirstFunc("NAME");
FirstFunc('XYZ');


?>

<!DOCTYPE html>
<html>
    <head>
        <body>
            <h1>HELLO <?php FirstFunc("Vikas") ?></h1>
        </body>
    </head>
</html>