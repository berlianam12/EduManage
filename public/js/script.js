$(function () {
  $('.tombolTambahData').on('click', function () {
    $('#formModalLabel').html('Tambah Data Mahasiswa');
    $('.modal-footer button[type=submit]').html('Tambah Data'); // Pastikan tombol submit diubah kembali ke 'Tambah Data' saat mode tambah data
  });

  $(document).on('click', '.tampilFormEdit', function () {
    $('#formModalLabel').html('Edit Data Mahasiswa');
    $('.modal-footer button[type=submit]').html('Edit Data'); // Mengubah tombol submit menjadi 'Ubah Data' saat mode edit
    $('.modal-body form').attr('action','http://localhost/phpmvc/public/mahasiswa/ubah');

    const id = $(this).data('id');
    
    $.ajax({
      url: 'http://localhost/phpmvc/public/mahasiswa/getUbah',
      data: {id : id},
      method: 'post',
      dataType: 'json',
      success: function(data){
        $('#nama').val(data.nama);
        $('#nim').val(data.nim);
        $('#jurusan').val(data.jurusan);
        $('#id').val(data.id);
      }
    });

    });
});
