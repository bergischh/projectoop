<?php
include ('connect.php');
$koneksi = new Database();

$action = $_GET['action'];
if($action == "add"){
    $koneksi->input($_POST['nama'],$_POST['nis'],$_POST['mtk'],$_POST['prod'],$_POST['pipas']);
}else {
    echo "gagal";
}


class Data {
    private $mtk,
            $prod,
            $pipas;

    public function __construct($mtk, $prod, $pipas) {
        $this->mtk = $mtk;
        $this->prod = $prod;
        $this->pipas = $pipas;

    }
    public function total() {
        return $this->mtk + $this->prod + $this->pipas;
    }
    public function rataRata() {
        return $this->total() / 3;
    }
    public function findMax() {
        return max($this->mtk, $this->prod, $this->pipas);
    }
    public function findMin() {
        return min($this->mtk, $this->prod, $this->pipas);
    }

    // Grade Nilai
    public function gradeMtk() {
        if ($this->mtk >= 91 && $this->mtk <= 100) {
            return '(A)';
        } elseif ($this->mtk >= 81 && $this->mtk <= 90) {
            return '(B)';
        } elseif ($this->mtk >= 71 && $this->mtk <= 80) {
            return '(C)';
        } elseif ($this->mtk >= 61 && $this->mtk <= 70) {
            return '(D)';
        } else {
            return 'Tidak Terdeteksi';
        }
    }
    public function gradeProd() {
        if ($this->prod >= 91 && $this->prod <= 100) {
            return '(A)';
        } elseif ($this->prod >= 81 && $this->prod <= 90) {
            return '(B)';
        } elseif ($this->prod >= 71 && $this->prod <= 80) {
            return '(C)';
        } elseif ($this->prod >= 61 && $this->prod <= 70) {
            return '(D)';
        } else {
            return 'Tidak Terdeteksi';
        }
    }
    public function gradePipas() {
        if ($this->pipas >= 91 && $this->pipas <= 100) {
            return '(A)';
        } elseif ($this->pipas >= 81 && $this->pipas <= 90) {
            return '(B)';
        } elseif ($this->pipas >= 71 && $this->pipas <= 80) {
            return '(C)';
        } elseif ($this->pipas >= 61 && $this->pipas <= 70) {
            return '(D)';
        } else {
            return 'Tidak Terdeteksi';
        }
    }
}

$nama = $_POST['nama'];
$nis = $_POST['nis'];
$mtk = $_POST['mtk'];
$prod = $_POST['prod'];
$pipas = $_POST['pipas'];

$tampil = new Data($mtk, $prod, $pipas);
echo "<center>";
echo "<h3>Data Dan Nilai Siswa</h3>";
echo "Nama Siswa : ".$nama."<br>";
echo "Nis Siswa : ".$nis."<br>";
echo "Nilai Matematika : ".$mtk." ".$tampil->gradeMtk()."<br>";
echo "Nilai Produktif : ".$prod." ".$tampil->gradeProd()."<br>";
echo "Nilai PIPAS : ".$pipas." ".$tampil->gradePipas()."<br><br>";

echo "Total nilai : " .$tampil->total()."<br>";
echo "Rata-rata nilai : " .$tampil->rataRata()."<br>";
echo "Max nilai : " .$tampil->findMax()."<br>";
echo "Min nilai : " .$tampil->findMin()."<br>";
echo "</center>";

    


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
         body {
            background-color: #EAE0DA;
            font-size: 20px;
        }
      
    </style>
</head>
<body>
    <center>
    <p><a href="logout.php">Logout</a></p>
    </center>
</body>
</html>