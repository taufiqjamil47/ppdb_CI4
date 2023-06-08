<?= $this->extend('layout/index/index'); ?>
<?= $this->section('content'); ?>
<form action="<?= base_url('Home/update/' . $tampilData['no_daftar']); ?>" method="POST">
    <div class="container mb-5">
        <div class="row blure">
            <div class="col-lg-6 mt-3">
                <div class="card sc">
                    <div class="card-header">
                        <h4>Edit Data Siswa</h4>
                    </div>
                    <div class="card-body">
                        <div class="row mb-3">
                            <label for="nama_siswa" class="col-sm-4 col-form-label">Nama Lengkap</label>
                            <div class="col-md-8">
                                <input type="text" value="<?= $tampilData['nama_siswa'] ?>" class="form-control" id="nama_siswa" name="nama_siswa">
                            </div>
                        </div>
                        <fieldset class="row mb-3">
                            <legend class="col-sm-4 col-form-label">Jenis Kelamin</legend>
                            <div class="col-md-8">
                                <div class="col-md-8">
                                    <input class="form-check-input" type="radio" name="jenis_kelamin" id="gridRadios1" value="Laki - laki" <?php if ($tampilData['jenis_kelamin'] == 'Laki - laki') echo 'checked'; ?>>
                                    <label class="form-check-label" for="gridRadios1">
                                        Laki - Laki
                                    </label>
                                </div>
                                <div class="col-md-8">
                                    <input class="form-check-input" type="radio" name="jenis_kelamin" id="gridRadios2" value="Perempuan" <?php if ($tampilData['jenis_kelamin'] == 'Perempuan') echo 'checked'; ?>>
                                    <label class="form-check-label" for="gridRadios2">
                                        Perempuan
                                    </label>
                                </div>
                            </div>
                        </fieldset>
                        <div class="row mb-3">
                            <label for="nisn" class="col-sm-4 col-form-label">NISN</label>
                            <div class="col-md-8">
                                <input type="text" maxlength="10" class="form-control" id="nisn" name="nisn" value="<?= $tampilData['nisn'] ?>">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="nik" class="col-sm-4 col-form-label">NIK</label>
                            <div class="col-md-8">
                                <input value="<?= $tampilData['nik'] ?>" maxlength="16" type="text" class="form-control" id="nik" name="nik">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="tempat_lahir" class="col-sm-4 col-form-label">Tempat Lahir</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" value="<?= $tampilData['tempat_lahir'] ?>">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="tanggal_lahir" class="col-sm-4 col-form-label">Tanggal Lahir</label>
                            <div class="col-md-8">
                                <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" value="<?= $tampilData['tanggal_lahir'] ?>">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="agama" class="col-sm-4 col-form-label">Agama</label>
                            <div class="col-md-8">
                                <select class="form-control" id="agama" name="agama" <?= $tampilData['agama']; ?>>
                                    <option>--</option>
                                    <option value="Islam" <?php if ($tampilData['agama'] == 'Islam') echo 'selected'; ?>>Islam</option>
                                    <option value="Kristen" <?php if ($tampilData['agama'] == 'Kristen') echo 'selected'; ?>>Kristen</option>
                                    <option value="Budha" <?php if ($tampilData['agama'] == 'Budha') echo 'selected'; ?>>Budha</option>
                                    <option value="Hindu" <?php if ($tampilData['agama'] == 'Hindu') echo 'selected'; ?>>Hindu</option>
                                    <option value="Kristek Katholik" <?php if ($tampilData['agama'] == 'Kristen Katholik') echo 'selected'; ?>>Kristen Katholik</option>
                                    <option value="Kristek Protestan" <?php if ($tampilData['agama'] == 'Kristen Protestan') echo 'selected'; ?>>Kristen Protestan</option>
                                    <option value="Atheis" <?php if ($tampilData['agama'] == 'Atheis') echo 'selected'; ?>>Atheis</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="alamat" class="col-sm-4 col-form-label">Alamat Rumah</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" id="alamat" name="alamat" value="<?= $tampilData['alamat'] ?>">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="rt" class="col-sm-4 col-form-label">RT</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" id="rt" name="rt" value="<?= $tampilData['rt'] ?>">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="rw" class="col-sm-4 col-form-label">RW</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" id="rw" name="rw" value="<?= $tampilData['rw'] ?>">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="desa" class="col-sm-4 col-form-label">Desa / Dusun</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" id="desa" name="desa" value="<?= $tampilData['desa'] ?>">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="kecamatan" class="col-sm-4 col-form-label">Kecamatan</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" id="kecamatan" name="kecamatan" value="<?= $tampilData['kecamatan'] ?>">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="asal_sd" class="col-sm-4 col-form-label">Asal Sekolah</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" id="asal_sd" name="asal_sd" value="<?= $tampilData['asal_sd'] ?>">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="anak_ke" class="col-sm-4 col-form-label">Anak ke</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" id="anak_ke" name="anak_ke" value="<?= $tampilData['anak_ke'] ?>">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="tinggi_badan" class="col-sm-4 col-form-label">Tinggi Badan</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" id="tinggi_badan" name="tinggi_badan" value="<?= $tampilData['tinggi_badan'] ?>">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="berat_badan" class="col-sm-4 col-form-label">Berat Badan</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" id="berat_badan" name="berat_badan" value="<?= $tampilData['berat_badan'] ?>">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="nomor_peserta" class="col-sm-4 col-form-label">Nomor Peserta Ujian</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" id="nomor_peserta" name="nomor_peserta" value="<?= $tampilData['nomor_peserta'] ?>">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 mt-3">
                <div class="card sc">
                    <div class="card-header">
                        <h4>Data Orang Tua</h4>
                    </div>
                    <div class="card-body">
                        <div class="row mb-3">
                            <label for="nama_ayah" class="col-sm-4 col-form-label">Nama Ayah</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" id="nama_ayah" name="nama_ayah" value="<?= $tampilData['nama_ayah'] ?>">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="tahun_lahir_ayah" class="col-sm-4 col-form-label">Tahun Lahir Ayah</label>
                            <div class="col-md-8">
                                <input type="text" placeholder="contoh: 1978" class="form-control" id="tahun_lahir_ayah" name="tahun_lahir_ayah" value="<?= $tampilData['tahun_lahir_ayah'] ?>">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="pendidikan_ayah" class="col-sm-4 col-form-label">Pendidikan Ayah</label>
                            <div class="col-md-8">
                                <input list="pendidikan" class="form-control" id="pendidikan_ayah" name="pendidikan_ayah" value="<?= $tampilData['pendidikan_ayah'] ?>">
                                <datalist id="pendidikan">
                                    <option value="Tidak Sekolah" <?php if ($tampilData['pendidikan_ayah'] == 'Tidak Sekolah') echo 'selected'; ?>>Tidak Sekolah</option>
                                    <option value="SD Sederajat" <?php if ($tampilData['pendidikan_ayah'] == 'SD Sederajat') echo 'selected'; ?>>SD/MI Sederajat</option>
                                    <option value="SMP Sederajat <?php if ($tampilData['pendidikan_ayah'] == 'SMP Sederajat') echo 'selected'; ?>">SMP/MTs Sederajat</option>
                                    <option value="SMA Sederajat" <?php if ($tampilData['pendidikan_ayah'] == 'SMA Sederajat') echo 'selected'; ?>>SMA/SMK Sederajat</option>
                                    <option value="D1" <?php if ($tampilData['pendidikan_ayah'] == 'D1') echo 'selected'; ?>>D1 (Diploma)</option>
                                    <option value="D2" <?php if ($tampilData['pendidikan_ayah'] == 'D2') echo 'selected'; ?>>D2 (Diploma)</option>
                                    <option value="D3" <?php if ($tampilData['pendidikan_ayah'] == 'D3') echo 'selected'; ?>>D3 (Diploma)</option>
                                    <option value="S1" <?php if ($tampilData['pendidikan_ayah'] == 'S1') echo 'selected'; ?>>S1 (Sarjana)</option>
                                    <option value="S2" <?php if ($tampilData['pendidikan_ayah'] == 'S2') echo 'selected'; ?>>S2 (Sarjana)</option>
                                    <option value="S3" <?php if ($tampilData['pendidikan_ayah'] == 'S3') echo 'selected'; ?>>S3 (Sarjana)</option>
                                </datalist>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="pekerjaan_ayah" class="col-sm-4 col-form-label">Pekerjaan Ayah</label>
                            <div class="col-md-8">
                                <input list="pekerjaanA" class="form-control" id="pekerjaan_ayah" name="pekerjaan_ayah" value="<?= $tampilData['pekerjaan_ayah'] ?>">
                                <datalist id="pekerjaanA">
                                    <option value="Tidak Bekerja" <?php if ($tampilData['pekerjaan_ayah'] == 'Tidak Bekerja') echo 'selected'; ?>>Tidak Bekerja</option>
                                    <option value="Nelayan" <?php if ($tampilData['pekerjaan_ayah'] == 'Nelayan') echo 'selected'; ?>>Nelayan</option>
                                    <option value="Petani" <?php if ($tampilData['pekerjaan_ayah'] == 'Petani') echo 'selected'; ?>>Petani</option>
                                    <option value="Peternak" <?php if ($tampilData['pekerjaan_ayah'] == 'Peternak') echo 'selected'; ?>>Peternak</option>
                                    <option value="PNS/TNI/Polri" <?php if ($tampilData['pekerjaan_ayah'] == 'PNS/TNI/Polri') echo 'selected'; ?>>PNS/TNI/Polri</option>
                                    <option value="Karyawan Swasta" <?php if ($tampilData['pekerjaan_ayah'] == 'Karyawan Swasta') echo 'selected'; ?>>Karyawan Swasta</option>
                                    <option value="Pedagang Kecil" <?php if ($tampilData['pekerjaan_ayah'] == 'Pedagang Kecil') echo 'selected'; ?>>Pedagang Kecil</option>
                                    <option value="Pedagang Besar" <?php if ($tampilData['pekerjaan_ayah'] == 'Pedagang Besar') echo 'selected'; ?>>Pedagang Besar</option>
                                    <option value="Wiraswasta" <?php if ($tampilData['pekerjaan_ayah'] == 'Wiraswasta') echo 'selected'; ?>>Wiraswasta</option>
                                    <option value="Buruh" <?php if ($tampilData['pekerjaan_ayah'] == 'Buruh') echo 'selected'; ?>>Buruh</option>
                                    <option value="Pensiunan" <?php if ($tampilData['pekerjaan_ayah'] == 'Pensiunan') echo 'selected'; ?>>Pensiunan</option>
                                </datalist>
                            </div>
                        </div>
                        <hr>
                        <div class="row mb-3">
                            <label for="nama_ibu" class="col-sm-4 col-form-label">Nama Ibu</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" id="nama_ibu" name="nama_ibu" value="<?= $tampilData['nama_ibu'] ?>">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="tahun_lahir_ibu" class="col-sm-4 col-form-label">Tahun Lahir Ibu</label>
                            <div class="col-md-8">
                                <input type="text" placeholder="contoh: 1978" class="form-control" id="tahun_lahir_ibu" name="tahun_lahir_ibu" value="<?= $tampilData['tahun_lahir_ibu'] ?>">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="pendidikan_ibu" class="col-sm-4 col-form-label">Pendidikan Ibu</label>
                            <div class="col-md-8">
                                <input list="pendidikan" class="form-control" id="pendidikan_ibu" name="pendidikan_ibu" value="<?= $tampilData['pendidikan_ibu'] ?>">
                                <datalist id="pendidikan">
                                    <option value="Tidak Sekolah" <?php if ($tampilData['pendidikan_ibu'] == 'Tidak Sekolah') echo 'selected'; ?>>Tidak Sekolah</option>
                                    <option value="SD Sederajat" <?php if ($tampilData['pendidikan_ibu'] == 'SD Sederajat') echo 'selected'; ?>>SD/MI Sederajat</option>
                                    <option value="SMP Sederajat <?php if ($tampilData['pendidikan_ibu'] == 'SMP Sederajat') echo 'selected'; ?>">SMP/MTs Sederajat</option>
                                    <option value="SMA Sederajat" <?php if ($tampilData['pendidikan_ibu'] == 'SMA Sederajat') echo 'selected'; ?>>SMA/SMK Sederajat</option>
                                    <option value="D1" <?php if ($tampilData['pendidikan_ibu'] == 'D1') echo 'selected'; ?>>D1 (Diploma)</option>
                                    <option value="D2" <?php if ($tampilData['pendidikan_ibu'] == 'D2') echo 'selected'; ?>>D2 (Diploma)</option>
                                    <option value="D3" <?php if ($tampilData['pendidikan_ibu'] == 'D3') echo 'selected'; ?>>D3 (Diploma)</option>
                                    <option value="S1" <?php if ($tampilData['pendidikan_ibu'] == 'S1') echo 'selected'; ?>>S1 (Sarjana)</option>
                                    <option value="S2" <?php if ($tampilData['pendidikan_ibu'] == 'S2') echo 'selected'; ?>>S2 (Sarjana)</option>
                                    <option value="S3" <?php if ($tampilData['pendidikan_ibu'] == 'S3') echo 'selected'; ?>>S3 (Sarjana)</option>
                                </datalist>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="pekerjaan_ibu" class="col-sm-4 col-form-label">Pekerjaan Ibu</label>
                            <div class="col-md-8">
                                <input list="pekerjaanI" class="form-control" id="pekerjaan_ibu" name="pekerjaan_ibu" value="<?= $tampilData['pekerjaan_ibu'] ?>">
                                <datalist id="pekerjaanI">
                                    <option value="Tidak Bekerja" <?php if ($tampilData['pekerjaan_ayah'] == 'Tidak Bekerja') echo 'selected'; ?>>Tidak Bekerja</option>
                                    <option value="Nelayan" <?php if ($tampilData['pekerjaan_ayah'] == 'Nelayan') echo 'selected'; ?>>Nelayan</option>
                                    <option value="Petani" <?php if ($tampilData['pekerjaan_ayah'] == 'Petani') echo 'selected'; ?>>Petani</option>
                                    <option value="Peternak" <?php if ($tampilData['pekerjaan_ayah'] == 'Peternak') echo 'selected'; ?>>Peternak</option>
                                    <option value="PNS/TNI/Polri" <?php if ($tampilData['pekerjaan_ayah'] == 'PNS/TNI/Polri') echo 'selected'; ?>>PNS/TNI/Polri</option>
                                    <option value="Karyawan Swasta" <?php if ($tampilData['pekerjaan_ayah'] == 'Karyawan Swasta') echo 'selected'; ?>>Karyawan Swasta</option>
                                    <option value="Pedagang Kecil" <?php if ($tampilData['pekerjaan_ayah'] == 'Pedagang Kecil') echo 'selected'; ?>>Pedagang Kecil</option>
                                    <option value="Pedagang Besar" <?php if ($tampilData['pekerjaan_ayah'] == 'Pedagang Besar') echo 'selected'; ?>>Pedagang Besar</option>
                                    <option value="Wiraswasta" <?php if ($tampilData['pekerjaan_ayah'] == 'Wiraswasta') echo 'selected'; ?>>Wiraswasta</option>
                                    <option value="Buruh" <?php if ($tampilData['pekerjaan_ayah'] == 'Buruh') echo 'selected'; ?>>Buruh</option>
                                    <option value="Pensiunan" <?php if ($tampilData['pekerjaan_ayah'] == 'Pensiunan') echo 'selected'; ?>>Pensiunan</option>
                                </datalist>
                            </div>
                        </div>
                        <hr>
                        <h4>Data Lain - lain</h4>
                        <div class="row mb-3">
                            <label for="hubungi" class="col-sm-4 col-form-label">Nomor Telp / WhatsApp</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" id="hubungi" name="hubungi" value="<?= $tampilData['hubungi'] ?>">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="pip" class="col-sm-4 col-form-label">PIP</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" id="pip" name="pip" value="<?= $tampilData['pip'] ?>">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="pkh" class="col-sm-4 col-form-label">PKH</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" id="pkh" name="pkh" value="<?= $tampilData['pkh'] ?>">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="kks" class="col-sm-4 col-form-label">KKS</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" id="kks" name="kks" value="<?= $tampilData['kks'] ?>">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="ukuran_baju" class="col-sm-4 col-form-label">Ukuran Baju</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" id="ukuran_baju" name="ukuran_baju" value="<?= $tampilData['ukuran_baju'] ?>">
                            </div>
                        </div>
                        <div class="col-2" style="margin-bottom: 10px;">
                            <a href="<?= base_url('Home'); ?>" class="btn btn-danger float-start">Kembali</a>
                        </div>
                        <button type="submit" class="btn btn-primary float-end">Update</button>
                        <!-- </form> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
<?= $this->endSection(); ?>