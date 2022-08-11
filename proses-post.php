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

if(isset($_POST['nama']))
{
    // Membuat Variabel
    $alamat_email = $_POST['email'];
    $nama = $_POST['nama'];

    // Menampilkan nilai variabel ke layar 
    echo $alamat_email;
    echo "<br>";
    echo $nama;
}

?>