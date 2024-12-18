<?php
// Definisikan variabel untuk menyimpan teks
$message = "saya menggunakan php";

// Fungsi untuk menampilkan pesan
function tampilkanPesan($pesan) {
    echo "Pesan saat ini: " . $pesan . "<br>";
    echo "Informasi tambahan: Ini adalah teks yang dihasilkan dari sebuah variabel.<br><br>";
}

// Panggil fungsi untuk menampilkan pesan
tampilkanPesan($message);

// Tampilkan pesan lagi dengan penambahan teks
echo "Hasil akhir: " . $message . " dan saya senang mempelajarinya!";
?>
