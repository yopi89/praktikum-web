<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    <title>Data Mahasiswa</title>
  </head>

  <body>

    <div class="container" style="margin-top: 80px">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              DATA MAHASISWA
            </div>
            <div class="card-body">
              <a href="tambah-siswa.php" class="btn btn-md btn-success" style="margin-bottom: 10px">TAMBAH DATA</a>
              <table class="table table-bordered" id="myTable">
                <thead>
                  <tr>
                    <th scope="col">NO.</th>
                    <th scope="col">NIM</th>
                    <th scope="col">NAMA</th>
                    <th scope="col">ANGKATAN</th>
                    <th scope="col">NO DAFTAR</th>
                    <th scope="col">NO VA DAFTAR</th>
                    <th scope="col">NO VA UKT</th>
                    <th scope="col">TARIF SPI</th>
                    <th scope="col">TARIF UKT AWAL</th>
                    <th scope="col">AKSI</th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                      include('koneksi.php');
                      $no = 1;
                      $query = mysqli_query($connection,"SELECT * FROM mahasiswa");
                      while($row = mysqli_fetch_array($query)){
                  ?>

                  <tr>
                      <td><?php echo $no++ ?></td>
                      <td><?php echo $row['nim'] ?></td>
                      <td><?php echo $row['nama'] ?></td>
                      <td><?php echo $row['angkatan'] ?></td>
                      <td><?php echo $row['no_daftar'] ?></td>
                      <td><?php echo $row['no_va_daftar'] ?></td>
                      <td><?php echo $row['no_va_ukt'] ?></td>
                      <td><?php echo $row['tarif_spi'] ?></td>
                      <td><?php echo $row['tarif_ukt_awal'] ?></td>
                      <td class="text-center">
                        <a href="edit-siswa.php?id=<?php echo $row['nim'] ?>" class="btn btn-sm btn-primary">EDIT</a>
                        <a href="hapus-siswa.php?id=<?php echo $row['nim'] ?>" class="btn btn-sm btn-danger">HAPUS</a>
                      </td>
                  </tr>

                <?php } ?>
                </tbody>
              </table>
            </div>
          </div>
      </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script>
      $(document).ready( function () {
          $('#myTable').DataTable();
      } );
    </script>
  </body>
</html>