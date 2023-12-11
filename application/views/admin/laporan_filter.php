<!-- main content start -->
<section class="main-content">
    <div class="page-location">
        <div class="page-left">
            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 32 32">
                <path fill="currentColor" d="M10 18h8v2h-8zm0-5h12v2H10zm0 10h5v2h-5z" />
                <path fill="currentColor"
                    d="M25 5h-3V4a2 2 0 0 0-2-2h-8a2 2 0 0 0-2 2v1H7a2 2 0 0 0-2 2v21a2 2 0 0 0 2 2h18a2 2 0 0 0 2-2V7a2 2 0 0 0-2-2ZM12 4h8v4h-8Zm13 24H7V7h3v3h12V7h3Z" />
            </svg>
            <span>Laporan</span>
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
            <span>Laporan</span>
        </div>
    </div>

    <div class="container-tabel-content">
        <h3>Laporan</h3>

        <div class="form-input-mobil">
            <form method="post" action="<?php echo base_url() . 'admin/laporan' ?>">
                <div class="form-group">
                    <label>Dari Tanggal</label>
                    <input type="date" name="dari" value="<?php echo

                        set_value('dari'); ?>" class="form-control">
                    <?php echo form_error('dari'); ?>
                </div>

                <div class="form-group">
                    <label>Sampai Tanggal</label>
                    <input type="date" name="sampai" value="<?php echo

                        set_value('sampai'); ?>" class="form-control">
                    <?php echo form_error('sampai'); ?>
                </div>

                <div class="form-group">
                    <input type="submit" value="Cari" class="btn-input-mobil">
                </div>
            </form>

            <div class="btn-group">
                <a class="btn-input-cetak"
                    href="<?php echo
                        base_url() . 'admin/laporan_pdf/?dari=' . set_value('dari') . '&sampai=' . set_value('sampai') ?>">
                    Cetak PDF</a>

                <a class="btn-input-print"
                    href="<?php echo
                        base_url() . 'admin/laporan_print/?dari=' . set_value('dari') . '&sampai=' . set_value('sampai') ?>">
                    Print</a>
            </div>
            <br>
            <br>
            <div class="container-tabel">
                <table>
                    <tr>
                        <th class="th-trns" style="width: 50px;">No</th>
                        <th class="th-trns" style="width: 150px;">Tanggal</th>
                        <th class="th-trns" style="width: 130px;">Kostumer</th>
                        <th class="th-trns" style="width: 130px;">Mobil</th>
                        <th class="th-trns" style="width: 100px;">Tgl. Pinjam</th>
                        <th class="th-trns" style="width: 150px;">Tgl. Kembali</th>
                        <th class="th-trns" style="width: 300px;">Harga</th>
                        <th class="th-trns" style="width: 130px;">Denda / Hari</th>
                        <th class="th-trns" style="width: 130px;">Tgl. Dikembalikan</th>
                        <th class="th-trns" style="width: 130px;">Total Denda</th>
                        <th class="th-trns" style="width: 130px;">Status</th>
                        <th class="th-trns" style="width: 200px;"></th>
                    </tr>
                    <?php
                    $no = 1;
                    foreach ($laporan as $l) {
                        ?>
                        <tr>
                            <td class="td-trns">
                                <?php echo $no++; ?>
                            </td>
                            <td>
                                <?php echo date('d/m/Y', strtotime($l->transaksi_tgl)); ?>
                            </td>

                            <td>
                                <?php echo $l->kostumer_nama; ?>
                            </td>

                            <td>
                                <?php echo $l->mobil_merk; ?>
                            </td>

                            <td>
                                <?php echo date('d/m/Y', strtotime($l->transaksi_tgl_pinjam)); ?>
                            </td>

                            <td>
                                <?php echo date('d/m/Y', strtotime($l->transaksi_tgl_kembali)); ?>
                            </td>

                            <td>
                                <?php echo "Rp. " . number_format($l->transaksi_harga); ?>
                            </td>

                            <td>
                                <?php echo "Rp. " . number_format($l->transaksi_denda); ?>
                            </td>

                            <td>
                                <?php
                                if (
                                    $l->transaksi_tgldikembalikan == "0000-00-00"
                                ) {

                                    echo "-";
                                } else {
                                    echo date('d/m/Y', strtotime($l->transaksi_tgldikembalikan));
                                }
                                ?>
                            </td>
                            <td>
                                <?php echo "Rp. " . number_format($l->transaksi_totaldenda) . " ,-"; ?>
                            </td>

                            <td>
                                <?php
                                if ($l->transaksi_status == "1") {
                                    echo "Selesai";
                                } else {
                                    echo "-";
                                }
                                ?>
                            </td>
                        </tr>
                        <?php
                    }
                    ?>
                </table>
            </div>
        </div>
</section>