<?php

$anggota = [
    ['nama' => 'Toni', 'gol_darah' => 'A'],
    ['nama' => 'Sobi', 'gol_darah' => 'B'],
    ['nama' => 'Cobi', 'gol_darah' => 'C']
];

$data = serialize($anggota);
file_put_contents("data.txt", $data);

$output = file_get_contents("data.txt");
$hasil = unserialize($output);
print_r($hasil);

$data = json_encode($anggota);
file_put_contents("data.txt", $data);

$output = file_get_contents("data.txt");
$hasil = json_decode($output, true);
print_r($hasil);
