<?php

class Dashboard extends Controller
{
    public function tournament()
    {
        $data["title"] = "Tournament";
        $data["tournament"] = $this->model('Tournament_model')->getDataTournament();
        $this->view('templates/header', $data);
        $this->view('tournament/index', $data);
        $this->view('templates/footer');
    }

    public function ubah_tournament($id)
    {
        $data["title"] = "Ubah Tournament";
        $data["tournament"] = $this->model('Tournament_model')->getDataTournamentbyId($id);
        $this->view('templates/header', $data);
        $this->view('tournament/ubah', $data);
        $this->view('templates/footer');
    }

    public function tambah_tournament()
    {
        if ($this->model('Tournament_model')->tambahDataTournament($_POST) > 0) {
            header('Location:' . BASEURL . '/dashboard/tournament');
            exit;
        }
    }
}
