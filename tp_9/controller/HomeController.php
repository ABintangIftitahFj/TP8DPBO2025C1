<?php
require_once 'model/Student.php';
require_once 'model/Suku.php';

class HomeController {
    public function index() {
        // Ambil total data dari model
        $totalStudents = Student::countAll();
        $totalSuku = Suku::countAll();
        
        // Load view template
        include 'view/home/main.php';
    }
}