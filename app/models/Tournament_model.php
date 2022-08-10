<?php

class Tournament_model
{
    private $table = 'tournament';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getDataTournament()
    {

        return $this->db->getAllData($this->table);
    }

    public function getDataTournamentbyId($id)
    {
        return $this->db->getDatabyId($this->table, 'id_tournament', $id);
    }

    public function tambahDataTournament($data)
    {
        $query = ("INSERT INTO $this->table VALUES (NULL, :tournament_name, :deskripsi, :penyelenggara, :tipe, :kategori, :lokasi, :total_peserta, :tanggal_penyelenggaraan, :total_hadiah)");
        $this->db->query($query);

        $this->db->bind('tournament_name', $data['tournament_name']);
        $this->db->bind('deskripsi', $data['deskripsi']);
        $this->db->bind('penyelenggara', $data['penyelenggara']);
        $this->db->bind('tipe', $data['tipe']);
        $this->db->bind('kategori', $data['kategori']);
        $this->db->bind('lokasi', $data['lokasi']);
        $this->db->bind('total_peserta', $data['total_peserta']);
        $this->db->bind('tanggal_penyelenggaraan', $data['tanggal_penyelenggaraan']);
        $this->db->bind('total_hadiah', $data['total_hadiah']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function ubahDataTournament($data)
    {
    }
}
