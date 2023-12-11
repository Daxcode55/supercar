<!-- main content start -->
<section class="main-content">
    <div class="page-location">
        <div class="page-left">
            <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 28 28" fill="none">
                <path
                    d="M22.75 9.55609V2.625H18.375V5.82148L14 1.75L0 14.875H3.5V26.25H11.375V17.5H16.625V26.25H24.5V14.875H28L22.75 9.55609Z"
                    fill="#4D4D4D" />
            </svg>
            <span>Data Mobil</span>
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
            <span>Data Mobil</span>

            <svg class="arr-right-content" xmlns="http://www.w3.org/2000/svg" width="6" height="13" viewBox="0 0 6 13"
                fill="none">
                <path d="M0.887131 11.9918L5.42149 6.2901L0.534351 1.00002" stroke="black" stroke-opacity="0.6"
                    stroke-linecap="round" stroke-linejoin="round" />
            </svg>
            <span>Edit Mobil</span>
        </div>
    </div>

    <div class="container-tabel-content">
        <h3>Edit Mobil</h3>

        <div class="form-input-mobil">
            <?php foreach ($mobil as $m) { ?>
                <form action="<?php echo base_url() . 'admin/mobil_update' ?>" method="post">
                    <div class="form-group">
                        <label>Merk Mobil</label>
                        <input type="hidden" name="id" value="<?php echo $m->mobil_id; ?>">
                        <input type="text" name="merk" class="form-control" value="<?php echo $m->mobil_merk; ?>"
                            autocomplete="off" required>
                        <?php echo form_error('merk'); ?>
                    </div>

                    <div class="form-group">
                        <label>No. Plat Kendaraan</label>
                        <input type="text" name="plat" class="form-control" value="<?php echo $m->mobil_plat; ?>"
                            autocomplete="off" required>
                    </div>

                    <div class="form-group">
                        <label>Warna</label>
                        <input type="text" name="warna" class="form-control" value="<?php echo $m->mobil_warna; ?>"
                            autocomplete="off" required>
                    </div>

                    <div class="form-group">
                        <label>Tahun Kendaraan</label>
                        <input type="text" name="tahun" class="form-control" value="<?php echo $m->mobil_tahun; ?>"
                            autocomplete="off" required>
                    </div>

                    <div class="form-group">
                        <label>Status Mobil</label>
                        <select name="status" class="form-control">
                            <option <?php if ($m->mobil_status == "1") {
                                echo

                                    "selected='selected'";
                            }
                            echo $m->mobil_tahun; ?>
                                value="1">Tersedia</option>

                            <option <?php if ($m->mobil_status == "2") {
                                echo
                                    "selected='selected'";
                            }
                            echo $m->mobil_tahun; ?>
                                value="2">Sedang Di
                                Rental</option>
                        </select>
                        <?php echo form_error('status'); ?>
                    </div>

                    <div class="form-group group-btn">
                        <input type="submit" value="Simpan" class="btn-input-mobil">
                        <a href="<?php echo base_url() . 'admin/mobil' ?>">Batal</a>
                    </div>
                </form>
            <?php } ?>
        </div>
    </div>
</section>