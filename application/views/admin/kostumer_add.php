<!-- main content start -->
<section class="main-content">
    <div class="page-location">
        <div class="page-left">
            <svg xmlns="http://www.w3.org/2000/svg" width="45" height="45" viewBox="0 0 24 24">
                <path fill="currentColor"
                    d="M12 12q-1.65 0-2.825-1.175T8 8q0-1.65 1.175-2.825T12 4q1.65 0 2.825 1.175T16 8q0 1.65-1.175 2.825T12 12Zm-8 8v-2.8q0-.85.438-1.562T5.6 14.55q1.55-.775 3.15-1.162T12 13q1.65 0 3.25.388t3.15 1.162q.725.375 1.163 1.088T20 17.2V20H4Z" />
            </svg>
            <span>Data Kostumer</span>
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
            <span>Data Kostumer</span>

            <svg class="arr-right-content" xmlns="http://www.w3.org/2000/svg" width="6" height="13" viewBox="0 0 6 13"
                fill="none">
                <path d="M0.887131 11.9918L5.42149 6.2901L0.534351 1.00002" stroke="black" stroke-opacity="0.6"
                    stroke-linecap="round" stroke-linejoin="round" />
            </svg>
            <span>Tambah Kostumer</span>
        </div>
    </div>

    <div class="container-tabel-content">
        <h3>Tambah Kostumer</h3>

        <div class="form-input-mobil">
            <form action="<?php echo base_url() . 'admin/kostumer_add_act' ?>" method="post">
                <div class="form-group">
                    <label>Nama Kostumer</label>
                    <input type="text" name="nama" class="form-control" autocomplete="off" required>
                    <?php echo form_error('nama'); ?>
                </div>

                <div class="form-group">
                    <label>Alamat</label>
                    <textarea name="alamat" class="form-control"></textarea>
                </div>

                <div class="form-group">
                    <label>Jenis Kelamin</label>
                    <select name="jk" class="form-control">
                        <option value="L">Laki-laki</option>
                        <option value="P">Perempuan</option>
                    </select>
                </div>

                <div class="form-group"><label>HP</label>
                    <input type="number" name="hp" class="form-control" autocomplete="off" required>
                </div>

                <div class="form-group">
                    <label>No. KTP</label>
                    <input type="text" name="ktp" class="form-control" autocomplete="off" required>
                </div>

                <div class="form-group group-btn">
                    <input type="submit" value="Simpan" class="btn-input-mobil">
                    <a href="<?php echo base_url() . 'admin/kostumer' ?>">Batal</a>
                </div>
            </form>
        </div>
    </div>
</section>