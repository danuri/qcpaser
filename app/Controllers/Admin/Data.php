<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\CrudModel;
use App\Models\SuaraModel;

class Data extends BaseController
{
    public function index()
    {
        $crud = new CrudModel;
        $data['tps'] = $crud->getData();
        return view('admin/data', $data);
    }

    function update() {
        if (! $this->validate([
            'kandidat1' => "required",
            'kandidat2' => "required"
          ])) {
              return redirect()->back()->with('error', 'Data tidak lengkap');
          }

            $param = [
              'kandidat_1' => $this->request->getVar('kandidat1'),
              'kandidat_2' => $this->request->getVar('kandidat2')
            ];

            $tpsid = $this->request->getVar('tps_id');
  
            $suara = new SuaraModel();
            $suara->where('tps_id',$tpsid)->set($param)->update();
  
            return redirect()->back()->with('message', 'Suara telah diupdate');
    }

    function getdata($id) {
        $suara = new SuaraModel();

        $find = $suara->where('tps_id',$id)->first();

        return $this->response->setJSON($find);
    }
}
