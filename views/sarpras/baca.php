<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2 fw-bold">Sarpras</h1>

        <div class="btn-toolbar mb-2 mb-md-0">
            <a href="?page=sarpras&action=tambah" class="btn btn-sm btn-dark">
                <span data-feather="plus-square" class="align-text"></span> Tambah
            </a>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-12">

                            <table id="example" class="table table-striped table-hover" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Barang</th>
                                        <th>Jumlah</th>
                                        <th>Kondisi Baik</th>
                                        <th></th>
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
                                        <td><?php echo $i++;  ?></td>
                                        <td><?php echo $row["nama_barang"];  ?></td>
                                        <td><?php echo $row["jumlah"];  ?></td>
                                        <td><?php echo $row["kondisi"];  ?></td>
                                        <td>
                                            <a href="?page=sarpras&action=detail&id=<?php echo $row["id"];  ?>" class="btn btn-sm btn-outline-dark"><span data-feather="eye" class="align-text"></span></a>
                                            <a href="?page=sarpras&action=ubah&id=<?php echo $row["id"];  ?>" class="btn btn-sm btn-outline-success"><span data-feather="edit" class="align-text"></span></a>
                                            <a href="./process/sarpras/hapus.php?id=<?php echo $row["id"];  ?>" onclick="return confirm_delete()" class="btn btn-sm btn-outline-danger" onClick="return confirm(Anda yakin ingin hapus?)"><span data-feather="trash" class="align-text"></span></a>
                                        </td>
                                    </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>


<script type="text/javascript">
    function confirm_delete() {
    return confirm('Anda yakin ingin hapus?');
    }
</script>