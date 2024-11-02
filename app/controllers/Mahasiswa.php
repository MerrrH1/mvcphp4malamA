<?php

class Mahasiswa extends Controller {
    public function index() {
        $data['mahasiswa'] = $this->model('Mahasiswa_model')->get_all_mahasiswa();
        $data['judul'] = 'Daftar Mahasiswa';
        $this->view('templates/header', $data);
        $this->view('mahasiswa/index', $data);
        $this->view('templates/footer');
    }
}