<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../src/css/login_admin_it.css">
    <title>Login Sebagai Admin IT</title>
</head>

<body>
    <main>
        <?php
        if (isset($_GET['usernamevalid'])) {
            if ($_GET['usernamevalid'] == "gagal") {
                echo "<div class='alert'>Username tidak sesuai !</div>";
            }
        } else if (isset($_GET['passwordvalid'])) {
            if ($_GET['passwordvalid'] == "gagal") {
                echo "<div class='alert'>Password tidak sesuai !</div>";
            }
        } else if (isset($_GET['pesan'])) {
            if ($_GET['pesan'] == "gagal") {
                echo "<div class='alert'>Harap Login Terlebih Dahulu !</div>";
            }
        }
        ?>
        <h1>Login Sebagai Admin IT</h1>
        <form action="sistem_login_admin_it.php" method="post">
            <label for="user">Username</label>
            <input type="text" name="username" id="user" required />
            <label for="pw">Password</label>
            <input type="password" name="password" id="pw" required />
            <button type="submit" name="Login-Btn" value="Login">Login</button>
        </form>
    </main>
</body>

</html>