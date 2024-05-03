<?php

namespace App\Controllers;

use App\Models\MProduk;

class ProdukController extends RestfulController
{
    public function create()
    {
        $data = [
            'kode' => $this->request->getVar('kode'),
            'nama' => $this->request->getVar('nama'),
            'harga' => $this->request->getVar('harga'),
            'stok' => $this->request->getVar('stok')            
        ];

        $model = new MProduk();
        $model->insert($data);
        $produk = $model->find($model->getInsertID());
        return $this->responseHasil(200, true, $produk);
    }

    public function list()
    {
        $model = new MProduk();
        $produk = $model->findAll();
        return $this->responseHasil(200, true, $produk);
    }

    public function detail($id)
    {
        $model = new MProduk();
        $produk = $model->find($id);
        return $this->responseHasil(200, true, $produk);
    }

    public function ubah($id)
    {
        $data = [
            'kode' => $this->request->getVar('kode'),
            'nama' => $this->request->getVar('nama'),
            'harga' => $this->request->getVar('harga'),
            'stok' => $this->request->getVar('stok')
        ];

        $model = new MProduk();
        $model->update($id, $data);
        $produk = $model->find($id);

        return $this->responseHasil(200, true, $produk);
    }

    public function hapus($id)
    {
        $model = new MProduk();
        $produk = $model->delete($id);

        return $this->responseHasil(200, true, $produk);
    }
}