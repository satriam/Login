<?php 
    include "conn.php";
    if(isset($_POST['submit'])){
        $nama_pengguna = $_POST['namaPengguna'];
        $password = $_POST['passPengguna'];
        $hash = hash("sha256",$password);
        
        $query = mysqli_query($koneksi,"SELECT * FROM tb_pengguna WHERE nama_pengguna = '$nama_pengguna'");
    if(mysqli_num_rows($query) < 1){
        $query = mysqli_query($koneksi,"INSERT INTO `tb_pengguna` (`id_pengguna`, `nama_pengguna`, `password`) VALUES (NULL, '$nama_pengguna', '$hash')");
        echo '<script>alert("Register Berhasil")</script>';
        echo "<meta http-equiv=refresh content=1;url=login.php>";
    }
    else{
        echo '<script>alert("Register Gagal, Username sudah digunakan")</script>';
        echo "<meta http-equiv=refresh content=1;url=register.php>";
    }
    }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <script type="text/javascript" src="jquery.min.js"></script>
    <title>232 satria Mulya Adiwardana</title>
  </head>
  <body class="body" style="background-color: #6E64B1 ">
    <div class="container-fluid">
      <!-- Awal dari Section 1 -->
      <div class="card position-absolute top-50 start-50 translate-middle border-0 shadow" style="width: 24rem; border-radius: 12px">
        <div class="card-body">
          <h4 class="card-title fw-bold text-center" style="letter-spacing: 6px">SIGN UP</h4>
          <hr class="mx-auto" style="max-width: 3cm; min-height: 3px" />
          <form action="register.php" method="POST">
            <div class="mb-3">
             
              <input type="text" class="form-control rounded-pill" placeholder="username" id="user" name="namaPengguna" aria-describedby="emailHelp" required autocomplete="off"/>
              <div id="result"></div>
            </div>
            <div class="mb-3">
              <input type="password" class="form-control rounded-pill" placeholder="Password" name="passPengguna" minlength="8" title="Password minimal 8 karakter" id="password" required />
            </div>
            <div>
              <input type="password" class="form-control rounded-pill" minlength="8" placeholder="Confirm Password " title="Password minimal 8 karakter" id="confirm_password" required />
              <div id="errorMsg" class="form-text text-danger"></div>
            </div>
            <br />
            <div class="" id="buttonForm">
              <a href="index.php" class="btn btn-outline-primary rounded-pill">Back</a>
              <button type="submit" id="loginBtn" class="btn btn-outline-primary rounded-pill"name="submit">Sign-Up</button>
            </div>
          </form>
          <!-- <a href="#" class="card-link">Card link</a> -->
        </div>
      </div>
      <!-- AKhir dari Section 1 -->
    </div>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!-- passwordValidator -->
    <script src="js/button.js"></script>
    <script src="js/pass.js"></script>
  
  </body>
</html>
<script src="js/validasi.js"></script>
