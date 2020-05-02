  <div class="container-fluid">
    
    
    
    <div class="card mb-4">
      <div class="card-header"><i class="fas fa-table mr-1"></i>Data Employee
        <a href="#" style="width:30px" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-plus-circle" aria-hidden="true"></i></a></div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th>Nama</th>
                <th>Branch</th>
                <th>Divisi</th>
                <th>Tittle</th>
                <th>Level</th>
                <th>Sex</th>
                <th>Action</th>
              </tr>
            </thead>
            <tfoot>
              <tr>
                <th>Nama</th>
                <th>Branch</th>
                <th>Divisi</th>
                <th>Tittle</th>
                <th>Level</th>
                <th>Sex</th>
                <th>Action</th>
              </tr>
            </tfoot>
            <tbody>
              <?php $no = 1;
              foreach ($data as $datas) { ?>
                <tr>
                  <td><?= $datas->name ?></td>
                  <td><?= $datas->branch ?></td>
                  <td><?= $datas->divisi ?></td>
                  <td><?= $datas->tittle ?></td>
                  <td><?= $datas->level ?></td>
                  <td><?= $datas->sex ?></td>
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
                        <h5 class="modal-title" id="exampleModalLabel">View Employee</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">

                        <form>
                          <button onclick="window.print()" style="margin-bottom: 30px;">Cetak Halaman Employee</button>
                          <div class="form-group" style=" padding-left: 10px;">
                            <label for="Company-name" class="col-form-label">Name :</label>
                            <input type="text" class="form-control" id="company-name" value="" hidden><?= $datas->name ?>
                          </div>
                          <div class="form-group" style="background: #ebebeb; padding-left: 10px;">
                            <label for="Company-name" class="col-form-label">Branch:</label>
                            <input type="text" class="form-control" id="company-name" value="" hidden><?= $datas->branch ?>
                          </div>
                          <div class="form-group" style="padding-left: 10px">
                            <label for="address-text" class="col-form-label">Divisi:</label>
                            <textarea class="form-control" id="address-text" hidden></textarea><?= $datas->divisi ?>
                          </div>
                          <div class="form-group" style="background: #ebebeb; padding-left: 10px;">
                            <label for="city" class="col-form-label">Title:</label>
                            <input type="text" class="form-control" id="company-name" hidden><?= $datas->tittle ?>
                          </div>
                          <div class="form-group" style="padding-left: 10px">
                            <label for="address-text" class="col-form-label">Level:</label>
                            <textarea class="form-control" id="address-text" hidden></textarea><?= $datas->level ?>
                          </div>
                          <div class="form-group" style="background: #ebebeb; padding-left: 10px;">
                            <label for="city" class="col-form-label">Jenis Kelamin:</label>
                            <input type="text" class="form-control" id="company-name" hidden><?= $datas->sex ?>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
        </div>
        <div class="modal fade" id="exampleModal1_<?= $datas->idpayroll ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel3" aria-hidden="true">
          <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">EDIT Employee</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <form method="POST" action="<?= base_url('employee/update') ?>">
                  <input type="text" name="idpayroll" value="<?= $datas->idpayroll ?>">
                  <div class="form-group">
                    <label for="Company-name" class="col-form-label">Name:</label>
                    <input type="text" name="name" class="form-control" id="name" value="<?= $datas->name ?>">
                  </div>
                  <div class="form-group">
                    <label for="Company-name" class="col-form-label">Branch:</label>
                    <input type="text" name="branch" class="form-control" id="branch" value="<?= $datas->branch ?>">
                  </div>
                  <div class="form-group">
                    <label for="address-text" class="col-form-label">Divisi:</label>
                    <input type="text" name="divisi" class="form-control" id="divisi" value="<?= $datas->divisi ?>">
                  </div>
                  
                  <div class="form-group">
                    <label for="address-text" class="col-form-label">Title:</label>
                    <input type="text" name="title" class="form-control" id="title" value="<?= $datas->tittle ?>">
                  </div>
                  <div class="form-group">
                    <label for="address-text" class="col-form-label">Level:</label>
                    <input type="text" name="level" class="form-control" id="level" value="<?= $datas->level ?>">
                  </div>
                  
                  <div class="form-group">
                    <label for="address-text" class="col-form-label">Jenis Kelamin:</label>
                    <input name="sex" type="text" class="form-control" id="sex" value="<?= $datas->sex ?>">
              
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
          <h5 class="modal-title" id="exampleModalLabel">ADD Employee</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form method="POST" action="<?= base_url('employee/store') ?>">
            <div class="form-group">
              <label for="Company-name" class="col-form-label">Name:</label>
              <input type="text" name="name" class="form-control" id="name" value="" required>
            </div>
            <div class="form-group">
              <label for="Company-name" class="col-form-label">Branch:</label>
              <input type="text" name="branch" class="form-control" id="branch" value="" required>
            </div>
            <div class="form-group">
              <label for="address-text" class="col-form-label">Divisi:</label>
              <input type="text" name="divisi" class="form-control" id="divisi" value="" required>
            </div>
            
            <div class="form-group">
              <label for="address-text" class="col-form-label">Title:</label>
              <input type="text" name="tittle" class="form-control" id="tittle" value="" required>
            </div>
            
            <div class="form-group">
              <label for="address-text" class="col-form-label">Level:</label>
              <input type="text" name="level" class="form-control" id="level" value="" required>
            </div>
            
            <div class="form-group">
              <label for="address-text" class="col-form-label">Jenis Kelamin:</label>
              <input name="sex" type="text" class="form-control" id="sex" Value="" required>
            </div>
      
            
           
            <div>
              <button name="btn-submit-vendor" type="submit" class="btn btn-success" style="margin-top:20px" value="submit"><i class="fa fa-floppy-o" aria-hidden="true"></i>Save</button>
            </div>

          </form>
        </div>
      </div>
    </div>
  </div>