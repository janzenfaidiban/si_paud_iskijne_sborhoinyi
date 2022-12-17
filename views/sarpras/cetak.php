 <div class="container-fluid">

    <h1 class="fs-2">Rekapan Sarpras</h1>

    <table id="example" class="table table-bordered" style="width:100%">
        <thead>
            <tr>
                <th class="text-center">No</th>
                <th>Nama Barang</th>
                <th>Jumlah</th>
                <th>Letak Barang</th>
            </tr>
        </thead>
        <tbody>
            <?php 
                include __DIR__ . '../../../config/database.php';   

                $rows = mysqli_query($conn, "SELECT * FROM sarpras ORDER BY id DESC");
                $i = 1;
            ?>
            <?php foreach ($rows as $row) : ?>
            <tr>
                <td class="text-center"><?php echo $i++;  ?></td>
                <td><?php echo $row["nama_barang"];  ?></td>
                <td><?php echo $row["jumlah"];  ?></td>
                <td><?php echo $row["letak_barang"];  ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

</div>
