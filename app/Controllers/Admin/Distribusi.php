<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\CrudModel;

class Distribusi extends BaseController
{
    public function index()
    {
        $model = new CrudModel;
        $data['zona'] = $model->getSuaraZona();
        return view('admin/distribusi/zona', $data);
    }

    public function kecamatan($id)
    {
        $model = new CrudModel;
        $data['kecamatan'] = $model->getSuaraKecamatan($id);
        return view('admin/distribusi/kecamatan', $data);
    }

    public function kelurahan($id)
    {
        $model = new CrudModel;
        $data['kelurahan'] = $model->getSuaraKelurahan($id);
        
        return view('admin/distribusi/kelurahan', $data);
    }

    public function tps($id)
    {
        $model = new CrudModel;
        $data['tps'] = $model->getSuaraTps($id);
        return view('admin/distribusi/tps', $data);
    }
}
