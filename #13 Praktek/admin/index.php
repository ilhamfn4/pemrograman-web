<html>
    <head>
        <title>

        </title>
    </head>

    <body>
        <h2>Halaman Admin</h2>

        <?php
        session_start();
        if ($_SESSION['status']!="login") 
        {
            header(("location:../index.php?pesan=belum_login"));
        }
        ?>

        <h4>Selamat datang, <?php echo $_SESSION['username'] ?></h4>
        <br/>
        <a href="logout.php">LOGOUT</a>
    </body>
</html>