<?php

/*
variable
Penjelasan lengkap ada di readme.txt
*/

$nama; //contoh engga langsung diisi
$umur=20; // contoh yang langsung diisi
$tinggi=170.5;
$sudahMenikah=false;

$nama='yaser Rayhan acbcd 12345';

$namaDepan='yaser';
$namaBelakang='Rayhan';

$namaLengkap=$namaDepan . ' ' . $namaBelakang; //concatenasi

echo $namaLengkap;

echo '<br>';
echo '<br>';
echo '<br>';


/*
array
Penjelasan lengkap ada di readme.txt
*/

//cara lama
$hari=array('senin', 'selasa', 'rabu');

//cara baru
$bulan=['januari', 'februari', 'maret'];

//hasil dari dua array di atas sama saja

//array dengan tipe data berbeda
$arrayTipeData=[123, 'tulisan', false, 3.14];

var_dump($arrayTipeData);

echo '<br>';
echo $arrayTipeData[0];

echo '<br>';
echo $arrayTipeData[1];


echo '<br>';
echo '<br>';
echo '<br>';


//array assosiative
$profil=[
    'nama'=>'yaser',
    'umur'=>20,
    'tinggi'=>170.5,
    'sudahMenikah'=>false
];

var_dump($profil);

echo '<br>';
echo $profil['nama'];

echo '<br>';
echo $profil['umur'];

?>