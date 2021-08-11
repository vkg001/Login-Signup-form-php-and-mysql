<?php

    include 'header.php';

?>


<html>
    <style>
        form{
            max-width: 460px;
            padding: 30px;
            margin: 20px auto;
        }
        #signin{
            background-color: #339933;
        }
        .styleEYE{
            margin-left: -30px; 
            cursor: pointer;
        }
        .registered{
            display: none;
        }
        
    </style>

    <script type="text/javascript" src="validation.js"> </script>
    <section class="grey-text container">
        <form action="database_connect.php" method="POST" class="white" onsubmit="return checkplz()">

        <div id="regis" class="center white red-text registered" style="margin-bottom: 20px;">
            Email already registered! <br>
            <button class="btn green" style="margin-top: 10px;"><a href="login.php" class="green white-text">Login</a></button>
        </div>

            <label id="activate1"><span id="activateplz">Name:</span>
            <input onfocus="Activate1()" onfocusout="Test1()" id="name" type="text" name="name" required>
            </label>

            <label for="email"><span id="activate2"> Email: </span> 
            <input onfocus="Activate2()" onfocusout="Test2()" id="email" type="email" name="email" required>
            </label>

            <label for="number"><span id="activate3"> Phone Number: </span> 
            <input onfocus="Activate3()" onfocusout="Test3()" id="primary" type="text" name="primary" required>
            </label>

            <label><span id="activate5">Password:</span>
            <input onfocus="Activate5()" id="pass" type="password" name="pass" required><i onmouseover="TOGGLE()" onmouseout="TOGGLE2()" class="far fa-eye styleEYE" id="togglePassword"></i>
            </label>

            <label><span id="activate6">Confirm Password:</span>
            <input onfocus="Activate6()" onfocusout="Test6()" id="passcon" type="password" name="passcon" required>
            </label>

            <label for="number" id="activate4">Additional Phone number (Optional): </label>
            <input onfocus="Activate4()" onfocusout="Test4()" id="additional" type="text" name="additional">

            <div class="center">
                <button type="submit" name="submit" value="submit" class="btn green" onclick="checkplz()">SUBMIT</button>
            </div>

        </form>
    </section>
</html>


<?php

include 'footer.html';

?>


<script>
    <?php 
        $errors = 0;
        if(isset($_GET['errors'])) 
        {
            $errors = 1;
        }
    
    ?>
    var a = <?php echo $errors?>;
    //alert(a);
    if(a==1)
    {
        document.getElementById('regis').style.display="block";
    }
</script>