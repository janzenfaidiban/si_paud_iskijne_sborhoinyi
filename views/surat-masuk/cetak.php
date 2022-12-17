
<div class="container-fluid">
    <h1 class="fs-2">Rekapan Surat Masuk</h1>

    <table id="example" class="table table-bordered" style="width:100%">
        <thead>
            <tr>
                <th class="text-center">No</th>
                <th>Tanggal Diterima</th>
                <th>Tanggal Surat</th>
                <th>Nomor Surat</th>
                <th>Pengiriman</th>
            </tr>
        </thead>
        <tbody>
            <?php 
                include __DIR__ . '../../../config/database.php';   

                $rows = mysqli_query($conn, "SELECT * FROM surat WHERE jenis_surat = 'masuk' ORDER BY id DESC");
                $i = 1;
            ?>
            <?php foreach ($rows as $row) : ?>
            <tr>
                <td class="text-center"><?php echo $i++;  ?></td>
                <td><?php echo $row["tanggal_diterima"];  ?></td>
                <td><?php echo $row["tanggal_surat"];  ?></td>
                <td><?php echo $row["nomor_surat"];  ?></td>
                <td><?php echo $row["pengirim"];  ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    
</div>