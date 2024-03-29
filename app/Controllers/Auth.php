<?php

namespace App\Controllers;

use App\Models\UserModel;
use App\Models\KaryawanModel;

class Auth extends BaseController
{
    protected $helpers = ['custom'];

    public function __construct()
    {
        //membuat user model untuk konek ke database 
        $this->userModel = new UserModel();
        $this->karyawanModel = new KaryawanModel();

        //meload validation
        $this->validation = \Config\Services::validation();

        //meload session
        $this->session = \Config\Services::session();
    }

    public function login()
    {
        //menampilkan halaman login
        return view('auth/login');
    }

    public function register()
    {
        $karyawan = $this->karyawanModel->findAll();
        $data = [
            'karyawan' => $karyawan,
        ];

        //menampilkan halaman register
        return view('auth/register', $data);
    }

    public function valid_register()
    {
        //tangkap data dari form 
        $data = $this->request->getPost();

        //jalankan validasi
        $this->validation->run($data, 'register');

        //cek errornya
        $errors = $this->validation->getErrors();

        //jika ada error kembalikan ke halaman register
        if ($errors) {
            session()->setFlashdata('error', $errors);
            return redirect()->to('/auth/register');
        }

        //jika tdk ada error 

        //buat salt
        $salt = uniqid('', true);

        //hash password digabung dengan salt
        $password = md5($data['password']) . $salt;

        //masukan data ke database
        $this->userModel->save([
            'id_karyawan' => $data['id_karyawan'],
            'username' => $data['username'],
            'password' => $password,
            'salt' => $salt,
            'role' => 2
        ]);

        //arahkan ke halaman login
        session()->setFlashdata('login', 'Anda berhasil mendaftar, silahkan login');
        return redirect()->to('/auth/login');
    }

    public function valid_login()
    {
        //ambil data dari form
        $data = $this->request->getPost();

        //ambil data user di database yang usernamenya sama 
        $user = $this->userModel->where('username', $data['username'])->first();

        //cek apakah username ditemukan
        if ($user) {
            //cek password
            //jika salah arahkan lagi ke halaman login
            if ($user['password'] != md5($data['password']) . $user['salt']) {
                session()->setFlashdata('password', 'Password salah');
                return redirect()->to('/auth/login');
            } else {
                //jika benar, arahkan user masuk ke aplikasi 
                $sessLogin = [
                    'isLogin' => true,
                    'username' => $user['username'],
                    'id_karyawan' => $user['id_karyawan'],
                    'role' => $user['role']
                ];
                $this->session->set($sessLogin);
                return redirect()->to('/admin');
                // return redirect()->to('/user');
            }
        } else {
            //jika username tidak ditemukan, balikkan ke halaman login
            session()->setFlashdata('username', 'Username tidak ditemukan');
            return redirect()->to('/auth/login');
        }
    }

    public function logout()
    {
        $this->session->destroy();
        return redirect()->to('/auth/login');
    }

    // function __construct()
    // {
    //     $this->users = new UsersModel();
    //     $this->session = session();
    // }

    // public function index()
    // {
    //     //cek apakah ada session bernama isLogin
    //     if (!$this->session->has('isLogin')) {
    //         return redirect()->to('/auth/login');
    //     }

    //     //cek role dari session
    //     if ($this->session->get('role') != 1) {
    //         return redirect()->to('/user');
    //     }

    //     return view('admin/index');
    // }

    // public function index()
    // {
    //     return redirect()->to(base_url('login'));
    // }

    // public function login()
    // {
    //     $data = [
    //         'title' => 'Login | USSI Inventory',
    //         'config' => config('Auth'),
    //     ];
    //     return view('auth/login', $data);
    // }

    // public function loginProcess()
    // {
    //     $post = $this->request->getPost();
    //     $query = $this->users->getWhere(['username' => $post['username']]);
    //     $user = $query->getRow();
    //     if ($user) {
    //         if (password_verify($post['password'], $user->password)) {
    //             $params = ['id_user' => $user->id_user];
    //             $this->session()->set($params);

    //             return redirect()->to(site_url('admin'));
    //         } else {
    //             return redirect()->back()->with('error', 'Password tidak sesuai');
    //         }
    //     } else {
    //         return redirect()->back()->with('error', 'Username tidak ditemukan');
    //     }
    // }

    // public function logout()
    // {
    //     $session = session();
    //     $session->destroy();
    //     return redirect()->to('/login');
    // }
}
