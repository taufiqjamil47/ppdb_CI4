<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelData extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'tb_siswa_baru';
    protected $primaryKey       = 'no_daftar';
    protected $allowedFields    = [
        'no_daftar',
        'nik',
        'nama_siswa',
        'jenis_kelamin',
        'nisn',
        'tempat_lahir',
        'tanggal_lahir',
        'agama',
        'anak_ke',
        'asal_sd',
        'tinggi_badan',
        'berat_badan',
        'alamat',
        'rt',
        'rw',
        'desa',
        'kecamatan',
        'nama_ayah',
        'tahun_lahir_ayah',
        'pendidikan_ayah',
        'pekerjaan_ayah',
        'nama_ibu',
        'tahun_lahir_ibu',
        'pendidikan_ibu',
        'pekerjaan_ibu',
        'hubungi',
        'data_lain_lain',
        'pip',
        'pkh',
        'kks',
        'ukuran_baju',
        'nomor_peserta'
    ];
    public function search($keyword)
    {
        return $this->table('tb_siswa_baru')
            ->like('nik', $keyword)
            ->orLike('nama_siswa', $keyword)
            ->orLike('nama_ayah', $keyword)
            ->orLike('nama_ibu', $keyword)
            ->orLike('asal_sd', $keyword)
            ->orLike('no_daftar', $keyword);
    }
    public function totalData()
    {
        return $this->table('tb_siswa_baru')->countAllResults();
    }
    public function jumlahSiswaSesuaiJenisKelamin($jk)
    {
        return $this->table('tb_siswa_baru')
            ->like('jenis_kelamin', $jk)
            ->countAllResults();
    }
    public function totalSd($sd)
    {
        return $this->table('tb_siswa_baru')
            ->like('asal_sd', $sd)
            ->countAllResults();
    }
    public function cekValidasiBerkas($cekData)
    {
        return $this->table('tb_siswa_baru')
            ->like('data_lain_lain', $cekData)
            ->countAllResults();
    }
}
