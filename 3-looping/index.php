<?php

/*
perulangan / looping  penjelasan lengkap ada di readme.txt
*/

//for
echo "for <br>";
for($i=0; $i<5; $i++){
    echo 'hello world <br>';
}

echo '<br>';
echo '<br>';

//while
echo "while <br>";
$status=true;
$teks='a';
while($status){
    echo $teks . '<br>';
    
    $teks=$teks . 'a';

    if(strlen($teks)>10){
        $status=false;
    }
    
}

echo '<br>';
echo '<br>';

//do while
echo "do while <br>";
$i=0;
do{
    echo 'hello world <br>';
    $i++;
}while($i<5);

echo '<br>';
echo '<br>';

//foreach
echo "foreach <br>";
$angka=[1,2,3,4,5,6,7,8,9,10];

$genap=[];
$ganjil=[];

foreach($angka as $a){
    if($a%2==0){
        array_push($genap, $a);
    }else{
        array_push($ganjil, $a);
    }
}

echo 'genap : ';
foreach($genap as $g){
    echo $g . ' ';
}

echo '<br>';

echo 'ganjil : ';
foreach($ganjil as $g){
    echo $g . ' ';
}

echo '<br>';

echo '<br>';

$profil=[
    'nama'=>'yaser',
    'umur'=>20,
    'tinggi'=>170.5,
    'sudahMenikah'=>false
];

foreach($profil as $p){
    echo $p . '<br>';
}


echo '<br>';

foreach($profil as $key=>$value){
    echo $key . ' : ' . $value . '<br>';
}



?>