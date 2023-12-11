<!-- main content start -->
<section class="main-content">
    <div class="page-location">
        <div class="page-left">
            <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" viewBox="0 0 24 24">
                <path fill="none" stroke="currentColor" stroke-width="2" d="M2 7h18m-4-5l5 5l-5 5m6 5H4m4-5l-5 5l5 5" />
            </svg>
            <span>Data Transaksi</span>
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
            <span>Data Transaksi</span>

            <svg class="arr-right-content" xmlns="http://www.w3.org/2000/svg" width="6" height="13" viewBox="0 0 6 13"
                fill="none">
                <path d="M0.887131 11.9918L5.42149 6.2901L0.534351 1.00002" stroke="black" stroke-opacity="0.6"
                    stroke-linecap="round" stroke-linejoin="round" />
            </svg>
            <span>Tambah Transaksi</span>
        </div>
    </div>

    <div class="container-tabel-content">
        <h3>Tambah Transaksi</h3>

        <div class="form-input-mobil">
            <form action="<?php echo base_url() . 'admin/transaksi_add_act' ?>" method="post">
                <div class="form-group">
                    <label>Kostumer</label>
                    <select name="kostumer" class="form-control">
                        <option value="">-Pilih Kostumer-</option>
                        <?php foreach ($kostumer as $k) { ?>
                            <option value="<?php echo $k->kostumer_id; ?>">
                                <?php

                                echo $k->kostumer_nama; ?>
                            </option>

                        <?php } ?>
                    </select>
                    <?php echo form_error('kostumer'); ?>
                </div>

                <div class="form-group">
                    <label>Mobil</label>
                    <select name="mobil" class="form-control">
                        <option value="">-Pilih Mobil-</option>
                        <?php foreach ($mobil as $m) { ?>
                            <option value="<?php echo $m->mobil_id; ?>">
                                <?php

                                echo $m->mobil_merk; ?>
                            </option>
                        <?php } ?>
                    </select>
                    <?php echo form_error('mobil'); ?>
                </div>

                <div class="form-group">
                    <label>Tanggal Pinjam</label>
                    <input type="date" name="tgl_pinjam" class="form-control" autocomplete="off" required>
                    <?php echo form_error('tgl_pinjam'); ?>
                </div>

                <div class="form-group">
                    <label>Tanggal Kembali</label>
                    <input type="date" name="tgl_kembali" class="form-control" autocomplete="off" required>
                    <?php echo form_error('tgl_kembali'); ?>
                </div>

                <div class="form-group">
                    <label>Harga</label>
                    <input type="number" name="harga" class="form-control">
                    <?php echo form_error('harga'); ?>
                </div>

                <div class="form-group">
                    <label>Harga Denda / Hari</label>
                    <input type="text" name="denda" class="form-control">
                    <?php echo form_error('denda'); ?>
                </div>

                <div class="form-group group-btn">
                    <input type="submit" value="Simpan" class="btn-input-mobil">
                    <a href="<?php echo base_url() . 'admin/transaksi' ?>">Batal</a>
                </div>
            </form>
        </div>
    </div>
</section>