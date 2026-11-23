<?php
// Drill 1: Deklarasi variabel dan hitung subtotal
$nama = "Pulpen Sinar Pena";
$harga = 2500;
$qty = 4;
$member = true;

$subtotal = $harga * $qty;
echo "<p>Subtotal: Rp " . number_format($subtotal, 0, ',', '.') . "</p>";

// Drill 2: Hitung diskon member jika true
$total = $subtotal;
if ($member) {
    $total = $subtotal * (1 - 0.10); // Diskon 10%
}
echo "<p>Total bayar: Rp " . number_format($total, 0, ',', '.') . "</p>";

// Drill 3: Perbedaan Kutip Ganda vs Kutip Tunggal
echo "<p>Barang: $nama (menggunakan kutip ganda bisa membaca variabel)</p>";
echo '<p>Barang: $nama (menggunakan kutip tunggal menampilkan teks mentah apa adanya)</p>';
?>
