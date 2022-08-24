<!-- content inti -->
<center>
    <div class="isi" id="jelajah">
        <ul id="papanlis">
            <?php $i = 1; ?>
            <?php foreach ($merek as $p) : ?>
                <div class="kotak">
                    <a href="<?= base_url('explor/barangdtl/' . $p['id']); ?>">
                        <img src="<?= base_url('assets/produk/'); ?><?= $p['img']; ?>">
                        <p><?= $p['merek']; ?> </p>
                        <p><?= substr($p['typeProduk'], 0, 15); ?>..</p><br>
                        <p><b>Rp <?= $p['harga']; ?></b></p>
                    </a>
                </div>
                <?php $i++; ?>
            <?php endforeach; ?>
        </ul>
    </div>
</center>