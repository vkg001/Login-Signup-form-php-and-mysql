
<?php

include('loggedin.php');

?>

<html>
    <head>
        <title>
            Login
        </title>
        
        <script type="text/javascript" src="validation.js"> </script>

        <style>
            #login{
                background-color: #339933;
            }
            .styleEYE{
            margin-left: -30px; 
            cursor: pointer;
        }
        form{
            max-width: 460px;
            padding: 30px;
            margin: 100px auto;
        }
        input{
            padding: 5px;
        }
        .credentials{
            visibility: hidden;
        }
        </style>
    </head>
<?php include('header.php') ?>
<section class="grey-text container">

        <form action="loggedin.php" method="POST" class="white" onsubmit="return checkplz()">

            <label for="email"><span id="activate2"> Email: </span> 
            <input onfocus="Activate2()" onfocusout="Test2()" id="email" type="email" name="email" required>
            </label>

            <label><span id="activate5">Password:</span>
            <input onfocus="Activate5()" id="pass" type="password" name="pass" required><i onmouseover="TOGGLE()" onmouseout="TOGGLE2()" class="far fa-eye styleEYE" id="togglePassword"></i>
            </label>

            <div id="cred" class="credentials center red-text" >
                Wrong credentials.
            </div>

            <div style="margin-top: 10px;">
                <button  type="submit" name="submit" value="submit" class="btn green left-align" onclick="checkplz()">login</button>
                <button style="float:right;" class="btn green left-align"><a href="forgot_pass.php" class="white-text green">forgot password</a></button>
            </div>
            <div class="center" style="margin-top: 20px;">
                <hr width="80%" color="grey" size="1px">
            </div>
            
            <div class="center">
                <button style="margin-top: 10px;" class="btn green"><a href="form.php" class="white-text">new account</a> </button>
            </div>

        </form>
</section>


<?php  include('footer.html') ?>
</html>


<script>
    document.getElementById('cred').style.visibility = 'hidden';
    var a = <?php echo $errors ;?>;
    if(a==1)
    {
        document.getElementById('cred').style.visibility = 'visible';
        document.getElementsByClassName("credentials").style.visibility = "visible";
    }
</script>