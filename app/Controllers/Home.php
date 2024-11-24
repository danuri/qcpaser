<?php

namespace App\Controllers;
use App\Models\SuaraModel;
use App\Models\TpsModel;

class Home extends BaseController
{
    public function index(): string
    {
        $model = new SuaraModel();
        $data['suara'] = $model->where('tps_id',session('tps_id'))->first();
        
        return view('home', $data);
    }

    function update() {
        if (! $this->validate([
            'kandidat1' => "required",
            'kandidat2' => "required",
            'photo' => [
                      'rules' => [
                        'uploaded[photo]',
                        'is_image[photo]',
                        'mime_in[photo,image/jpg,image/jpeg,image/gif,image/png,image/webp]',
                      ]
                  ]
          ])) {
              return redirect()->back()->with('error', 'Data tidak lengkap');
          }

          $file = $this->request->getFile('photo');

          if (! $file->hasMoved()) {

            $newName = $file->getRandomName();
            $file->move('./uploads/c1/', $newName);

            $tpsm   = new TpsModel();
            $tps    = $tpsm->find(session('tps_id'));
  
            $param = [
              'kandidat_1' => $this->request->getVar('kandidat1'),
              'kandidat_2' => $this->request->getVar('kandidat2'),
              'tps_id' => session('tps_id'),
              'kelurahan_id' => $tps->tps_id,
              'kecamatan_id' => $tps->kecamatan_id,
              'zona_id' => $tps->zona_id,
              'lampiran' => $newName,
              'suara_valid' => 1
            ];
  
            $suara = new SuaraModel();
            $suara->insert($param);
  
            return redirect()->back()->with('message', 'Suara telah diupdate');
  
        }
  
        return redirect()->back()->with('message', 'Gagal Upload file');
    }
}
