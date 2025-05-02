<?php
require_once 'model/Student.php';
require_once 'model/Suku.php';

class StudentController {
    public function index() {
        $students = Student::getAll();
        $sukuList = Suku::getAll();
        include 'view/student/index.php';
    }

    public function create() {
        $sukuList = Suku::getAll();
        include 'view/student/create.php';
    }

    public function store() {
        $data = [
            ':nama' => $_POST['nama'],
            ':nim' => $_POST['nim'],
            ':no_telp' => $_POST['no_telp'],
            ':tanggal_masuk' => $_POST['tanggal_masuk'],
            ':id_suku' => $_POST['id_suku']
        ];
        Student::create($data);
        header('Location: /tp_9/index.php?page=student');

    }

    public function edit() {
        $id = $_GET['id'];
        $student = Student::find($id);
        $sukuList = Suku::getAll();
        include 'view/student/edit.php';
    }

    public function update() {
        $data = [
            ':id' => $_POST['id'],
            ':nama' => $_POST['nama'],
            ':nim' => $_POST['nim'],
            ':no_telp' => $_POST['no_telp'],
            ':tanggal_masuk' => $_POST['tanggal_masuk'],
            ':id_suku' => $_POST['id_suku']
        ];
        Student::update($data);
        header('Location: /tp_9/index.php?page=student');
    }

    public function delete() {
        $id = $_POST['id'];
        Student::delete($id);
        header('Location: /tp_9/index.php?page=student');
    }
}


