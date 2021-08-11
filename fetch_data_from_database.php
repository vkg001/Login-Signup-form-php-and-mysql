<?php


include 'header.html';

$conn = mysqli_connect('localhost', 'Vikas Kumar', 'vikas1234', 'website entries');
//                      hostname      username       password     database name
if(!$conn)
{
    echo 'Connection failure';
}

$tab = 'SELECT Name, Email, Password FROM details';

$Res = mysqli_query($conn, $tab);

$Res2 = mysqli_fetch_all($Res, MYSQLI_ASSOC);

mysqli_close($conn);

?>


<html>
    <style>
        .CustomFontSize{
            font-size: 40px;
        }
        .customalign{
            text-align: right;
            max-width: 100px;
            margin: 5px auto;
            padding: 5px auto;
        }
    </style>
    
    
    <div class="container center"><span class="CustomFontSize">DETAILS</span>
        <div class="row center">
            <?php foreach($Res2 as $finalRES){?>
                <div class="col s6 md3">
                    <div class="card">
                        <div class="card-content center">
                            <h6>
                                Name : <?php echo htmlspecialchars($finalRES['Name']); ?>
                            </h6>
                            <div>
                                E-mail: <?php echo htmlspecialchars($finalRES['Email'])."<br>"; ?>
                                Password: <?php echo htmlspecialchars($finalRES['Password']) ?>
                            </div>
                            
                        </div>
                        <div class="card-action right-align">
                            <a href="#" class="btn white-text green">
                                more info
                            </a>
                        </div>
                    </div>

                </div>
            <?php }?>
        </div>
    </div>
<?php include 'footer.html'; ?>

</html>