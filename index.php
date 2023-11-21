<?php
  include_once 'header.php'
?>
<section class="index-intro">
  <?php
   if(isset($_SESSION["useruid"])) {
                echo "<p>Hello there" . $_SESSION["useruid"] . "</p>";
           }
           ?>
        <h1> Welcome to the website</h1>
        <p> Log in if you already have an account, if not Sign up to create an account</p>
    </section>
    
    <section class="index categories">
        <h2>Some basic categories</h2>
        <div class="index-categories-list">
            <div>
                <h3>Fashion</h3>
            </div>
           <div>
                <h3>Music</h3>
           </div>
           <div>
                <h3>Lifestyle</h3>
           </div>
        </section>
<?php
  include_once 'footer.php'
?>

    

