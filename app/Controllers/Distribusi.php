<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\CrudModel;

class Distribusi extends BaseController
{
    public function index()
    {
        $model = new CrudModel;
        $data['kecamatan'] = $model->getSuaraKecamatan();
        return view('distribusi/kecamatan', $data);
    }

    public function kecamatan($id)
    {
        $model = new CrudModel;
        $data['kecamatan'] = $model->getSuaraKecamatan($id);
        return view('distribusi/kecamatan', $data);
    }

    public function kelurahan($id)
    {
        $model = new CrudModel;
        $data['kelurahan'] = $model->getSuaraKelurahan($id);
        
        return view('distribusi/kelurahan', $data);
    }

    public function tps($id)
    {
        $model = new CrudModel;
        $data['tps'] = $model->getSuaraTps($id);
        return view('distribusi/tps', $data);
    }
}
