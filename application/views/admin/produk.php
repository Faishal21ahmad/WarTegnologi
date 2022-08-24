<!--===================================== Begin Page Content =================================-->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <div class="row">
        <div class="col-lg">
            <div class="col-lg-9">
                <?= form_error('menu', '<div class="alert alert-danger" role="alert">', '</div>') ?>

                <?= form_open_multipart('menu/produk'); ?>
                <div class="form-group row">
                    <label for="merek" class="col-sm-2 col-form-label">Merek</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="merek" name="merek">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="typeProduk" class="col-sm-2 col-form-label">Type Produk</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="typeProduk" name="typeProduk">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="prosesor" class="col-sm-2 col-form-label">Prosesor</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="prosesor" name="prosesor">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="storage" class="col-sm-2 col-form-label">Storage</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="storage" name="storage">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="ram" class="col-sm-2 col-form-label">RAM</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="ram" name="ram">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="layar" class="col-sm-2 col-form-label">Layar</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="layar" name="layar">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="gpu" class="col-sm-2 col-form-label">GPU</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="gpu" name="gpu">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="fitur" class="col-sm-2 col-form-label">Fitur</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="fitur" name="fitur">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="harga" class="col-sm-2 col-form-label">Harga</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="harga" name="harga">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-2">IMG</div>
                    <div class="col-sm-10">
                        <div class="row">
                            <div class="col-sm-9">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="img" name="name">
                                    <label class="custom-file-label" for="img">Choose file</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="form-group row justify-content-end">
                    <div class="col-sm-10">
                        <button type="submit" class="btn text-white" style="background-color: #476072;">Tambah Produk</button>
                    </div>
                </div>


                <?= form_close(); ?>
            </div>

            <!-- 
            <a href="" class="btn text-white mb-3" style="background-color: #476072;" data-toggle="modal" data-target="#MenuModal">Tambah Produk</a> -->

            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Merek</th>
                        <th scope="col">Type Produk</th>
                        <th scope="col">Prosesor</th>
                        <th scope="col">Storage</th>
                        <th scope="col">RAM</th>
                        <th scope="col">Layar</th>
                        <th scope="col">GPU</th>
                        <th scope="col">Fitur</th>
                        <th scope="col">Harga</th>
                        <th scope="col">IMG</th>
                        <th scope="col">action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($produk as $m) : ?>
                        <tr>
                            <th scope="row"><?= $i; ?></th>
                            <td><?= $m['merek']; ?></td>
                            <td><?= $m['typeProduk']; ?></td>
                            <td><?= $m['prosesor']; ?></td>
                            <td><?= $m['storage']; ?></td>
                            <td><?= $m['ram']; ?></td>
                            <td><?= $m['layar']; ?></td>
                            <td><?= $m['gpu']; ?></td>
                            <td><?= $m['fitur']; ?></td>
                            <td><?= $m['harga']; ?></td>
                            <td><?= $m['img']; ?></td>
                            <td>
                                <a href="<?= base_url('menu/delete_produk/'); ?><?= $m['id'] ?>" class="badge badge-danger" onclick="return confirm('yakin ? Produk <?= $m['merek']; ?> <?= $m['typeProduk']; ?> di hapus');">Hapus</a>
                            </td>
                        </tr>
                        <?php $i++; ?>
                    <?php endforeach;  ?>
                </tbody>
            </table>
        </div>
    </div>


</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->


<!-- Button trigger modal -->