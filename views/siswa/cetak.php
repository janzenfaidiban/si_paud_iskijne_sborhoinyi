

    <table id="example" class="table table-bordered" style="width:100%">
        <thead>
            <tr>
                <th class="text-center">No</th>
                <th class="text-center">Foto</th>
                <th>Nama Lengkap</th>
                <th>NIM</th>
                <th>Tempat, Tanggal Lahir</th>
                <th>Jenis Kelamin</th>
            </tr>
        </thead>
        <tbody>
            <?php 
                include __DIR__ . '../../../config/database.php';   

                $rows = mysqli_query($conn, "SELECT * FROM siswa ORDER BY id DESC");
                $i = 1;
            ?>
            <?php foreach ($rows as $row) : ?>
            <tr>
                <td class="text-center"><?php echo $i++;  ?></td>
                <td class="text-center"><img src="../images/siswa/<?php echo $row["foto"] ? $row["foto"] : 'no-image.png';  ?>" alt="User Picture" class="img img-thumbnail" width="50px"></td>
                <td><?php echo $row["nama_lengkap"];  ?></td>
                <td><?php echo $row["nim"];  ?></td>
                <td><?php echo $row["tmp_tgl_lahir"];  ?></td>
                <td><?php echo $row["jenis_kelamin"];  ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>