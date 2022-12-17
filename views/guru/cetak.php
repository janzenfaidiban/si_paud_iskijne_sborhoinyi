 <div class="container-fluid">

    <h1 class="fs-2">Rekapan Guru</h1>

    <table id="example" class="table table-bordered" style="width:100%">
        <thead>
            <tr>
                <th class="text-center">No</th>
                <th class="text-center">Foto</th>
                <th>Nama Lengkap</th>
                <th>Alamat Email</th>
                <th>Nomor HP</th>
                <th>Alamat Lengkap</th>
            </tr>
        </thead>
        <tbody>
            <?php 
                include __DIR__ . '../../../config/database.php';   

                $rows = mysqli_query($conn, "SELECT * FROM guru ORDER BY id DESC");
                $i = 1;
            ?>
            <?php foreach ($rows as $row) : ?>
            <tr>
                <td class="text-center"><?php echo $i++;  ?></td>
                <td class="text-center"><img src="../images/guru/<?php echo $row["foto"] ? $row["foto"] : 'no-image.png';  ?>" alt="User Picture" class="img img-thumbnail" width="50px"></td>
                <td><?php echo $row["nama_lengkap"]; ?></td>
                <td><?php echo $row["alamat_email"]; ?></td>
                <td><?php echo $row["nomor_hp"]; ?></td>
                <td><?php echo $row["alamat_lengkap"]; ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    
</div>