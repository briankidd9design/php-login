<?php
    require "header.php";
    // echo "Hi There!";
?>
<!-- Page to show when you have logged in or out. This page acts like the index page -->
<main>
    <div class="wrapper-main">
    <section class="section-default">
        <?php
            if (isset($_SESSION['userId']) ){
                echo '<p class="login-status">You are logged in!</p>';
                echo '<img class = "img-center" src = "img/smiley-face.png" alt = "smiley face login">';

            }
            else{
                echo '<p class="login-status">You are logged out!</p>';
              
               
            }
        ?>
        <?php
         if(isset($_GET['error'])){
                if($_GET['error'] == "emptyfields"){
                    echo '<p class = "signuperror">You did not fill in username AND password</p>';
                    echo '<img class = "img-center" src = "img/sad-face.png" alt = "smiley face login">';
                }
                else if ($_GET['error'] == "nouser"){
                    echo '<p class = "signuperror">There is no user by that name!</p>';
                    echo '<img class = "img-center" src = "img/sad-face.png" alt = "smiley face login">';
                }
                else if ($_GET['error'] == "wrongpwd"){
                    echo '<p class = "signuperror">Incorrect password</p>';
                    echo '<img class = "img-center" src = "img/sad-face.png" alt = "smiley face login">';
                }
         }
        ?>
    </section>
    </div>
</main>

<?php
    require "footer.php";
?>