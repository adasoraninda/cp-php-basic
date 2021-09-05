<?php
// 1. print hello world
echo '<h1>Hello world</h1>';

// 2. Variabel
$nama = 'Ada';

// 3. Mix HTML

// 4. Fungsi
// strtoupper(str);
// phpinfo();
// round();
// var_dump();

// 5. Integer Float

// 6. String
$pesan = "Selamat Datang, ";

// 7. Boolean

// 8. Array
$array = array('Sapi', 'Ayam', 'Kambing');
$array2 = ["Singa", "Harimau", "Gajah"];
$array2[99] = "Monyet";
echo $array2[10] ?? 'Kosong';
echo "<br/>";
print_r($array);
echo "<br/>";
var_dump($array);

echo "<br/>";

// 9. Array Asosiatif
$datadiri['nama'] = 'Ada';
$datadiri['goldarah'] = 'A';
$datadiri['alamat'] = 'Jakarta';

$datadiri = [
    'nama' => 'Ada',
    'goldarah' => 'A',
    'alamat' => 'Jakarta'
];

echo "Nama: " . $datadiri['nama'] . "<br>";
echo "Gol. darah: " . $datadiri['goldarah'] . "<br>";
echo "Alamat: " . $datadiri['alamat'] . "<br>";

// 10. Array multidimensi
$arraymulti = [250, true, ['jeruk', 'apel']];
echo $arraymulti[2][0];
echo "<br>";

$herbivora = ['kambing', 'sapi'];
$karnivora = ['singa', 'harimau'];
$omnivora = ['ayam', 'burung'];

$binatang = [
    'herbivora' => $herbivora,
    'karnivora' => $karnivora,
    'omnivora' => $omnivora
];
echo $binatang['herbivora'][0];

echo "<br>";

// 11. Tipe data null

// 12. Query string GET

// 13. If Else
// 14. If Else If Else
// 15. If bersarang
$nilai = 50;

if ($nilai >= 80) {
    echo 'Nilai A';
} else if ($nilai >= 50) {
    echo 'Nilai B';
} else {
    echo 'Nilai C';
}

echo "<br>";

// 16. Switch
$hari = 0;
switch ($hari) {
    case 0:
        echo 'Minggu';
        break;
    default:
        echo 'Kiamat';
        break;
}

echo "<br>";

// 17. Pengecekan Kondisi ganda
$harga = 1000;
$warna = 'Merah';

if ($harga >= 1000 && $warna == 'Merah') {
    echo 'Beli';
}

echo "<br>";
// 18. Ternary operator

echo ($warna == 'Mera') ? 'Beli' : 'Jangan Beli';

echo "<br>";

// 19. For
// 20. For array
// 21. While
for ($i = 0; $i < 10; $i++) {
    echo $i + 1 . ". Selamat datang! <br>";
}
echo "<br>";

// 22. Foreach
$warna = ['merah', 'biru', 'kuning', 'hijau'];

foreach ($warna as $key => $value) {
    echo "$key. $value<br>";
}
echo "<br>";

// 23. break 
// 24. continue
// 25. Menampilkan data ke tabel
$siswa = [
    [
        'nama' => 'Toni',
        'kelas' => '3A',
        'goldarah' => 'A'
    ],
    [
        'nama' => 'Be',
        'kelas' => '2A',
        'goldarah' => 'B'
    ],
    [
        'nama' => 'Ca',
        'kelas' => '1A',
        'goldarah' => 'O'
    ]
];
print_r($siswa);
// 26. Membuat fungsi sendiri

function cetakPesan($nama = "Ada")
{
    echo "Selamat datang, $nama! <br>";
}

cetakPesan();

// 27. Skup variabel
// 28. Parameter referensi
function kalilipat(&$angka)
{
    $angka = $angka * 2;
}

$x = 5;
kalilipat($x);
echo $x;

// 29. Fungsi return
function luasSegitiga($alas, $tinggi)
{
    return $alas * $tinggi / 2;
}

?>

<html>

<head>
    <title>Mix HTML</title>
</head>

<body>
    <form>
        <input type="text" name="nama"><br>
        <input type="text" name="alamat"><br>
        <input type="submit" value="submit">
    </form>
    <h1> <?php echo $pesan . $_GET['nama'] ?? null; ?></h1>
    <h1> <?php echo 'Tinggal di ' . $_GET['alamat'] ?? null; ?></h1>
    <br>
    <table border="1">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Kelas</th>
            <th>Gol. Darah</th>
        </tr>
        <?php foreach ($siswa as $key => $value) { ?>
            <tr>
                <td><?php echo $key + 1; ?></td>
                <td><?php echo $value['nama']; ?></td>
                <td><?php echo $value['kelas']; ?></td>
                <td><?php echo $value['goldarah']; ?></td>
            </tr>
        <?php } ?>
    </table>
</body>

</html>