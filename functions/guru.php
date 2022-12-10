<?php
    
    // menampilkan data secara keseluruhan
    function baca() {

        include __DIR__ . '../../config/database.php';   
        
        $sql = "SELECT * FROM guru ORDER BY id DESC";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            $no = 1;
            // output data of each row
            
            echo '
                <div class="table-responsive">
                    <table id="example" class="table table-striped table-hover" style="width:100%">
                        <thead>
                            <tr>
                                <th>Foto</th>
                                <th colspan="2">Nama Lengkap</th>
                            </tr>
                        </thead>
                        <tbody>';
            while($row = $result->fetch_assoc()) {
                echo '
                        
                            <tr>
                                <td>'.$no.'</td>
                                <td>'.$row["nama_lengkap"].'</td>
                                <td>
                                    <a href="?page=guru&action=detail&id='.$row["id"].'" class="btn btn-sm btn-outline-dark"><i class="fa-solid fa-eye"></i> Detail</a>
                                    <a href="?page=guru&action=ubah&id='.$row["id"].'" class="btn btn-sm btn-outline-success"><i class="fa-solid fa-pencil"></i> Ubah</a>
                                    <a href="?page=guru&action=hapus&id='.$row["id"].'" onclick="return confirm_delete()" class="btn btn-sm btn-outline-danger" onClick="return confirm(Anda yakin ingin hapus?)"><i class="fa-solid fa-trash"></i> Hapus</a>
                                </td>
                            </tr>                        
                        
                ';
                $no++;
            }
            '</tbody></table></div>';

        } else {
            echo "0 results";
        }

    }

    // menampilkan data secara detail
    function baca_detail(){
        
        include __DIR__ . '../../config/database.php';  
        
        $get_id = $_GET['id'];
        
        $sql = "SELECT * FROM guru WHERE id=$get_id";

        $result = $conn->query($sql);


        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
            
              echo '
                <ul class="list-group">
                                
                    <li class="list-group-item">
                        Nama
                        <span class="d-block fw-bold">
                            '. $row["nama_lengkap"] .'
                        </span>
                    </li>
                    <li class="list-group-item">
                        <a href="ubah.php?id='. $row["id"] .'" class="btn btn-lg btn-outline-success w-100"><i class="fa-solid fa-pencil me-2"></i> Update</a>
                    </li>
                    
                </ul>
              ';


            }
          } else {
            echo "0 results";
          }
          $conn->close();

    }

    // form tambah
    function tambah(){

        if(isset($_GET['proses']) && $_GET['proses'] == 'tambah'){

            include __DIR__ . '../../config/database.php'; 

            $nama_lengkap = $_POST['nama_lengkap'];

            $sql = "INSERT INTO guru (nama_lengkap) VALUES ('$nama_lengkap')";

            if($conn->query($sql) === TRUE){
                // echo "Sukses!";
                header('location: ?page=guru');
            } else {
                echo "Gagal!";
            }

        } else {
            echo '
            <form action="?page=guru&action=tambah&proses=tambah" method="post">

            <div class="row">
                <div class="col-lg-6">

                    <div class="mb-3">
                        <label for="nama_lengkap" class="form-label text-muted">Nama Lengkap</label>
                        <input type="text" class="form-control" name="nama_lengkap" id="nama_lengkap" placeholder="Nama Lengkap...">
                    </div>                                         

                    <div class="mb-3">
                        <label for="alamat_email" class="form-label text-muted">Alamat Email</label>
                        <input type="text" class="form-control" id="alamat_email" placeholder="Alamat Email...">
                    </div>

                    <div class="mb-3">
                        <label for="nomor_hp" class="form-label text-muted">Nomor HP</label>
                        <input type="text" class="form-control" id="nomor_hp" placeholder="Nomor HP...">
                    </div>

                    <div class="mb-3">
                        <label for="alamat_lengkap" class="form-label text-muted">Alamat Lengkap</label>
                        <textarea name="alamat_lengkap" id="" cols="30" rows="5" class="form-control" placeholder="Alamat Lengkap..."></textarea>
                    </div>

                    <div class="mb-3">
                        <div class="mb-3">
                            <img src="./assets/img/user-0.png" alt="Gambar" class="img img-thumbnail p-3" width="200px">
                        </div>
                        <label for="gambar" class="form-label text-muted">Gambar</label>
                        <input type="file" class="form-control">
                        
                    </div>

                    <div class="py-2">
                        <hr>
                    </div>

                    <div class="mb-3">
                        <button type="submit" class="btn btn-dark">
                            <span data-feather="plus-circle" class="align-text"></span>
                            Tambah
                        </button>
                        <button type="submit" class="btn btn-outline-dark">
                            <span data-feather="x" class="align-text"></span>
                            Batal
                        </button>
                    </div>

                </div>
            </div>

        </form>                
              ';
        }
        
    }

    // form ubah
    function ubah(){

        if(isset($_GET['proses']) && $_GET['proses'] == 'ubah'){

            include __DIR__ . '../../config/database.php';

            $id = $_POST['id'];
            $nama = $_POST['nama'];
            $alamat = $_POST['alamat'];

            $sql = "UPDATE user SET nama = '$nama', alamat='$alamat' WHERE id='$id'";

            $result = $conn->query($sql);

            if($result === TRUE){
                echo "Berhasil Update!";

                //exit(header('Refresh:5; ?menu=user&page=read'));

            } else {
                echo "Gagal Update!";
            }

        } else {

            include __DIR__ . '../../config/database.php';  
        
            $get_id = $_GET['id'];
            
            $sql = "SELECT * FROM user WHERE id=$get_id";

            $result = $conn->query($sql);


            if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) {
                
                echo '
                    <form action="?id=' . $row["id"] . '&proses=ubah" method="post">
                        
                        <input type="hidden" name="id" value="' . $row["id"] . '">    

                        <ul class="list-group">

                            <li class="list-group-item">
                                <label for="nama" class="form-label">nama</label>
                                <input type="text" name="nama" class="form-control form-control-lg" value="' . $row["nama"] . '">
                            </li>

                            <li class="list-group-item">
                                <label for="alamat" class="form-label">alamat</label>
                                <input type="text" name="alamat" class="form-control form-control-lg" value="' . $row["alamat"] . '">
                            </li>

                            <li class="list-group-item">
                                <button type="submit" class="btn btn-lg btn-success w-100"><i class="fa-solid fa-pencil me-2"></i> Update</button>
                            </li>
                            
                        </ul>
                    </form>                   
                ';


                }
            } else {
                echo "0 results";
            }
            $conn->close();

        }       

    }

    // proses hapus
    function hapus(){

        include __DIR__ . '../../config/database.php';   

        $get_id = $_GET['id'];
        
        $sql = "DELETE FROM user WHERE id =$get_id";
        $result = $conn->query($sql);

        if($result === TRUE){
            
            echo "Terhapus!";
            
            // exit(header('Refresh: 5; ?menu=user&page=read'));

        } else {
            echo "Gagal hapus!";
        }

    }