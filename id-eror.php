<?php

$namaFile = "/web/documents/histori.txt";

if (!file_exists($namaFile)) {
  die("File tidak ditemukan");
} else {
  $file = fopen($namaFile, "r");
  echo "File berhasil dibaca.";
}
