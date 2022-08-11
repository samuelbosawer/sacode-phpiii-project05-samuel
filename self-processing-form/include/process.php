<?php
    if(isset($_POST['email']))
    {
        //membuat Variabel
        $alamat_email = $_POST['email'];
        if($_POST['password'] == '123')
        {
            echo "Welcome " .$alamat_email ;
        }else{
            echo "Password atau email salah !!";
        }
    }

?>