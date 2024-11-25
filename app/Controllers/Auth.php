<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\UserModel;

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
      return redirect()->to('auth');
    }

    function ajaxLogin() {
        if (! $this->validate([
            'username' => "required",
            'password' => "required"
          ])) {
            // return $this->response->setJSON(['status'=>'error','msg'=>'Isi Username dan Password']);
            return redirect()->back()->with('message', 'Isi Username dan Password');
          }

        $model = new UserModel;
        $username = $this->request->getVar('username');
        $password = md5($this->request->getVar('password'));
        $cek = $model->where(['username'=>$username,'password'=>$password])->first();

        if($cek){
            $ses_data = [
                'id'            => $cek->id,
                'nama'          => $cek->nama,
                'level'          => $cek->level,
                'isLoggedIn'    => true,
            ];
            session()->set($ses_data);

            if($cek->level == 2){
              return redirect()->to('data');
            }else{
              return redirect()->to('');
            }
            
        }else{
            return redirect()->back()->with('message', 'Username dan Password tidak sesuai');
        }
    }

    public function encmd5($data)
    {
      echo md5($data);
    }
}
