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
            <span>Transaksi Selesai</span>
        </div>
    </div>

    <div class="container-tabel-content">
        <h3>Transaksi Selesai</h3>

        <div class="form-input-mobil">
            <?php foreach ($transaksi as $t) { ?>
                <form action="<?php echo base_url() . 'admin/transaksi_selesai_act' ?>" method="post">
                    <input type="hidden" name="id" value="<?php echo $t->transaksi_id ?>">
                    <input type="hidden" name="mobil" value="<?php echo $t->transaksi_mobil ?>">
                    <input type="hidden" name="tgl_kembali" value="<?php echo $t->transaksi_tgl_kembali ?>">
                    <input type="hidden" name="denda" value="<?php echo $t->transaksi_denda ?>">

                    <div class="form-group">
                        <label>Kostumer</label>
                        <select class="form-control" name="kostumer" disabled>
                            <option value="">-Pilih Kostumer-</option>
                            <?php foreach ($kostumer as $k) { ?>
                                <option <?php if ($t->transaksi_kostumer == $k->kostumer_id) {
                                    echo "selected='selected'";
                                } ?>
                                    value="<?php echo $k->kostumer_id; ?>">
                                    <?php echo $k->kostumer_nama; ?>
                                </option>

                            <?php } ?>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Mobil</label>
                        <select class="form-control" name="mobil" disabled>
                            <option value="">-Pilih Mobil-</option>
                            <?php foreach ($mobil as $m) { ?>
                                <option <?php if ($t->transaksi_mobil == $m->mobil_id) {
                                    echo "selected='selected'";
                                } ?>
                                    value="<?php echo $m->mobil_id; ?>">
                                    <?php echo $m->mobil_merk; ?>
                                </option>
                            <?php } ?>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Tanggal Pinjam</label>
                        <input class="form-control" type="date" name="tgl_pinjam"
                            value="<?php echo $t->transaksi_tgl_pinjam ?>" disabled>
                    </div>

                    <div class="form-group">
                        <label>Tanggal Kembali</label>
                        <input class="form-control" type="date" name="tgl_kembali"
                            value="<?php echo $t->transaksi_tgl_kembali ?>" disabled>
                    </div>

                    <div class="form-group">
                        <label>Harga</label>
                        <input class="form-control" type="number" name="harga" value="<?php echo $t->transaksi_harga ?>"
                            disabled>
                    </div>

                    <div class="form-group">
                        <label>Harga Denda / Hari</label><input class="form-control" type="text" name="denda"
                            value="<?php echo $t->transaksi_denda ?>" disabled>
                    </div>

                    <div class="form-group">
                        <label>Tanggal Dikembalikan Oleh Kostumer</label>
                        <input class="form-control" type="date" name="tgl_dikembalikan">
                        <?php echo form_error('tgl_dikembalikan'); ?>
                    </div>

                    <div class="form-group group-btn">
                        <input type="submit" value="Simpan" class="btn-input-mobil">
                    </div>
                </form>
            <?php } ?>
        </div>
    </div>
</section>