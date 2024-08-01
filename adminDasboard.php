<html>
    <body>
        <?php
            session_start();
            if ($_SESSION['status'] == 'login'){
                echo '<h1> Selamat Datang '.$_SESSION['username'].' </h1><br>';
                echo '<a href="sessionLogout.php">Logout</a>';
            }else{
                echo "<p><h1><font color='red'>Anda gagal login </font><br>";
                echo " <a href='loginForm.html'>Login Form</a></h1>"; 
            }
        ?>
    </body>
</html>