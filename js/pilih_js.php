<?php
    if (isset($_GET['hal'])) {

        if ($_GET['hal']=='jenis_barang') {
          include "js/js_tabel.php";
        }
        elseif ($_GET['hal']=='tambah_jenis_barang') {
          include "js/js2.php";
        }
        elseif ($_GET['hal']=='edit_jenis_barang') {
          include "js/js2.php";
        }
       else
        {
          include "js/js1.php";
        }

    }else{
    include "js/js1.php";
    }
?>




