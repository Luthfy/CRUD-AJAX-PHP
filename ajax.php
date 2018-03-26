<?php

    require_once 'config/ajax.php';

    $ajax = new ajax();

    switch ($_GET['p']) {
        case 'tampil':
            $td = $ajax->tampilData();
            echo "<table class='table table-hover'>
                    <tr>
                        <th>ID</th>
                        <th>Nama</th>
                        <th>Jenis Kelamin</th>
                        <th>Alamat</th>
                        <th>Aksi</th>
                    </tr>";
            foreach ($td as $result) {
                echo "
                        <tr>
                            <td>".$result['id']."</td>
                            <td>".$result['nama']."</td>
                            <td>".$result['jenkel']."</td>
                            <td>".$result['alamat']."</td>
                            <td><button type='button' onclick=DeleteData(".$result['id'].")>Hapus</button></td>
                        </tr>";
            }
            echo "</table>";
            break;
        case 'tambah':
            $td = $ajax->tambahData($_POST['nama'], $_POST['jenkel'], $_POST['alamat']);
            break;
        case 'hapus':
            $td = $ajax->hapusData($_GET['id']);
            break;
        case 'ambil':
            # code...
            break;
        case 'pencarian':
            $td = $ajax->pencarianData($_GET['kataKunci']);
            echo "<table class='table table-hover'>
                    <tr>
                        <th>ID</th>
                        <th>Nama</th>
                        <th>Jenis Kelamin</th>
                        <th>Alamat</th>
                    </tr>";
            if ($td != null) {
                foreach ($td as $result) {
                    echo "
                            <tr>
                                <td>".$result['id']."</td>
                                <td>".$result['nama']."</td>
                                <td>".$result['jenkel']."</td>
                                <td>".$result['alamat']."</td>
                            </tr>";
                }
            } else {
                echo "
                    <tr>
                        <td colspan='4'>Data tidak ditemukan</td>
                    </tr>";
            }

            echo "</table>";
            break;
        default:
            # code...
            break;
    }

 ?>
