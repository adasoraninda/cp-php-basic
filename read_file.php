<?php

$message = "Selamat datang";
file_put_contents("content.txt", $message);

$isi_file = file_get_contents("content.txt");
echo $isi_file;
