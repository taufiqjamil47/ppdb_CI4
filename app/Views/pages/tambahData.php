<?= $this->extend('layout/index/index'); ?>
<?= $this->section('content'); ?>
<form action="<?= base_url('simpan-data'); ?>" method="POST">
    <div class="container mb-5">
        <div class="row">
            <div class="col-lg-6 mt-3">
                <div class="card">
                    <div class="card-header">
                        <h4>Data Siswa</h4>
                    </div>
                    <div class="card-body">
                        <div class="row mb-3">
                            <label for="nama_siswa" class="col-sm-4 col-form-label">Nama Lengkap <b>*</b></label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" id="nama_siswa" name="nama_siswa" placeholder="GINA RIZKI" required value="<?= old('nama_siswa') ?>">
                            </div>
                        </div>
                        <fieldset class="row mb-3">
                            <legend class="col-sm-4 col-form-label">Jenis Kelamin</legend>
                            <div class="col-md-8">
                                <div class="col-md-8">
                                    <input class="form-check-input" type="radio" name="jenis_kelamin" id="gridRadios1" value="Laki - laki" <?php if (old('jenis_kelamin') == 'Laki - laki') echo 'checked'; ?>>
                                    <label class="form-check-label" for="gridRadios1">
                                        Laki - Laki
                                    </label>
                                </div>
                                <div class="col-md-8">
                                    <input class="form-check-input" type="radio" name="jenis_kelamin" id="gridRadios2" value="Perempuan" <?php if (old('jenis_kelamin') == 'Perempuan') echo 'checked'; ?>>
                                    <label class="form-check-label" for="gridRadios2">
                                        Perempuan
                                    </label>
                                </div>
                            </div>
                        </fieldset>
                        <div class="row mb-3">
                            <label for="nisn" class="col-sm-4 col-form-label">NISN <b>*</b></label>
                            <div class="col-md-8">
                                <input type="text" size="10" maxlength="10" class="form-control <?= ($status->hasError('nisn')) ? 'is-invalid' : ''; ?>" id="nisn" name="nisn" placeholder="0094xxxxxx" value="<?= old('nisn') ?>" required>
                                <div class="invalid-feedback">
                                    <?= $status->getError('nisn'); ?>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="nik" class="col-sm-4 col-form-label">NIK <b>*</b></label>
                            <div class="col-md-8">
                                <input type="text" size="16" maxlength="16" class="form-control <?= ($status->hasError('nik')) ? 'is-invalid' : ''; ?>" id="nik" name="nik" placeholder="320433xxxxxxxxxx" value="<?= old('nik') ?>" required>
                                <div class="invalid-feedback">
                                    <?= $status->getError('nik'); ?>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="tempat_lahir" class="col-sm-4 col-form-label">Tempat Lahir <b>*</b></label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" placeholder="contoh: KARAWANG" value="<?= old('tempat_lahir') ?>" required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="tanggal_lahir" class="col-sm-4 col-form-label">Tanggal Lahir</label>
                            <div class="col-md-8">
                                <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" value="<?= old('tanggal_lahir') ?>">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="agama_" class="col-sm-4 col-form-label">Agama</label>
                            <div class="col-md-8">
                                <input list="agama" class="form-control" id="agama_" name="agama" value="<?= old('agama') ?>">
                                <datalist id="agama">
                                    <option>--</option>
                                    <option value="Islam">Islam</option>
                                    <option value="Kristen">Kristen</option>
                                    <option value="Budha">Budha</option>
                                    <option value="Hindu">Hindu</option>
                                    <option value="Kristen Katholik">Kristen Katholik</option>
                                    <option value="Kristen Protestan">Kristen Protestan</option>
                                    <option value="Atheis">Atheis</option>
                                </datalist>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="alamat" class="col-sm-4 col-form-label">Alamat Rumah <b>*</b></label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" id="alamat" name="alamat" value="<?= old('alamat') ?>" required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="rt" class="col-sm-4 col-form-label">RT <b>*</b></label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" id="rt" name="rt" value="<?= old('rt') ?>" required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="rw" class="col-sm-4 col-form-label">RW <b>*</b></label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" id="rw" name="rw" value="<?= old('rw') ?>" required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="desa" class="col-sm-4 col-form-label">Desa / Dusun <b>*</b></label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" id="desa" name="desa" value="<?= old('desa') ?>" required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="kecamatan" class="col-sm-4 col-form-label">Kecamatan <b>*</b></label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" id="kecamatan" name="kecamatan" value="<?= old('kecamatan') ?>" required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="asal_sd" class="col-sm-4 col-form-label">Asal Sekolah <b>*</b></label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" id="asal_sd" name="asal_sd" placeholder="SD xxxxxx" required value="<?= old('asal_sd') ?>">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="anak_ke" class="col-sm-4 col-form-label">Anak ke</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" id="anak_ke" name="anak_ke" value="<?= old('anak_ke') ?>">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="tinggi_badan" class="col-sm-4 col-form-label">Tinggi Badan <b>*</b></label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" id="tinggi_badan" name="tinggi_badan" value="<?= old('tinggi_badan') ?>" required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="berat_badan" class="col-sm-4 col-form-label">Berat Badan <b>*</b></label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" id="berat_badan" name="berat_badan" value="<?= old('berat_badan') ?>" required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="nomor_peserta" class="col-sm-4 col-form-label">Nomor Peserta Ujian</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" id="nomor_peserta" name="nomor_peserta" value="<?= old('nomor_peserta') ?>">
                            </div>
                        </div>

                        <!-- <div class="col-2" style="margin-bottom: 10px;">
                            <a href="#" class="btn btn-danger float-start">Kembali</a>
                        </div>
                        <button type="submit" class="btn btn-primary float-end">Tambah</button> -->
                        <!-- </form> -->
                    </div>
                </div>
            </div>
            <div class="col-lg-6 mt-3">
                <div class="card">
                    <div class="card-header">
                        <h4>Data Orang Tua</h4>
                    </div>
                    <div class="card-body">
                        <!-- <form action="" method="POST"> -->
                        <div class="row mb-3">
                            <label for="nama_ayah" class="col-sm-4 col-form-label">Nama Ayah <b>*</b></label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" id="nama_ayah" name="nama_ayah" value="<?= old('nama_ayah') ?>" required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="tahun_lahir_ayah" class="col-sm-4 col-form-label">Tahun Lahir Ayah</label>
                            <div class="col-md-8">
                                <input type="text" placeholder="contoh: 1978" class="form-control" id="tahun_lahir_ayah" value="<?= old('tahun_lahir_ayah') ?>" name="tahun_lahir_ayah">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="pendidikan_ayah" class="col-sm-4 col-form-label">Pendidikan Ayah</label>
                            <div class="col-md-8">
                                <input list="pendidikan" class="form-control" id="pendidikan_ayah" name="pendidikan_ayah" value="<?= old('pendidikan_ayah') ?>">
                                <datalist id="pendidikan">
                                    <option value="Tidak Sekolah">Tidak Sekolah</option>
                                    <option value="SD Sederajat">SD/MI Sederajat</option>
                                    <option value="SMP Sederajat">SMP/MTs Sederajat</option>
                                    <option value="SMA Sederajat">SMA/SMK Sederajat</option>

                                    <option value="D1">D1 (Diploma)</option>
                                    <option value="D2">D2 (Diploma)</option>
                                    <option value="D3">D3 (Diploma)</option>


                                    <option value="S1">S1 (Sarjana)</option>
                                    <option value="S2">S2 (Sarjana)</option>
                                    <option value="S3">S3 (Sarjana)</option>
                                </datalist>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="pekerjaan_ayah" class="col-sm-4 col-form-label">Pekerjaan Ayah</label>
                            <div class="col-md-8">
                                <input list="pekerjaanA" class="form-control" id="pekerjaan_ayah" name="pekerjaan_ayah" value="<?= old('pekerjaan_ayah') ?>">
                                <datalist id="pekerjaanA">
                                    <option value="Tidak Bekerja">Tidak Bekerja</option>
                                    <option value="Nelayan">Nelayan</option>
                                    <option value="Petani">Petani</option>
                                    <option value="Peternak">Peternak</option>
                                    <option value="PNS/TNI/Polri">PNS/TNI/Polri</option>
                                    <option value="Karyawan Swasta">Karyawan Swasta</option>
                                    <option value="Pedagang Kecil">Pedagang Kecil</option>
                                    <option value="Pedagang Besar">Pedagang Besar</option>
                                    <option value="Wiraswasta">Wiraswasta</option>
                                    <option value="Buruh">Buruh</option>
                                    <option value="Pensiunan">Pensiunan</option>
                                </datalist>
                            </div>
                        </div>
                        <hr>
                        <div class="row mb-3">
                            <label for="nama_ibu" class="col-sm-4 col-form-label">Nama Ibu <b>*</b></label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" id="nama_ibu" name="nama_ibu" required value="<?= old('nama_ibu') ?>">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="tahun_lahir_ibu" class="col-sm-4 col-form-label">Tahun Lahir Ibu</label>
                            <div class="col-md-8">
                                <input type="text" placeholder="contoh: 1978" class="form-control" id="tahun_lahir_ibu" name="tahun_lahir_ibu" value="<?= old('tahun_lahir_ibu') ?>">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="pendidikan_ibu" class="col-sm-4 col-form-label">Pendidikan Ibu</label>
                            <div class="col-md-8">
                                <input list="pendidikan" class="form-control" id="pendidikan_ibu" name="pendidikan_ibu" value="<?= old('pendidikan_ibu') ?>">
                                <datalist id="pendidikan">
                                    <option value="Tidak Sekolah">Tidak Sekolah</option>
                                    <option value="SD Sederajat">SD/MI Sederajat</option>
                                    <option value="SMP Sederajat">SMP/MTs Sederajat</option>
                                    <option value="SMA Sederajat">SMA/SMK Sederajat</option>

                                    <option value="D1">D1 (Diploma)</option>
                                    <option value="D2">D2 (Diploma)</option>
                                    <option value="D3">D3 (Diploma)</option>


                                    <option value="S1">S1 (Sarjana)</option>
                                    <option value="S2">S2 (Sarjana)</option>
                                    <option value="S3">S3 (Sarjana)</option>
                                </datalist>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="pekerjaan_ibu" class="col-sm-4 col-form-label">Pekerjaan Ibu</label>
                            <div class="col-md-8">
                                <input list="pekerjaanI" class="form-control" id="pekerjaan_ibu" name="pekerjaan_ibu" value="<?= old('pekerjaan_ibu') ?>">
                                <datalist id="pekerjaanI">
                                    <option value="Tidak Bekerja">Tidak Bekerja</option>
                                    <option value="Nelayan">Nelayan</option>
                                    <option value="Petani">Petani</option>
                                    <option value="Peternak">Peternak</option>
                                    <option value="PNS/TNI/Polri">PNS/TNI/Polri</option>
                                    <option value="Karyawan Swasta">Karyawan Swasta</option>
                                    <option value="Pedagang Kecil">Pedagang Kecil</option>
                                    <option value="Pedagang Besar">Pedagang Besar</option>
                                    <option value="Wiraswasta">Wiraswasta</option>
                                    <option value="Buruh">Buruh</option>
                                    <option value="Pensiunan">Pensiunan</option>
                                </datalist>
                            </div>
                        </div>
                        <hr>
                        <h4>Data Lain - lain</h4>
                        <div class="row mb-3">
                            <label for="hubungi" class="col-sm-4 col-form-label">Nomor Telp / WhatsApp <b>*</b></label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" id="hubungi" name="hubungi" required value="<?= old('hubungi') ?>">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="pip" class="col-sm-4 col-form-label">PIP</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" id="pip" name="pip" value="<?= old('pip') ?>">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="pkh" class="col-sm-4 col-form-label">PKH</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" id="pkh" name="pkh" value="<?= old('pkh') ?>">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="kks" class="col-sm-4 col-form-label">KKS</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" id="kks" name="kks" value="<?= old('kks') ?>">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="ukuran_baju" class="col-sm-4 col-form-label">Ukuran Baju</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" id="ukuran_baju" name="ukuran_baju" value="<?= old('ukuran_baju') ?>">
                            </div>
                        </div>
                        <div class="col-2" style="margin-bottom: 10px;">
                            <a href="<?= base_url('Home'); ?>" class="btn btn-danger float-start">Kembali</a>
                        </div>
                        <button type="submit" class="btn btn-primary float-end">Tambah</button>
                        <!-- </form> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
<?= $this->endSection(); ?>