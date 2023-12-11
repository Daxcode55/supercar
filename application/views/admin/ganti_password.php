<!-- main content start -->
<section class="main-content">
    <div class="page-location">
        <div class="page-left">
            <svg xmlns="http://www.w3.org/2000/svg" width="37" height="37" viewBox="0 0 14 14" fill="none">
                <g clip-path="url(#clip0_21_361)">
                    <path
                        d="M10.2667 10.2666H9.33334V9.33331H10.2667V10.2666ZM7.46667 10.2666H8.40001V9.33331H7.46667V10.2666ZM12.1333 10.2666H11.2V9.33331H12.1333V10.2666Z"
                        fill="#494949" />
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M2.8 5.6V3.26667C2.8 2.83768 2.88449 2.4129 3.04866 2.01657C3.21283 1.62024 3.45345 1.26012 3.75678 0.956785C4.06012 0.653447 4.42024 0.412826 4.81657 0.24866C5.2129 0.0844948 5.63768 0 6.06667 0C6.49565 0 6.92044 0.0844948 7.31677 0.24866C7.7131 0.412826 8.07321 0.653447 8.37655 0.956785C8.67989 1.26012 8.92051 1.62024 9.08467 2.01657C9.24884 2.4129 9.33333 2.83768 9.33333 3.26667V5.6H10.7333C11.1046 5.6 11.4607 5.7475 11.7233 6.01005C11.9858 6.2726 12.1333 6.6287 12.1333 7V7.51333C12.6608 7.62044 13.135 7.90661 13.4756 8.32335C13.8163 8.74008 14.0023 9.26177 14.0023 9.8C14.0023 10.3382 13.8163 10.8599 13.4756 11.2767C13.135 11.6934 12.6608 11.9796 12.1333 12.0867V12.6C12.1333 12.9713 11.9858 13.3274 11.7233 13.5899C11.4607 13.8525 11.1046 14 10.7333 14H1.4C1.0287 14 0.672601 13.8525 0.41005 13.5899C0.1475 13.3274 0 12.9713 0 12.6L0 7C0 6.6287 0.1475 6.2726 0.41005 6.01005C0.672601 5.7475 1.0287 5.6 1.4 5.6H2.8ZM3.73333 3.26667C3.73333 2.64783 3.97917 2.05434 4.41675 1.61675C4.85434 1.17917 5.44783 0.933333 6.06667 0.933333C6.6855 0.933333 7.279 1.17917 7.71658 1.61675C8.15417 2.05434 8.4 2.64783 8.4 3.26667V5.6H3.73333V3.26667ZM7.93333 8.4C7.56203 8.4 7.20593 8.5475 6.94338 8.81005C6.68083 9.0726 6.53333 9.4287 6.53333 9.8C6.53333 10.1713 6.68083 10.5274 6.94338 10.7899C7.20593 11.0525 7.56203 11.2 7.93333 11.2H11.6667C12.038 11.2 12.3941 11.0525 12.6566 10.7899C12.9192 10.5274 13.0667 10.1713 13.0667 9.8C13.0667 9.4287 12.9192 9.0726 12.6566 8.81005C12.3941 8.5475 12.038 8.4 11.6667 8.4H7.93333Z"
                        fill="#494949" />
                </g>
                <defs>
                    <clipPath id="clip0_21_361">
                        <rect width="14" height="14" fill="white" />
                    </clipPath>
                </defs>
            </svg>
            <span>Password</span>
        </div>

        <div class="page-right">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                <path
                    d="M16.25 6.82578V1.875H13.125V4.1582L10 1.25L0 10.625H2.5V18.75H8.125V12.5H11.875V18.75H17.5V10.625H20L16.25 6.82578Z"
                    fill="#686868" fill-opacity="0.6" />
            </svg>
            <!-- icon arrow -->
            <svg class="arr-right-content" xmlns="http://www.w3.org/2000/svg" width="6" height="13" viewBox="0 0 6 13"
                fill="none">
                <path d="M0.887131 11.9918L5.42149 6.2901L0.534351 1.00002" stroke="black" stroke-opacity="0.6"
                    stroke-linecap="round" stroke-linejoin="round" />
            </svg>
            <span>Password</span>

            <svg class="arr-right-content" xmlns="http://www.w3.org/2000/svg" width="6" height="13" viewBox="0 0 6 13"
                fill="none">
                <path d="M0.887131 11.9918L5.42149 6.2901L0.534351 1.00002" stroke="black" stroke-opacity="0.6"
                    stroke-linecap="round" stroke-linejoin="round" />
            </svg>
            <span>Ganti Password</span>
        </div>
    </div>

    <div class="container-tabel-content ganti-pass">
        <h3>Ganti Password</h3>
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <?php
                if (isset($_GET['pesan'])) {
                    if ($_GET['pesan'] == "berhasil") {
                        echo "<div class='alert alert-success'>Password berhasil di ganti.</div>";
                    }
                }

                ?>
                <form action="<?php echo

                    base_url() . 'admin/ganti_password_act' ?>" method="post">

                    <div class="form-group">
                        <label>Password Baru</label>
                        <input class="form-control" type="password" name="pass_baru">

                        <?php echo form_error('pass_baru'); ?>
                    </div>
                    <div class="form-group">
                        <label>Ulangi Password Baru</label>
                        <input class="form-control" type="password" name="ulang_pass">

                        <?php echo form_error('ulang_pass'); ?>
                    </div>
                    <div class="form-group">
                        <input class="btn-input-mobil" type="submit" value="Simpan">
                    </div>
                </form>
            </div>
        </div>
</section>