<?php
// array
$array = Array (
    "0" => Array (
        "id" => "USR1",
        "name" => "Nia Anggriyani",
        "alamat" => "JL. Tlogo Bayem 687A",
		"no-HP"=> "085727875735",
		"matkul"=> ["Desain Manajemen Jaringan","Grafika Komputer","Statistik"]
    ),
    
);

// encode array to json
$json = json_encode(array('data' => $array));

// write json to file
if (file_put_contents("data.json", $json))
    echo "File JSON sukses dibuat...";
else 
    echo "Oops! Terjadi error saat membuat file JSON...";


?>