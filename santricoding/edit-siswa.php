<?php 
  
  include('koneksi.php');
  
  $id = $_GET['id'];
  
  $query = "SELECT * FROM mahasiswa WHERE nim = $id LIMIT 1";

  $result = mysqli_query($connection, $query);

  $row = mysqli_fetch_array($result);

  ?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <title>Edit Form Mahasiswa</title>
  </head>

  <body>

    <div class="container" style="margin-top: 80px">
      <div class="row">
        <div class="col-md-8 offset-md-2">
          <div class="card">
            <div class="card-header">
              EDIT DATA MAHASISWA
            </div>
            <div class="card-body">
              <form action="update-siswa.php" method="POST">
                
            <div class="form-group">
              <label>NIM</label>
              <input type="text" name="nim" value="<?php echo htmlspecialchars($row['nim']); ?>" placeholder="NIM Mahasiswa" class="form-control">
            </div>

            <div class="form-group">
              <label>Nama Lengkap</label>
            <input type="text" name="nama" value="<?php echo htmlspecialchars($row['nama']); ?>" placeholder="Nama Lengkap" class="form-control">
            </div>

            <div class="form-group">
                    <label>Angkatan</label>
                    <select id="angkatan-select" name="angkatan" class="form-control">
                    <option value="" disabled selected>Angkatan</option>
                    <option value="2020">2020</option>
                    <option value="2021">2021</option>
                    <option value="2022">2022</option>
                    <option value="2023">2023</option>
                    <option value="2024">2024</option>
                    </select>
            </div>
            
            <div class="form-group">
              <label>No Daftar</label>
            <input type="text" name="no_daftar" value="<?php echo htmlspecialchars($row['no_daftar']); ?>" placeholder="No Daftar" class="form-control">
            </div>

            <div class="form-group">
              <label>Tarif SPI</label>
            <input type="text" name="tarif_spi" value="<?php echo htmlspecialchars($row['tarif_spi']); ?>" placeholder="Tarif SPI" class="form-control">
            </div>

            <div class="form-group">
              <label>Tarif UKT Awal</label>
            <input type="text" name="tarif_ukt_awal" value="<?php echo htmlspecialchars($row['tarif_ukt_awal']); ?>" placeholder="Ukt Awal" class="form-control">
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