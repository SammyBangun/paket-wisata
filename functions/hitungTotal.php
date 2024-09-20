<script>
    function hitungTotal() {
        const pelayanan = document.querySelectorAll('input[name="pelayanan[]"]:checked');
        let totalHarga = 0;

        // Calculate total harga of selected services
        pelayanan.forEach((item) => {
            totalHarga += parseInt(item.value, 10);
        });

        // Get values for waktu and jumlahPeserta
        const waktuPelaksanaan = parseInt(document.getElementById('waktuPelaksanaan').value, 10) || 1;
        const jumlahPeserta = parseInt(document.getElementById('jumlahPeserta').value, 10) || 1;

        // Calculate total tagihan
        const totalTagihan = waktuPelaksanaan * jumlahPeserta * totalHarga;

        // Set values to respective fields
        document.getElementById('hargaPaket').value = totalHarga;
        document.getElementById('jumlahTagihan').value = totalTagihan;
    }
</script>