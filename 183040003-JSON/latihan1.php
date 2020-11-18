<?php

$mahasiswa = [
  [
    "nama" => "Verra Oktari",
    "nrp" => "183040004",
    "email" => "Oktari.183040003@mail.unpas.ac.id"
  ],
  [
    "nama" => "Erik Doank",
    "nrp" => "023040001",
    "email" => "erik@gmail.com"
  ]
];

$data = json_encode($mahasiswa);
echo $data;
