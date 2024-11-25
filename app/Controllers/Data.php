<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\CrudModel;
use App\Models\SuaraModel;
use App\Models\TpsModel;

class Data extends BaseController
{
    public function index()
    {
        $crud = new CrudModel;
        $data['tps'] = $crud->getData();
        return view('data', $data);
    }

    function update() {
        if (! $this->validate([
            'kandidat1' => "required",
            'kandidat2' => "required",
            'tidak_sah' => "required",
          ])) {
              return redirect()->back()->with('error', 'Data tidak lengkap');
          }

            $param = [
              'kandidat_1' => $this->request->getVar('kandidat1'),
              'kandidat_2' => $this->request->getVar('kandidat2'),
              'tidak_sah' => $this->request->getVar('tidak_sah'),
            ];

            $file = $this->request->getFile('photo');
            if (! $file->hasMoved()) {
              $newName = $file->getRandomName();
              $file->move('./uploads/c1/', $newName);

              $param['lampiran'] = $newName;
            }

            $tpsid = $this->request->getVar('tps_id');
  
            $suara = new SuaraModel();
            $suara->where('tps_id',$tpsid)->set($param)->update();
  
            return redirect()->back()->with('message', 'Suara telah diupdate');
    }

    function add() {
        if (! $this->validate([
            'kandidat1' => "required",
            'kandidat2' => "required",
            'tidak_sah' => "required"
          ])) {
              return redirect()->back()->with('error', 'Data tidak lengkap');
          }

          $tpsm = new TpsModel;
          $tps = $tpsm->find($this->request->getVar('tps_id'));

          $param = [
            'tps_id'     => $tps->tps_id,
            'kelurahan_id'     => $tps->kelurahan_id,
            'kecamatan_id'     => $tps->kecamatan_id,
            'kandidat_1' => $this->request->getVar('kandidat1'),
            'kandidat_2' => $this->request->getVar('kandidat2'),
            'tidak_sah' => $this->request->getVar('tidak_sah')
          ];

          $file = $this->request->getFile('photo');
          if($file){
            if (! $file->hasMoved()) {
              $newName = $file->getRandomName();
              $file->move('./uploads/c1/', $newName);
  
              $param['lampiran'] = $newName;
            }
          }

          $suara = new SuaraModel();
          $suara->insert($param);

          return redirect()->back()->with('message', 'Suara telah diinput');

    }

    function getdata($id) {
        $suara = new SuaraModel();

        $find = $suara->where('tps_id',$id)->first();

        return $this->response->setJSON($find);
    }
}
