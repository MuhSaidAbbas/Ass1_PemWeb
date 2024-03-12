<?php 

    include 'header.php';
?>
<?php


if (isset($_POST['btnSubmit'])) {
    
    $kode_transaksi = $_POST['Nama'];
    $tanggal_transaksi = $_POST['dt'];
    $costumer = $_POST['dropdownNamaCostumer'];
    $b1 = $_POST['dropdownBarang1'];
    $jb1 = $_POST['jumlahBarang1'];
    $b2 = $_POST['dropdownBarang2'];
    $jb2 = $_POST['jumlahBarang2'];
    $b3 = $_POST['dropdownBarang3'];
    $jb3 = $_POST['jumlahBarang3'];
    $member = $_POST['member'];
    $money = $_POST['dana'];

    echo "Kode Transaksi\n: $kode_transaksi <br>";
    echo "Tanggal Transaksi\n: $tanggal_transaksi <br>";
    echo "Costumer\n: $costumer <br>";

    echo 'Detail Pembelian <br>';
    echo '<table border=1 class="table table-striped-columns" >';
    echo '<tr>'.'<th>No'.'</th>'.'<th>Nama Barang'.'</th>'.'<th>Qty'.'</th>'.'<th>Harga Satuan'.'</th>'.'<th>Jumlah'.'</th>'.'</tr>';
    echo '<tr>'.'<th>1'.'</th>'.'<th>'.$b1.'</th>'.'<th>'.$jb1.'</th>'.'</tr>';
    echo '<tr>'.'<th>2'.'</th>'.'<th>'.$b2.'</th>'.'<th>'.$jb2.'</th>'.'</tr>';
    echo '<tr>'.'<th>3'.'</th>'.'<th>'.$b3.'</th>'.'<th>'.$jb3.'</th>'.'</tr>';
    echo '</table>';

    echo 'Sub Total'.'<br>';
    echo 'Discount'.'5%'.'<br>';
    echo 'Total Bayar'.'<br>';
    echo 'Uang Pembayaran'.'<br>';
    echo 'Kembali'.'<br>';
    
}

else {

    ?>

<form action="" method="post">
    <div class='row mb-1'>
    <label class="col-sm-2 col-form-label">Kode Transaksi</label>
            <div class="col-sm-5">
            <input type="text" class="form-control" name='Nama'>
    </div>

    <div class='row mb-1'>
    <label class="col-sm-2 col-form-label">Tanggal Transaksi</label>
            <div class="col-sm-5">
            <input type="date" class="form-control" name='dt'>
            </div>
        </div>

        <div class='row mb-1'>
    <label class="col-sm-2 col-form-label">Tanggal Transaksi</label>
            <div class="col-sm-5">
            <input type="date" class="form-control" name='dt'>
            </div>
        </div>
        Costumer <select name="dropdownNamaCostumer">
            <option value="pc">-- Pilih Costumer --</option>
        <option value="Muh. Said Abbas">Muh. Said Abbas</option>
        <option value="Muh. Idris">Muh. Idris</option>
        <option value="Ahmad Marioale Sulolipu">Ahmad Marioale Sulolipu</option>
        <option value="Muh. Syafir">Muh. Syafir</option>
        <option value="Yogi Permana Adi Citra">Yogi Permana Adi Citra</option>
    </select><br>
    Barang 1 <select name="dropdownBarang1">
        <option value="Pilih Barang">-- Pilih Barang --</option>
        <option value="Mie Instan">Mie Instan</option>
        <option value="Sabun Mandi">Sabun Mandi</option>
        <option value="Shampoo">Shampoo</option>
        <option value="Sandal Jepit">Sandal Jepit</option>
        <option value="Roti">Roti</option>
        <option value="Buku Tulis">Buku Tulis</option>
        <option value="Susu Kotak">Susu Kotak</option>
        <option value="Minyak Goreng">Minyak Goreng</option>
        <option value="Ice Cream">Ice Cream</option>
        <option value="Baterari">Baterari</option>
    </select><input type="number" name="jumlahBarang1"><br>
    </div>
    
        <?php 
         $brg = array(
             array('namaBarang'=> 'Mie Instan', 'harga'=>'Rp. 3.000' ),
             array('namaBarang'=> 'Sabun Mandi', 'harga'=>'Rp. 3.500' ),
             array('namaBarang'=> 'Shampoo', 'harga'=>'Rp. 1.000' ),
             array('namaBarang'=> 'Sandal Jepit', 'harga'=>'Rp. 11.000' ),
             array('namaBarang'=> 'Roti', 'harga'=>'Rp. 12.000' ),
             array('namaBarang'=> 'Buku Tulis', 'harga'=>'Rp. 5.500' ),
             array('namaBarang'=> 'Susu Kotak', 'harga'=>'Rp. 6.000' ),
             array('namaBarang'=> 'Minyak goreng', 'harga'=>'Rp. 13.000' ),
             array('namaBarang'=> 'Ice Cream', 'harga'=>'Rp. 11.000' ),
             array('namaBarang'=> 'Bater', 'harga'=>'Rp. 16.000' ),
            );
            
            ?>
             Barang 2 <select name="dropdownBarang2">
        <option value="Pilih Barang">-- Pilih Barang --</option>
        <option value="Mie Instan">Mie Instan</option>
        <option value="Sabun Mandi">Sabun Mandi</option>
        <option value="Shampoo">Shampoo</option>
        <option value="Sandal Jepit">Sandal Jepit</option>
        <option value="Roti">Roti</option>
        <option value="Buku Tulis">Buku Tulis</option>
        <option value="Susu Kotak">Susu Kotak</option>
        <option value="Minyak Goreng">Minyak Goreng</option>
        <option value="Ice Cream">Ice Cream</option>
        <option value="Baterari">Baterari</option>
        </select><input type="number" name="jumlahBarang2"><br>
             
             Barang 3 <select name="dropdownBarang3">
             
        <option value="Pilih Barang">-- Pilih Barang --</option>
        <option value="Mie Instan">Mie Instan</option>
        <option value="Sabun Mandi">Sabun Mandi</option>
        <option value="Shampoo">Shampoo</option>
        <option value="Sandal Jepit">Sandal Jepit</option>
        <option value="Roti">Roti</option>
        <option value="Buku Tulis">Buku Tulis</option>
        <option value="Susu Kotak">Susu Kotak</option>
        <option value="Minyak Goreng">Minyak Goreng</option>
        <option value="Ice Cream">Ice Cream</option>
        <option value="Baterari">Baterari</option></select> <input type="number" name="jumlahBarang3"><br>
             
             Punya Kartu Member? <input type="radio" name='member'>Ya
             <input type="radio" name='member'>Tidak<br>
             
             Uang Pembayaran <input type="number" name='dana'><br>
             
             <input name='btnSubmit' type="submit">
             <input name='btnDelete' type="reset"><br>
             </form> 
             
             <?php
            }

            ?>

            <?php

include 'footer.php';

?>