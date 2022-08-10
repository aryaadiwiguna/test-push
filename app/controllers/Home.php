<?php

class Home extends Controller
{
    public function index()
    {
        $data = [
            "title" => "Home",
            "nama" => "Arya Adi Wiguna"
        ];


        $this->view('templates/header', $data);
        $this->view('home/index', $data);
        $this->view('templates/footer');
    }
}
