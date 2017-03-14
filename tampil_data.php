<?php
$json_data=file_get_contents("coba.json");
$obj = json_decode($json_data);
echo "NIM : "; echo $obj->nim;
echo "<br>";
echo "NAMA: "; echo $obj->{'nama'};
echo "<br>";
echo "ALAMAT: ";echo $obj->{'alamat'};
echo "<br>";
echo "HP: ";echo $obj->{'hp'};
echo "<br>";
echo "MAKUL: ";echo $obj->matkul[0];
echo "<br>";
echo "MAKUL: ";echo $obj->matkul[1];
echo "<br>";
echo "MAKUL: ";echo $obj->matkul[2];

?>