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
        </div>
    </div>

    <div class="container-tabel-content">
        <h3>Data Transaksi</h3>
        <div class="wraper-tabel-top">
            <div class="content-tabel-left">
                <a href="<?php echo base_url() . 'admin/transaksi_add'; ?>" class="btn-input-kostumer">
                    <svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" viewBox="0 0 21 21" fill="none">
                        <g clip-path="url(#clip0_21_801)">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M7.875 4.375C7.875 3.91087 8.05937 3.46575 8.38756 3.13756C8.71575 2.80937 9.16087 2.625 9.625 2.625H11.375C11.8391 2.625 12.2842 2.80937 12.6124 3.13756C12.9406 3.46575 13.125 3.91087 13.125 4.375V7.875H16.625C17.0891 7.875 17.5342 8.05937 17.8624 8.38756C18.1906 8.71575 18.375 9.16087 18.375 9.625V11.375C18.375 11.8391 18.1906 12.2842 17.8624 12.6124C17.5342 12.9406 17.0891 13.125 16.625 13.125H13.125V16.625C13.125 17.0891 12.9406 17.5342 12.6124 17.8624C12.2842 18.1906 11.8391 18.375 11.375 18.375H9.625C9.16087 18.375 8.71575 18.1906 8.38756 17.8624C8.05937 17.5342 7.875 17.0891 7.875 16.625V13.125H4.375C3.91087 13.125 3.46575 12.9406 3.13756 12.6124C2.80937 12.2842 2.625 11.8391 2.625 11.375V9.625C2.625 9.16087 2.80937 8.71575 3.13756 8.38756C3.46575 8.05937 3.91087 7.875 4.375 7.875H7.875V4.375Z"
                                fill="white" />
                        </g>
                        <defs>
                            <clipPath id="clip0_21_801">
                                <rect width="21" height="21" fill="white" />
                            </clipPath>
                        </defs>
                    </svg>
                    <p>Transaksi Baru</p>
                </a>

                <div class="wraper-label">
                    <label for="countData">Tampilkan</label>
                    <select id="countData" name="countData">
                        <option value="Tipe A">All</option>
                        <option value="Tipe B">10</option>
                        <option value="Tipe C">20</option>
                    </select>
                    <span>Data</span>
                </div>
            </div>

            <div class="content-tabel-right">
                <span>cari :</span>
                <input type="search" name="search">
            </div>
        </div>

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
                foreach ($transaksi as $t) {
                    ?>
                    <tr>
                        <td class="td-trns">
                            <?php echo $no++; ?>
                        </td>
                        <td class="td-trns">
                            <?php echo date('d/m/Y', strtotime($t->transaksi_tgl)); ?>
                        </td>
                        <td class="td-trns">
                            <?php echo $t->kostumer_nama; ?>
                        </td>

                        <td class="td-trns">
                            <?php echo $t->mobil_merk; ?>
                        </td>

                        <td class="td-trns">
                            <?php echo date('d/m/Y', strtotime($t->transaksi_tgl_pinjam)); ?>
                        </td>

                        <td class="td-trns">
                            <?php echo date('d/m/Y', strtotime($t->transaksi_tgl_kembali)); ?>
                        </td>
                        <td class="td-trns">
                            <?php echo "Rp. " . number_format($t->transaksi_harga); ?>
                        </td>
                        <td class="td-trns">
                            <?php echo "Rp. " . number_format($t->transaksi_denda); ?>
                        </td>
                        <td class="td-trns">
                            <?php
                            if (
                                $t->transaksi_tgldikembalikan == "0000-00-00"
                            ) {
                                echo "-";
                            } else {
                                echo date('d/m/Y', strtotime($t->transaksi_tgldikembalikan));
                            }
                            ?>
                        </td>

                        <td class="td-trns">
                            <?php echo "Rp. " . number_format($t->transaksi_totaldenda) . " ,-"; ?>
                        </td>

                        <td class="td-trns">
                            <?php
                            if ($t->transaksi_status == "1") {
                                echo "Selesai";
                            } else {
                                echo "-";
                            }
                            ?>
                        </td>

                        <td class="td-btn-transaksi">
                            <?php
                            if ($t->transaksi_status == "1") {
                                echo "-";
                            } else {
                                ?>
                                <div class="wraper-btn-trans">
                                    <a class="btn-action-transaksi selesaiTrns"
                                        href="<?php echo base_url() . 'admin/transaksi_selesai/' . $t->transaksi_id; ?>">
                                        Selesai
                                    </a>
                                </div>

                                <div>
                                    <a class="btn-action-transaksi batalkan"
                                        href="<?php echo base_url() . 'admin/transaksi_hapus/' . $t->transaksi_id; ?>">
                                        Batalkan
                                    </a>
                                </div>

                                <?php
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