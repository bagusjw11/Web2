<?php

//Buat Array
$animals = ["kucing", "ayam", "nyamuk", "singa"];
echo $animals[3] . "<br>";
echo $animals[1] . "<br>";

foreach ($animals as $animal) {
    echo $animal . "<br>";
}

// Buat array asosiatif 
$mahasiswa = ["nama"=>"bagus", "jurusan"=>"SI", "semester"=>6];
echo $mahasiswa["jurusan"] . "<br>";

foreach ($mahasiswa as $key=>$value) {
    echo "key nya adalah " . $key . "value:" . $value . "<br>";

}

//Buat array multidimensi
$dosen = [
    ["pak Rojul", "Web"]
    ["Pak Nasrul", "DDP"]
    ["pak Lukman", "OS"]

];
//00 01 10 11 20 21
echo $dosen[0][0];
?>