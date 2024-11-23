<?php
require_once "config/database.php";

class MotorModel {
    private $conn;

    public function __construct() {
        $db = new Database();
        $this->conn = $db->connect();
    }

    public function getAllMotors() {
        $query = $this->conn->prepare("SELECT * FROM motor");
        $query->execute();
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getMotorById($id) {
        $query = $this->conn->prepare("SELECT * FROM motor WHERE id = :id");
        $query->bindParam(":id", $id);
        $query->execute();
        return $query->fetch(PDO::FETCH_ASSOC);
    }

    public function addMotor($nama_motor, $jenis_motor, $harga) {
        $query = $this->conn->prepare("INSERT INTO motor (nama_motor, jenis_motor, harga) VALUES (:nama_motor, :jenis_motor, :harga)");
        $query->bindParam(":nama_motor", $nama_motor);
        $query->bindParam(":jenis_motor", $jenis_motor);
        $query->bindParam(":harga", $harga);
    
        return $query->execute();
    }

    public function updateMotor($id, $nama_motor, $jenis_motor, $harga) {
        $query = $this->conn->prepare("UPDATE motor SET nama_motor = :nama_motor, jenis_motor = :jenis_motor, harga = :harga WHERE id = :id");
        $query->bindParam(":id", $id);
        $query->bindParam(":nama_motor", $nama_motor);
        $query->bindParam(":jenis_motor", $jenis_motor);
        $query->bindParam(":harga", $harga);
        return $query->execute();
    }

    public function deleteMotor($id) {
        $query = $this->conn->prepare("DELETE FROM motor WHERE id = :id");
        $query->bindParam(":id", $id);
        return $query->execute();
    }
}


