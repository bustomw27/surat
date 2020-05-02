<div class="container-fluid">
    .
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Monitoring Invoice</li>
    </ol>


    <div class="card">
        <div class="card-header"><i class="fas fa-table mr-1"></i>Monitoring Invoice
            <a href="#" style="width:30px" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-plus-circle" aria-hidden="true"></i></a></div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>

                            <th>No Invoice</th>
                            <th>Date Invoice</th>
                            <th>Jasa</th>
                            <th>PPN</th>
                            <th>PPH</th>
                            <th>Nominal</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>

                            <th>No Invoice</th>
                            <th>Date Invoice</th>
                            <th>Jasa</th>
                            <th>PPN</th>
                            <th>PPH</th>
                            <th>Nominal</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <?php $no = 1;
                        foreach ($data as $datas) { ?>
                            <tr>

                                <td><?= $datas->noinvoice ?></td>
                                <td><?= $datas->dateinvoice ?></td>
                                <td><?= $datas->jasa ?></td>
                                <td><?= $datas->ppn ?></td>
                                <td><?= $datas->pph ?></td>
                                <td><?= $datas->nominal ?></td>
                                <td>
                                    <div class="btn-group">
                                        <button class="btn btn-sm btn-info btnViewItem" data-toggle="modal" data-target="#exampleModal<?= $datas->idinvoice ?>"><i class="fas fa-eye"></i></button>
                                        <button class="btn btn-sm btn-success btnEditItem" data-toggle="modal" data-target="#exampleModal1_<?= $datas->idinvoice ?>"><i class="fas fa-edit"></i></button>
                                    </div>
                                </td>
                            </tr>
                            <div class="modal fade" id="exampleModal<?= $datas->idinvoice ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">View Monitoring Invoice</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">

                                            <form>
                                                <button onclick="window.print()" style="margin-bottom: 30px;">Cetak Halaman Web</button>
                                                <div class="form-group" style=" padding-left: 10px;">
                                                    <label for="Company-name" class="col-form-label">No Invoice</label>
                                                    <input type="text" class="form-control" id="company-name" value="" hidden><?= $datas->noinvoice ?>
                                                </div>
                                                <div class="form-group" style="padding-left: 10px;">
                                                    <label for="Company-name" class="col-form-label">Date Invoice:</label>
                                                    <input type="text" class="form-control" id="company-name" value="" hidden><?= $datas->dateinvoice ?>
                                                </div>
                                                <div class="form-group" style="padding-left: 10px;">
                                                    <label for="Company-name" class="col-form-label">Jasa :</label>
                                                    <input type="text" class="form-control" id="company-name" value="" hidden><?= $datas->jasa ?>
                                                </div>
                                                <div class="form-group" style="padding-left: 10px;">
                                                    <label for="city" class="col-form-label">PPN :</label>
                                                    <input type="text" class="uang form-control" id="company-name" hidden><?= $datas->ppn ?>
                                                </div>
                                                <div class="form-group" style="padding-left: 10px">
                                                    <label for="address-text" class="col-form-label">PPH :</label>
                                                    <input type="text" class="uang form-control" id="company-name" hidden><?= $datas->pph ?>
                                                </div>
                                                <div class="form-group" style="padding-left: 10px">
                                                    <label for="address-text" class="col-form-label">Nominal :</label>
                                                    <input type="text" class="uang form-control" id="company-name" hidden><?= $datas->nominal ?>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
            </div>
            <div class="modal fade" id="exampleModal1_<?= $datas->idinvoice ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel3" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">EDIT Monitoring Invoice</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form method="POST" action="<?= base_url('invoice/update') ?>">
                                <input type="hidden" name="idinvoice" value="<?= $datas->idinvoice ?>">
                                <div class="form-group" style=" padding-left: 10px;">
                                    <label for="Company-name" class="col-form-label">No Invoice</label>
                                    <input type="text" class="form-control" id="company-name" value="<?= $datas->noinvoice ?>">
                                </div>
                                <div class="form-group" style="padding-left: 10px;">
                                    <label for="Company-name" class="col-form-label">Date Invoice:</label>
                                    <input type="date" class="form-control" id="company-name" value="<?= $datas->dateinvoice ?>">
                                </div>
                                <div class="form-group" style="padding-left: 10px;">
                                    <label for="Company-name" class="col-form-label">Jasa :</label>
                                    <input type="text" class="form-control" id="company-name" value="<?= $datas->jasa ?>">
                                </div>
                                <div class="form-group" style="padding-left: 10px;">
                                    <label for="city" class="col-form-label">PPN :</label>
                                    <input type="text" class="form-control" id="company-name" value="<?= $datas->ppn ?>">
                                </div>
                                <div class="form-group" style="padding-left: 10px">
                                    <label for="address-text" class="col-form-label">PPH :</label>
                                    <input type="text" class="form-control" id="company-name" value="<?= $datas->pph ?>">
                                </div>
                                <div class="form-group" style="padding-left: 10px">
                                    <label for="address-text" class="col-form-label">Nominal :</label>
                                    <input type="text" class="uang form-control" id="company-name" value="<?= $datas->nominal ?>">
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
                <h5 class="modal-title" id="exampleModalLabel">ADD Monitoring Invoice</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" action="<?= base_url('invoice/store') ?>">
                    <div class="form-group">
                        <label for="Company-name" class="col-form-label">No Invoice :</label>
                        <input type="text" name="noinvoice" class="form-control" id="noinvoice" value="" required>
                    </div>
                    <div class="form-group">
                        <label for="tanggal" class="col-form-label">Date Invoice :</label>
                        <input type="date" name="dateinvoice" class="form-control tanggal" id="dateinvoice" value="" required>
                    </div>
                    <div class="form-group">
                        <label for="address-text" class="col-form-label">Jasa :</label>
                        <input type="text" name="jasa" class="form-control" id="jasa" value="" required>
                    </div>
                    <div class="form-group">
                        <label for="address-text" class="col-form-label">PPN :</label>
                        <input type="text" name="ppn" class="form-control" id="ppn" value="" required>
                    </div>
                    <div class="form-group">
                        <label for="address-text" class="col-form-label">PPH :</label>
                        <input type="text" name="pph" class="form-control" id="pph" value="" required>
                    </div>
                    <div class="form-group">
                        <label for="address-text" class="col-form-label">Nominal :</label>
                        <input type="text" name="nominal" class="uang form-control" id="nominal" value="" required>
                    </div>
                    <div>
                        <button name="btn-submit-vendor" type="submit" class="btn btn-success" style="margin-top:20px" value="submit"><i class="fa fa-floppy-o" aria-hidden="true"></i>Save</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>