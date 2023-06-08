<?php

namespace App\Controllers;

use App\Models\ModelData;

class Home extends BaseController
{
    public function index()
    {
        $modeldata = new ModelData();
        $currentPage = $this->request->getVar('page_tb_siswa_baru') ? $this->request->getVar('page_tb_siswa_baru') : 1;
        $keyword = $this->request->getVar('keyword');
        if ($keyword) {
            $orang = $modeldata->search($keyword);
        } else {
            $orang = $modeldata;
        }
        $data = [
            'tampilData' => $orang->orderBy('no_daftar', 'DESC')->paginate(50, 'tb_siswa_baru'),
            'pager' => $modeldata->pager,
            'currentPage' => $currentPage,
            'orang' => $keyword,
            'title' => 'Page | Data Siswa',
            'currentLink' => 'Home',
            'totalData' => $modeldata->totalData(),
            'jenisKelaminPerempuan' => $modeldata->jumlahSiswaSesuaiJenisKelamin('Perempuan'),
            'jenisKelaminLaki' => $modeldata->jumlahSiswaSesuaiJenisKelamin('Laki - laki'),
            'validData' => $modeldata->cekValidasiBerkas('ya'),
            'invalidData' => $modeldata->cekValidasiBerkas('tidak')

        ];
        return view('pages/tampilData', $data);
    }

    public function form_data()
    {
        session();
        $data = [
            'title' => 'Page | Tambah Data Siswa',
            'status' => \Config\Services::validation(),
            'currentLink' => 'Home'
        ];
        return view('pages/tambahData', $data);
    }

    public function simpan()
    {
        session();
        $modeldata = new ModelData();
        if (!$this->validate([
            'nik' => [
                'rules' => 'min_length[15]|max_length[16]|is_unique[tb_siswa_baru.nik]',
                'errors' => [
                    'max_length' => '{field} lebih dari 16 angka!',
                    'min_length' => '{field} harus 16 angkas!',
                    'is_unique' => '{field} telah terdaftar!'
                ]
            ],
            'nisn' => [
                'rules' => 'min_length[9]|max_length[10]',
                'errors' => [
                    'max_length' => '{field} lebih dari 10 angka!',
                    'min_length' => '{field} harus 10 angka!',
                ]
            ],
        ])) {
            $validation = \Config\Services::validation();
            return redirect()->to(base_url('form-tambah-data'))->withInput()->with('status', $validation);
        } else {
            $data = [
                'nik' => $this->request->getPost('nik'),
                'nama_siswa' => strtoupper($this->request->getPost('nama_siswa')),
                'jenis_kelamin' => $this->request->getPost('jenis_kelamin'),
                'nisn' => $this->request->getPost('nisn'),
                'tempat_lahir' => strtoupper($this->request->getPost('tempat_lahir')),
                'tanggal_lahir' => $this->request->getPost('tanggal_lahir'),
                'agama' => $this->request->getPost('agama'),
                'anak_ke' => $this->request->getPost('anak_ke'),
                'asal_sd' => strtoupper($this->request->getPost('asal_sd')),
                'tinggi_badan' => $this->request->getPost('tinggi_badan'),
                'berat_badan' => $this->request->getPost('berat_badan'),
                'alamat' => strtoupper($this->request->getPost('alamat')),
                'rt' => $this->request->getPost('rt'),
                'rw' => $this->request->getPost('rw'),
                'desa' => strtoupper($this->request->getPost('desa')),
                'kecamatan' => strtoupper($this->request->getPost('kecamatan')),
                'nama_ayah' => strtoupper($this->request->getPost('nama_ayah')),
                'tahun_lahir_ayah' => $this->request->getPost('tahun_lahir_ayah'),
                'pendidikan_ayah' => $this->request->getPost('pendidikan_ayah'),
                'pekerjaan_ayah' => $this->request->getPost('pekerjaan_ayah'),
                'nama_ibu' => strtoupper($this->request->getPost('nama_ibu')),
                'tahun_lahir_ibu' => $this->request->getPost('tahun_lahir_ibu'),
                'pendidikan_ibu' => $this->request->getPost('pendidikan_ibu'),
                'pekerjaan_ibu' => $this->request->getPost('pekerjaan_ibu'),
                'hubungi' => $this->request->getPost('hubungi'),
                'pip' => $this->request->getPost('pip'),
                'pkh' => $this->request->getPost('pkh'),
                'kks' => $this->request->getPost('kks'),
                'data_lain_lain' => 'ya',
                'ukuran_baju' => strtoupper($this->request->getPost('ukuran_baju')),
                'nomor_peserta' => $this->request->getPost('nomor_peserta')
            ];
            $modeldata->save($data);
            return redirect()->to(base_url('Home'))->with('status', 'Data Berhasil Di Simpan');
        }
    }
    public function detail($id)
    {
        $modeldata = new ModelData();
        $data = [
            'detailSiswa' => $modeldata->find($id),
            'title' => 'Page | Detail Siswa',
            'currentLink' => 'Home'
        ];
        return view('pages/detailSiswa', $data);
    }
    public function table_data()
    {
        $modeldata = new ModelData();
        $data = [
            'tampilData' => $modeldata->findAll(),
            'title' => 'Page | Tabel Data',
            'currentLink' => 'tabel-keseluruhan'
        ];
        return view('pages/tabelData', $data);
    }

    public function informasi()
    {
        $modeldata = new ModelData();
        $data = [
            'tampildata' => $modeldata->findAll(),
            'title' => 'Page | Informasi PPDB',
            'currentLink' => 'tabel-informasi',
            'totalData' => $modeldata->totalData(),
            'jenisKelaminPerempuan' => $modeldata->jumlahSiswaSesuaiJenisKelamin('Perempuan'),
            'jenisKelaminLaki' => $modeldata->jumlahSiswaSesuaiJenisKelamin('Laki - laki'),
            'sdKubang' => $modeldata->totalSd('SDN KUBANG'),
            'sdPasirkukun' => $modeldata->totalSd('SDN PASIRKUKUN')
        ];
        return view('pages/informasi', $data);
    }
    public function report()
    {
        $modeldata = new ModelData();
        $data = [
            'tampildata' => $modeldata->findAll(),
            'title' => 'Page | Report PPDB',
            'currentLink' => 'tabel-report',
            'totalData' => $modeldata->totalData(),
            'jenisKelaminPerempuan' => $modeldata->jumlahSiswaSesuaiJenisKelamin('Perempuan'),
            'jenisKelaminLaki' => $modeldata->jumlahSiswaSesuaiJenisKelamin('Laki - laki'),
            'sdKubang' => $modeldata->totalSd('SDN KUBANG'),
            'sdPasirkukun' => $modeldata->totalSd('SDN PASIRKUKUN')
        ];
        return view('pages/report', $data);
    }

    public function edit($id)
    {
        session();
        $modeldata = new ModelData();
        $data = [
            'tampilData' => $modeldata->find($id),
            'status' => \Config\Services::validation(),
            'title' => 'Page | Edit Data',
            'currentLink' => 'Home'
        ];
        return view('pages/editData', $data);
    }

    public function update($id)
    {
        $modeldata = new ModelData();
        $data = [
            'nik' => $this->request->getPost('nik'),
            'nama_siswa' => strtoupper($this->request->getPost('nama_siswa')),
            'jenis_kelamin' => $this->request->getPost('jenis_kelamin'),
            'nisn' => $this->request->getPost('nisn'),
            'tempat_lahir' => strtoupper($this->request->getPost('tempat_lahir')),
            'tanggal_lahir' => $this->request->getPost('tanggal_lahir'),
            'agama' => $this->request->getPost('agama'),
            'anak_ke' => $this->request->getPost('anak_ke'),
            'asal_sd' => strtoupper($this->request->getPost('asal_sd')),
            'tinggi_badan' => $this->request->getPost('tinggi_badan'),
            'berat_badan' => $this->request->getPost('berat_badan'),
            'alamat' => strtoupper($this->request->getPost('alamat')),
            'rt' => $this->request->getPost('rt'),
            'rw' => $this->request->getPost('rw'),
            'desa' => strtoupper($this->request->getPost('desa')),
            'kecamatan' => strtoupper($this->request->getPost('kecamatan')),
            'nama_ayah' => strtoupper($this->request->getPost('nama_ayah')),
            'tahun_lahir_ayah' => $this->request->getPost('tahun_lahir_ayah'),
            'pendidikan_ayah' => $this->request->getPost('pendidikan_ayah'),
            'pekerjaan_ayah' => $this->request->getPost('pekerjaan_ayah'),
            'nama_ibu' => strtoupper($this->request->getPost('nama_ibu')),
            'tahun_lahir_ibu' => $this->request->getPost('tahun_lahir_ibu'),
            'pendidikan_ibu' => $this->request->getPost('pendidikan_ibu'),
            'pekerjaan_ibu' => $this->request->getPost('pekerjaan_ibu'),
            'hubungi' => $this->request->getPost('hubungi'),
            'pip' => $this->request->getPost('pip'),
            'pkh' => $this->request->getPost('pkh'),
            'kks' => $this->request->getPost('kks'),
            'ukuran_baju' => $this->request->getPost('ukuran_baju'),
            'nomor_peserta' => $this->request->getPost('nomor_peserta')
        ];
        $modeldata->update($id, $data);
        return redirect()->to(base_url('Home'))->with('status', 'Data Berhasil Di Edit');
    }

    public function delete($id)
    {
        $modeldata = new ModelData();
        $modeldata->delete($id);
        return redirect()->to(base_url('Home'))->with('status', 'Data Berhasil Di Hapus');
    }

    public function ferifikasi($id)
    {
        $modeldata = new ModelData();
        $data = [
            'data_lain_lain' => 'ya'
        ];
        $modeldata->update($id, $data);
        return redirect()->to(base_url('Home'))->with('status', 'Data Berhasil di Ferifikasi');
    }
}
