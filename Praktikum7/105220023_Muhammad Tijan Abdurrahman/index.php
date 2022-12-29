
\<?php
    require("barang.php");
    $tepung = new Barang('tepung', 10, 1);
    $gula = new Barang('gula', 25, 2);
    $pisang = new Barang('pisang', 13, 3);
    $saus = new Barang('saus', 4, 0);
    
   
    $Barang2= [$tepung, $gula, $pisang, $saus];

    if(!empty($_POST)){
        $nama=$_POST["nama"];
        $berat=$_POST["berat"];
        $stok=$_POST["stok"];
        $nama2 = $nama;
        $nama2 = new Barang($nama, $berat, $stok);
        array_push($Barang2, $nama2);
    }
    else{
        $nama=null;
        $berat=null;
        $stok=null;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
    <style>
        table, th, td {
          border: 1px solid black;
          border-collapse: collapse;
        }
        </style>
</head>
<body>
    <h1>DAFTAR HARGA BARANG CUK</h1>
    <div class="form">
        <div class="form-input">
            <form action="" method="post">
                <label for="nama">Nama Barang</label><br>
                <input type="text" name="nama" id="nama" required><br><br>
                <label for="BeratKG">Berat Barang</label><br>
                <input type="text" name="berat" id="berat" required><br><br>
                <label for="stok">Stok</label><br>
                <input type="text" name="stok" id="stok" required><br><br>
                <input type="submit" value="Submit">
            </form>
        </div>
        </div>
        <br>
        <div class="tabel">
            <table>
                <tr>
                    <th>Nama Barang</th>
                    <th>Berat (Kg)</th>
                    <th>Berat (G )</th>
                    <th>Berat (Mgr)</th>
                    <th>Stok</th>
                </tr>
                <?php foreach($Barang2 as $item => $barang) : ?>
                <tr style="<?php echo $barang->getStok() == 0 ? 'background-color: red;' : ''?>">
                    <td><?php echo $barang->getNama(); ?></td>
                    <td><?php echo $barang->getBerat(); ?></td>
                    <td><?php echo $barang->convertBeratG($barang->getBerat()); ?></td>
                    <td><?php echo $barang->convertBeratMG($barang->getBerat()); ?></td>
                    <td><?php echo $barang->getStok(); ?></td>
                </tr>
                <?php endforeach; ?>
            </table>
            <br>  
        </div>

</body>
</html>