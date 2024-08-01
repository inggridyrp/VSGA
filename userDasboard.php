<html>
    <body>
        <?php
            session_start();
            if ($_SESSION['status'] == 'login'){
                echo '<h1> Hai '.$_SESSION['username'].' </h1><br>';
                echo '<a href="sessionLogout.php">Logout</a>';
            }else{
                echo "Anda gagal login ";
                echo " <a href='loginForm.html'>Login Form</a>"; 
            }
        ?>
    </body>
</html>