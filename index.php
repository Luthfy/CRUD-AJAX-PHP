
<html>
<head>
  <meta charset="utf-8">
  <title>Belajar AJAX</title>
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/bootstrap-theme.min.css">


</head>
<body onload="ShowData()">
  <div class="container">

    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#InsertData">
      Tambah Data
    </button>
    Cari :<input type="text" size="30" id="kataKunci" placeholder="Cari Berdasarkan Nama" onkeyup="Cari()">

    <!-- Modal -->
    <div class="modal fade" id="InsertData" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel">Data Baru</h4>
          </div>
          <div class="modal-body">
            <form id="IsiData">
            <table width="100%">
              <tr>
                <th>Nama Lengkap</th>
                <td>:</td>
                <td><input type="text" name="nama" id="nama" placeholder="Nama Lengkap" class="form-control"> </td>
              </tr>
              <tr>
                <th>Jenis Kelamin</th>
                <td>:</td>
                <td>
                  <select class="form-control" id="jenkel">
                    <option value="L">Laki-Laki</option>
                    <option value="P">Perempuan</option>
                  </select>
                </td>
              </tr>
              <tr>
                <th>Alamat</th>
                <td>:</td>
                <td><textarea name="alamat" class="form-control" id="alamat"></textarea>  </td>
              </tr>
            </table>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
              <button type="button" class="btn btn-primary" onclick="SaveData();">Simpan Data</button>
            </div>
            </form>
          </div>
        </div>
      </div>
    </div>

    <hr>
    <!-- Modal -->

    <div id="table">

    </div>

  </div>
  <script src="assets/js/jquery-3.3.1.min.js" charset="utf-8"></script>
  <script src="assets/js/bootstrap.min.js" charset="utf-8"></script>
  <script src="assets/js/master.js" charset="utf-8"></script>
</body>
</html>
