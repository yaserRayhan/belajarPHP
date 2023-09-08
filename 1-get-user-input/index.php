<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get User Input</title>
</head>
<body>

<h2>Input yang akan dikirim dengan metode GET</h2>
<form method="get">
    Nama : <input type="text" name="nama"><br>
    <button>kirim</button>
</form>
<?php
    //cek apakah ada data nama yang dikirim dengan metode GET
    if (isset($_GET['nama'])) {
        echo 'Hello ' . $_GET['nama']; // concatenasi
    }
?>

<br>
<br>
<br>

<h2>Input yang akan dikirim dengan metode POST</h2>
<form method="post">
    Nama : <input type="text" name="nama"><br>
    <button>kirim</button>
</form>

<?php
    //cek apakah ada data nama yang dikirim dengan metode POST
    if (isset($_POST['nama'])) {
        echo 'Hello ' . $_POST['nama']; //concatenasi
    }
?>
    
</body>
</html>