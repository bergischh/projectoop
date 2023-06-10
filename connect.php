<?php
class Database {
    private $host = "localhost";
    private $username = "root";
    private $password = "";
    private $database = "db_oop";
    private $koneksi = "";

    public function __construct(){
        $this->koneksi =  mysqli_connect($this->host, $this->username, $this->password, $this->database);
		if (mysqli_connect_errno()){
			echo "Koneksi database gagal : " . mysqli_connect_error();
		}
    }

    function input($nama, $nis, $mtk, $prod, $pipas) {
		  mysqli_query($this->koneksi,"INSERT INTO data_murid VALUES
                  ('','$nama','$nis','$mtk', '$prod','$pipas')");
	  }	

    function signup($username, $password) {
      $result = mysqli_query($this->koneksi, "SELECT * FROM data_login WHERE username='$username'");

      if (mysqli_num_rows($result) == 0) {
      $result = mysqli_query($this->koneksi, "INSERT INTO data_login (username, password) VALUES ('$username', '$password')");
        if ($result) {
            $_SESSION['username'] = $username; 
            header("Location: login.php");
            exit();
        } else {
            echo "Pendaftaran gagal";
        }
    } else {
        echo "Username sudah terdaftar";
    }
    }

    function login($username, $password) {
      $result = mysqli_query($this->koneksi,"SELECT * FROM  data_login WHERE username='$username' AND password='$password'");
    
      if (mysqli_num_rows($result) == 1) {
          $_SESSION['username'] = $username;
          header("Location: input_data.php"); 
          exit();
      } else {
          echo "Login gagal,Username atau password salah.";
      }
    }

}
?>
