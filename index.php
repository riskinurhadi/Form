<?php
include 'koneksi.php';
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
      crossorigin="anonymous"
    />
    <title>Data Baru</title>
  </head>

  <body>
    <div class="container mt-5">
    <a href='Add.php' class='btn btn-primary btn-md'>Tambah</a>
    <a href='Add2.php' class='btn btn-success btn-md'>Daftar Baru</a>
      <br />
      <h3 align="center">DATA MAHASISWA</h3>
      <table class="table table-striped table-hover">
        <thead class="table-dark">
          <th>NIM</th>
          <th>Nama</th>
          <th>Prodi</th>
          <th>Angkatan</th>
          <th>No Hp</th>
          <th>Alasan</th>
          <th>Tindakan</th>
        </thead>
<?php
$sqlGet = "SELECT * FROM peserta";
$query = mysqli_query($conn, $sqlGet);

while($data = mysqli_fetch_array($query)) {
  echo "
  <tbody>
          <tr>
            <td>$data[NIM]</td>
            <td>$data[Nama]</td>
            <td>$data[Prodi]</td>
            <td>$data[Angkatan]</td>
            <td>$data[No_Hp]</td>
            <td>$data[Alasan]</td>
            <td>
            <div class='row'>
              <div class='col'>
                <a href='' class='btn btn-sm btn-warning'>Update</a>
              </div>
              <div class='col'>
                <a href='' class='btn btn-sm btn-danger'>Delete</a>
              </div>
            </div>
            </td>
          </tr>
        </tbody>
  ";
}
?>

        
      </table>
    </div>

  </body>
</html>
