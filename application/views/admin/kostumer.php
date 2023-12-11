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
        </div>
    </div>

    <div class="container-tabel-content">
        <h3>Data Kostumer</h3>
        <div class="wraper-tabel-top">
            <div class="content-tabel-left">
                <a href="<?php echo base_url() . 'admin/kostumer_add'; ?>" class="btn-input-kostumer">
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
                    <p>Kostumer Baru</p>
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
                    <th style="width: 30px;">No</th>
                    <th style="width: 150px;">Nama</th>
                    <th style="width: 130px;">Jenis Kelamin</th>
                    <th style="width: 130px;">Alamat</th>
                    <th style="width: 150px;">HP</th>
                    <th style="width: 150px;">No. KTP</th>
                    <th style="width: 170px;"></th>
                </tr>
                <?php
                $no = 1;
                foreach ($kostumer as $k) {
                    ?>
                    <tr>
                        <td>
                            <?php echo $no++; ?>
                        </td>
                        <td>
                            <?php echo $k->kostumer_nama ?>
                        </td>
                        <td>
                            <?php echo $k->kostumer_jk ?>
                        </td>
                        <td>
                            <?php echo $k->kostumer_alamat ?>
                        </td>
                        <td>
                            <?php echo $k->kostumer_hp ?>
                        </td>
                        <td>
                            <?php echo $k->kostumer_ktp ?>
                        </td>
                        <td class="td-btn">
                            <a class="btn-action edit"
                                href="<?php echo base_url() . 'admin/kostumer_edit/' . $k->kostumer_id; ?>">
                                <svg xmlns="http://www.w3.org/2000/svg" width="19" height="19" viewBox="0 0 19 19"
                                    fill="none">
                                    <path
                                        d="M15.0322 1.59283L17.4072 3.96783L15.5967 5.77917L13.2217 3.40417L15.0322 1.59283ZM6.33337 12.6667H8.70837L14.4773 6.89779L12.1022 4.52279L6.33337 10.2917V12.6667Z"
                                        fill="white" />
                                    <path
                                        d="M15.0417 15.0417H6.45842C6.43783 15.0417 6.41646 15.0496 6.39588 15.0496C6.36975 15.0496 6.34363 15.0425 6.31671 15.0417H3.95833V3.95833H9.37888L10.9622 2.375H3.95833C3.08512 2.375 2.375 3.08433 2.375 3.95833V15.0417C2.375 15.9157 3.08512 16.625 3.95833 16.625H15.0417C15.4616 16.625 15.8643 16.4582 16.1613 16.1613C16.4582 15.8643 16.625 15.4616 16.625 15.0417V8.1795L15.0417 9.76283V15.0417Z"
                                        fill="white" />
                                </svg>
                                <p>Edit</p>
                            </a>
                            <a class="btn-action hapus"
                                href="<?php echo base_url() . 'admin/kostumer_hapus/' . $k->kostumer_id; ?>">
                                <svg xmlns="http://www.w3.org/2000/svg" width="19" height="19" viewBox="0 0 19 19"
                                    fill="none">
                                    <path
                                        d="M5.54163 16.625C5.10621 16.625 4.73333 16.4698 4.423 16.1595C4.11267 15.8492 3.95776 15.4766 3.95829 15.0417V4.75H3.16663V3.16667H7.12496V2.375H11.875V3.16667H15.8333V4.75H15.0416V15.0417C15.0416 15.4771 14.8865 15.85 14.5761 16.1603C14.2658 16.4706 13.8932 16.6255 13.4583 16.625H5.54163ZM7.12496 13.4583H8.70829V6.33333H7.12496V13.4583ZM10.2916 13.4583H11.875V6.33333H10.2916V13.4583Z"
                                        fill="white" />
                                </svg>
                                <p>Hapus</p>
                            </a>
                        </td>
                    </tr>
                    <?php
                }
                ?>
            </table>
        </div>
    </div>
</section>