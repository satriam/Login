
<?php 
    include "conn.php";
    session_start();
 
    if(isset($_SESSION['uid'])){
      header("Location: index.php");
      exit;
    }

 if(isset($_POST['submit'])){
      $nama_pengguna = $_POST['namaPengguna'];
      $password = $_POST['passPengguna'];
      $hash = hash("sha256",$password);
      
      $query = mysqli_query($koneksi,"SELECT * FROM tb_pengguna WHERE nama_pengguna = '$nama_pengguna'");
      $ambil_data = mysqli_fetch_array($query);
    if(mysqli_num_rows($query) > 0){
        if($ambil_data['password'] == $hash){
            $_SESSION['id'] =  $ambil_data['id_pengguna'];
            $_SESSION['uid'] = $ambil_data['nama_pengguna'];
            if(isset($_POST['cekLogin'])){
                setcookie('id',$ambil_data['id_pengguna'], time()+3600);
                setcookie('uid',hash('sha256',$ambil_data['nama_pengguna']), time()+3600);
            }
            $_SESSION["uid"]=true;
            header("Location: index.php");
            exit;       
        }
        else{
            echo '<script>alert("Password anda salah")</script>';
        }
    }else{
        echo '<script>alert("Username tidak ditemukan")</script>';
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

    <title>Login </title>
  </head>
  <body>
    <div class="container-fluid" >
      <div class="row min-vh-100 ">
        <div class="col-lg-4 d-flex justify-content-center align-items-center" style="background-color:#6E64B1 ">
          <div class="card border-0 shadow" style="border-radius: 10px; width: 12cm">
            <h3 class="card-title my-2 fw-bold text-center">Login</h3>
            <hr class="mx-auto" style="width: 2cm" />
            <div class="card-body">
              <form action="" method="POST">
                <div class="col-lg mb-3">
                  <input type="text" class="form-control rounded-pill" placeholder="Username" id="user" name="namaPengguna" aria-describedby="emailHelp" required />
                </div>
                <div class="col-lg mb-3">
                  <input type="password" class="form-control rounded-pill" placeholder="Password" id="exampleInputPassword1" name="passPengguna" minlength="8" required />
                </div>
                <div class="mb-3 form-check">
                  <input type="checkbox" class="form-check-input" name="cekLogin" />
                  <label class="form-check-label" for="exampleCheck1">ingat saya</label>
                </div>
                <div class="" id="buttonForm" style="text-align: right">
                  <button type="submit" class="btn btn-outline-primary rounded-pill" name="submit">Sign-In</button>
                  <a class="btn btn-outline-primary rounded-pill" href="register.php">Sign-Up</a>
                  
                </div>
              </form>
            </div>
          </div>
        </div>
        <div class="col-lg-8 d-none d-lg-block shadow-lg" style="border-radius: 16px 0px 0px 16px">
          <div class="d-flex justify-content-center align-middle">
            <img src="asset/img-02.svg" class="align-items-center" style="width: 700px; margin-top: 300px;" alt="" />
          </div>
        </div>
      </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <script src="button.js"></script>
  </body>
</html>
