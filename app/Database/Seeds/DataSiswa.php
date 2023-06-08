<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class DataSiswa extends Seeder
{
    public function run()
    {
        $data = [
            [
                'nik' => '3204312050070004',
                'nama_siswa' => 'PRABOWO SUPARDI',
                'jenis_kelamin' => 'Laki - Laki',
                'nisn' => '00041542',
                'tempat_lahir' => 'BANDUNG',
                'tanggal_lahir' => '2009/05/02',
                'agama' => 'Islam',
                'anak_ke' => '1',
                'asal_sd' => 'SDN MEKAR SARI 04',
                'tinggi_badan' => '140',
                'berat_badan' => '43',
                'alamat' => 'KP CARIK',
                'rt' => '3',
                'rw' => '6',
                'desa' => 'PADAMULYA',
                'kecamatan' => 'MAJALAYA',
                'nama_ayah' => 'ARIANTO',
                'tahun_lahir_ayah' => '1969',
                'pendidikan_ayah' => 'SD Sederajat',
                'pekerjaan_ayah' => 'BURUH HARIAN LEPAS',
                'nama_ibu' => 'KARTINI',
                'tahun_lahir_ibu' => '1976',
                'pendidikan_ibu' => 'SMP Sederajat',
                'pekerjaan_ibu' => 'TIDAK BEKERJA',
                'hubungi' => '082218763244',
                'data_lain_lain'
            ],
            [
                'nik' => '320431205080009',
                'nama_siswa' => 'PRABOWO SUPARDI',
                'jenis_kelamin' => 'Laki - Laki',
                'nisn' => '00041542',
                'tempat_lahir' => 'BANDUNG',
                'tanggal_lahir' => '2009/05/02',
                'agama' => 'Islam',
                'anak_ke' => '1',
                'asal_sd' => 'SDN MEKAR SARI 04',
                'tinggi_badan' => '140',
                'berat_badan' => '43',
                'alamat' => 'KP CARIK',
                'rt' => '3',
                'rw' => '6',
                'desa' => 'PADAMULYA',
                'kecamatan' => 'MAJALAYA',
                'nama_ayah' => 'ARIANTO',
                'tahun_lahir_ayah' => '1969',
                'pendidikan_ayah' => 'SD Sederajat',
                'pekerjaan_ayah' => 'BURUH HARIAN LEPAS',
                'nama_ibu' => 'KARTINI',
                'tahun_lahir_ibu' => '1976',
                'pendidikan_ibu' => 'SMP Sederajat',
                'pekerjaan_ibu' => 'TIDAK BEKERJA',
                'hubungi' => '082218763244',
                'data_lain_lain'
            ],
        ];

        $this->db->table('tb_siswa_baru')->insertBatch($data);
    }
}
