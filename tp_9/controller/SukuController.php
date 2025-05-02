<?php
require_once 'model/Suku.php';

class SukuController {
    public function index() {
        $sukuList = Suku::getAll();
        include 'view/suku/index.php';
    }

    public function create() {
        include 'view/suku/create.php';
    }

    public function store() {
        $data = [
            'nama_suku' => $_POST['nama_suku'],
            'asal_daerah' => $_POST['asal_daerah']
        ];
        Suku::create($data);
        header('Location: index.php?page=suku');
        exit;
    }

    public function edit() {
        $id = $_GET['id'];
        $suku = Suku::find($id);
        include 'view/suku/edit.php';
    }

    public function update() {
        $data = [
            'id_suku' => $_POST['id_suku'],
            'nama_suku' => $_POST['nama_suku'],
            'asal_daerah' => $_POST['asal_daerah']
        ];
        Suku::update($data);
        header('Location: index.php?page=suku');
        exit;
    }

    public function delete() {
        $id = $_POST['id_suku'] ?? null;
        if ($id) {
            Suku::delete($id);
        }
        header('Location: index.php?page=suku');
        exit;
    }
}
