<?php
require_once 'config/Connection.php';

class Student {
    public static function getAll() {
        $conn = Connection::getInstance();
        $stmt = $conn->query("
            SELECT s.*, a.nama_suku 
            FROM student s 
            LEFT JOIN suku_asal a ON s.id_suku = a.id_suku
        ");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    

    public static function create($data) {
        $conn = Connection::getInstance();
        $stmt = $conn->prepare("
             INSERT INTO student 
            (nama, nim, no_telp, tanggal_masuk, id_suku) 
            VALUES (:nama, :nim, :no_telp, :tanggal_masuk, :id_suku)
        ");
        $stmt->execute($data);
    }

    public static function update($data) {
        $conn = Connection::getInstance();
        $stmt = $conn->prepare("
           UPDATE student SET 
            nama = :nama, 
            nim = :nim, 
            no_telp = :no_telp,
            tanggal_masuk = :tanggal_masuk,
            id_suku = :id_suku 
            WHERE id = :id
        ");
        $stmt->execute($data);
    }

    public static function delete($id) {
        $conn = Connection::getInstance();
        $stmt = $conn->prepare("DELETE FROM student WHERE id = ?");
        $stmt->execute([$id]);
    }

    public static function find($id) {
        $conn = Connection::getInstance();
        $stmt = $conn->prepare("SELECT * FROM student WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public static function countAll() {
        $conn = Connection::getInstance();
        $stmt = $conn->query("SELECT COUNT(*) FROM student");
        return $stmt->fetchColumn();
    }
}