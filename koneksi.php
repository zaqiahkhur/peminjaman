<?php
    $host="localhost";
    $user="root";
    $pass="";
    $db="peminjaman_barang";
    $konn= mysqli_connect($host,$user,$pass,$db) or die;

    function tampil_data($tabel)
    {
        Global $konn;
        $sql=mysqli_query($konn,"select*from $tabel");
        $rows=[];
        while($row=mysqli_fetch_assoc($sql))
        {
            $rows[]=$row;
        }
        return $rows;
    }

    function delete($tabel,$id)
    {
        Global $konn;
        $data=mysqli_query($konn,"delete from $tabel where id ='$id'");
        return $data;
    }

    function edit($tabel,$id)
    {
        Global $konn;
        $hasil=mysqli_query($konn,"select *from $tabel where id='$id'");
        return $hasil;
    }

    function cek_login($username,$password)
    {
        Global $konn;
        $uname=$username;
        $upass=$password;
        $hasil=mysqli_query($konn,"select*from user where username='$uname' and password='$upass'");
        $cek=mysqli_num_rows($hasil);

        if($cek > 0){
            return true;
        }else{
            return false;
        }
    }

    
?>

