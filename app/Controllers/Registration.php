<?php

namespace App\Controllers;

use App\Models\RegistrationModel;

class Registration extends BaseController
{
    public function __construct()
    {
        $this->registrationModel = new RegistrationModel();
    }
    public function index()
    {
        $data = [
            'title' => 'Registration Form',
        ];

        return view('registration/index', $data);
    }

    public function save()
    {
        $this->registrationModel->save([
            'nama' => $this->request->getVar('nama'),
            'tempat' => $this->request->getVar('tempat'),
            'tanggal' => $this->request->getVar('tanggal'),
            'jenkel' => $this->request->getVar('jenkel'),
            'alamat' => $this->request->getVar('alamat')
        ]);

        session()->setFlashdata('pesan', 'Berhasil Registrasi');

        return redirect()->to('/registration');
    }
}
