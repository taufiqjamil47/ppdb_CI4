<?= $this->extend('layout/index/index'); ?>
<?= $this->section('content'); ?>
<div class="container mt-3 mb-3">
    <div class="card">
        <div class="card-header">
            <h5 style="text-transform: uppercase;">Informasi Mendetail PPDB SMP KP 2 Majalaya</h5>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header bg-primary text-white">
                            Informasi Peserta Terdaftar
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6 justify-content-start">
                                    <div class="row">
                                        <div class="col-sm-8">
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
                                <div class="col-md-4 justify-content-center">
                                    Orang<br>
                                    Orang<br>
                                    Orang<br>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header bg-primary text-white">
                            Jumlah Siswa Sesuai Asal Sekolah
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-8 justify-content-start">
                                    <div class="row">
                                        <div class="col-sm-9">
                                            SDN Kubang
                                        </div>
                                        <div class="col-sm-3">
                                            : <?= $sdKubang; ?>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-9">
                                            SDN Pasirkukun 1
                                        </div>
                                        <div class="col-sm-3">
                                            : <?= $sdPasirkukun; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header">
                            Informasi Seputar Peserta Didik
                        </div>
                        <div class="card-body">
                            Data
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>