<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'assets/css/style.css' ?>">
    <title>Login - superCar</title>
</head>

<body>

    <h1>Login</h1>

    <div class="container-login">
        <?php
        if (isset($_GET['pesan'])) {
            if ($_GET['pesan'] == "gagal") {
                echo "<div class='alert alert-danger'>Login gagal! Username dan password salah.</div>";

            } else if ($_GET['pesan'] == "logout") {
                echo "<div class='alert alert-danger'>Anda telah logout.</div>";

            } else if ($_GET['pesan'] == "belumlogin") {

                echo "<div class='alert alert-success'>Silahkan login dulu.</div>";
            }
        }
        ?>
        <br>

        <div class="wraper-form">
            <form method="post" action="<?php echo base_url().'welcome/login' ?>">
                <input type="text" name="username" placeholder="username" class="form-control">
                <?php echo form_error('username'); ?>
                <br>
                <input type="password" name="password" placeholder="password" class="form-control">
                <?php echo form_error('password'); ?>
                <br>
                <input type="submit" value="Login" class="btn-login">
            </form>
        </div>
    </div>

</body>

</html>