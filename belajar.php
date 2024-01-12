<h1>belajar php</h1>
<form action="" method="get">
    nama;
    <input type="text" name="nama" placeholder="masukkan nama">
    <input type="submit" name="tombol" value="kirim">
</form>
<a href="?coba=rpl&siswa=bintang">klik</a>
<?php
$isi=$_GET["siswa"];
var_dump($isi);
echo '<h2>'.$isi.'</h2>';
echo '<h2>'.persegi(5).'</h2>';
echo '<h2>'.lingkaran(6).'</h2>';
echo '<h2>'.segitiga(3,4).'<h2>';
function persegi($s){
    $sisi=$s*$s;
    return $sisi;
}
function lingkaran($l){
    $luas=3.14*$l*$l;
    return $luas;
}
function segitiga($a,$t){
    $tiga=1/2*$a*$t;
    return $tiga;
}
?>
<p>belajar php</p>