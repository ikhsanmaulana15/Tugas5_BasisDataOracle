<?php
    if (isset($_GET['hal'])) {

        if ($_GET['hal']=='jenis_barang') {
          include "style/style_tabel.php";
        }
        elseif ($_GET['hal']=='tambah_jenis_barang') {
          include "style/style2.php";
        }
        elseif ($_GET['hal']=='edit_jenis_barang') {
          include "style/style2.php";
        }
        else
        {
          include "style/style1.php";
        }
    }else{
    include "style/style1.php";
    }
?>