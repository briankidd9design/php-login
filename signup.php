<?php
    require "header.php";
    // echo "Hi There!";
?>

<main>
    <div class="wrapper-main">
    <section class="section-default">
        <h1>Signup</h1>
        <?php
            if(isset($_GET['error'])){
                if($_GET['error'] == "emptyfields"){
                    echo '<p class = "signuperror">Fill in all fields!</p>';
                }
                else if ($_GET['error'] == "invaliduidmail"){
                    echo '<p class = "signuperror">Invalid username and e-mail!</p>';
                }
                else if ($_GET['error'] == "invaliduid"){
                    echo '<p class = "signuperror">Invalid username!</p>';
                }
                else if ($_GET['error'] == "invalidmail"){
                    echo '<p class = "signuperror">Invalid e-mail!</p>';
                }
                else if ($_GET['error'] == "passwordcheck"){
                    echo '<p class = "signuperror">Your passwords do not match!</p>';
                }
                else if ($_GET['error'] == "usertaken"){
                    echo '<p class = "signuperror">Username is already taken!</p>';
                }
            }
           // Here we create a success message if the new user was created.
          else if (isset($_GET["signup"])) {
            if ($_GET["signup"] == "success") {
              echo '<p class="signupsuccess">Signup successful!</p>';
            }
          }
        ?>
        <form class = "form-signup" action="includes/signup-inc.php" method="post">
            <input type="text" name="uid" placeholder="Username">
            <input type="text" name="mail" placeholder="E-mail">
            <input type="password" name="pwd" placeholder="Password">
            <input type="password" name="pwd-repeat" placeholder="Repeat password">
            <button type="submit" name="signup-submit">Signup</button>
        </form>
      
    </section>
    </div>
</main>

<?php
    require "footer.php";
?>