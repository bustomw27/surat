  <div class="container-fluid">
    
    
    
    <div class="card mb-4">
      <div class="card-header"><i class="fas fa-table mr-1"></i>Data Ticket
        <a href="#" style="width:30px" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-plus-circle" aria-hidden="true"></i></a></div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th>Nama</th>
                <th>Email</th>
                <th>Message</th>
                <th>Action</th>
              </tr>
            </thead>
            <tfoot>
              <tr>
                <th>Nama</th>
                <th>Email</th>
                <th>Message</th>
                <th>Action</th>
              </tr>
            </tfoot>
            <tbody>
              <?php $no = 1;
              foreach ($data as $datas) { ?>
                <tr>
                  <td><?= $datas->name ?></td>
                  <td><?= $datas->email ?></td>
                  <td><?= $datas->message ?></td>
                  
                  <td>
                    <div class="btn-group">
                      <button class="btn btn-sm btn-info btnViewItem" data-toggle="modal" data-target="#exampleModal<?= $datas->ticketid ?>"><i class="fas fa-eye"></i></button>
                      <button class="btn btn-sm btn-success btnEditItem" data-toggle="modal" data-target="#exampleModal1_<?= $datas->ticketid ?>"><i class="fas fa-edit"></i></button>
                    </div>
                  </td>
                </tr>
                <div class="modal fade" id="exampleModal<?= $datas->ticketid ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">View Ticket</h5>
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
                            <label for="Company-name" class="col-form-label">Email:</label>
                            <input type="text" class="form-control" id="company-name" value="" hidden><?= $datas->email ?>
                          </div>
                          <div class="form-group" style="padding-left: 10px">
                            <label for="address-text" class="col-form-label">Message:</label>
                            <textarea class="form-control" id="address-text" hidden></textarea><?= $datas->message ?>
                          </div>
                          
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
        </div>
          
        <div class="modal fade" id="exampleModal1_<?= $datas->ticketid ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel3" aria-hidden="true">
          <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">EDIT Ticket</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <form method="POST" action="<?= base_url('ticket/update') ?>">
                  <input type="text" name="ticketid" value="<?= $datas->ticketid ?>">
                  <div class="form-group">
                    <label for="Company-name" class="col-form-label">Name 1 2:</label>
                    <input type="text" name="ticketid" class="form-control" id="ticketid" value="<?= $datas->ticketid ?>">
                  </div>
                  <div class="form-group">
                    <label for="Company-name" class="col-form-label">Name 1 1:</label>
                    <input type="text" name="name" class="form-control" id="name" value="<?= $datas->name ?>">
                  </div>
                  <div class="form-group">
                    <label for="Company-name" class="col-form-label">Email:</label>
                    <input type="text" name="email" class="form-control" id="email" value="<?= $datas->email ?>">
                  </div>
                  <div class="form-group">
                    <label for="address-text" class="col-form-label">Message:</label>
                    <input type="text" name="message" class="form-control" id="message" value="<?= $datas->message ?>">
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
          <h5 class="modal-title" id="exampleModalLabel">ADD Ticket</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form method="POST" action="<?= base_url('ticket/store') ?>">
            <div class="form-group">
              <label for="Company-name" class="col-form-label">Name:</label>
              <input type="text" name="name" class="form-control" id="name" value="" required>
            </div>
            <div class="form-group">
              <label for="Company-name" class="col-form-label">Email:</label>
              <input type="text" name="email" class="form-control" id="email" value="" required>
            </div>
            <div class="form-group">
              <label for="address-text" class="col-form-label">Message:</label>
              <input type="text" name="message" class="form-control" id="message" value="" required>
            </div>       
            <div>
              <button name="btn-submit-vendor" type="submit" class="btn btn-success" style="margin-top:20px" value="submit"><i class="fa fa-floppy-o" aria-hidden="true"></i>Save</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>