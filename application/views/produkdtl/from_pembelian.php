<div class="wrapper">
    <dir class="judul">
        <h1><i class="fas fa-laptop-code"></i> WarTegnologi</h1>
    </dir>
</div>

<div class="wrapper">
    <div class="qr">
        <img src="<?= base_url('assets/img/kotalop/'); ?>qr.png" alt="">
        <p><br> QR Pembayaran </p>
    </div>
</div>

<div class="papan">
    <div class="wrapper">
        <h2 class="titip">Form Pembelian</h2>
        <div class="isiform">
            <?= form_open_multipart('Pembelian/input_pembelian'); ?>
            <li><label for="nama">Merek Leptop</label></li>
            <li><input type="text" id="merek" name="merek" value="<?= $leptop['merek']; ?> <?= $leptop['typeProduk']; ?>"></li>

            <li><label for="nama">Nama Lengkap</label></li>
            <li><input type="text" id="name" name="name" value="<?= $user['name']; ?>"></li>

            <li><label for="alamat">Email</label></li>
            <li><input type="text" id="email" name="email" value="<?= $user['email']; ?>" </li>

            <li><label for="nomor">Alamat Lengkap</label></li>
            <li><input type="text" id="alamat" name="alamat" placeholder="Alamat Lengkap Anda....."></li>

            <li><label for="alamat">Nomor Telpon </label></li>
            <li><input type="text" id="nomor" name="nomor" placeholder="+6200....."></li>

            <li><label for="catatan">Catatan</label></li>
            <li><input type="text" id="catatan" name="catatan" placeholder="Tambahan catatan....."></li>

            <li><label for="catatan">Harga</label></li>
            <li><input type="text" id="harga" name="harga" value="<?= $leptop['harga']; ?>"></li>

            <li><label for="bayar">Bukti pembayaran</label></li>
            <li><input type="file" name="userfile"></li>

            <li><input type="submit" value="Submit" onclick="pesan(this.form)"></li>
            <?= form_close(); ?>
        </div>
    </div>
</div>