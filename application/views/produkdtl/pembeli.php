<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>


    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Merek</th>
                <th scope="col">name</th>
                <th scope="col">email</th>
                <th scope="col">alamat</th>
                <th scope="col">nomor</th>
                <th scope="col">catatan</th>
                <th scope="col">Bukti Pembayaran</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1; ?>
            <?php foreach ($email2 as $s) : ?>
                <tr>
                    <th scope="row"><?= $i; ?></th>
                    <td><?= $s['merek']; ?></td>
                    <td><?= $s['name']; ?></td>
                    <td><?= $s['email']; ?></td>
                    <td><?= $s['alamat']; ?></td>
                    <td><?= $s['nomor']; ?></td>
                    <td><?= $s['catatan']; ?></td>
                    <td><?= $s['bayar']; ?></td>

                </tr>
                <?php $i++; ?>
            <?php endforeach;  ?>
        </tbody>
    </table>


</div>
<!-- /.container-fluid -->