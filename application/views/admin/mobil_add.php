<!-- main content start -->
<section class="main-content">
    <div class="page-location">
        <div class="page-left">
            <svg xmlns="http://www.w3.org/2000/svg" width="38" height="38" viewBox="0 0 24 24">
                <path fill="currentColor"
                    d="M4 20q-.825 0-1.412-.587T2 18V6q0-.825.588-1.412T4 4h6l2 2h8q.825 0 1.413.588T22 8H4v10l2.4-8h17.1l-2.575 8.575q-.2.65-.737 1.038T19 20H4Z" />
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
            <span>Tambah Mobil</span>
        </div>
    </div>

    <div class="container-tabel-content">
        <h3>Tambah Mobil</h3>

        <div class="form-input-mobil">
            <form action="<?php echo base_url() . 'admin/mobil_add_act' ?>" method="post">
                <div class="form-group">
                    <label>Merk Mobil</label>
                    <input type="text" name="merk" class="form-control" autocomplete="off" required>
                    <?php echo form_error('merk'); ?>
                </div>

                <div class="form-group">
                    <label>No. Plat Kendaraan</label>
                    <input type="text" name="plat" class="form-control" autocomplete="off" required>
                </div>

                <div class="form-group">
                    <label>Warna</label>
                    <input type="text" name="warna" class="form-control" autocomplete="off" required>
                </div>

                <div class="form-group"><label>Tahun Kendaraan</label>
                    <input type="text" name="tahun" class="form-control" autocomplete="off" required>
                </div>

                <div class="form-group">
                    <label>Status Mobil</label>
                    <select name="status" class="form-control">
                        <option value="1">Tersedia</option>
                        <option value="2">Sedang Di Rental</option>
                    </select>
                    <?php echo form_error('status'); ?>
                </div>

                <div class="form-group group-btn">
                    <input type="submit" value="Simpan" class="btn-input-mobil">
                    <a href="<?php echo base_url() . 'admin/mobil' ?>">Batal</a>
                </div>
            </form>
        </div>
    </div>
</section>