  <div class="container-fluid">
    
    
    
    <div class="card mb-4">
      <div class="card-header"><i class="fas fa-table mr-1"></i>Data Payroll
        <a href="#" style="width:30px" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-plus-circle" aria-hidden="true"></i></a></div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th>ID Payroll</th>
                <th>Tanggal Surat</th>
                <th>No Surat</th>
                <th>Tanggal Efektif</th>
                <th>Nama</th>
                <th>Title Sebelum</th>
                <th>Cabang Sebelum</th>
                <th>Status Sebelum</th>
                <th>Title Sesudah</th>
                <th>Cabang Sesudah</th>
                <th>Status Sesudah</th>
                <th>Penandatangan</th>
                <th>Jabatan Penandatangan</th>
              </tr>
            </thead>
            <tfoot>
              <tr>
                <th>ID Payroll</th>
                <th>Tanggal Surat</th>
                <th>No Surat</th>
                <th>Tanggal Efektif</th>
                <th>Nama</th>
                <th>Title Sebelum</th>
                <th>Cabang Sebelum</th>
                <th>Status Sebelum</th>
                <th>Title Sesudah</th>
                <th>Cabang Sesudah</th>
                <th>Status Sesudah</th>
                <th>Penandatangan</th>
                <th>Jabatan Penandatangan</th>

              </tr>
            </tfoot>
            <tbody>
              <?php $no = 1;
              foreach ($data as $datas) { ?>
                <tr>
                  <td><?= $datas->idpayroll ?></td>
                  <td><?= $datas->tglsurat ?></td>
                  <td><?= $datas->nosurat ?></td>
                  <td><?= $datas->tglefektif ?></td>
                  <td><?= $datas->nama ?></td>
                  <td><?= $datas->titlesebelum ?></td>
                  <td><?= $datas->lokasisebelum ?></td>
                  <td><?= $datas->statussebelum ?></td>
                  <td><?= $datas->titlesesudah ?></td>
                  <td><?= $datas->statussesudah ?></td>
                  <td><?= $datas->lokasisesudah ?></td>
                  <td><?= $datas->penandatangan ?></td>
                  <td><?= $datas->jabatanpenandatangan ?></td>
                  <td>
                    <div class="btn-group">
                      <button class="btn btn-sm btn-info btnViewItem" data-toggle="modal" data-target="#exampleModal<?= $datas->idpayroll ?>"><i class="fas fa-eye"></i></button>
                      <button class="btn btn-sm btn-success btnEditItem" data-toggle="modal" data-target="#exampleModal1_<?= $datas->idpayroll ?>"><i class="fas fa-edit"></i></button>
                    </div>
                  </td>
                </tr>
                <div class="modal fade" id="exampleModal<?= $datas->idpayroll ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">View Payroll</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">

                        <form>
                          <button onclick="window.print()" style="margin-bottom: 30px;">Cetak Halaman Employee</button>
                          <div class="form-group" style=" padding-left: 10px;">
                            <label for="Company-name" class="col-form-label">Tanggal Surat :</label>
                            <input type="date" class="form-control" id="company-name" value="" hidden><?= $datas->tglsurat ?>
                          </div>
                          <div class="form-group" style="background: #ebebeb; padding-left: 10px;">
                            <label for="Company-name" class="col-form-label">No Surat :</label>
                            <input type="text" class="form-control" id="company-name" value="" hidden><?= $datas->nosurat ?>
                          </div>
                          <div class="form-group" style="padding-left: 10px">
                            <label for="address-text" class="col-form-label">Tanggal Efektif :</label>
                            <textarea class="form-control" id="address-text" hidden></textarea><?= $datas->tglefektif ?>
                          </div>
                          <div class="form-group" style="background: #ebebeb; padding-left: 10px;">
                            <label for="city" class="col-form-label">Nama :</label>
                            <input type="text" class="form-control" id="company-name" hidden><?= $datas->nama ?>
                          </div>
                          <div class="form-group" style="padding-left: 10px">
                            <label for="address-text" class="col-form-label">Title Sebelum :</label>
                            <textarea class="form-control" id="address-text" hidden></textarea><?= $datas->titlesebelum ?>
                          </div>
                          <div class="form-group" style="background: #ebebeb; padding-left: 10px;">
                            <label for="city" class="col-form-label">Cabang Sebelum :</label>
                            <input type="text" class="form-control" id="company-name" hidden><?= $datas-> lokasisebelum ?>
                          </div>
                          <div class="form-group" style="padding-left: 10px">
                            <label for="address-text" class="col-form-label">Status Sebelum :</label>
                            <input type="text" class="form-control" id="company-name" hidden><?= $datas-> statussebelum ?>
                          </div>
                          <div class="form-group" style="background: #ebebeb; padding-left: 10px;">
                            <label for="city" class="col-form-label">Title Sesudah:</label>
                            <input type="text" class="form-control" id="company-name" hidden><?= $datas-> titlesesudah ?>
                          </div>
                          <div class="form-group" style="padding-left: 10px">
                            <label for="address-text" class="col-form-label">Cabang Sesudah:</label>
                            <input type="text" class="form-control" id="company-name" hidden><?= $datas-> lokasisesudah ?>
                          </div>
                          <div class="form-group" style="background: #ebebeb; padding-left: 10px;">
                            <label for="city" class="col-form-label">Status Sesudah :</label>
                            <input type="text" class="form-control" id="company-name" hidden><?= $datas-> statussesudah ?>
                          </div>
                          <div class="form-group" style="padding-left: 10px">
                            <label for="address-text" class="col-form-label">Penandatangan :</label>
                            <input type="text" class="form-control" id="company-name" hidden><?= $datas-> penandatangan ?>
                          </div>
                          <div class="form-group" style="background: #ebebeb; padding-left: 10px;">
                            <label for="city" class="col-form-label">Jabatan Penandatangan:</label>
                            <input type="text" class="form-control" id="company-name" hidden><?= $datas-> jabatanpenandatangan ?>
                          </div>
                          
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
        </div>
        
<!--Untuk edit surat-->
        <div class="modal fade" id="exampleModal1_<?= $datas->idpayroll ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel3" aria-hidden="true">
          <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Surat</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <form method="POST" action="<?= base_url('payroll/update') ?>">
                  <input type="text" name="idpayroll" value="<?= $datas->idpayroll ?>">
                  <div class="form-group">
                    <label for="Company-name" class="col-form-label">ID Payroll :</label>
                    <input type="text" maxlength="4" minlength="4" name="idpayroll" class="form-control" id="idpayroll" value="<?= $datas->idpayroll ?>">
                  </div>
                  <div class="form-group">
                    <label for="Company-name" class="col-form-label">Tanggal Surat :</label>
                    <input type="date" name="tglsurat" class="form-control" id="tglsurat" value="<?= $datas->tglsurat ?>">
                  </div>
                  <div class="form-group">
                    <label for="Company-name" class="col-form-label">No Surat :</label>
                    <input type="text" name="nosurat" class="form-control" id="nosurat" value="<?= $datas->nosurat ?>">
                  </div>
                  <div class="form-group">
                    <label for="Company-name" class="col-form-label">Tanggal Efektif :</label>
                    <input type="date" name="tglefektif" class="form-control" id="tglefektif" value="<?= $datas->tglefektif ?>">
                  </div>
                  <div class="form-group">
                    <label for="Company-name" class="col-form-label">Nama :</label>
                    <input type="text" name="nama" class="form-control" id="nama" value="<?= $datas->nama ?>">
                  </div>
                  <div class="form-group">
                    <label for="Company-name" class="col-form-label">Tittle Sebelum :</label>
                    <input type="text" name="titlesebelum" class="form-control" id="titlesebelum" value="<?= $datas->titlesebelum ?>">
                  </div>
                  <div class="form-group">
                    <label for="Company-name" class="col-form-label">Cabang Sebelum :</label>
                    <input type="text" name="lokasisebelum" class="form-control" id="lokasisebelum" value="<?= $datas->lokasisebelum ?>">
                  </div>
                  <div class="form-group">
                    <label for="Company-name" class="col-form-label">Status Sebelum :</label>
                    <input type="text" name="statussebelum" class="form-control" id="statussebelum" value="<?= $datas->statussebelum ?>">
                  </div>
                  <div class="form-group">
                    <label for="Company-name" class="col-form-label">Tittle Sesudah :</label>
                    <input type="text" name="titlesesudah" class="form-control" id="titlesesudah" value="<?= $datas->titlesesudah ?>">
                  </div>
                  <div class="form-group">
                    <label for="Company-name" class="col-form-label">Cabang Sesudah :</label>
                    <input type="text" name="lokasisesudah" class="form-control" id="lokasisesudah" value="<?= $datas->lokasisesudah ?>">
                  </div>
                  <div class="form-group">
                    <label for="Company-name" class="col-form-label">Status Sesudah :</label>
                    <input type="text" name="statussesudah" class="form-control" id="statussesudah" value="<?= $datas->statussesudah ?>">
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
  </div>
  
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel3" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Tambahkan Surat</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="container">
          <form method="POST" action="<?= base_url('payroll/store') ?>">
            <div class="form-row">
            <div class="form-group col-md-6">
              <label for="Company-name">ID Payroll</label>
              <input type="text" maxlength="4" minlength="4" name="idpayroll" id="idpayroll" class="form-control" value="" placeholder="ID Payroll" required>
            </div>
            <div class="form-group col-md-6">
              <label for="Company-name">Tanggal Surat</label>
              <input type="date" name="tglsurat" id="tglsurat" class="form-control" value="" placeholder="Tanggal Surat" required>
            </div>
            </div>
            <div class="form-row">
            <div class="form-group col-md-6">
              <label for="Company-name">No Surat</label>
              <input type="text" name="nosurat" id="nosurat" class="form-control" value="" placeholder="No Surat" required>
            </div>
            <div class="form-group col-md-6">
              <label for="Company-name">Tanggal Efektif</label>
              <input type="date" name="tglefektif" id="tglefektif" class="form-control" value="" placeholder="Tanggal Efektif" required>
            </div>
            </div>
            <div class="form-row">
            <div class="form-group col-md-6">
              <label for="Company-name">Nama</label>
              <input type="text" name="nama" id="nama" class="form-control" value="" placeholder="Nama" required>
            </div>
            <div class="form-group col-md-6">
              <label for="Company-name">Tittle Sebelum</label>
              <input type="text" name="titlesebelum" id="titlesebelum" class="form-control" value="" placeholder="Title Sebelum" required>
            </div>
            </div>

            <data></data>iv class="form-row">
            <!--<div class="form-group col-md-6">
              <label for="Company-name">Nama</label>
              <input type="text" name="nama" id="nama" class="form-control" value="" placeholder="Nama" required>
            </div>-->
            <div class="form-group col-md-6">
              <label for="Company-name">Cabang Sebelum</label>
              <input type="text" name="lokasisebelum" id="lokasisebelum" class="form-control" value="" placeholder="Lokasi Sebelum" required>
            </div>
            </div>

            <div class="form-row">
            <div class="form-group col-md-6">
              <label for="Company-name">Status Sebelum</label>
              <input type="text" name="statussebelum" id="statussebelum" class="form-control" value="" placeholder="Status Sebelum" required>
            </div>
            <div class="form-group col-md-6">
              <label for="Company-name">Tittle Sesudah</label>
              <input type="text" name="titlesesudah" id="titlesesudah" class="form-control" value="" placeholder="Title Sesudah" required>
            </div>
            </div>

            <div class="form-row">
            <div class="form-group col-md-6">
              <label for="Company-name">Cabang Sesudah</label>
              <input type="text" name="lokasisesudah" id="lokasisesudah" class="form-control" value="" placeholder="Cabang Sesudah" required>
            </div>
            <div class="form-group col-md-6">
              <label for="Company-name">Status Sesudah</label>
              <input type="text" name="statussesudah" id="statussesudah" class="form-control" value="" placeholder="Status Sesudah" required>
            </div>
            </div>

            <div class="form-row">
            <div class="form-group col-md-6">
              <label for="Company-name">Penandatangan</label>
              <input type="text" name="penandatangan" id="penandatangan" class="form-control" value="" placeholder="penandatangan" required>
            </div>
            <div class="form-group col-md-6">
              <label for="Company-name">Jabatan Penandatangan</label>
              <input type="text" name="jabatanpenandatangan" id="jabatanpenandatangan" class="form-control" value="" placeholder="Jabatan Penandatangan" required>
            </div>
            </div>

              <div>
              <button name="btn-submit-vendor" type="submit" class="btn btn-success" style="margin-top:20px" value="submit"><i class="fa fa-floppy-o" aria-hidden="true"></i>Save</button>
              </div>
          </form>
        </div>
      </div>
    </div>
  </div>