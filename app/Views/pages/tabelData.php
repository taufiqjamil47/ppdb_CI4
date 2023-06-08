<?= $this->extend('layout/index/index'); ?>
<?= $this->section('content'); ?>
<div class="card mt-3 mb-3">
    <table id="tabelData">
        <tr>
            <th id="seluruh">No</th>
            <th id="seluruh">Nama Siswa</th>
            <th id="seluruh">Jenis Kelamin</th>
            <th id="seluruh">NIK</th>
            <th id="seluruh">NISN</th>
            <th id="seluruh">Tempat Lahir</th>
            <th id="seluruh">Tanggal Lahir</th>
            <th id="seluruh">Anak Ke</th>
            <th id="seluruh">Asal Sekolah</th>
            <th id="seluruh">Tinggi Badan</th>
            <th id="seluruh">Berat Badan</th>
            <th id="seluruh">Alamat</th>
            <th id="seluruh">RT</th>
            <th id="seluruh">RW</th>
            <th id="seluruh">Desa</th>
            <th id="seluruh">Kecamatan</th>
            <th id="seluruh">Nama Ayah</th>
            <th id="seluruh">Nama Ibu</th>
            <th id="seluruh">Nomor Tlp/WA</th>
            <th id="seluruh">Penerima Bantuan</th>
        </tr>
        <?php
        // $i = 1 + (8 * ($currentPage - 1));
        $i = 1;
        foreach ($tampilData as $row) : ?>
            <tr>
                <td id="seluruh_kolom"><?= $i++; ?></td>
                <td id="seluruh_kolom"><?= $row['nama_siswa']; ?></td>
                <td id="seluruh_kolom"><?= $row['jenis_kelamin']; ?></td>
                <td id="seluruh_kolom"><?= $row['nik']; ?></td>
                <td id="seluruh_kolom"><?= $row['nisn']; ?></td>
                <td id="seluruh_kolom"><?= $row['tempat_lahir']; ?></td>
                <td id="seluruh_kolom"><?= $row['tanggal_lahir']; ?></td>
                <td id="seluruh_kolom"><?= $row['anak_ke']; ?></td>
                <td id="seluruh_kolom"><?= $row['asal_sd']; ?></td>
                <td id="seluruh_kolom"><?= $row['tinggi_badan']; ?></td>
                <td id="seluruh_kolom"><?= $row['berat_badan']; ?></td>
                <td id="seluruh_kolom"><?= $row['alamat']; ?></td>
                <td id="seluruh_kolom"><?= $row['rt']; ?></td>
                <td id="seluruh_kolom"><?= $row['rw']; ?></td>
                <td id="seluruh_kolom"><?= $row['desa']; ?></td>
                <td id="seluruh_kolom"><?= $row['kecamatan']; ?></td>
                <td id="seluruh_kolom"><?= $row['nama_ayah']; ?></td>
                <td id="seluruh_kolom"><?= $row['nama_ibu']; ?></td>
                <td id="seluruh_kolom"><?= $row['hubungi']; ?></td>
                <td id="seluruh_kolom">
                    <?php
                    if (!empty($row['pip']) || !empty($row['pkh']) || !empty($row['kks'])) {
                        echo "YA";
                    } else {
                        echo "TIDAK";
                    }
                    ?>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</div>
<?= $this->endSection(); ?>