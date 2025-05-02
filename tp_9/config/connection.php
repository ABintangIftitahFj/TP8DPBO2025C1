<?php
class Connection {
    private static $instance = null;
    
    private function __construct() {}
    
    public static function getInstance() {
        if (!self::$instance) {
            $host = 'localhost';
            $dbname = 'ini_db_tp_8';
            $user = 'root';
            $pass = '';
            
            try {
                self::$instance = new PDO(
                    "mysql:host=$host;dbname=$dbname;charset=utf8",
                    $user,
                    $pass,
                    [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
                );
            } catch(PDOException $e) {
                die("Koneksi gagal: " . $e->getMessage());
            }
        }
        return self::$instance;
    }
}