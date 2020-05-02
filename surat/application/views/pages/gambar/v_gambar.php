<link rel="shortcut icon" href="<?= base_url() ?>assets/assets/img/ico.png">
<div class="container-fluid">
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">GAMBAR</li>
    </ol>


    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Gambar 1</th>
                            <th>Gambar 2</th>
                            <th>Gambar 3</th>
                            <th>Gambar 4</th>
                            <th>Gambar 5</th>
                            <th>Gambar 6</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Gambar 1</th>
                            <th>Gambar 2</th>
                            <th>Gambar 3</th>
                            <th>Gambar 4</th>
                            <th>Gambar 5</th>
                            <th>Gambar 6</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <?php $no = 1;
                        foreach ($data as $datas) { ?>
                            <tr>
                                <td><?= $datas->id_gambar ?></td>
                                <td><?= $datas->gambar1 ?></td>
                                <td><?= $datas->gambar2 ?></td>
                                <td><?= $datas->gambar3 ?></td>
                                <td><?= $datas->gambar4 ?></td>
                                <td><?= $datas->gambar5 ?></td>
                                <td><?= $datas->gambar6 ?></td>
                                <td>
                                    <div class="btn-group">
                                        <button class="btn btn-sm btn-success btnEditItem" data-toggle="modal" data-target="#exampleModal1_<?= $datas->id_gambar ?>"><i class="fas fa-edit"></i></button>
                                    </div>
                                </td>
                            </tr>

            </div>
            <div class="modal fade" id="exampleModal1_<?= $datas->id_gambar ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel3" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">EDIT Gambar</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form method="POST" action="<?= base_url('id_gambar/update') ?>">
                                <input type="hidden" name="id_gambar" value="<?= $datas->id_gambar ?>">
                                <div class="form-group" style=" padding-left: 10px;">
                                    <label for="Company-name" class="col-form-label">Gambar 1</label>
                                    <input type="file" class="form-control" id="company-name" value="<?= $datas->gambar1 ?>">
                                </div>
                                <div class="form-group" style=" padding-left: 10px;">
                                    <label for="Company-name" class="col-form-label">Gambar 2</label>
                                    <input type="file" class="form-control" id="company-name" value="<?= $datas->gambar2 ?>">
                                </div>
                                <div class="form-group" style=" padding-left: 10px;">
                                    <label for="Company-name" class="col-form-label">Gambar 3</label>
                                    <input type="file" class="form-control" id="company-name" value="<?= $datas->gambar1 ?>">
                                </div>


                                <div>
                                    <button name="btn-submit-vendor" type="submit" class="btn btn-success" style="margin-top:20px" value="submit"><i class="fa fa-floppy-o" aria-hidden="true"></i>Save</button>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>
        </tbody>
        </table>
        </div>
    </div>
</div>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel3" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">ADD Gambar</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" action="<?= base_url('gambar/store') ?>">
                    <div class="form-group">
                        <label for="Company-name" class="col-form-label">Gambar 1 :</label>
                        <input type="file" name="gambar1" class="form-control" id="gambar1" value="">
                    </div>
                    <div class="form-group">
                        <label for="tanggal" class="col-form-label">Gambar 2 :</label>
                        <input type="file" name="startdate" class="form-control tanggal" id="startdate" value="" required>
                    </div>
                    <div class="form-group">
                        <label for="address-text" class="col-form-label">Gambar :</label>
                        <input type="file" name="enddate" class="form-control" id="enddate" value="" required>
                    </div>
                    <div class="form-group">
                        <label for="address-text" class="col-form-label">No Kontrak:</label>
                        <input type="file" name="nokontrak" class="form-control" id="nokontrak" value="" required>
                    </div>
                    <div class="form-group">
                        <label for="address-text" class="col-form-label">No BAPP :</label>
                        <input type="text" name="nobapp" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="address-text" class="col-form-label">Invoice Date :</label>
                        <input type="date" name="invoicedate" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="address-text" class="col-form-label">Nominal :</label>
                        <input type="text" name="nominal" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="address-text" class="col-form-label">Pay Date</label>
                        <input type="date" name="paydate" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="address-text" class="col-form-label">Status Bayar</label>
                        <input type="text" name="statusbayar" class="form-control">
                    </div>
                    <div>
                        <button name="btn-submit-vendor" type="submit" class="btn btn-success" style="margin-top:20px" value="submit"><i class="fa fa-floppy-o" aria-hidden="true"></i>Save</button>
                    </div>

                </form>
            </div>
        </div>
    </div>


</div>