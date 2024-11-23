<?php
require_once "models/MotorModel.php";

class MotorController {
    private $model;

    public function __construct() {
        $this->model = new MotorModel();
    }

    public function index() {
        $motors = $this->model->getAllMotors();
        include "views/motor/index.php";
    }

    public function add() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Ambil data dari form
            $nama_motor = $_POST['nama_motor'];
            $jenis_motor = $_POST['jenis_motor'];
            $harga = $_POST['harga'];
    
            // Validasi input (opsional)
            if (empty($nama_motor) || empty($jenis_motor) || empty($harga)) {
                echo "Semua data wajib diisi!";
                return;
            }
    
            // Tambahkan ke database
            $this->model->addMotor($nama_motor, $jenis_motor, $harga);
    
            // Redirect ke halaman utama
            header("Location: index.php");
        } else {
            // Tampilkan form tambah motor
            include "views/motor/add.php";
        }
    }
    
    public function delete($id) {
        $this->model->deleteMotor($id);
        header("Location: index.php");
    }
}
