<?php
// Class induk dengan enkapsulasi
class Tablet {
    public $merk; // Public
    protected $camera; // Protected
    private $memory; // Private

    public function __construct($merk, $camera, $memory) { //untuk menginisialisasi properti ketika objek dibuat
        $this->merk = $merk;
        $this->camera = $camera;
        $this->memory = $memory;
    }

    public function getInfoTablet() {
        return "Tablet $this->merk, Kamera $this->camera MP, Memory $this->memory GB.\n";
    }
}
// Class turunan
class Handphone extends Tablet {
    public $handphone_baru;

    public function __construct($merk, $camera, $memory, $handphone_baru) {
        parent::__construct($merk, $camera, $memory);
        $this->handphone_baru = $handphone_baru;
    }

    public function beliHandphone() {
        return "Membeli handphone $this->merk model $this->handphone_baru.\n";
    }

    public function getCameraInfo() {
        return "Kamera resolusi $this->camera MP.\n";
    }
}

// Eksekusi
$tablet = new Tablet("Vivo", 12, 128);
echo $tablet->getInfoTablet(); // Akses public

$hp = new Handphone("Apple", 16, 256, "iPhone 15");
echo $hp->beliHandphone(); // Akses turunan
echo $hp->getCameraInfo(); // Akses protected
?>