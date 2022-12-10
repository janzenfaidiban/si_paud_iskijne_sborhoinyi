<?php
    
    // menampilkan data secara keseluruhan
    function baca() {

        include __DIR__ . '../../config/database.php';   
        
        $sql = "SELECT * FROM user ORDER BY id DESC";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            $no = 1;
            // output data of each row
            
            echo '<table class="table">';
            while($row = $result->fetch_assoc()) {
                echo '
                    <tr>
                        <td>'.$no.'</td>
                        <td>'.$row["nama"].'</td>
                        <td>'.$row["alamat"].'</td>
                        <td>
                            <a href="tampil-detail.php?id='.$row["id"].'" class="btn btn-sm btn-outline-dark"><i class="fa-solid fa-eye"></i> Detail</a>
                            <a href="ubah.php?id='.$row["id"].'" class="btn btn-sm btn-outline-success"><i class="fa-solid fa-pencil"></i> Ubah</a>
                            <a href="hapus.php?id='.$row["id"].'" onclick="return confirm_delete()" class="btn btn-sm btn-outline-danger" onClick="return confirm(Anda yakin ingin hapus?)"><i class="fa-solid fa-trash"></i> Hapus</a>
                        </td>
                    </tr>
                ';
                $no++;
            }
            '</table>';

        } else {
            echo "0 results";
        }

    }

    // menampilkan data secara detail
    function baca_detail(){
        
        include __DIR__ . '../../config/database.php';  
        
        $get_id = $_GET['id'];
        
        $sql = "SELECT * FROM user WHERE id=$get_id";

        $result = $conn->query($sql);


        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
            
              echo '
                <ul class="list-group">
                                
                    <li class="list-group-item">
                        Nama
                        <span class="d-block fw-bold">
                            '. $row["nama"] .'
                        </span>
                    </li>
                    <li class="list-group-item">
                        Alamat
                        <span class="d-block fw-bold">
                            '. $row["alamat"] .'
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

            $nama = $_POST['nama'];
            $alamat = $_POST['alamat'];

            $sql = "INSERT INTO user (nama, alamat) VALUES ('$nama', '$alamat')";

            if($conn->query($sql) === TRUE){
                // echo "Sukses!";
                header('location: tampil.php');
            } else {
                echo "Gagal!";
            }

        } else {
            echo '
                <form action="?proses=tambah" method="post">   

                    <ul class="list-group">

                        <li class="list-group-item">
                            <label for="nama" class="form-label">Nama</label>
                            <input type="text" name="nama" class="form-control form-control-lg" value="">
                        </li>

                        <li class="list-group-item">
                            <label for="alamat" class="form-label">Alamat</label>
                            <input type="text" name="alamat" class="form-control form-control-lg" value="">
                        </li>

                        <li class="list-group-item">
                            <button type="submit" class="btn btn-lg btn-success w-100"><i class="fa-solid fa-plus me-2"></i> Tambah</button>
                        </li>
                        
                    </ul>
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