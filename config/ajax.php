<?php

    /**
     *
     */
    class ajax
    {

        private $database;

        function __construct()
        {
            $this->database = $this->koneksi();
        }

        function koneksi()
        {
            return mysqli_connect("localhost", "root", "", "ajax");
        }

        function tampilData()
        {
            $sql    = "SELECT * FROM data";
            $query  = $this->database->query($sql);
            return $query;
        }

        function tambahData($nama, $jenkel, $alamat)
        {
            $query = "INSERT INTO data (nama, jenkel, alamat) VALUES (?, ?, ?)";
            $statement = $this->database->prepare($query);
                $statement->bind_param('sss', $nama, $jenkel, $alamat);
                $statement->execute();
                $statement->close();

        }

        function hapusData($id)
        {
            $query = "DELETE FROM data WHERE id = ?";
            $statement = $this->database->prepare($query);
                $statement->bind_param('i', $id);
                $statement->execute();
                $statement->close();
        }

        function ambilData($ids)
        {
            $query    = "SELECT * FROM data WHERE id = ?";
            $statement = $this->database->prepare($query);
                $statement->bind_param('i', $ids);
                $statement->execute();
                $statement->bind_result($id, $nama, $jenkel, $alamat);
                $arr = null;
                while ($statement->fetch()) {
                    $arr['id']      = $id;
                    $arr['nama']    = $nama;
                    $arr['jenkel']  = $jenkel;
                    $arr['alamat']  = $alamat;
                }
                return $arr;
        }

        function perbaruiData($ids, $nama, $jenkel, $alamat)
        {
            $query = "UPDATE data SET nama = ?, jenkel = ?, alamat = ? WHERE id = ?";
            $statement = $this->database->prepare($query);
                $statement->bind_param('sssi', $nama, $jenkel, $alamat, $ids);
                $statement->execute();
                $statement->close();
        }

        function pencarianData($nama)
        {
            $query = "SELECT * FROM data WHERE nama Like ?";
            $param = "%" . $nama . "%";
            $statement = $this->database->prepare($query);
                $statement->bind_param('s', $param);
                $statement->execute();
                $statement->bind_result($id, $nama, $jenkel, $alamat);
                $arr = null;
                while ($statement->fetch()) {
                    $arr[] = array (
                        'id'        => $id,
                        'nama'      => $nama,
                        'jenkel'    => $jenkel,
                        'alamat'    => $alamat
                    );
                }
                $statement->close();
            return $arr;
        }
    }
