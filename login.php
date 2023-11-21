<?php
include_once 'header.php';
?>

    <section class="signup-form">
       <h2>Log in</h2>
       <div class="login-form-form">
       <form action="includes/login.inc.php" method="post">
        <li><input type="text" name="uid" placeholder="Username/Email..."></li>
        <li><input type="password" name="pwd" placeholder="Password..."></li>
        <li><button type="submit" name="submit">Log in</button></li>
</form>
</div>
<?php
    if(isset($_GET["error"])){
        if($_GET["error"] == "emptyinput") {
           echo "<p>Fill in all fields!</p>";
        }
         else if ($_GET["error"] == "wronglogin") {
            echo"<p>Incorrect login information!</p>";
        }
    }
    
    ?>
    </section>
    
    
<?php
   include_once 'footer.php';
?>