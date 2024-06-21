<!doctype html>
  <html lang="en">
    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
      <title>Tambah Mahasiswa</title>
    </head>

    <body>

      <div class="container" style="margin-top: 80px">
        <div class="row">
          <div class="col-md-8 offset-md-2">
            <div class="card">
              <div class="card-header">
                TAMBAH MAHASISWA
              </div>
              <div class="card-body">
                <form action="simpan-siswa.php" method="POST">
                  
                <div class="form-group">
              <label>NIM</label>
              <input type="text" name="nim" placeholder="Masukkan NIM" class="form-control">
            </div>

            <div class="form-group">
              <label>Nama Lengkap</label>
            <input type="text" name="nama" placeholder="Masukkan Nama" class="form-control">
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
            <input type="text" name="no_daftar" placeholder="Masukkan No Daftar" class="form-control">
            </div>

            <div class="form-group">
              <label>Tarif SPI</label>
            <input type="text" name="tarif_spi" placeholder="Masukkan Tarif SPI" class="form-control">
            </div>

            <div class="form-group">
              <label>Tarif UKT Awal</label>
            <input type="text" name="tarif_ukt_awal" placeholder="Masukkan Ukt Awal" class="form-control">
            </div>
                  
                  <button type="submit" class="btn btn-success">SIMPAN</button>
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