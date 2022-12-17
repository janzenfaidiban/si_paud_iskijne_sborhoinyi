

<div class="container-fluid">
    <h1 class="fs-2">Rekapan Buku Kas Umum</h1>

    <table id="example" class="table table-bordered" style="width:100%">
        <thead>
            <tr>
                <th class="text-center">No</th>
                <th>Bulan</th>
                <th>Uraian</th>
                <th>Penerimaan</th>
                <th>Pengeluaran</th>
            </tr>
        </thead>
        <tbody>
            <?php 
                include __DIR__ . '../../../config/database.php';   

                $rows = mysqli_query($conn, "SELECT * FROM buku_kas_umum ORDER BY id DESC");
                $i = 1;
            ?>
            <?php foreach ($rows as $row) : ?>
            <tr>
                <td class="text-center"><?php echo $i++;  ?></td>
                <td><?php echo $row["tanggal"]; ?></td>
                <td><?php echo $row["uraian"]; ?></td>
                <td><?php if($row["penerimaan"] != ''){echo 'Rp '. number_format($row["penerimaan"]);} else {echo '';} ?></td>
                <td><?php if($row["pengeluaran"] != ''){echo 'Rp '. number_format($row["pengeluaran"]);} else {echo '';} ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    
</div>