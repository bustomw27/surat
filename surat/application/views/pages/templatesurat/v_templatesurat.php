  <div class="container-fluid">
    
    
    
    <div class="card mb-4">
      <div class="card-header"><i class="fas fa-table mr-1"></i>Template Surat
        <a href="#" style="width:30px" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-plus-circle" aria-hidden="true"></i></a></div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th>ID Template</th>
                <th>Nama Template</th>
                <th>Note</th>
                <th>Template Image</th>
                <th>Status</th>
            </thead>
            <tfoot>
              <tr>
                <th>ID Template</th>
                <th>Nama Template</th>
                <th>Note</th>
                <th>Template Image</th>
                <th>Status</th>
              </tr>
            </tfoot>
            <tbody>
              <?php $no = 1;
              foreach ($data as $datas) { ?>
                <tr>
                  <td><?= $datas->idtemplate ?></td>
                  <td><?= $datas->templatename ?></td>
                  <td><?= $datas->note ?></td>
                  <td><?= $datas->templateimg ?></td>
                  <td><?= $datas->status ?></td>
                  <td>
                    <div class="btn-group">
                      <button class="btn btn-sm btn-info btnViewItem" data-toggle="modal" data-target="#exampleModal<?= $datas->idtemplate ?>"><i class="fas fa-eye"></i></button>
                      <button class="btn btn-sm btn-success btnEditItem" data-toggle="modal" data-target="#exampleModal1_<?= $datas->idtemplate ?>"><i class="fas fa-edit"></i></button>
                    </div>
                  </td>
                </tr>
                <div class="modal fade" id="exampleModal<?= $datas->idtemplate ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">View Template Surat</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
<!--
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
-->
                      </div>
                    </div>
                  </div>
                </div>
        </div>
        
<!--Untuk edit surat-->
        <div class="modal fade" id="exampleModal1_<?= $datas->idtemplate ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel3" aria-hidden="true">
          <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Surat</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <form method="POST" action="<?= base_url('templatesurat/update') ?>">
                  <input type="text" name="idtemplate" value="<?= $datas->idtemplate ?>">
                  <div class="form-group">
                    <label for="Company-name" class="col-form-label">ID Template :</label>
                    <input type="text" name="idtemplate" class="form-control" id="idtemplate" value="<?= $datas->idtemplate ?>">
                  </div>
                  <div class="form-group">
                    <label for="Company-name" class="col-form-label">Nama Template :</label>
                    <input type="text" name="templatename" class="form-control" id="templatename" value="<?= $datas->templatename ?>">
                  </div>
                  <div class="form-group">
                    <label for="Company-name" class="col-form-label">Note :</label>
                    <input type="text" name="note" class="form-control" id="note" value="<?= $datas->note ?>">
                  </div>
                  <div class="form-group">
                    <label for="Company-name" class="col-form-label">Template Image :</label>
                    <input type="file" multiple="multiple" name="templateimg" class="form-control" id="templateimg" value="<?= $datas->templateimg ?>">
                  </div>
                  <div class="form-group">
                    <label for="Company-name" class="col-form-label">Status :</label>
                    <input type="text" name="status" class="form-control" id="status" value="<?= $datas->status ?>">
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
          <form method="POST" action="<?= base_url('templatesurat/store') ?>">
            <div class="form-row">
            <div class="form-group col-md-6">
              <label for="Company-name">ID Template</label>
              <input type="text" name="idtemplate" id="idtemplate" class="form-control" value="" placeholder="ID Template" required>
            </div>
            <div class="form-group col-md-6">
              <label for="Company-name">Nama Template</label>
              <input type="text" name="templatename" id="templatename" class="form-control" value="" placeholder="Nama Template" required>
            </div>
            </div>
            <div class="form-row">
            <div class="form-group col-md-6">
              <label for="Company-name">Note</label>
              <input type="text" name="note" id="note" class="form-control" value="" placeholder="No Surat" required>
            </div>
            <div class="form-group col-md-6">
              <label for="Company-name">Template Image</label>
              <input type="file" name="templateimg" id="templateimg" class="form-control" multiple="multiple" placeholder="Template Image" required>
            </div>
            </div>
            <div class="form-row">
            <div class="form-group col-md-6">
              <label for="Company-name">Status</label>
              <input type="text" name="status" id="status" class="form-control" value="" placeholder="Status" required>
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