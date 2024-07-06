<!DOCTYPE html>
<html>
<head>
    <title>Kalkulator Sederhana</title>
</head>
<body>
    <h2>Kalkulator Sederhana</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        Nama Anda: <input type="text" name="nama"><br><br>
        Masukkan Angka Pertama (1-10): <input type="number" name="angka1" min="1" max="10" required><br><br>
        Masukkan Angka Kedua (1-10): <input type="number" name="angka2" min="1" max="10" required><br><br>
        Pilih Operasi:
        <select name="operator">
            <option value="tambah">+</option>
            <option value="kurang">-</option>
            <option value="kali">*</option>
            <option value="bagi">/</option>
        </select>
        <br><br>
        <input type="submit" name="hitung" value="Hitung">
    </form>

    <?php
    // Proses perhitungan jika tombol "Hitung" diklik
    if(isset($_POST['hitung'])){
        $nama = $_POST['nama'];
        $angka1 = $_POST['angka1'];
        $angka2 = $_POST['angka2'];
        $operator = $_POST['operator'];

        // Melakukan operasi aritmatika sesuai operator yang dipilih
        switch ($operator) {
            case 'tambah':
                $hasil = $angka1 + $angka2;
                break;
            case 'kurang':
                $hasil = $angka1 - $angka2;
                break;
            case 'kali':
                $hasil = $angka1 * $angka2;
                break;
            case 'bagi':
                $hasil = $angka1 / $angka2;
                break;
            default:
                $hasil = "Pilih operator terlebih dahulu";
                break;
        }

        // Menampilkan hasil perhitungan
        echo "<br><br>";
        echo "Nama Anda: $nama<br>";
        echo "Hasil dari $angka1 $operator $angka2 adalah $hasil";
    }
    ?>

</body>
</html>
