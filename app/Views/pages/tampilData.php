<?= $this->extend('layout/index/index'); ?>
<?= $this->section('content'); ?>
<div class="p-2 mb-5">
    <div class="row">
        <div class="col-md-4 mb-2">
            <div class="card border-left-primary h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs text-primary text-uppercase mb-1">
                                <b>Jumlah Peserta Baru</b>
                            </div>
                            <div class="mb-0 font-weight-bold text-gray-800">
                                <div class="row">
                                    <div class="col-md-6 justify-content-start">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                Terdaftar <br>
                                                Laki - laki <br>
                                                Perempuan
                                            </div>
                                            <div class="col-sm-4">
                                                : <?= $totalData; ?><br>
                                                : <?= $jenisKelaminLaki; ?><br>
                                                : <?= $jenisKelaminPerempuan; ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 justify-content-center">
                                        Orang<br>
                                        Orang<br>
                                        Orang<br>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-2">
            <div class="card border-left-primary h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs text-primary text-uppercase mb-1">
                                <b>Status Kelengkapan Formulir Siswa Baru</b>
                            </div>
                            <div class="mb-0 font-weight-bold text-gray-800">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="row">
                                            <div class="col-sm-8">
                                                <label class="text-success">Lengkap </label> <br>
                                                <label class="text-danger">Belum Lengkap</label>
                                            </div>
                                            <div class="col-sm-4">
                                                <label class="text-success"> : <?= $validData; ?></label> <br>
                                                <label class="text-danger"> : <?= $invalidData; ?></label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="text-success">Orang </label> <br>
                                        <label class="text-danger"> Orang </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-2">
            <div class="row">
                <div class="col">
                    <?php
                    if (session()->getFlashdata('status')) {
                        echo "<div class='alert alert-success' role='alert' id='popup'>" . session()->getFlashdata('status') . "</div>";
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 mt-3">
            <!-- <?php
                    // if (session()->getFlashdata('status')) {
                    //     echo "<div class='alert alert-success' role='alert'>" . session()->getFlashdata('status') . "</div>";
                    // }
                    ?> -->
            <div class="card mb-4">
                <div class="card-header">
                    <h4 style="text-transform: uppercase;">Daftar Peserta Didik Baru</h4>
                </div>
                <div class="card-body">
                    <div class="mb-3">
                        <a href="<?= base_url('form-tambah-data'); ?>" class="btn btn-primary">Tambah Data</a>
                        <form class="d-flex col-7 float-end" method="POST" action="">
                            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="keyword" value="<?= $orang ?>">
                            <button class="btn btn-outline-success" type="submit" name="submit">Cari</button>
                        </form>
                    </div>
                    <div class="scrollt">
                        <table class="table table-bordered table-hover">
                            <thead class="text-center">
                                <tr>
                                    <th>No</th>
                                    <th>No Daftar</th>
                                    <th>NIK</th>
                                    <th>Nama Siswa</th>
                                    <th>Asal Sekolah</th>
                                    <th>Alamat</th>
                                    <th>Nama Ayah</th>
                                    <th>Nama Ibu</th>
                                    <th>Penerima Bantuan</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <?php
                            $i = 1 + (50 * ($currentPage - 1));
                            foreach ($tampilData as $row) : ?>
                                <tr>
                                    <td><?= $i++; ?></td>
                                    <td class="text-center">
                                        <span class="d-inline-block" tabindex="0" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-content="<?= ($row['data_lain_lain'] == 'tidak' || empty($row['data_lain_lain'])) ? 'siswa belum melakukan ferifikasi data, segera lengkapi berkas untuk melakukan ferifikasi' : 'Siswa sudah melakukan ferifikasi'; ?>">
                                            <div class="<?= ($row['data_lain_lain'] == 'tidak' || empty($row['data_lain_lain'])) ? 'no-daftar-inval' : 'no-daftar-val'; ?>">
                                                <b><?= $row['no_daftar'] ?></b>
                                            </div>
                                        </span>
                                    </td>
                                    <td class="<?= ($row['data_lain_lain'] == 'tidak' || empty($row['data_lain_lain'])) ? 'text-danger' : ''; ?>"><?= $row['nik']; ?></td>
                                    <td>
                                        <a href="<?= base_url('Home/detail/' . $row['no_daftar']) ?>">
                                            <span class="d-inline-block" tabindex="0" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-content="Detail <?= $row['nama_siswa']; ?>">
                                                <div class="daftar">
                                                    <?= $row['nama_siswa']; ?>
                                                </div>
                                            </span>
                                        </a>
                                    </td>
                                    <td><?= $row['asal_sd']; ?></td>
                                    <td><?= $row['alamat']; ?></td>
                                    <td><?= $row['nama_ayah']; ?></td>
                                    <td><?= $row['nama_ibu']; ?></td>
                                    <td>
                                        <?php
                                        if (!empty($row['pip']) || !empty($row['pkh']) || !empty($row['kks'])) {
                                            echo "YA";
                                        } else {
                                            echo "TIDAK";
                                        }
                                        ?>
                                    </td>
                                    <td class="text-center">
                                        <a href="<?= base_url('Home/edit/' . $row['no_daftar']) ?>" class="btn btn-warning" style="margin: 2px;">Edit</a>
                                        <a href="<?= base_url('Home/delete/' . $row['no_daftar']) ?>" class="btn btn-danger" style="margin: 2px;">Hapus</a>
                                        <!-- <?php if ($row['data_lain_lain'] == 'tidak') { ?>
                                            <a href="<?= base_url('Home/ferifikasi/' . $row['no_daftar']) ?>" class="btn btn-primary" style="margin: 2px;" tabindex="0" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-content="Dengan mengklik Ferifikasi, anda telah menyetujui siswa <?= $row['nama_siswa'] ?> telah melengkapi persyaratan!">Ferifikasi*</a>
                                        <?php } ?> -->
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </table>
                    </div>
                    <div class="row mt-5">
                        <?= $pager->links('tb_siswa_baru', 'panduan'); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>