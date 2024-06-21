<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <title>Tambah Siswa</title>
  </head>

  <body>

    <div class="container" style="margin-top: 80px">
      <div class="row">
        <div class="col-md-8 offset-md-2">
          <div class="card">
            <div class="card-header">
              TAMBAH GURU 
            </div>
            <div class="card-body">
              <form action="simpan-guru.php" method="POST">
                
                <div class="form-group">
                  <label>NUPTK</label>
                  <input type="number" name="nuptk" placeholder="Masukkan NUPTK guru" class="form-control" required>
                </div>

                <div class="form-group">
                  <label>Nama Lengkap</label>
                  <input type="text" name="nama_lengkap" placeholder="Masukkan Nama guru" class="form-control" required>
                </div>

                <div class="form-group">
                  <label>Golongan</label>
                  <select name="golongan" id="golongan" required>
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