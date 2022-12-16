<!DOCTYPE html>
<html lang="en">
<head>
    <title>Cetak</title>

    <style>
        @page {
            size: A4 landscape;
        }
    </style>

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="../assets/css/style.css" rel="stylesheet">
    
</head>
<body onload="window.print()">

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
    
</body>
</html>