<?php 
  session_start();
  include "conn.php";

  if(isset($_COOKIE['id']) && isset($_COOKIE['uid'])){
    $id = $_COOKIE['id'];
    $uname = $_COOKIE['uid'];
    $query = mysqli_query($koneksi,"SELECT * FROM tb_pengguna WHERE id_pengguna = $id");

    $ambil_data = mysqli_fetch_array($query);
    $hash = hash("sha256",$ambil_data['nama_pengguna']);
    if($hash == $uname){
      $_SESSION['uid'] = $ambil_data['nama_pengguna'];
    }
  }
 
  if(isset($_SESSION['uid'])){
  
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />

    <title>Hello, world!</title>
  </head>
  <body>
    <!-- awal dari navbar -->
    <nav class="navbar navbar-light shadow-sm">
      <div class="container-fluid">
        <a href="logout.php" class="btn btn-outline-primary rounded-pill ms-auto" style="margin-right: 3%">Logout</a>
      </div>
    </nav>
    <!-- akhir dari navbar -->

    <!-- awal dari container -->
    <div class="container mt-5">
      <table class="table table-hover table-bordered">
        <thead>
          <tr class="text-center table-success">
            <th scope="col">Kolom 1</th>
            <th scope="col">Kolom 2</th>
            <th scope="col">Kolom 3</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit sequi aperiam perspiciatis iusto beatae, laudantium atque aliquid voluptatem molestiae corrupti, mollitia asperiores corporis reprehenderit tempora illo error quis
              dolor iste.
            </td>
            <td>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum nemo dolorum earum, reprehenderit molestias aliquid praesentium quibusdam. Adipisci perferendis eveniet aut repellat sequi? Exercitationem, reprehenderit
              recusandae non eos amet eaque?
            </td>
            <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem sapiente aperiam facilis cumque dicta itaque ipsum iste maiores officia magni dolores tenetur saepe, vitae odit eveniet natus obcaecati quidem totam.</td>
          </tr>
          <tr class="table-primary">
            <td>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit sequi aperiam perspiciatis iusto beatae, laudantium atque aliquid voluptatem molestiae corrupti, mollitia asperiores corporis reprehenderit tempora illo error quis
              dolor iste.
            </td>
            <td>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum nemo dolorum earum, reprehenderit molestias aliquid praesentium quibusdam. Adipisci perferendis eveniet aut repellat sequi? Exercitationem, reprehenderit
              recusandae non eos amet eaque?
            </td>
            <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem sapiente aperiam facilis cumque dicta itaque ipsum iste maiores officia magni dolores tenetur saepe, vitae odit eveniet natus obcaecati quidem totam.</td>
          </tr>
          <tr>
            <td>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit sequi aperiam perspiciatis iusto beatae, laudantium atque aliquid voluptatem molestiae corrupti, mollitia asperiores corporis reprehenderit tempora illo error quis
              dolor iste.
            </td>
            <td>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum nemo dolorum earum, reprehenderit molestias aliquid praesentium quibusdam. Adipisci perferendis eveniet aut repellat sequi? Exercitationem, reprehenderit
              recusandae non eos amet eaque?
            </td>
            <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem sapiente aperiam facilis cumque dicta itaque ipsum iste maiores officia magni dolores tenetur saepe, vitae odit eveniet natus obcaecati quidem totam.</td>
          </tr>
          <tr class="table-primary">
            <td>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit sequi aperiam perspiciatis iusto beatae, laudantium atque aliquid voluptatem molestiae corrupti, mollitia asperiores corporis reprehenderit tempora illo error quis
              dolor iste.
            </td>
            <td>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum nemo dolorum earum, reprehenderit molestias aliquid praesentium quibusdam. Adipisci perferendis eveniet aut repellat sequi? Exercitationem, reprehenderit
              recusandae non eos amet eaque?
            </td>
            <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem sapiente aperiam facilis cumque dicta itaque ipsum iste maiores officia magni dolores tenetur saepe, vitae odit eveniet natus obcaecati quidem totam.</td>
          </tr>
        </tbody>
      </table>
    </div>
    <!-- akhir dari container -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>
<?php 
  }
  else{
    header("Location: login.php");
  }
?>