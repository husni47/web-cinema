<?php
  // memanggil file koneksi.php untuk membuat koneksi
include 'connection.php';

  // mengecek apakah di url ada nilai GET id
  if (isset($_GET['id'])) {
    // ambil nilai id dari url dan disimpan dalam variabel $id
    $id = ($_GET["id"]);

    // menampilkan data dari database yang mempunyai id=$id
    $query = "SELECT * FROM movie WHERE id='$id'";
    $result = mysqli_query($conn, $query);
    // jika data gagal diambil maka akan tampil error berikut
    if(!$result){
      die ("Query Error: ".mysqli_errno($conn).
         " - ".mysqli_error($conn));
    }
    // mengambil data dari database
    $data = mysqli_fetch_assoc($result);
      // apabila data tidak ada pada database maka akan dijalankan perintah ini
       if (!count($data)) {
          echo "<script>alert('Data tidak ditemukan pada database');window.location='home.php';</script>";
       }
  } else {
    // apabila tidak ada data GET id pada akan di redirect ke home.php
    echo "<script>alert('Masukkan data id.');window.location='home.php';</script>";
  }         
  ?>
<!doctype html>
<html>
  <head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="home.php">SDCinema</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="create.php">Create <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Category</a>
                </li>
            </ul>
        </div>
    </nav>


    <div class="container" style="padding: 20px;">
        <h2>Edit Information Film :</h2>
        <form method="POST" action="update.php" enctype="multipart/form-data" class="needs-validation" novalidate>
            <input name="id" value="<?php echo $data['id']; ?>"  hidden />
            <div class="form-group">
                <label for="title">Title:</label>
                <input type="text" class="form-control" name="title" value="<?php echo $data['title']; ?>" required>
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Please fill out this field.</div>
            </div>

            <div class="form-group">
                <label for="genre">Genre:</label>
                <input type="text" class="form-control" name="genre" value="<?php echo $data['genre']; ?>" required>
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Please fill out this field.</div>
            </div>

            <div class="form-group" hidden>
                <label for="trailer">Trailer:</label>
                <input type="text" class="form-control" name="trailer" value="<?php echo $data['trailer']; ?>"  required>
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Please fill out this field.</div>
            </div>

            <div class="form-group">
                <label for="production">Production:</label>
                <input type="text" class="form-control" name="production"  value="<?php echo $data['production']; ?>" required>
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Please fill out this field.</div>
            </div>

            <div class="form-group">
                <label for="cast">Cast:</label>
                <input type="text" class="form-control" name="cast"  value="<?php echo $data['cast']; ?>" required>
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Please fill out this field.</div>
            </div>

            <div class="form-group">
                <label for="synopsis">Synopsis:</label>
                <input type="textarea" rows="5" class="form-control" name="synopsis"  value="<?php echo $data['synopsis']; ?>" required>
                <!-- <textarea class="form-control" rows="5" name="synopsis" value="<?php echo $data['synopsis']; ?>"></textarea> -->
            </div>

            <div class="form-group">
                <label>Image:</label><br>
                <img src="image/<?php echo $data['img']; ?>" style="width: 120px;float: left;margin-bottom: 5px;"><br><br><br><br><br><br><br><br>
                <input type="file" name="img" required="" />
                <p style="color: red">Ekstensi yang diperbolehkan .png | .jpg | .jpeg </p>
                <i style="float: left;font-size: 11px;color: red">Abaikan jika tidak merubah gambar produk</i><br><br>
            </div>
            
            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
            <a href="home.php" class="btn btn-danger">Cancel</a>
        </form>
    </div>
    
</body>
</html>