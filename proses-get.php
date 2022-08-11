<?php 

// echo $_POST['email'];
// echo "<br>";
// echo $_POST['nama'];

/* 
    Fungsi isset() memeriksa apakah suatu
    variabel disetel. 
    yang berarti variabel tersebut harus 
    dideklarasikan dan bukan null.
*/

if(isset($_GET['nama']))
{
    // Membuat Variabel
    $alamat_email = $_GET['email'];
    $nama = $_GET['nama'];

    // Menampilkan nilai variabel ke layar 
    echo $alamat_email;
    echo "<br>";
    echo $nama;
}

?>