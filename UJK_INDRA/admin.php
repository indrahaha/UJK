<?php 
    require_once "Mysql_connection.php";
    // session_start();
?>

<div class="container mt-2">
    <div class="card bg-info">
        <div class="card-header bg-dark text-light">
            <h3>Halaman ADMIN</h3>
        </div>

        
        <div class="card-body">
            <form action="proses_insert_admin.php" method="POST">
            <h4>TABEL OBAT</h4>
            <div class="form-group">
                <label for="ID_Obat">ID OBAT</label>
                <input type="text" name="ID_obat" class="form-control" placeholder="masukkan ID Obat" required />

                </div>
                <div class="form-group">
                    <label for="Kategory"></label>
                    <input type="text" name="kategori" class="form-control" placeholder="masukkan Kategory" required />
                    
                </div>
                <div class="form-group">
                    <label for="Nama_Buku">Nama Buku</label>
                    <input type="text" name="nama_buku" class="form-control" placeholder="Masukkan nama buku" required />
                    
                </div>
                <div class="form-group">
                    <label for="Harga">Harga</label>
                    <input type="number" name="harga" class="form-control" placeholder="masukkan harga" required />
                </div>
                <div class="form-group">
                    <label for="Stok">Stok</label>
                    <input type="number" name="stok" class="form-control" placeholder="masukkan stok" required />
                </div>
                <div class="form-group">
                    <label for="Farmasi">Farmasi</label>
                    <input type="text" name="farmasi" class="form-control" placeholder="Masukkan Farmasi" required />
                    
                </div>
                <div class="form-group">
                    <input class="btn btn-sm btn-primary btn-block" type="submit" value="kirim" />
                </div>
            </form>
            <form action="Proses_insert_admin_farmasi.php" method="POST">
                <h4>TABEL FARMASI</h4>
                <div class="form-group">
                <label for="ID_Farmasi">ID Farmasi</label>
                <input type="text" name="ID_Farmasi" class="form-control" placeholder="masukkan ID Farmasi" required />
                </div>

                <div class="form-group">
                    <label for="Nama">Nama</label>
                    <input type="text" name="Nama"  class="form-control" placeholder="Masukkan nama" required />
                </div>

                <div class="form-group">
                    <label for="Alamat">Alamat</label>
                    <Textarea name="Alamat" class="form-control"></Textarea>
                </div>
                <div class="form-group">
                    <input class="btn btn-sm btn-primary btn-block" type="submit" value="kirim" />
                </div>
            </form>
            <h3 align=center>Data Table Obat</h3>
            
            <table class="table table-bordered" id="myTable">
                <thead>
                    <tr align="center">
                    <th>ID OBAT</th><th>Kategory</th><th>Nama Buku</th><th>Harga</th><th>Stok</th><th>farmasi</th><th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        $sql = "SELECT * FROM tb_obat ORDER BY ID_Obat DESC";
                        $result = $conn->query($sql);

                            if($result->num_rows >0){
                                $no=1;
                                while($row = $result->fetch_assoc()){
                                    ?>
                                    <tr>
                                        <!-- <td><?=$no;?></td> -->
                                        <td><?=$row['ID_Obat']; ?></td>
                                        <td><?=$row['Kategori']; ?></td>
                                        <td><?=$row['Nama_Buku']; ?></td>
                                        <td><?=$row['Harga']; ?></td>
                                        <td><?=$row['Stok']; ?></td>
                                        <td><?=$row['Farmasi']; ?></td>
                                        <td align="center">
                                            <div class="btn-group">
                                            <a href="Proses_delete_admin.php?ID_Obat=<?= $row['ID_Obat']; ?>" class="btn btn-danger btn-sm"
                                                    onclick="return confirm ('Anda akan menghapus record ini?')">
                                                    <i class="fas fa-trash"></i>
                                                </a>
                                                
                                                <a href="Halaman_edit_admin.php?ID_Obat=<?= $row['ID_Obat']; ?>" class="btn btn-secondary disable btn-sm">
                                                    <i class="fas fa-edit"></i>
                                                </a>
                                            </div> 
                                        </td>
                                    </tr>
                                    <?php
                                $no++;

                                }
                            }
                        ?>
                </tbody>
                
            </table>
            <h3 align=center>Data FARMASI</h3>
            
            <table class="table table-bordered" id="myTable">
                <thead>
                    <tr align="center">
                    <th>ID FARMASI</th><th>Nama</th><th>Alamat</th><th>Kota</th><th>Telepon</th><th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        $sql = "SELECT * FROM tb_farmasi ORDER BY ID_Farmasi DESC";
                        $result = $conn->query($sql);

                            if($result->num_rows >0){
                                $no=1;
                                while($row = $result->fetch_assoc()){
                                    ?>
                                    <tr>
                                        <!-- <td><?=$no;?></td> -->
                                        <td><?=$row['ID_Farmasi']; ?></td>
                                        <td><?=$row['Nama']; ?></td>
                                        <td><?=$row['Alamat']; ?></td>
                                        <td><?=$row['Kota']; ?></td>
                                        <td><?=$row['Telephon']; ?></td>
                                        <td align="center">
                                            <div class="btn-group">
                                            <a href="Proses_delete_admin.php?ID_Farmasi=<?= $row['ID_Farmasi']; ?>" class="btn btn-danger btn-sm"
                                                    onclick="return confirm ('Anda akan menghapus record ini?')">
                                                    <i class="fas fa-trash"></i>
                                                </a>
                                                
                                                <a href="Halaman_edit_admin_farmasi.php?ID_Farmasi=<?= $row['ID_Farmasi']; ?>" class="btn btn-secondary disable btn-sm">
                                                    <i class="fas fa-edit"></i>
                                                </a>
                                            </div> 
                                        </td>
                                    </tr>
                                    <?php
                                $no++;

                                }
                            }
                        ?>
                </tbody>
                
            </table>

</div>
</div>
</div>

