function ShowData(){
  $.ajax({
    type: "GET",
    url: "ajax.php?p=tampil",
    success: function(data){
      $('#table').html(data);
    }
  });
}

function UpdateData(id){
  var idData  = $('#idData'+id).val();
  var nama    = $('#nama'+id).val();
  var jenkel  = $('#jenkel'+id).val();
  var alamat  = $('#alamat'+id).val();
  $.ajax({
    type: "GET",
    url: "ajax.php?p=UpdateData",
    data: "nama="+nama+"&jenkel="+jenkel+"&alamat="+alamat+"&idData="+idData,
    success: function(data){
      alert('Data Berhasil Diubah');
      ShowData();

    }
  });
}
function DeleteData(id){
  $.ajax({
    type: "GET",
    url: "ajax.php?p=hapus",
    data: "id="+id,
    success: function(data){
      alert('Data Berhasil Dihapus');
      ShowData();
    }
  });
}
function Cari(){
  var kataKunci    = $('#kataKunci').val();
  $.ajax({
    type: "GET",
    url: "ajax.php?p=pencarian",
    data: "kataKunci="+kataKunci,
    success: function(data){
      $('#table').html(data);
    }
  });
}
function SaveData(){
  var nama    = $('#nama').val();
  var jenkel  = $('#jenkel').val();
  var alamat  = $('#alamat').val();
  $.ajax({
    type: "POST",
    url: "ajax.php?p=tambah",
    data: "nama="+nama+"&jenkel="+jenkel+"&alamat="+alamat,
    success: function(data){
      ShowData();
      $('#IsiData')[0].reset();
      alert('Data Berhasil Disimpan');
      $('.modal').modal('hide');
    }
  });
}
