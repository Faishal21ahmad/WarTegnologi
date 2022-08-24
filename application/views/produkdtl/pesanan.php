<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>


    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Merek</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Alamat</th>
                <th scope="col">Nomor</th>
                <th scope="col">Catatan</th>
                <th scope="col">Bukti Pembayaran</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1; ?>
            <?php foreach ($email as $ps) : ?>
                <tr>
                    <th scope="row"><?= $i; ?></th>
                    <td><?= $ps['merek']; ?></td>
                    <td><?= $ps['name']; ?></td>
                    <td><?= $ps['email']; ?></td>
                    <td><?= $ps['alamat']; ?></td>
                    <td><?= $ps['nomor']; ?></td>
                    <td><?= $ps['catatan']; ?></td>
                    <td><?= $ps['bayar']; ?></td>
                </tr>
                <?php $i++; ?>
            <?php endforeach;  ?>
        </tbody>
    </table>


</div>
<!-- /.container-fluid -->