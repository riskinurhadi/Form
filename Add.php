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
    <div class="w-50 mx-auto border p-3 mt-4">
      <form action="" method="post">
        <label for="NIM">id Peserta</label>
        <input type="text" id="NIM" name="NIM" class="form-control" required/>

        <label for="Nama">Nama</label>
        <input type="text" id="Nama" name="Nama" class="form-control" required>

        <label for="Prodi">Prodi</label>
        <input type="text" id="Prodi" name="Prodi" class="form-control" required>

        <label for="Angkatan">Angkatan</label>
        <select name="Angkatan" id="Angkatan" class="form-control"required>
          <option>Pilih Angkatan</option>
          <option value="2019">2019</option>
          <option value="2020">2020</option>
          <option value="2021">2021</option>
          <option value="2022">2022</option>
          <option value="2023">2023</option>
          <option value="None">Lainya</option>
        </select>

        <label for="No_Hp">No Hp</label>
        <input type="text" id="No_Hp"  name="No_Hp" class="form-control" required>

        <label for="Alasan">Alasan</label>
        <input type="text" id="Alasan"  name="Alasan" class="form-control" required>

        <input class="btn btn-success mt-4" type="submit" name="Tambah" value="Tambah Data" >
      </form>
    </div>

<?php

if (isset($_POST['Tambah'])) 
{
  $NIM = $_POST['NIM'];
  $Nama = $_POST['Nama'];
  $Prodi = $_POST['Prodi'];
  $Angkatan = $_POST['Angkatan'];
  $No_Hp = $_POST['No_Hp'];
  $Alasan = $_POST['Alasan'];

  $sqlInsert = mysqli_query($conn,"INSERT INTO peserta VALUES('$NIM','$Nama','$Prodi','$Angkatan','$No_Hp','$Alasan')");

  if ($sqlInsert) {
    echo "berhasil";
  } else {
    echo "gagal";
  }
}
?>

  </body>
</html>
