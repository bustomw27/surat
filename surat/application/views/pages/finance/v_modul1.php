<div class="container-fluid">
    .
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Modul 1 Finance</li>
    </ol>


    <div class="card">
        <div class="card-header"><i class="fas fa-table mr-1"></i>Modul 1 Finance
            <a href="#" style="width:30px" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-plus-circle" aria-hidden="true"></i></a></div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Jenis Media</th>
                            <th>Jan</th>
                            <th>Feb</th>
                            <th>Mar</th>
                            <th>Apr</th>
                            <th>Mei</th>
                            <th>Jun</th>
                            <th>Jul</th>
                            <th>Agust</th>
                            <th>Sep</th>
                            <th>Okt</th>
                            <th>Nov</th>
                            <th>Des</th>
                            <th>Jumlah</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Jenis Media</th>
                            <th>Jan</th>
                            <th>Feb</th>
                            <th>Mar</th>
                            <th>Apr</th>
                            <th>Mei</th>
                            <th>Jun</th>
                            <th>Jul</th>
                            <th>Agust</th>
                            <th>Sep</th>
                            <th>Okt</th>
                            <th>Nov</th>
                            <th>Des</th>
                            <th>Jumlah</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <?php $no = 1;
                        foreach ($data as $datas) { ?>
                            <tr>

                                <td><?= $datas->judul_modul1 ?></td>
                                <td><?= $datas->jan ?></td>
                                <td><?= $datas->feb ?></td>
                                <td><?= $datas->mar ?></td>
                                <td><?= $datas->apr ?></td>
                                <td><?= $datas->mei ?></td>
                                <td><?= $datas->jun ?></td>
                                <td><?= $datas->jul ?></td>
                                <td><?= $datas->agust ?></td>
                                <td><?= $datas->sept ?></td>
                                <td><?= $datas->oktob ?></td>
                                <td><?= $datas->novem ?></td>
                                <td><?= $datas->desem ?></td>
                                <td><?= $datas->jumlah ?></td>
                                <td>
                                    <div class="btn-group">
                                        <button class="btn btn-sm btn-success btnEditItem" data-toggle="modal" data-target="#exampleModal1_<?= $datas->id_modul1 ?>"><i class="fas fa-edit"></i></button>
                                    </div>
                                </td>
                            </tr>

            </div>
            <div class="modal fade" id="exampleModal1_<?= $datas->id_modul1 ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel3" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Edit Modul 1</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form method="POST" action="<?= base_url('modul1/update') ?>">
                                <input type="hidden" name="id_modul1" value="<?= $datas->id_modul1 ?>">
                                <div class="form-group" style=" padding-left: 10px;">
                                    <label for="Company-name" class="col-form-label">Jenis Media :</label>
                                    <input type="text" name="judul_modul1" class="form-control" id="judul_modul1" value="<?= $datas->judul_modul1 ?>">
                                </div>
                                <div class="form-group" style="padding-left: 10px;">
                                    <label for="Company-name" class="col-form-label">Januari :</label>
                                    <input type="text" name="jan" class="uang form-control" id="jan" value="<?= $datas->jan ?>">
                                </div>
                                <div class="form-group" style="padding-left: 10px;">
                                    <label for="Company-name" class="col-form-label">Febuari :</label>
                                    <input type="text" name="feb" class="uang form-control" id="feb" value="<?= $datas->feb ?>">
                                </div>
                                <div class="form-group" style="padding-left: 10px;">
                                    <label for="city" class="col-form-label">Maret :</label>
                                    <input type="text" name="mar" class="uang form-control" id="mar" value="<?= $datas->mar ?>">
                                </div>
                                <div class="form-group" style="padding-left: 10px">
                                    <label for="address-text" class="col-form-label">April :</label>
                                    <input type="text" name="apr" class="uang form-control" id="apr" value="<?= $datas->apr ?>">
                                </div>
                                <div class="form-group" style="padding-left: 10px">
                                    <label for="address-text" class="col-form-label">Mei :</label>
                                    <input type="text" name="mei" class="uang form-control" id="mei" value="<?= $datas->mei ?>">
                                </div>
                                <div class="form-group" style="padding-left: 10px;">
                                    <label for="Company-name" class="col-form-label">Juni :</label>
                                    <input type="text" name="jun" class="uang form-control" id="jun" value="<?= $datas->jun ?>">
                                </div>
                                <div class="form-group" style="padding-left: 10px;">
                                    <label for="Company-name" class="col-form-label">Juli :</label>
                                    <input type="text" name="jul" class="uang form-control" id="jul" value="<?= $datas->jul ?>">
                                </div>
                                <div class="form-group" style="padding-left: 10px;">
                                    <label for="city" class="col-form-label">Agustus :</label>
                                    <input type="text" name="agust" class="uang form-control" id="agust" value="<?= $datas->agust ?>">
                                </div>
                                <div class="form-group" style="padding-left: 10px">
                                    <label for="address-text" class="col-form-label">September :</label>
                                    <input type="text" name="sept" class="uang form-control" id="sept" value="<?= $datas->sept ?>">
                                </div>
                                <div class="form-group" style="padding-left: 10px">
                                    <label for="address-text" class="col-form-label">Oktober :</label>
                                    <input type="text" name="oktob" class="uang form-control" id="oktob" value="<?= $datas->oktob ?>">
                                </div>
                                <div class="form-group" style="padding-left: 10px">
                                    <label for="address-text" class="col-form-label">November :</label>
                                    <input type="text" name="novem" class="uang form-control" id="novem" value="<?= $datas->novem ?>">
                                </div>
                                <div class="form-group" style="padding-left: 10px">
                                    <label for="address-text" class="col-form-label">Desember :</label>
                                    <input type="text" name="desem" class="uang form-control" id="desem" value="<?= $datas->desem ?>">
                                </div>
                                <div class="form-group" style="padding-left: 10px">
                                    <label for="address-text" class="col-form-label">Jumlah</label>
                                    <input type="text" name="jumlah" class="uang form-control" id="jumlah" value="<?= $datas->jumlah ?>">
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
                <h5 class="modal-title" id="exampleModalLabel">Add Monitoring Media</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" action="<?= base_url('modul1/store') ?>">
                    <div class="form-group">
                        <label for="Company-name" class="col-form-label">Media :</label>
                        <input type="text" name="judul_modul1" class="form-control" id="judul_modul1" value="">
                    </div>
                    <div class="form-group">
                        <label for="address-text" class="col-form-label">Januari :</label>
                        <input type="text" name="jan" class="uang form-control" id="jan" value="" required>
                    </div>
                    <div class="form-group">
                        <label for="address-text" class="col-form-label">Febuari :</label>
                        <input type="text" name="feb" class="uang form-control" id="feb" value="" required>
                    </div>
                    <div class="form-group">
                        <label for="address-text" class="col-form-label">Maret :</label>
                        <input type="text" name="mar" class="uang form-control" id="mar" value="" required>
                    </div>
                    <div class="form-group">
                        <label for="address-text" class="col-form-label">April :</label>
                        <input type="text" name="apr" class="uang form-control" id="apr" value="" required>
                    </div>
                    <div class="form-group">
                        <label for="address-text" class="col-form-label">Mei :</label>
                        <input type="text" name="mei" class="uang form-control" id="mei" value="" required>
                    </div>
                    <div class="form-group">
                        <label for="address-text" class="col-form-label">Juni :</label>
                        <input type="text" name="jun" class="uang form-control" id="jun" value="" required>
                    </div>
                    <div class="form-group">
                        <label for="address-text" class="col-form-label">Juli :</label>
                        <input type="text" name="jul" class="uang form-control" id="jul" value="" required>
                    </div>
                    <div class="form-group">
                        <label for="address-text" class="col-form-label">Agustus :</label>
                        <input type="text" name="agust" class="uang form-control" id="agust" value="" required>
                    </div>
                    <div class="form-group">
                        <label for="address-text" class="col-form-label">September :</label>
                        <input type="text" name="sept" class="uang form-control" id="sept" value="" required>
                    </div>
                    <div class="form-group">
                        <label for="address-text" class="col-form-label">Oktober :</label>
                        <input type="text" name="oktob" class="uang form-control" id="oktob" value="" required>
                    </div>
                    <div class="form-group">
                        <label for="address-text" class="col-form-label">November :</label>
                        <input type="text" name="novem" class="uang form-control" id="novem" value="" required>
                    </div>
                    <div class="form-group">
                        <label for="address-text" class="col-form-label">Desember :</label>
                        <input type="text" name="desem" class="uang form-control" id="desem" value="" required>
                    </div>
                    <div class="form-group">
                        <label for="address-text" class="col-form-label">Jumlah :</label>
                        <input type="text" name="desem" class="uang form-control" id="jumlah" value="" required>
                    </div>
                    <div>
                        <button name="btn-submit-vendor" type="submit" class="btn btn-success" style="margin-top:20px" value="submit"><i class="fa fa-floppy-o" aria-hidden="true"></i>Save</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>