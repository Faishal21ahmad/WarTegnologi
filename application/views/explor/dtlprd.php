<div class="wrapper1">
    <dir class="judul">
        <h1> <?= $typeProduk['merek']; ?><?= $typeProduk['typeProduk']; ?></h1>
    </dir>
</div>

<div class="wrapper1">
    <div class="lepimg">
        <!-- gambar leptop juga di ganti sesuai  -->
        <!-- file nya ada di folder img/leptop 1/..  -->
        <img src="<?= base_url('assets/produk/' . $typeProduk['img']); ?>">
    </div>
</div>

<div class="wrapper1">
    <div class="olshop">
        <p> Tersedia </p>
        <ul>
            <!-- link olshop  nya di ganti  -->
            <li>
                <a href="<?= base_url('Pembelian/index/' . $typeProduk['id']); ?>">
                    <img src="<?= base_url('assets/img/BELI.png') ?>">
                </a>
            </li>

        </ul>
    </div>
</div>

<div class="isi">
    <div class="wrapper1">
        <div class="bacaan">
            <div class="kotak">
                <div class="img"><img src="<?= base_url('assets/img/kotalop/logo/'); ?>cpu.png"></div>
                <h4>Prosesor</h4>
                <!-- paragraf deskripsi nya di ganti sampai paragraf harga-->
                <P><?= $typeProduk['prosesor']; ?></P>
            </div>
            <div class="kotak">
                <div class="img"><img src="<?= base_url('assets/img/kotalop/logo/'); ?>storage.png"></div>
                <h4>Storage</h4>
                <P><?= $typeProduk['storage']; ?></P>
            </div>
            <div class="kotak">
                <div class="img"><img src="<?= base_url('assets/img/kotalop/logo/'); ?>ram.png"></div>
                <h4>RAM</h4>
                <P><?= $typeProduk['ram']; ?></P>
            </div>
            <div class="kotak">
                <div class="img"><img src="<?= base_url('assets/img/kotalop/logo/'); ?>layar.png"></div>
                <h4>Layar</h4>
                <P><?= $typeProduk['layar']; ?></P>
            </div>
            <div class="kotak">
                <div class="img"><img src="<?= base_url('assets/img/kotalop/logo/'); ?>gpu.png"></div>
                <h4>GPU</h4>
                <P><?= $typeProduk['gpu']; ?></P>
            </div>
            <div class="kotak">
                <div class="img"><img src="<?= base_url('assets/img/kotalop/logo/'); ?>fitur.png"></div>
                <h4>Fitur</h4>
                <P><?= $typeProduk['fitur']; ?></P>
            </div>
            <div class="kotak">
                <div class="img"><img src="<?= base_url('assets/img/kotalop/logo/'); ?>harga.png"></div>
                <h4>Harga</h4>
                <P>Rp <?= $typeProduk['harga']; ?></P>
            </div>

        </div>
    </div>
</div>