<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Ambil input dari form
    $n = $_POST['n'];

    // Validasi input
    if (is_numeric($n) && $n > 0) {
        $n = (int)$n; // Konversi ke integer
        $sum = 0;
        $output = ""; // Untuk menampilkan penjumlahan

        // Looping for untuk menghitung dan menampilkan proses penjumlahan
        for ($i = 1; $i <= $n; $i++) {
            $sum += $i;
            $output .= $i; // Tambahkan angka ke output

            // Tambahkan tanda + jika bukan angka terakhir
            if ($i < $n) {
                $output .= " + ";
            }
        }

        // Tampilkan hasil
        echo "<h2>Hasil Perhitungan</h2>";
        echo "Proses penjumlahan: $output = $sum";
    } else {
        echo "<h2>Error</h2>";
        echo "Mohon masukkan bilangan bulat positif.";
    }
}
?>
