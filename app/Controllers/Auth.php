<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\TpsModel;

class Auth extends BaseController
{
    public function index()
    {
        return view('login');
    }

    function login() {
        return view('login');
    }

    public function logout()
    {
      $session = session();
      $session->destroy();
      return redirect()->to('');
    }

    function ajaxLogin() {
        if (! $this->validate([
            'username' => "required",
            'password' => "required"
          ])) {
            // return $this->response->setJSON(['status'=>'error','msg'=>'Isi Username dan Password']);
            return redirect()->back()->with('message', 'Isi Username dan Password');
          }

        $model = new TpsModel;
        $username = $this->request->getVar('username');
        $password = $this->request->getVar('password');
        $cek = $model->where(['tps_code'=>$username,'tps_key'=>$password])->first();

        if($cek){
            $ses_data = [
                'tps_id'            => $cek->tps_id,
                'tps_name'          => $cek->tps_name,
                'kelurahan_name'          => $cek->kelurahan_name,
                'kecamatan_name'          => $cek->kecamatan_name,
                'tps_relawan'          => $cek->tps_relawan,
                'tps_relawan_no'          => $cek->tps_relawan_no,
                'level'          => 9,
                'isLoggedIn'    => true,
            ];
            session()->set($ses_data);
            
            return redirect()->to('/');
        }else{
            return redirect()->back()->with('message', 'Username dan Password tidak sesuai');
        }
    }

    public function encmd5($data)
    {
      echo md5($data);
    }
}
