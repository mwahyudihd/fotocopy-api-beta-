<?php

namespace App\Controllers;

use App\Models\MPegawai;

class PegawaiController extends RestfulController
{
    public function create()
    {
        $data = [
            'nama_pegawai' => $this->request->getVar('nama_pegawai'),
            'jobdesk' => $this->request->getVar('jobdesk'),
            'no_telp' => $this->request->getVar('no_tlp'),         
        ];

        $model = new MPegawai();
        $model->insert($data);
        $pegawai = $model->find($model->getInsertID());
        return $this->responseHasil(200, true, $pegawai);
    }

    public function list()
    {
        $model = new MPegawai();
        $pegawai = $model->findAll();
        return $this->responseHasil(200, true, $pegawai);
    }

    public function detail($id)
    {
        $model = new MPegawai();
        $pegawai = $model->find($id);
        return $this->responseHasil(200, true, $pegawai);
    }

    public function ubah($id)
    {
        $data = [
            'nama_pegawai' => $this->request->getVar('nama_pegawai'),
            'jobdesk' => $this->request->getVar('jobdesk'),
            'no_telp' => $this->request->getVar('no_tlp')
        ];

        $model = new MPegawai();
        $model->update($id, $data);
        $pegawai = $model->find($id);

        return $this->responseHasil(200, true, $pegawai);
    }

    public function hapus($id)
    {
        $model = new MPegawai();
        $pegawai = $model->delete($id);

        return $this->responseHasil(200, true, $pegawai);
    }
}