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
                        <p class="desc-nama"><?php echo $this->session->userdata('nama'); ?></p>
                        <p class="desc-status">Administrator</p>
                    </div>
                </div>
            </div>

            <nav id="navside">
                <ul>
                    <li><a href="<?php echo base_url() . 'admin' ?>"
                            class="<?= (current_url() == base_url('admin')) ? 'active' : '' ?>">
                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 512 512">
                                <path fill="currentColor"
                                    d="M416 174.74V48h-80v58.45L256 32L0 272h64v208h144V320h96v160h144V272h64l-96-97.26z" />
                            </svg>
                            </svg>
                            <p>Dashboard</p>
                        </a></li>

                    <li><a href="<?php echo base_url() . 'admin/mobil' ?>"
                            class="<?= (current_url() == base_url('admin/mobil')) ? 'active' : '' ?>">
                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 24 24">
                                <path fill="currentColor"
                                    d="M4 20q-.825 0-1.412-.587T2 18V6q0-.825.588-1.412T4 4h6l2 2h8q.825 0 1.413.588T22 8H4v10l2.4-8h17.1l-2.575 8.575q-.2.65-.737 1.038T19 20H4Z" />
                            </svg>
                            <p>Data Mobil</p>
                        </a></li>

                    <li><a href="<?php echo base_url() . 'admin/kostumer' ?>" class="<?= (current_url() == base_url('admin/kostumer')) ? 'active' : '' ?>">
                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 24 24">
                                <path fill="currentColor"
                                    d="M12 12q-1.65 0-2.825-1.175T8 8q0-1.65 1.175-2.825T12 4q1.65 0 2.825 1.175T16 8q0 1.65-1.175 2.825T12 12Zm-8 8v-2.8q0-.85.438-1.562T5.6 14.55q1.55-.775 3.15-1.162T12 13q1.65 0 3.25.388t3.15 1.162q.725.375 1.163 1.088T20 17.2V20H4Z" />
                            </svg>
                            <p>Data Kostumer</p>
                        </a></li>

                    <li><a class="links" href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 24 24">
                                <path fill="none" stroke="currentColor" stroke-width="2"
                                    d="M2 7h18m-4-5l5 5l-5 5m6 5H4m4-5l-5 5l5 5" />
                            </svg>
                            <p>Transaksi</p>
                        </a></li>

                    <li><a class="links" href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 32 32">
                                <path fill="currentColor" d="M10 18h8v2h-8zm0-5h12v2H10zm0 10h5v2h-5z" />
                                <path fill="currentColor"
                                    d="M25 5h-3V4a2 2 0 0 0-2-2h-8a2 2 0 0 0-2 2v1H7a2 2 0 0 0-2 2v21a2 2 0 0 0 2 2h18a2 2 0 0 0 2-2V7a2 2 0 0 0-2-2ZM12 4h8v4h-8Zm13 24H7V7h3v3h12V7h3Z" />
                            </svg>
                            <p>Laporan</p>
                        </a></li>

                    <li><a class="links" href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 24 24">
                                <path fill="currentColor"
                                    d="M11 9h2V7h-2m1 13c-4.41 0-8-3.59-8-8s3.59-8 8-8s8 3.59 8 8s-3.59 8-8 8m0-18A10 10 0 0 0 2 12a10 10 0 0 0 10 10a10 10 0 0 0 10-10A10 10 0 0 0 12 2m-1 15h2v-6h-2v6Z" />
                            </svg>
                            <p>Tentang Aplikasi</p>
                        </a></li>
                </ul>
            </nav>
        </aside>
        <!-- nav side end -->