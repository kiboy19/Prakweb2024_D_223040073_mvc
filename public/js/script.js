$(function() {
    $('.tombolTambahData').on('click', function () {
        $('#formModalLabel').html('Tambah Data Mahasiswa');
        $('.modal-footer button[type=submit]').html('Tambah Data');
        $('.modal-body form').attr('action', 'http://localhost/prakweb2024_C_223040040/phpmvc/public/mahasiswa/ubah/')
    });
    $('.tampilModalUbah').on('click', function()  {
        $('#formModalLabel').html('Ubah Data Mahasiswa');
        $('.modal-footer button[type=submit]').html('ubah Data');
        const id = $(this).data('id');
        $.ajax({
            url: 'http://localhost/prakweb2024_C_223040040/phpmvc/public/mahasiswa/getubah',
            data: {id : id},
            method: 'post',
            dataType: 'json',
            succes: function(data) {
                $('#nama').val(data.nama);
                $('#nrp').val(data.nrp);
                $('#email').val(data.email);
                $('#jurusan').val(data.jurusan);
                $('#id').val(data.id);
            }
        });
    });
});