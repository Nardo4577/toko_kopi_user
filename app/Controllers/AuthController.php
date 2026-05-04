<?php

namespace App\Controllers;

use App\Models\UserModel;

class AuthController extends BaseController
{

    public function loginAction()
    {
        $model = new UserModel();
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        // Cari user berdasarkan username
        $user = $model->where('username', $username)->first();

        // 1. Cek apakah username ditemukan di database
        if (!$user) {
            return redirect()->back()->with('error', 'Username tidak ditemukan!');
        }

        // 2. Jika username ada, cek apakah password cocok
        if (!password_verify($password, $user['password'])) {
            return redirect()->back()->with('error', 'Kata sandi yang Anda masukkan salah!');
        }

        // 3. Jika username ada DAN password benar, eksekusi login
        session()->set([
            'id'         => $user['id'], 
            'username'   => $user['username'], 
            'role'       => $user['role'], 
            'isLoggedIn' => true
        ]);
        
        return $user['role'] == 'customer' ? redirect()->to('/') : redirect()->to('/');
    }

    public function logout()
    {
        $session = session();
        $session->remove(['id', 'username', 'role', 'isLoggedIn']);
        $session->destroy();

        return redirect()->to('/')->with('success', 'Anda berhasil logout!');
    }

    public function registerAction()
    {
        $model = new UserModel();
        
        $model->save([
            'username' => $this->request->getPost('username'),
            'password' => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT),
            'role'     => 'customer'
        ]);
        
        return redirect()->to('/reservasi')->with('success', 'Berhasil Daftar! Silakan masuk.');
    }
}