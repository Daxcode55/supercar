<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - superCar</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'assets/css/style.css' ?>">
</head>

<body>

    <div class="container-dashboard">
        <!-- nav side start -->
        <aside id="asideNav">
            <header class="header-side-nav">
                <h1 id="title">SuperCar</h1>
                <svg class="icon-burger" xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 28 28"
                    fill="none">
                    <path d="M3.5 7H24.5M3.5 14H24.5M3.5 21H24.5" stroke="white" stroke-width="1.66667"
                        stroke-linecap="round" stroke-linejoin="round" />
                </svg>
            </header>

            <div class="wraper-profile-side-nav">
                <div class="profile-side-nav">
                    <img src="<?php echo base_url() . 'assets/heroimage/avatar-profile.png' ?>" width=64px height=64px">
                    <div class="desc-profile-side">
                        <p class="desc-nama">Rifqi H. Dai</p>
                        <p class="desc-status">Administrator</p>
                    </div>
                </div>
            </div>

            <nav id="navside">
                <ul>
                    <li><a id="links" href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 25 25"
                                fill="none">
                                <path
                                    d="M20.3125 8.53223V2.34375H16.4062V5.19775L12.5 1.5625L0 13.2812H3.125V23.4375H10.1562V15.625H14.8438V23.4375H21.875V13.2812H25L20.3125 8.53223Z"
                                    fill="black" />
                            </svg>
                            <p>Dashboard</p></a></li>
                    <li><a href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 25 25"
                                fill="none">
                                <path
                                    d="M23.9258 10.8047C23.7808 10.6037 23.59 10.44 23.3693 10.3273C23.1485 10.2145 22.9041 10.1559 22.6562 10.1562H21.0938V8.59375C21.0938 8.17935 20.9291 7.78192 20.6361 7.4889C20.3431 7.19587 19.9457 7.03125 19.5312 7.03125H12.7607L10.0527 5C9.78181 4.79803 9.45315 4.68848 9.11523 4.6875H3.90625C3.49185 4.6875 3.09442 4.85212 2.8014 5.14515C2.50837 5.43817 2.34375 5.8356 2.34375 6.25V20.3125C2.34375 20.5197 2.42606 20.7184 2.57257 20.8649C2.71909 21.0114 2.9178 21.0938 3.125 21.0938H20.6152C20.7792 21.0938 20.939 21.0422 21.0721 20.9463C21.2051 20.8504 21.3046 20.7151 21.3564 20.5596L24.1387 12.2129C24.2169 11.978 24.2384 11.728 24.2014 11.4832C24.1644 11.2384 24.07 11.0059 23.9258 10.8047ZM9.11523 6.25L11.8232 8.28125C12.0941 8.48334 12.4228 8.59291 12.7607 8.59375H19.5312V10.1562H6.81348C6.48552 10.1562 6.16587 10.2594 5.89981 10.4511C5.63375 10.6429 5.43477 10.9135 5.33105 11.2246L3.90625 15.498V6.25H9.11523ZM20.0527 19.5312H4.20898L6.81348 11.7188H22.6562L20.0527 19.5312Z"
                                    fill="black" />
                            </svg>
                            <p>Data Mobil</p></a></li>
                    <li><a href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 25 25"
                                fill="none">
                                <path
                                    d="M12.5 4.16669C13.6051 4.16669 14.6649 4.60567 15.4463 5.38708C16.2277 6.16848 16.6667 7.22828 16.6667 8.33335C16.6667 9.43842 16.2277 10.4982 15.4463 11.2796C14.6649 12.061 13.6051 12.5 12.5 12.5C11.395 12.5 10.3351 12.061 9.55374 11.2796C8.77234 10.4982 8.33335 9.43842 8.33335 8.33335C8.33335 7.22828 8.77234 6.16848 9.55374 5.38708C10.3351 4.60567 11.395 4.16669 12.5 4.16669ZM12.5 14.5834C17.1042 14.5834 20.8334 16.4479 20.8334 18.75V20.8334H4.16669V18.75C4.16669 16.4479 7.89585 14.5834 12.5 14.5834Z"
                                    fill="black" />
                            </svg>
                            <p>Data Kostumer</p></a></li>
                    <li><a href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 25 25"
                                fill="none">
                                <path
                                    d="M2.08331 7.29171H20.8333M16.6666 2.08337L21.875 7.29171L16.6666 12.5M22.9166 17.7084H4.16665M8.33331 12.5L3.12498 17.7084L8.33331 22.9167"
                                    stroke="black" stroke-width="1.66667" />
                            </svg>
                            <p>Transaksi</p></a></li>
                    <li><a href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 25 25"
                                fill="none">
                                <path
                                    d="M7.8125 14.0625H14.0625V15.625H7.8125V14.0625ZM7.8125 10.1562H17.1875V11.7188H7.8125V10.1562ZM7.8125 17.9688H11.7188V19.5312H7.8125V17.9688Z"
                                    fill="black" />
                                <path
                                    d="M19.5312 3.90625H17.1875V3.125C17.1875 2.7106 17.0229 2.31317 16.7299 2.02015C16.4368 1.72712 16.0394 1.5625 15.625 1.5625H9.375C8.9606 1.5625 8.56317 1.72712 8.27015 2.02015C7.97712 2.31317 7.8125 2.7106 7.8125 3.125V3.90625H5.46875C5.05435 3.90625 4.65692 4.07087 4.3639 4.3639C4.07087 4.65692 3.90625 5.05435 3.90625 5.46875V21.875C3.90625 22.2894 4.07087 22.6868 4.3639 22.9799C4.65692 23.2729 5.05435 23.4375 5.46875 23.4375H19.5312C19.9457 23.4375 20.3431 23.2729 20.6361 22.9799C20.9291 22.6868 21.0938 22.2894 21.0938 21.875V5.46875C21.0938 5.05435 20.9291 4.65692 20.6361 4.3639C20.3431 4.07087 19.9457 3.90625 19.5312 3.90625ZM9.375 3.125H15.625V6.25H9.375V3.125ZM19.5312 21.875H5.46875V5.46875H7.8125V7.8125H17.1875V5.46875H19.5312V21.875Z"
                                    fill="black" />
                            </svg>
                            <p>Laporan</p></a></li>
                    <li><a href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 25 25"
                                fill="none">
                                <path
                                    d="M11.4583 9.37504H13.5416V7.29171H11.4583M12.5 20.8334C7.90623 20.8334 4.16665 17.0938 4.16665 12.5C4.16665 7.90629 7.90623 4.16671 12.5 4.16671C17.0937 4.16671 20.8333 7.90629 20.8333 12.5C20.8333 17.0938 17.0937 20.8334 12.5 20.8334ZM12.5 2.08337C11.132 2.08337 9.7775 2.35281 8.51369 2.8763C7.24989 3.39978 6.10156 4.16707 5.13428 5.13435C3.18078 7.08785 2.08331 9.73737 2.08331 12.5C2.08331 15.2627 3.18078 17.9122 5.13428 19.8657C6.10156 20.833 7.24989 21.6003 8.51369 22.1238C9.7775 22.6473 11.132 22.9167 12.5 22.9167C15.2627 22.9167 17.9122 21.8192 19.8657 19.8657C21.8192 17.9122 22.9166 15.2627 22.9166 12.5C22.9166 11.1321 22.6472 9.77756 22.1237 8.51375C21.6002 7.24995 20.833 6.10162 19.8657 5.13435C18.8984 4.16707 17.7501 3.39978 16.4863 2.8763C15.2225 2.35281 13.8679 2.08337 12.5 2.08337ZM11.4583 17.7084H13.5416V11.4584H11.4583V17.7084Z"
                                    fill="black" />
                            </svg>
                            <p>Tentang Aplikasi</p></a></li>
                </ul>
            </nav>
        </aside>
        <!-- nav side end -->

        <div class="col-right">
            <!-- header nav top start -->
            <header class="header-top-nav">
                <div class="content-nav-top">
                    <img src="<?php echo base_url() . 'assets/heroimage/avatar-profile.png' ?>">
                    <svg class="arrow-bot" xmlns="http://www.w3.org/2000/svg" width="12" height="9" viewBox="0 0 12 9"
                        fill="none">
                        <path d="M1 1.5083L5.57858 7.16165L10.4243 1.81997" stroke="white" stroke-width="2.08333"
                            stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </div>
            </header>
            <!-- header nav top end -->
            
            <!-- main content start -->
            <div class="main-content">
                <h1>isi content</h1>
            </div>
            <!-- main content end -->
        </div>
    </div>


    <script src="<?php echo base_url() . 'assets/script/script.js' ?>"></script>
</body>

</html>