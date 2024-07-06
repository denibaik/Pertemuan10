<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="action.php">
    Nama : <input type="text" name="nama"> <br>
    Email : <input type="text" name="email"> <br>
    Pesan : <textarea name="pesan"> </textarea> <br>
<input type="submit" value="Submit">
</form>
<?php
$nama = $_POST['nama'];
$email = $_POST['email'];
$pesan = $_POST['pesan'];
echo "Nama : <b>$nama</b> <br>";
echo "E-mail : <b>$email</b> <br>";
echo "Pesan : <b>$pesan</b> <br>";
?>
</body>
</html>