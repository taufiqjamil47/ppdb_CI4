<?= $this->extend('layout/index/index'); ?>
<?= $this->section('content'); ?>
<form action="<?= base_url('Home/detail/' . $detailSiswa['no_daftar']); ?>" method="POST">
    <div class="container mb-5">
        <div class="row">
            <div class="col-lg-6 mt-3">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title float-start"><?= $detailSiswa['nama_siswa'] ?></h5>
                        <h5 class="card-title float-end">Nomor Daftar [ <?= $detailSiswa['no_daftar']; ?> ]</h5>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <div class="row">
                                <div class="col-sm-4"> Nama Lengkap </div>
                                <div class="col-sm-1"> : </div>
                                <div class="col-sm-5"> <?= $detailSiswa['nama_siswa'] ?> </div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="row">
                                <div class="col-sm-4"> Jenis Kelamin </div>
                                <div class="col-sm-1"> : </div>
                                <div class="col-sm-5"> <?= $detailSiswa['jenis_kelamin'] ?> </div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="row">
                                <div class="col-sm-4"> NIK </div>
                                <div class="col-sm-1"> : </div>
                                <div class="col-sm-5"> <?= $detailSiswa['nik'] ?> </div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="row">
                                <div class="col-sm-4"> Tempat Lahir</div>
                                <div class="col-sm-1"> : </div>
                                <div class="col-sm-5"><?= $detailSiswa['tempat_lahir'] ?></div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="row">
                                <div class="col-sm-4"> Tanggal Lahir</div>
                                <div class="col-sm-1"> :</div>
                                <div class="col-sm-5"> <?= $detailSiswa['tanggal_lahir'] ?></div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="row">
                                <div class="col-sm-4"> Agama</div>
                                <div class="col-sm-1"> :</div>
                                <div class="col-sm-5"> <?= $detailSiswa['agama'] ?></div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="row">
                                <div class="col-sm-4"> Anak ke </div>
                                <div class="col-sm-1"> - </div>
                                <div class="col-sm-5"> <?= $detailSiswa['anak_ke'] ?></div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="row">
                                <div class="col-sm-4"> Asal Sekolah</div>
                                <div class="col-sm-1"> : </div>
                                <div class="col-sm-5"><?= $detailSiswa['asal_sd'] ?></div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="row">
                                <div class="col-sm-4"> Tinggi Badan</div>
                                <div class="col-sm-1"> : </div>
                                <div class="col-sm-5"><?= $detailSiswa['tinggi_badan'] ?> cm</div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="row">
                                <div class="col-sm-4"> Berat Badan</div>
                                <div class="col-sm-1"> : </div>
                                <div class="col-sm-5"><?= $detailSiswa['berat_badan'] ?> kg</div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="row">
                                <div class="col-sm-4"> Tempat Tinggal</div>
                                <div class="col-sm-1"> : </div>
                                <div class="col-sm-5"><?= $detailSiswa['alamat'] ?>, RT <?= $detailSiswa['rt'] ?> / RW <?= $detailSiswa['rw'] ?>, DESA.<?= $detailSiswa['desa'] ?>, KEC.<?= $detailSiswa['kecamatan'] ?></div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="row">
                                <div class="col-sm-4"> Ukuran Baju</div>
                                <div class="col-sm-1"> : </div>
                                <div class="col-sm-5"><b><?= $detailSiswa['ukuran_baju'] ?></b></div>
                            </div>
                        </li>
                    </ul>
                    <div class="card-body">
                        <a href="<?= base_url('Home'); ?>" class="btn btn-danger float-start">Kembali</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 mt-3">
                <div class="card">
                    <div class="card-header">
                        <p class="card-text">Siswa dengan nama <?= $detailSiswa['nama_siswa'] ?>, telah tercatat sebagai Siswa Baru <b>SMP KP 2 Majalaya, Tahun Pelajaran 2022 - 2023</b></p>
                    </div>
                    <div class="card-body">
                        <?php
                        if ($detailSiswa['data_lain_lain'] == 'ya') {
                            echo
                            "<p>
                                Status pendaftaran dinyatakan telah <b> Memenuhi Syarat</b>, sesuai dengan syarat dan ketentuan
                                pendaftar baru yang telah disediakan oleh pihak panitia PPDB Baik berupa online maupun offline.
                                Siswa diwajibkan mematuhi protokol kesehatan didalam dan di luar lingkungan sekolah.
                            </p>";
                        } else {
                            echo "
                            <p>
                                Status pendaftaran dinyatakan <b> Belum Memenuhi Syarat</b>, sesuai dengan syarat dan ketentuan
                                pendaftar baru yang telah disediakan oleh pihak panitia PPDB Baik berupa online maupun offline.
                                Siswa diwajibkan mematuhi protokol kesehatan didalam dan di luar lingkungan sekolah.
                            </p>";
                        }
                        ?>
                    </div>
                    <div class="card-body d-flex justify-content-center pb-4">
                        <img src="<?= base_url(); ?>/assets/image/<?= ($detailSiswa['data_lain_lain'] == 'ya') ? 'received.png' : 'invalid.png'; ?>" style="width: 13rem;">
                    </div>
                    <div class="card-body">
                        <p>
                            <b>
                                Pemberitahuan lebih lanjut
                            </b>
                            akan diumumkan di group <b>WhatsApp</b> sesuai dengan nomor yang telah di daftarkan oleh orang tua atau saudara
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
<?= $this->endSection(); ?>