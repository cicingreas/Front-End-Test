$(document).ready(function () {
    let table = $('#productTable').DataTable(); //Inisialisasi DataTable

    //Simpan di Modal
    $('#saveProductBtn').click(function () {
        //Ambil data dari form
        let name = $('#name').val().trim();
        let price = $('#price').val().trim();
        let stock = $('#stock').val().trim();

        //Cek field kosong
        if (name === '' || price === '' || stock === '') {
            Swal.fire({
                icon: 'warning',
                title: 'Data belum lengkap!',
                text: 'Semua field wajib diisi.',
                confirmButtonColor: '#3085d6',
                confirmButtonText: 'Kembali'
            });
            return;
        }

        //Tambah data baru ke DataTable
        let currentDate = new Date().toISOString().split('T')[0]; //Format YYYY-MM-DD
        let newId = table.rows().count() + 1; //Generate ID

        table.row.add([
            newId,
            name,
            'Rp ' + parseInt(price).toLocaleString('id-ID'),
            stock,
            currentDate
        ]).draw();

        $('#addProductModal').modal('hide'); //Tutup modal

        $('#addProductForm')[0].reset(); //Reset form

        Swal.fire({ // Notif Sukses
            icon: 'success',
            title: 'Berhasil!',
            text: 'Produk baru berhasil ditambahkan ke tabel.',
            showConfirmButton: false,
            timer: 2000
        });
    });
});
