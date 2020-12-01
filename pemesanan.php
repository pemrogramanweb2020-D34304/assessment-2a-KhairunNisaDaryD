<?php
    $nomakanan = $_GET['no'];

    require_once('koneksi.php');

    $sql = "SELECT * FROM makanan WHERE nomakanan = '$nomakanan'";

    $result = mysqli_query($connect, $sql);
    $row = mysqli_fetch_assoc($result);

    $makanan= array( array( "nama makanan" => "",
                           "jumlah makanan"  => 0,
                           "harga makanan" => 0,
                           "total"  => 0)              
    );
    $pesan = array("nama makanan" => $row['namamakanan'],
                    "jumlah makanan" => ""),
                    "harga makanan" => '');


?>