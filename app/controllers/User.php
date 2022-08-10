<?php

class User
{
    public function index()
    {
        echo 'user/index';
    }

    public function profile($nama = 'Arya', $pekerjaan = 'Siswa')
    {
        echo "nama saya adalah $nama, pekerjaan saya adalah $pekerjaan";
    }
}
