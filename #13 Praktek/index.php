<html>

<head>
    <title>
        Tutorial cara membuat login dengan PHP MySQLi
    </title>
</head>

<body>
    <h3>Form Login - Tutorial Login dengan PHP MySQLi</h3>
    <?php
        if (isset($_GET['pesan'])) 
        {
            if ($_GET['pesan'] == "gagal") 
            {
                echo "Login gagal! username dan password salah!";
            }
            else if ($_GET('pesan') == "logout") 
            {
                echo "Anda telah berhasil logout";
            }
            else if ($_GET['pesan'] == "belum login") 
            {
                echo "Anda harus login untuk mengakses halaman admin";
            }
        }
    ?>
    <br/>
    <form method="POST" action="login.php">
        <table>
            <tr>
                <td>Username</td>
                <td>:</td>
                <td><input type="text" name="username" placeholder="Username"></td>
            </tr>
            <tr>
                <td>Password</td>
                <td>:</td>
                <td><input type="text" name="password" placeholder="Password"></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" value="LOGIN"></td>
            </tr>
        </table>
    </form>
</body>

</html>