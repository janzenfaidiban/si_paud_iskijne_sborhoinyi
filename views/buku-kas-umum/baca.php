

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        
        <h1 class="h2 fw-bold">Buku Kas Umum</h1>

        <div class="btn-toolbar mb-2 mb-md-0">
            <a href="./cetak/?data=buku-kas-umum" target="_blank" class="btn btn-sm btn-outline-dark me-2">
                <span data-feather="printer" class="align-text"></span> Cetak
            </a>
            <a href="?page=buku-kas-umum&action=tambah" class="btn btn-sm btn-dark">
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
                                        <th>Bulan</th>
                                        <th>Uraian</th>
                                        <th>Penerimaan</th>
                                        <th>Pengeluaran</th>
                                        <th></th>
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
                                        <td><?php echo $i++; ?></td>
                                        <td><?php echo $row["tanggal"]; ?></td>
                                        <td><?php echo $row["uraian"]; ?></td>
                                        <td><?php if($row["penerimaan"] != ''){echo 'Rp '. number_format($row["penerimaan"]);} else {echo '';} ?></td>
                                        <td><?php if($row["pengeluaran"] != ''){echo 'Rp '. number_format($row["pengeluaran"]);} else {echo '';} ?></td>
                                        <td>
                                            <a href="?page=buku-kas-umum&action=detail&id=<?php echo $row["id"];  ?>" class="btn btn-sm btn-outline-dark"><span data-feather="eye" class="align-text"></span></a>
                                            <a href="?page=buku-kas-umum&action=ubah&id=<?php echo $row["id"];  ?>" class="btn btn-sm btn-outline-success"><span data-feather="edit" class="align-text"></span></a>
                                            <a href="./process/buku-kas-umum/hapus.php?id=<?php echo $row["id"];  ?>" onclick="return confirm_delete()" class="btn btn-sm btn-outline-danger" onClick="return confirm(Anda yakin ingin hapus?)"><span data-feather="trash" class="align-text"></span></a>
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