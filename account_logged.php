<?php 
    include('database_connection.php');
    $finalname = 'not name';
    $usr = 'x';
    if(isset($_GET['user']))
    {
        $usr = mysqli_real_escape_string($conn, $_GET['user']);
        $var = "SELECT Name FROM details WHERE Email= '$usr' ";
        $res = mysqli_query($conn, $var);
        $Res2 = mysqli_fetch_all($res, MYSQLI_ASSOC);
        if($Res2)
        {
            foreach($Res2 as $final)
            {
                $finalname = $final['Name'];
                break;
            }
        }
        else
        {
            $finalname = 'and mand ka tola';
        }
    } 
?>

<html>
<?php include('header.php') ?>
<style>

.xyz{
    margin-top: 20px;
    padding: 10px;
}
h5{
    margin-bottom: 30px;
}

</style>
<div class="white center container xyz grey-text">
    <h3>Content not added yet </h3>
    <h5>Thankyou for checking out this website</h5>
</div>

<?php include('footer.html') ?>
</html>
<script>
    document.getElementById('home').href = "account_logged.php?user=<?php echo $usr ?>";
    document.getElementById('signin2').style.display = "none";
    document.getElementById('login2').style.display = "none";
    document.getElementById('logout').style.display = "block";
    var a = "<?php echo $finalname ?>" ;
    document.getElementById('home').innerHTML=a;
    var b = 0;
</script>