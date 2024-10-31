<?php

class About extends Controller {
    public function index($nama = 'Mervin Howard', $nim = '233303030011') {
        $data['nama'] = $nama;
        $data['nim'] = $nim;
        $data['judul'] = "About";
        $this->view('templates/header', $data);
        $this->view('about/index', $data);
        $this->view('templates/footer');
    }

    public function page() {
        $data['judul'] = "Pages";
        $this->view('templates/header', $data);
        $this->view('about/page');
        $this->view('templates/footer');
    }
}