<!DOCTYPE html>
<html lang="en">
<?php 

  include  "includes/config.php";

  if(isset($_POST['simpan'])) {
  	if(isset($_REQUEST['inputID'])) {
  		$KategoriID = $_REQUEST['inputID'];
  	}

  	if (!empty($KategoriID)) {
  		$KategoriID = $_REQUEST['inputID'];
  	}

  	else {
  		?> <h1>Field Harus Terisi!</h1> <?php
  		die('Masukkan Kodenya!');
  	}

  	$KategoriID = $_POST['inputID'];
  	$KategoriNama = $_POST['inputNama'];
  	$Keterangan = $_POST['inputKet'];
  	$Referensi = $_POST['inputRef'];

  	mysqli_query($connection, "insert into kategori values ('$KategoriID', '$KategoriNama', '$Keterangan', '$Referensi')");

  	header("location:FORMSESI2.php");
  }

?>

  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Form</title>
  </head>
  <body>
    <div class="col-sm-1"></div>
    <div class="col-sm-10">
    <form method="POST">
  <div class="form-group row">
    <label for="KategoriID" class="col-sm-2 col-form-label">KategoriID</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="KategoriID" name = "inputID" placeholder="Kategori ID" maxlength="4">
    </div>
  </div>

   <div class="form-group row">
    <label for="KategoriNama" class="col-sm-2 col-form-label">KategoriNama</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="KategoriNama" name = "inputNama" placeholder="Kategori Nama">
    </div>
  </div>

   <div class="form-group row">
    <label for="Keterangan" class="col-sm-2 col-form-label">Keterangan</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="Keterangan" name = "inputKet" placeholder="Keterangan">
    </div>
  </div>

   <div class="form-group row">
    <label for="Referensi" class="col-sm-2 col-form-label">Referensi</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="Referensi" name = "inputRef" placeholder="Referensi">
    </div>
  </div>

  <div class="form-group row">
    <div class="col-sm-2"></div>
    <div class="col-sm-10">
      <button type="submit" class="btn btn-info" value = "Simpan" name = "simpan" >Simpan</button>
      <button type="reset" class="btn btn-success" value = "Batal" name = "batal">Batal</button>
    </div>
  </div>
</form>
</div>

<div class="col-sm-1"></div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>