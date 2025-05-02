<?php
require_once 'config/Connection.php';

class Suku {
    public static function getAll() {
        $conn = Connection::getInstance();
        $stmt = $conn->query("SELECT * FROM suku_asal");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function create($data) {
        $conn = Connection::getInstance();
        $stmt = $conn->prepare("
            INSERT INTO suku_asal 
            (nama_suku, asal_daerah) 
            VALUES (:nama_suku, :asal_daerah)
        ");
        $stmt->execute($data);
    }

    public static function update($data) {
        $conn = Connection::getInstance();
        $stmt = $conn->prepare("
            UPDATE suku_asal SET 
            nama_suku = :nama_suku,
            asal_daerah = :asal_daerah 
            WHERE id_suku = :id_suku
        ");
        $stmt->execute($data);
    }

    public static function delete($id) {
        $conn = Connection::getInstance();
        $stmt = $conn->prepare("DELETE FROM suku_asal WHERE id_suku = ?");
        $stmt->execute([$id]);
    }

    public static function find($id) {
        $conn = Connection::getInstance();
        $stmt = $conn->prepare("SELECT * FROM suku_asal WHERE id_suku = ?");
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public static function countAll() {
        $conn = Connection::getInstance();
        $stmt = $conn->query("SELECT COUNT(*) FROM suku_asal");
        return $stmt->fetchColumn();
    }
}