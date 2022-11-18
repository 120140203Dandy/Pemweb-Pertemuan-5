<?php

    include "koneksi.php";

?>
<table border="1">
    <tr>
        <td>No.</td>
        <td>NIM</td>
        <td>NAMA</td>
        <td>Prodi</td>

    </tr>
    <?php

        $tampil = mysqli_query($mysqli, "select * from mahasiswa");
        $no = 1;
        while($hasil = mysqli_fetch_array($tampil)){
    ?>
    <tr>
        <td><?php echo $no++; ?></td>
        <td><?php echo $hasil['NIM']; ?></td>
        <td><?php echo $hasil['NAMA']; ?></td>
        <td><?php echo $hasil['Prodi']; ?></td>
    </tr>
    <?php
        }
    ?>
</table>