<?php
echo "hasil pencarian";
mysqli_connect("localhost","root","");
mysqli_select_db("jurnal7");

$sql = "SELECT * FROM form WHERE nim like'%$cari%'";
$hasil = mysqli_query($sql);
$jumlah = mysqli_num_rows($hasil);
if($jumlah>0){
echo "string";
}