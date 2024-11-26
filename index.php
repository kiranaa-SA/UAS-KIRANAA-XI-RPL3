<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
  <form method="post">
    <center>
    <img  src="logo[1].png" alt="">
    
    <h3>PENGGAJIHAN</h3>
  <h3> GURU/KARYAWAN YAYASAN ASSALAAM</h3>
     <br>
    </center>
  
  <div class="card w-50 mx-auto">
  <div class="card-header">
   Data Penggajihan
  </div>
  <div class="card-body">
    
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">No</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="No" name="no">
  </div>

  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Nama</label>
    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Nama" name="nama">
  </div>

  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Unit Pendidikan</label>
    <select class="form-select" aria-label="Default select example" name="unit">
  <option selected>Unit Pendidikan</option>
  <option value="SD">SD</option>
  <option value="SMP">SMP</option>
  <option value="MA">MA</option>
  <option value="SMA">SMA</option>
  <option value="SMK">SMK</option>
</select>
</div>

<div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Tanggal Gaji</label>
    <input type="date" class="form-control" id="exampleInputPassword1" name="tanggal">
  </div>

 <div class="row">
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title"><center><i>Gaji</i></center></h5>
        <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Jabatan</label>
    <select class="form-select" aria-label="Default select example" name="jabatan">
  <option selected>pilih Jabatan</option>
  <option value="kepala sekolah">Kepala Sekolah</option>
  <option value="wakasek">Wakasek</option>
  <option value="guru">Guru</option>
  <option value="karyawan">Karyawan</option>
</select>
  </div>  

  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Lama Kerja</label>
    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Lama Kerja" name="kerja">
  </div>  

  <label for="exampleInputEmail1" class="form-label">Status Kerja</label>
    <select class="form-select" aria-label="Default select example" name="status">
  <option selected>Pilih Status Kerja</option>
  <option value="Tetap">Tetap</option>
  <option value="Kontrak">Kontrak</option>
</select>
  </div>    
    </div>
  </div>

  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title"><center><i>Potongan</i></center></h5>
        <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">BPJS</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="bpjs">
  </div>
    
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Pinjaman</label>
    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Pinjaman" name="pinjaman">
  </div>  

  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Cicilan</label>
    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Tabungan" name="cicilan">
  </div>  

  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Infaq</label>
    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Lainnya" name="lainnya">
  </div>  

      </div>
    </div>
  </div>
</div>

<br>

<center><button type="Submit" class="btn btn-primary" name="Proses">Proses</button></center>
</form> 
  </div>
</div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>

<?php

if (isset($_POST['Proses'])) {
    $no = $_POST['no'];
    $nama = $_POST['nama'];
    $unit= $_POST['unit'];
    $tanggal = $_POST['tanggal'];
    $jabatan = $_POST['jabatan'];
    $lama_kerja = $_POST['kerja'];
    $status = $_POST['status'];
    $bpjs = $_POST['bpjs'];
    $pinjaman = $_POST['pinjaman'];
    $cicilan = $_POST['cicilan'];
    $infaq = $_POST['lainnya'];
    $gaji = $_POST['jabatan'];
    $bonus = 0;

    switch ($gaji) {
      case 'kepala sekolah' : $gaji = 10000000;
       break;
     case 'wakasek' : $gajji = 7000000;
       break;
     case 'guru' : $gaji = 5000000;
      break;
     case 'karyawan' : $gaji = 2500000;
     break;
     default : 
     $gaji = 0;
     }

     if ($status == 'Tetap') {
      $bonus = 1000000;
    } elseif ($status == 'Kontrak') {
      $bonus = 0;
    }    
 
    $gajibersih = ($gaji+$bonus) - ($bpjs+$pinjaman+$cicilan+$infaq);

   class Gaji{
    public function data($no,$nama,$unit,$tanggal,$jabatan,$lama_kerja,$status,$gaji,$bpjs,$pinjaman,$cicilan,$infaq, $gajibersih,$bonus){
      echo"<center>
      <br>
      <br>
      <div class='card' style='width:30%' align='center'>
  <div class='card-header'>
<b>KIRANA SITI AISAH</b>  </div>
  <div class='card-body'>
    <h5 class='card-title'>STRUCK GAJI</h5>
  <table>
    <tr>
      <td>No<br></td>
      <td>:<br></td>
      <td>$no<br></td>
    </tr>
    <tr>
      <td>Nama<br></td>
      <td>:<br></td>
      <td>$nama<br></td>
    </tr>
    <tr>
      <td>Unit Pendidikan<br></td>
      <td>:<br></td>
      <td>$unit<br></td>
    </tr>
    <tr>
      <td>Tanggal<br></td>
      <td>:<br></td>
      <td>$tanggal<br></td>
    </tr>
    <tr>
      <td>Jabatan<br></td>
      <td>:<br></td>
      <td>$jabatan<br></td>
    </tr>
      <tr>
        <td>Lama Kerja<br></td>
        <td>:<br></td>
      <td>$lama_kerja<br></td>
      </tr>
    <tr>
      <td>Status Kerja <br></td>
      <td>:<br></td>
      <td>$status<br></td>
    </tr>
        <tr>
      <td>Bonus <br></td>
      <td>:<br></td>
      <td>$bonus<br></td>
    </tr>

    <tr>
    <td>Gaji</td>
    <td>:</td>
    <td>$gaji</td>
    </tr>
    <tr>
      <td>BPJS</td>
       <td>:<br></td>
      <td>$bpjs<br></td>
    </tr>
      <tr>
        <td>Pinjaman<br></td>
        <td>:<br></td>
        <td>$pinjaman<br></td>

      </tr>
    <tr>
      <td>Cicilan<br></td>
       <td>:<br></td>
      <td>$cicilan<br></td>
    </tr>
    <tr>
      <td>infaq<br></td>
      <td>:<br></td>
      <td>$infaq<br></td>
    </tr>
    <tr>
      <td>Total gaji <br></td>
      <td>:</td>
      <td>$gajibersih</td>
    </tr>
  </table>
    </div>
</div>
<br>
<br>
</center>
";
    }
   } 

  $cetak = new Gaji();

  echo $cetak->data($no,$nama,$unit,$tanggal,$jabatan,$lama_kerja,$status,$gaji,$bpjs,$pinjaman,$cicilan,$infaq, $gajibersih,$bonus);
}
?>
