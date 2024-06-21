<?php 
  
  include('koneksi.php');
  
  $id = $_GET['id'];
  
  $query = "SELECT * FROM tbl_guru WHERE idguru = $id LIMIT 1";

  $result = mysqli_query($connection, $query);

  $row = mysqli_fetch_array($result);

  ?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <title>Edit Guru</title>
  </head>

  <body>

    <div class="container" style="margin-top: 80px">
      <div class="row">
        <div class="col-md-8 offset-md-2">
          <div class="card">
            <div class="card-header">
              EDIT GURU 
            </div>
            <div class="card-body">
              <form action="update-guru.php" method="POST">
                

                <div class="form-group">
                  <label>NUPTK</label>
                  <input type="teks" name="nuptk" value="<?= $row['nuptk'] ?>" placeholder="Masukkan NISN Siswa" class="form-control" disabled>
                  <input type="hidden" name="idguru" value="<?= $row['idguru'] ?>">
                </div>

                <div class="form-group">
                  <label>Nama Lengkap</label>
                  <input type="text" name="nama" value="<?=  $row['nama'] ?>" placeholder="Masukkan Nama Siswa" class="form-control">
                </div>


                <div class="form-group">
                  <label>Golongan</label>
                  <select name="golongan" id="golongan">
                     <option value="III/A">III/A</option>
                     <option value="III/B">III/B</option>
                     <option value="III/C">III/C</option>
                     <option value="III/D">III/D</option>
                     <option value="IIV/A">IIV/A</option>
                  </select>
                </div>

                <div class="form-group">
                  <label for="">Jenis Kelamin</label><br>

                  <input type="radio" value="L" name="gender">
                  <label for="">Laki-laki</label><br>

                  <input type="radio" value="P" name="gender">
                  <label for="">Perempuan</label>
                </div>

                <button type="submit" class="btn btn-success">UPDATE</button>
                <button type="reset" class="btn btn-warning">RESET</button>

              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  </body>
</html>