

<div class="container-fluid">
    <h1 class="fs-2">Rekapan Pembayaran SPP</h1>

    <table id="example" class="table table-bordered" style="width:100%">
        <thead>
            <tr>
                <th class="text-center">No</th>
                <th>Bulan</th>
                <th>Iuran</th>
                <th>Tanggal Pembayaran</th>
            </tr>
        </thead>
        <tbody>
            <?php 
                include __DIR__ . '../../../config/database.php';   

                $rows = mysqli_query($conn, "SELECT * FROM pembayaran_spp ORDER BY id DESC");
                $i = 1;
            ?>
            <?php foreach ($rows as $row) : ?>
            <tr>
                <td class="text-center"><?php echo $i++;  ?></td>
                <td><?php echo $row["bulan"]; ?></td>
                <td><?php echo $row["iuran"]; ?></td>
                <td><?php echo $row["tanggal_pembayaran"]; ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    
</div>