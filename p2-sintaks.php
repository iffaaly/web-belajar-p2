<?php
$nama = "Pulpen";   // string
$harga = 2500;      // int
$diskon = 0.1;      // float
$member = true;     // bool

// Langkah 1 & 3
var_dump($nama, $harga, $diskon, $member);
$qty = 3;
$total = $harga * $qty * (1 - $diskon);
echo "<p>Total bayar: Rp " . number_format($total, 0, ',', '.') . "</p>";

// Tambahan untuk Langkah 4 (Uji beda kutip)
echo "<p>Barang: $nama</p>";  // Membaca isi variabel ($nama menjadi Pulpen)[cite: 15]
echo '<p>Barang: $nama</p>';  // Dicetak mentah apa adanya (tertulis $nama)[cite: 15]
?>  
// Tantangan: Konversi Suhu
$celcius = 30; // Kamu bisa ubah angkanya
$fahrenheit = ($celcius * 9/5) + 32;
$kelvin = $celcius + 273.15;

echo "<h3>Konversi Suhu</h3>";
echo "<p>Suhu Celcius: $celcius &deg;C</p>";
echo "<p>Fahrenheit: " . round($fahrenheit, 1) . " &deg;F</p>";
echo "<p>Kelvin: " . round($kelvin, 1) . " K</p>";
