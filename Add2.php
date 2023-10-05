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
    <link rel="stylesheet" href="style.css">
    <title>Daftarjurnalistikalmaata</title>
  </head>

  <body>
  <section class="vh-100">
  <div class="container h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-lg-12 col-xl-11">
        <div class="card text-black" style="border-radius: 25px;">
          <div class="card-body p-md-5">
            <div class="row justify-content-center">
              <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

                <h1 class="text-center fw-bold mb-5 mx-1 mx-md-4 mt-4" style="color:blue;">Sign Up</h1>

                <form class="mx-1 mx-md-4" method="post">

                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                    <label for="NIM">NIM</label>
                     <input type="text" id="NIM" name="NIM" class="form-control" required/>
                     <h9 style="color:red;">* NIM hanya berisi angka</h9>
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                    <label for="Nama">Nama Lengkap</label>
        <input type="text" id="Nama" name="Nama" class="form-control" required>
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                    <label for="Prodi">Pogram Studi</label>
        <input type="text" id="Prodi" name="Prodi" class="form-control" required>
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-key fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                    <label for="Angkatan">Tahun Angkatan</label>
        <select name="Angkatan" id="Angkatan" class="form-control"required>
          <option>Pilih Angkatan</option>
          <option value="2019">2019</option>
          <option value="2020">2020</option>
          <option value="2021">2021</option>
          <option value="2022">2022</option>
          <option value="2023">2023</option>
          <option value="None">Lainya</option>
        </select>
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-key fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                    <label for="No_Hp">No WhatsApp</label>
        <input type="text" id="No_Hp"  name="No_Hp" class="form-control" required>
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-key fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                    <label for="Alasan">Alasan daftar UKM Jurnalistik</label>
        <input type="text" id="Alasan"  name="Alasan" class="form-control" required>
                    </div>
                  </div>

                  <div class="form-check d-flex justify-content-center mb-5">
                    <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3c" />
                    <label class="form-check-label" for="form2Example3">
                      Saya siap jadi bagian dari <a href="#!">UKM Jurnalistik</a>
                    </label>
                  </div>

                  <a href="Index.html" class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                  <input class="btn btn-primary mt-4" type="submit" name="Tambah" value="Sign Up" >
                  </a>

                </form>

              </div>
              <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">

                <img style="display: flexbox;" src="./Asset/img/Premium_Vector___Man_with_laptop_sitting_on_chair_work_from_home_illustration-removebg-preview.png">

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

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
    echo "<script>
    window.location = 'home.html';
    </script>";
  }
  }
?>

  </body>
</html>