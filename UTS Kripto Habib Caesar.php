<!DOCTYPE html>
<html lang="en">
<head>
  <title>Deksripsi Kriptografi Caesar</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container mt-3">
  <h2>Form Dekripsi Pesan</h2>
  <form method="post">
   <div class="input-group mb-3">
    <span class="input-group-text">Pesan yang akan didekripsi : </span>
	<textarea class="form-control" rows="5" id="pesan" name="pesan"></textarea>
   </div>
   <button type="submit" class="btn btn-primary" name="bEncode">Dekripsi Pesannya</button>
  </form>
<?php
if (isset($_POST['bEncode'])) {
	$pesan=$_POST['pesan'];
	$pesanbaru=base64_encode($pesan);
  echo $pesanbaru;

}
?>
 </div>
</body>
</html>