<?php
    require_once "MySql_connection.php";
    $ID_Farmasi= $_GET['ID_Farmasi'];
    
    $sql = "SELECT * FROM tb_farmasi WHERE ID_Farmasi='$ID_Farmasi'";
    $result = $conn->query($sql);
    while($row = $result->fetch_assoc()){
    // $ID_Farmasi = $row['ID_Farmasi'];
    $Nama = $row['Nama'];
    $Alamat = $row['Alamat'];
    $Kota = $row['Kota'];
    $Telephon = $row['Telephon'];
    
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
            <h3>form edit Data Farmasi</h3>
        </div>

        <div class="card-body">
            <form action="Proses_update_tabel_farmasi.php" method="POST">
                <div class="form-group">
                <input type="text" name="ID_Farmasi" class="form-control" readonly value="<?=$_GET['ID_Farmasi'];?>" required />
                </div>

                <div class="form-group">
                <input type="text" name="Nama" class="form-control" value="<?=$Nama;?>" required />
                </div>

                <div class="form-group">
                <!-- <textarea name="Alamat" id="" class="form-control"></textarea> -->
                <input type="text" name="" class="form-control"  value="<?=$Alamat;?>" required />
                </div>

                <div class="form-group">
                <input type="text" name="Kota" class="form-control"  value="<?=$Kota;?>" required />
                </div>

                <div class="form-group">
                <input type="number" name="Telephon" class="form-control"  value="<?=$Telephon;?>" required />
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
<script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

</body>
</html>