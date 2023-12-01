<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'assets/css/style.css' ?>">
    <title>Login - superCar</title>
</head>

<body>

    <div class="container-login">
        <div class="content-left-login">
            <img src="<?php echo base_url() . 'assets/heroimage/heroimage-login.png' ?>">
        </div>
        <div class="content-right-login">
            <p class="title-login">Super<span>Car</span></p>
            <div class="container-login-form">
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

                <div class="wraper-form-login">
                    <form method="post" action="<?php echo base_url() . 'welcome/login' ?>">
                        <div class="form-grup formus">
                            <svg class="icon-form-login" xmlns="http://www.w3.org/2000/svg" width="28" height="28"
                                viewBox="0 0 28 28" fill="none">
                                <path
                                    d="M14 0C15.8565 0 17.637 0.737498 18.9497 2.05025C20.2625 3.36301 21 5.14348 21 7C21 8.85652 20.2625 10.637 18.9497 11.9497C17.637 13.2625 15.8565 14 14 14C12.1435 14 10.363 13.2625 9.05025 11.9497C7.7375 10.637 7 8.85652 7 7C7 5.14348 7.7375 3.36301 9.05025 2.05025C10.363 0.737498 12.1435 0 14 0ZM14 17.5C21.735 17.5 28 20.6325 28 24.5V28H0V24.5C0 20.6325 6.265 17.5 14 17.5Z"
                                    fill="black" />
                            </svg>
                            <input type="text" name="username" placeholder="username" autocomplete="off" required class="form-control">
                            <?php echo form_error('username'); ?>
                        </div>

                        <div class="form-grup formpass">
                            <svg class="icon-form-login" xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 28 28"
                                fill="none">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M5.6 11.2V6.53333C5.6 5.67536 5.76899 4.8258 6.09732 4.03313C6.42565 3.24047 6.90689 2.52025 7.51357 1.91357C8.12025 1.30689 8.84048 0.825651 9.63313 0.49732C10.4258 0.16899 11.2754 0 12.1333 0C12.9913 0 13.8409 0.16899 14.6335 0.49732C15.4262 0.825651 16.1464 1.30689 16.7531 1.91357C17.3598 2.52025 17.841 3.24047 18.1693 4.03313C18.4977 4.8258 18.6667 5.67536 18.6667 6.53333V11.2H21.4667C22.2093 11.2 22.9215 11.495 23.4466 12.0201C23.9717 12.5452 24.2667 13.2574 24.2667 14V15.0267C25.3216 15.2409 26.27 15.8132 26.9513 16.6467C27.6325 17.4802 28.0047 18.5235 28.0047 19.6C28.0047 20.6765 27.6325 21.7198 26.9513 22.5533C26.27 23.3868 25.3216 23.9591 24.2667 24.1733V25.2C24.2667 25.9426 23.9717 26.6548 23.4466 27.1799C22.9215 27.705 22.2093 28 21.4667 28H2.8C2.05739 28 1.3452 27.705 0.820101 27.1799C0.294999 26.6548 0 25.9426 0 25.2L0 14C0 13.2574 0.294999 12.5452 0.820101 12.0201C1.3452 11.495 2.05739 11.2 2.8 11.2H5.6ZM7.46667 6.53333C7.46667 5.29566 7.95833 4.10867 8.8335 3.2335C9.70867 2.35833 10.8957 1.86667 12.1333 1.86667C13.371 1.86667 14.558 2.35833 15.4332 3.2335C16.3083 4.10867 16.8 5.29566 16.8 6.53333V11.2H7.46667V6.53333ZM15.8667 16.8C15.1241 16.8 14.4119 17.095 13.8868 17.6201C13.3617 18.1452 13.0667 18.8574 13.0667 19.6C13.0667 20.3426 13.3617 21.0548 13.8868 21.5799C14.4119 22.105 15.1241 22.4 15.8667 22.4H23.3333C24.0759 22.4 24.7881 22.105 25.3132 21.5799C25.8383 21.0548 26.1333 20.3426 26.1333 19.6C26.1333 18.8574 25.8383 18.1452 25.3132 17.6201C24.7881 17.095 24.0759 16.8 23.3333 16.8H15.8667Z"
                                    fill="black" />
                            </svg>
                            <input type="password" name="password" placeholder="password" autocomplete="off" required class="form-control">
                            <?php echo form_error('password'); ?>
                        </div>
                        <input type="submit" value="LOGIN" class="btn-login">
                    </form>
                </div>
            </div>

        </div>
    </div>

</body>

</html>