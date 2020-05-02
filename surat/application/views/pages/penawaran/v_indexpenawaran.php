<div class="container-fluid">
    .
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Master Penawaran</li>
    </ol>


    <div class="card">
        <div class="card-header"><i class="fas fa-table mr-1"></i>Data Penawaran
            <a href="#" style="width:30px" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-plus-circle" aria-hidden="true"></i></a></div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Nomor</th>
                            <th>Nama Brand</th>
                            <th>Jenis Pengajuan</th>
                            <th>Jenis Media</th>
                            <th>Masa Kontrak</th>
                            <th>Nominal</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Nomor</th>
                            <th>Nama Brand</th>
                            <th>Jenis Pengajuan</th>
                            <th>Jenis Media</th>
                            <th>Masa Kontrak</th>
                            <th>Nominal</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <?php $no = 1;
                        foreach ($data as $datas) { ?>
                            <tr>
                                <td><?= $datas->nomor ?></td>
                                <td><?= $datas->namabrand ?></td>
                                <td><?= $datas->jenispengajuan ?></td>
                                <td><?= $datas->jenismedia ?></td>
                                <td><?= $datas->masakontrak ?></td>
                                <td><?= $datas->nominal ?></td>
                                <td>
                                    <div class="btn-group">
                                        <button class="btn btn-sm btn-info btnViewItem" data-toggle="modal" data-target="#exampleModal<?= $datas->id_penawaran ?>"><i class="fas fa-eye"></i></button>
                                        <button class="btn btn-sm btn-success btnEditItem" data-toggle="modal" data-target="#exampleModal1_<?= $datas->id_penawaran ?>"><i class="fas fa-edit"></i></button>
                                    </div>
                                </td>
                            </tr>
                            <div class="modal fade" id="exampleModal<?= $datas->id_penawaran ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">View Penawaran</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">

                                            <form>
                                                <button onclick="window.print()" style="margin-bottom: 30px;">Cetak Halaman Web</button>
                                                <div class="form-group" style=" padding-left: 10px;">
                                                    <label for="Company-name" class="col-form-label">Nomor</label>
                                                    <input type="text" class="form-control" id="company-name" value="" hidden><?= $datas->nomor ?>
                                                </div>
                                                <div class="form-group" style="background: #ebebeb; padding-left: 10px;">
                                                    <label for="Company-name" class="col-form-label">Nama Barang :</label>
                                                    <input type="text" class="form-control" id="company-name" value="" hidden><?= $datas->namabrand ?>
                                                </div>
                                                <div class="form-group" style="padding-left: 10px">
                                                    <label for="address-text" class="col-form-label">Jenis Pengajuan :</label>
                                                    <textarea class="form-control" id="address-text" hidden></textarea><?= $datas->jenispengajuan ?>
                                                </div>
                                                <div class="form-group" style="background: #ebebeb; padding-left: 10px;">
                                                    <label for="city" class="col-form-label">Jenis Media :</label>
                                                    <input type="text" class="form-control" id="company-name" hidden><?= $datas->jenismedia ?>
                                                </div>
                                                <div class="form-group" style="padding-left: 10px">
                                                    <label for="address-text" class="col-form-label">Masa Kontrak :</label>
                                                    <textarea class="form-control" id="address-text" hidden></textarea><?= $datas->masakontrak ?>
                                                </div>
                                                <div class="form-group" style="padding-left: 10px">
                                                    <label for="address-text" class="col-form-label">Nominal :</label>
                                                    <textarea class="form-control" id="address-text" hidden></textarea><?= $datas->nominal ?>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
            </div>
            <div class="modal fade" id="exampleModal1_<?= $datas->id_penawaran ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel3" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">EDIT Penawaran</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form method="POST" action="<?= base_url('penawaran/update') ?>">
                                <input type="hidden" name="id_penawaran" value="<?= $datas->id_penawaran ?>">
                                <div class="form-group">
                                    <label for="Company-name" class="col-form-label">Nomor :</label>
                                    <input type="text" name="nomor" class="form-control" id="nomor" value="<?= $datas->nomor ?>">
                                </div>
                                <div class="form-group">
                                    <label for="Company-name" class="col-form-label">Nama Brand :</label>
                                    <input type="text" name="namabrand" class="form-control" id="spknumber" value="<?= $datas->namabrand ?>" required>
                                </div>
                                <div class="form-group">
                                    <label for="address-text" class="col-form-label">Jenis Pengajuan:</label>
                                    <input type="text" name="jenispengajuan" class="form-control" id="total" value="<?= $datas->jenispengajuan ?>" required>
                                </div>
                                <div class="form-group">
                                    <label for="address-text" class="col-form-label">Jenis Media:</label>
                                    <input type="text" name="jenismedia" class="form-control" id="spkto" value="<?= $datas->jenismedia ?>" required>
                                </div>
                                <div class="form-group">
                                    <label for="address-text" class="col-form-label">Masa Kontrak:</label>
                                    <input type="text" name="masakontrak" class="form-control" value="<?= $datas->masakontrak ?>">
                                </div>
                                <div class="form-group">
                                    <label for="address-text" class="col-form-label">Nominal :</label>
                                    <input type="text" name="nominal" class="uang form-control" value="<?= $datas->nominal ?>">
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
                <h5 class="modal-title" id="exampleModalLabel">ADD Penawaran</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" action="<?= base_url('penawaran/store') ?>">
                    <div class="form-group">
                        <label for="Company-name" class="col-form-label">Nomor :</label>
                        <input type="text" name="nomor" class="form-control" id="nomor" value="" required>
                    </div>
                    <div class="form-group">
                        <label for="Company-name" class="col-form-label">Nama Brand :</label>
                        <input type="text" name="namabrand" class="form-control" id="namabrand" value="" required>
                    </div>
                    <div class="form-group">
                        <label for="address-text" class="col-form-label">Jenis Pengajuan :</label>
                        <input type="text" name="jenispengajuan" class="form-control" id="jenispengajuan" value="" required>
                    </div>
                    <div class="form-group">
                        <label for="address-text" class="col-form-label">Jenis Media:</label>
                        <input type="text" name="jenismedia" class="form-control" id="jenismedia" value="" required>
                    </div>
                    <div class="form-group">
                        <label for="address-text" class="col-form-label">Masa Kontrak :</label>
                        <input type="text" name="masakontrak" class="form-control" value="" required>
                    </div>
                    <div class="form-group">
                        <label for="address-text" class="col-form-label">Nominal : Rp.</label>
                        <input type="text" name="nominal" class="uang form-control" value="" required>
                    </div>
                    <div>
                        <button name="btn-submit-vendor" type="submit" class="btn btn-success" style="margin-top:20px" value="submit"><i class="fa fa-floppy-o" aria-hidden="true"></i>Save</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>