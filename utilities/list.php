<?php
include('../config/koneksi.php');
include('../config/link.php');

$sql = "SELECT * FROM report";
$result = $conn->query($sql);

$data = [];
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $data[] = $row;
    }
}

$total_orders = count($data);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Pemesanan Paket Wisata</title>
    <link rel="stylesheet" href="../style/styling.css">
</head>

<body>
    <?php
    include('../config/jumbotron.php');
    include('../config/nav.php');
    include('../config/popup.php');
    include('../config/alertbox.php');
    include('../config/modal.php');

    ?>
    <div class="container-fluid mt-5 px-4">
        <h2>Data Pemesanan Paket Wisata</h2>

        <!-- <div class="w-25 mb-3">
            <form action="cari.php" method="GET" class="h-10 input-group">
                <input type="text" name="key" class="form-control" placeholder="Ketikan pencarian...">
                <button type="submit" class="btn btn-primary">
                    <i class="fa fa-search"></i>
                </button>
            </form>
        </div> -->
        <a href="input.php" class="btn btn-success mb-5"><i class="fa fa-plus"></i> Input Pesanan Baru</a>

        <?php if (!empty($data)) : ?>
            <!-- Menampilkan data dalam bentuk tabel HTML -->
            <table class='table table-bordered border-primary border-opacity-25'>
                <thead class='thead-dark table-primary'>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Phone</th>
                        <th>Jumlah Peserta</th>
                        <th>Jumlah Hari</th>
                        <th>Akomodasi</th>
                        <th>Transportasi</th>
                        <th>Service/Makanan</th>
                        <th>Harga Paket</th>
                        <th>Total Tagihan</th>
                        <th class="text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    foreach ($data as $row) :
                        // Convert pelayanan string to an array
                        $pelayanan = explode(',', $row['pelayanan']);
                        $akomodasi = in_array("1000000", $pelayanan) ? "Y" : "N";
                        $transportasi = in_array("1200000", $pelayanan) ? "Y" : "N";
                        $servisMakan = in_array("500000", $pelayanan) ? "Y" : "N";
                    ?>
                        <tr>
                            <td><?php echo $no; ?></td>
                            <td><?php echo htmlspecialchars($row['nama_pemesanan']); ?></td>
                            <td><?php echo htmlspecialchars($row['no_hp']); ?></td>
                            <td><?php echo htmlspecialchars($row['jumlah_peserta']); ?></td>
                            <td><?php echo htmlspecialchars($row['waktu']); ?></td>
                            <td><?php echo $akomodasi; ?></td>
                            <td><?php echo $transportasi; ?></td>
                            <td><?php echo $servisMakan; ?></td>
                            <td><?php echo number_format($row['harga_paket'], 0, ',', '.'); ?></td>
                            <td><?php echo number_format($row['jumlah_tagihan'], 0, ',', '.'); ?></td>
                            <td class="d-flex justify-content-evenly px-0 mx-0">
                                <a href="#" class="btn btn-sm btn-primary btn-detail mx-1 my-1" data-bs-toggle="modal" data-bs-target="#detailModal" data-id="<?php echo $row['id']; ?>">
                                    <i class="fa fa-search"></i> Detail
                                </a>
                                <a href='edit.php?id=<?php echo $row['id']; ?>' class='btn btn-sm btn-warning text-white mx-1 my-1'><i class="fa fa-edit"></i> Edit</a>
                                <a href='#hapus' id="hapus" onclick="confirmDelete(<?php echo $row['id']; ?>)" class='btn btn-sm btn-danger mx-1 my-1'><i class="fa fa-remove"></i> Hapus</a>
                            </td>
                        </tr>
                        <?php $no++; ?>
                    <?php endforeach; ?>
                </tbody>
            </table>


            <p>Total: <?php echo $total_orders; ?> pesanan</p>
        <?php else : ?>
            <p class='text-muted'>Tidak ada data yang tersedia.</p>
        <?php endif; ?>
        <br>
        <?php include('../config/footer.php'); ?>
    </div>
    <script>
        $(document).ready(function() {
            $('.btn-detail').click(function() {
                var id = $(this).data('id');
                $.ajax({
                    url: 'detail.php',
                    type: 'POST',
                    data: {
                        id: id
                    },
                    success: function(response) {
                        // Memasukkan data yang diterima ke dalam modal
                        $('#detailModal .modal-body').html(response);
                        $('#detailModal').on('hidden.bs.modal', function() {
                            $('.modal-backdrop').remove();
                            $('body').removeClass('modal-open');
                        });

                        var myModal = new bootstrap.Modal(document.getElementById('detailModal'));
                        myModal.show();
                    },
                    error: function(xhr, status, error) {
                        console.error('AJAX Error:', status, error);
                        alert('Gagal mengambil data. Coba lagi.');
                    }
                });
            });
        });
    </script>


</body>

</html>