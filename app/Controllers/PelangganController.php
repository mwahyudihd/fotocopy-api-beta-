<?php

namespace App\Controllers;

use App\Models\MPelanggan;

class PelangganController extends RestfulController
{
    public function create()
    {
        $data = [
            'nama_pelanggan' => $this->request->getVar('nama_pelanggan'),
            'jenis_pesanan' => $this->request->getVar('jenis_pesanan'),
            'alamat' => $this->request->getVar('alamat')            
        ];

        $model = new MPelanggan();
        $model->insert($data);
        $pelanggan = $model->find($model->getInsertID());
        return $this->responseHasil(200, true, $pelanggan);
    }

    public function list()
    {
        $model = new MPelanggan();
        $pelanggan = $model->findAll();
        return $this->responseHasil(200, true, $pelanggan);
    }

    public function detail($id)
    {
        $model = new MPelanggan();
        $pelanggan = $model->find($id);
        return $this->responseHasil(200, true, $pelanggan);
    }

    public function ubah($id)
    {
        $data = [
            'nama_pelanggan' => $this->request->getVar('nama_pelanggan'),
            'jenis_pesanan' => $this->request->getVar('jenis_pesanan'),
            'alamat' => $this->request->getVar('alamat')
        ];

        $model = new MPelanggan();
        $model->update($id, $data);
        $pelanggan = $model->find($id);

        return $this->responseHasil(200, true, $pelanggan);
    }

    public function hapus($id)
    {
        $model = new MPelanggan();
        $pelanggan = $model->delete($id);

        return $this->responseHasil(200, true, $pelanggan);
    }
}