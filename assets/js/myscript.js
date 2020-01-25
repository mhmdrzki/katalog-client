const flashData = $('.flash-data').data('flashdata');

if (flashData == 'Duplikat') {
    Swal({
        title: 'Gagal Tambah Data',
        text: 'No. Kerangka atau No. Polisi Telah ada.',
        type: 'warning'
    });
}else if(flashData){
    Swal({
            title: 'Data Mobil ',
            text: 'Berhasil ' + flashData,
            type: 'success'
        });
}

// tombol-hapus
$('.tombol-hapus').on('click', function (e) {

    e.preventDefault();
    const href = $(this).attr('href');

    Swal({
        title: 'Apakah anda yakin',
        text: "data mobil akan dihapus",
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Hapus Data!'
    }).then((result) => {
        if (result.value) {
            document.location.href = href;
        }
    })

});