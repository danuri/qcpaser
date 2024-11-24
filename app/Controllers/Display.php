<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\CrudModel;

class Display extends BaseController
{
    public function index()
    {
        $model = new CrudModel;
        $data['kecamatan'] = $model->getSuaraKecamatan();

        return view('display', $data);
    }

    function progres() {
        $model = new CrudModel;
        $data = $model->getProgres();

        $data = ['progres'=>$data];
        return $this->response->setJSON($data);
    }

    function progresschart() {
        $model = new CrudModel;
        
        $kandidat1 = [];
        $kandidat2 = [];

        $progres = $model->getProgres();
        $fix = round($progres)-(round($progres)%5);
        
        for($limit=10;$limit <= $fix;$limit+=10){
            $data = $model->getSuaraLimit($limit);
            
            // break;

            $jumlah = $data->kandidat1+$data->kandidat2;
            $jkan1 = shortdec(($data->kandidat1/$jumlah)*100);
            $jkan2 = shortdec(($data->kandidat2/$jumlah)*100);

            $kandidat1[] = $jkan1;
            $kandidat2[] = $jkan2;
        }

        $data = ['kandidat1'=>$kandidat1,'kandidat2'=>$kandidat2];
        return $this->response->setJSON($data);
    }

    function suara() {
        $model = new CrudModel;
        $data = $model->getSuara();

        $jumlah = $data->kandidat1+$data->kandidat2;
        $kandidat1 = shortdec(($data->kandidat1/$jumlah)*100);
        $kandidat2 = shortdec(($data->kandidat2/$jumlah)*100);

        $data = ['kandidat1'=>$kandidat1,'kandidat2'=>$kandidat2];

        return $this->response->setJSON($data);
    }

    function progrescalon() {
        $model = new CrudModel;
        $data = $model->getSuara();

        $jumlah = $data->kandidat1+$data->kandidat2;
        $kandidat1 = shortdec(($data->kandidat1/$jumlah)*100);
        $kandidat2 = shortdec(($data->kandidat2/$jumlah)*100);

        $data = ['k1'=>$kandidat1, 'k2'=>$kandidat2];

        return $this->response->setJSON($data);
    }

    function vto() {
        $model = new CrudModel;
        $suara = $model->getSuara();
        $jumlah = $suara->kandidat1+$suara->kandidat2;

        $dpt = $model->getMasukDpt();

        $vto = shortdec(($jumlah/$dpt->jumlah)*100);

        echo $vto.'%';
    }

    function kecamatan($id) {
        $model = new CrudModel;
        $data['kecamatan'] = $model->getSuaraKecamatan($id);
        return view('display/kecamatan', $data);
    }

    function kelurahan($id) {
        $model = new CrudModel;
        $data['kelurahan'] = $model->getSuaraKelurahan($id);
        return view('display/kelurahan', $data);
    }

    function tps($id) {
        $model = new CrudModel;
        $data['tps'] = $model->getSuaraTps($id);
        return view('display/tps', $data);
    }
}
