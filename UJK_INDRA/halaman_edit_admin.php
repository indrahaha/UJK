<?php
    require_once "MySql_connection.php";
    $ID_Obat= $_GET['ID_Obat'];
    $sql = "SELECT * FROM tb_obat WHERE ID_Obat='$ID_Obat'";

    $result = $conn->query($sql);
    while($row = $result->fetch_assoc()){
    $ID_Obat = $row['ID_Obat'];
    $Kategori = $row['Kategori'];
    $Nama_Buku = $row['Nama_Buku'];
    $Harga = $row['Harga'];
    $Stok = $row['Stok'];
    $Farmasi = $row['Farmasi'];
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>buku tamu</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="fontawesome-free-5.15.3-web/css/all.css">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->
</head>
<body>

<div class="container mt-2">
    <div class="card">
        <div class="card-header">
            <h3>form edit Data Obat</h3>
        </div>

        <div class="card-body">
            <form action="Proses_update_tabel_obat.php" method="POST">
                <div class="form-group">
                <input type="text" name="ID_Obat" class="form-control" readonly value="<?=$_GET['ID_Obat'];?>" required />
                </div>

                <div class="form-group">
                <input type="text" name="Kategori" class="form-control" value="<?=$Kategori;?>" required />
                </div>

                <div class="form-group">
                <input type="text" name="Nama_Buku" class="form-control"  value="<?=$Nama_Buku;?>" required />
                </div>

                <div class="form-group">
                <input type="number" name="Harga" class="form-control"  value="<?=$Harga;?>" required />
                </div>

                <div class="form-group">
                <input type="number" name="Stok" class="form-control"  value="<?=$Stok;?>" required />
                </div>

                <div class="form-group">
                <input type="text" name="Farmasi" class="form-control"  value="<?=$Farmasi;?>" required />
                </div>
                <div class="form-group">
                    <input class="btn btn-primary btn-block" type="submit" value="Update" />
                </div>
            </form>
            </div>
        <div class="class-footer">
            <a href="admin.php">
                <i class="fas fa-arrow-left"></i>
                kembali
            </a>
        </div>
        </div>
</div>  

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

</body>
</html>