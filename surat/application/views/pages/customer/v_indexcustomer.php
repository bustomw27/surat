  <div class="container-fluid">
    <ol class="breadcrumb mb-4">
      <li class="breadcrumb-item active">Dashboard</li>
    </ol>
    <div class="row">
      <div class="col-xl-3 col-md-6">
        <div class="card bg-primary text-white mb-4">
          <div class="card-body">Dashboard</div>
          <div class="card-footer" style="text-align: right">
            <h2><?= $countcustomer ?></h2>
          </div>
        </div>
      </div>
      <div class="col-xl-3 col-md-6">
        <div class="card bg-warning text-white mb-4">
          <div class="card-body">New Customer</div>
          <div class="card-footer" style="text-align: right">
            <h2><?= $countcustomer ?></h2>
          </div>
        </div>
      </div>
      <div class="col-xl-3 col-md-6">
        <div class="card bg-success text-white mb-4">
          <div class="card-body">Customer Aktif</div>
          <div class="card-footer" style="text-align: right">
            <h2><?= $activecustomer ?></h2>
          </div>
        </div>
      </div>
      <div class="col-xl-3 col-md-6">
        <div class="card bg-danger text-white mb-4">
          <div class="card-body">Customer Non Aktif</div>
          <div class="card-footer" style="text-align: right">
            <h2><?= $deactivecustomer ?></h2>
          </div>
        </div>
      </div>
    </div>
    <!--<div class="row">
                            <div class="col-xl-6">
                                <div class="card mb-4">
                                    <div class="card-header"><i class="fas fa-chart-area mr-1"></i>Area Chart Example</div>
                                    <div class="card-body"><canvas id="myAreaChart" width="100%" height="40"></canvas></div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="card mb-4">
                                    <div class="card-header"><i class="fas fa-chart-bar mr-1"></i>Bar Chart Example</div>
                                    <div class="card-body"><canvas id="myBarChart" width="100%" height="40"></canvas></div>
                                </div>
                            </div>
                        </div>-->

    <div class="card mb-4">
      <div class="card-header"><i class="fas fa-table mr-1"></i>Data Customer
        <a href="#" style="width:30px" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-plus-circle" aria-hidden="true"></i></a></div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th>Nama Perusahaan</th>
                <th>Alamat</th>
                <th>Kota</th>
                <th>PIC</th>
                <th>Brand</th>
                <th>Action</th>
              </tr>
            </thead>
            <tfoot>
              <tr>
                <th>Nama Perusahaan</th>
                <th>Alamat</th>
                <th>Kota</th>
                <th>PIC</th>
                <th>Brand</th>
                <th>Action</th>
              </tr>
            </tfoot>
            <tbody>
              <?php $no = 1;
              foreach ($data as $datas) { ?>
                <tr>
                  <td><?= $datas->companyname ?></td>
                  <td><?= $datas->address01 ?></td>
                  <td><?= $datas->city01 ?></td>
                  <td><?= $datas->name01 ?></td>
                  <td><?= $datas->brand01 ?></td>
                  <td>
                    <div class="btn-group">
                      <button class="btn btn-sm btn-info btnViewItem" data-toggle="modal" data-target="#exampleModal<?= $datas->idcustomer ?>"><i class="fas fa-eye"></i></button>
                      <button class="btn btn-sm btn-success btnEditItem" data-toggle="modal" data-target="#exampleModal1_<?= $datas->idcustomer ?>"><i class="fas fa-edit"></i></button>
                    </div>
                  </td>
                </tr>
                <div class="modal fade" id="exampleModal<?= $datas->idcustomer ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">View Customer</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">

                        <form>
                          <button onclick="window.print()" style="margin-bottom: 30px;">Cetak Halaman Web</button>
                          <div class="form-group" style=" padding-left: 10px;">
                            <label for="Company-name" class="col-form-label">Customer Code:</label>
                            <input type="text" class="form-control" id="company-name" value="" hidden><?= $datas->codecustomer ?>
                          </div>
                          <div class="form-group" style="background: #ebebeb; padding-left: 10px;">
                            <label for="Company-name" class="col-form-label">Company Name:</label>
                            <input type="text" class="form-control" id="company-name" value="" hidden><?= $datas->companyname ?>
                          </div>
                          <div class="form-group" style="padding-left: 10px">
                            <label for="address-text" class="col-form-label">Alamat 1:</label>
                            <textarea class="form-control" id="address-text" hidden></textarea><?= $datas->address01 ?>
                          </div>
                          <div class="form-group" style="background: #ebebeb; padding-left: 10px;">
                            <label for="city" class="col-form-label">Kota 1:</label>
                            <input type="text" class="form-control" id="company-name" hidden><?= $datas->city01 ?>
                          </div>
                          <div class="form-group" style="padding-left: 10px">
                            <label for="address-text" class="col-form-label">Alamat 2:</label>
                            <textarea class="form-control" id="address-text" hidden></textarea><?= $datas->address02 ?>
                          </div>
                          <div class="form-group" style="background: #ebebeb; padding-left: 10px;">
                            <label for="city" class="col-form-label">Kota 2:</label>
                            <input type="text" class="form-control" id="company-name" hidden><?= $datas->city02 ?>
                          </div>
                          <div class="form-group" style="padding-left: 10px">
                            <label for="address-text" class="col-form-label">Alamat 3:</label>
                            <textarea class="form-control" id="address-text" hidden></textarea><?= $datas->address03 ?>
                          </div>
                          <div class="form-group" style="background: #ebebeb; padding-left: 10px;">
                            <label for="city" class="col-form-label">Kota 3:</label>
                            <input type="text" class="form-control" id="company-name" hidden><?= $datas->address03 ?>
                          </div>
                          <div class="form-group" style="padding-left: 10px">
                            <label for="address-text" class="col-form-label">Nama 1:</label>
                            <textarea class="form-control" id="address-text" hidden></textarea><?= $datas->name01 ?>
                          </div>
                          <div class="form-group" style="background: #ebebeb; padding-left: 10px;">
                            <label for="city" class="col-form-label">Jabatan 1:</label>
                            <input type="text" class="form-control" id="company-name" hidden><?= $datas->jabatan01 ?>
                          </div>
                          <div class="form-group" style="padding-left: 10px">
                            <label for="address-text" class="col-form-label">Nama 2:</label>
                            <textarea class="form-control" id="address-text" hidden></textarea><?= $datas->name02 ?>
                          </div>
                          <div class="form-group" style="background: #ebebeb; padding-left: 10px;">
                            <label for="city" class="col-form-label">Jabatan 2:</label>
                            <input type="text" class="form-control" id="company-name" hidden><?= $datas->jabatan02 ?>
                          </div>
                          <div class="form-group" style="padding-left: 10px">
                            <label for="address-text" class="col-form-label">Nama 3:</label>
                            <textarea class="form-control" id="address-text" hidden></textarea><?= $datas->name03 ?>
                          </div>
                          <div class="form-group" style="background: #ebebeb; padding-left: 10px;">
                            <label for="city" class="col-form-label">Jabatan 3:</label>
                            <input type="text" class="form-control" id="company-name" hidden><?= $datas->jabatan03 ?>
                          </div>
                          <div class="form-group" style="padding-left: 10px">
                            <label for="address-text" class="col-form-label">Brand 1:</label>
                            <textarea class="form-control" id="address-text" hidden></textarea><?= $datas->brand01 ?>
                          </div>
                          <div class="form-group" style="background: #ebebeb; padding-left: 10px;">
                            <label for="city" class="col-form-label">Brand 2:</label>
                            <input type="text" class="form-control" id="company-name" hidden><?= $datas->brand02 ?>
                          </div>
                          <div class="form-group" style="padding-left: 10px">
                            <label for="address-text" class="col-form-label">Phone Number:</label>
                            <textarea class="form-control" id="address-text" hidden></textarea><?= $datas->phone ?>
                          </div>
                          <div class="form-group" style="background: #ebebeb; padding-left: 10px;">
                            <label for="city" class="col-form-label">Fax :</label>
                            <input type="text" class="form-control" id="company-name" hidden><?= $datas->fax ?>
                          </div>
                          <div class="form-group" style="padding-left: 10px">
                            <label for="address-text" class="col-form-label">Email:</label>
                            <textarea class="form-control" id="address-text" hidden></textarea><?= $datas->email ?>
                          </div>
                          <div class="form-group" style="background: #ebebeb; padding-left: 10px;">
                            <label for="city" class="col-form-label">Country:</label>
                            <input type="text" class="form-control" id="company-name" hidden><?= $datas->country ?>
                          </div>
                          <div class="form-group" style="padding-left: 10px">
                            <label for="address-text" class="col-form-label">Status:</label>
                            <textarea class="form-control" id="address-text" hidden></textarea><?php if ($datas->status) {
                                                                                                  echo "Active";
                                                                                                } else {
                                                                                                  echo "Deactive";
                                                                                                } ?>
                          </div>
                          <div class="form-group" style="background: #ebebeb; padding-left: 10px;">
                            <label for="city" class="col-form-label">Note:</label>
                            <input type="text" class="form-control" id="company-name" hidden><?= $datas->note ?>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
        </div>
        <div class="modal fade" id="exampleModal1_<?= $datas->idcustomer ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel3" aria-hidden="true">
          <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">EDIT Customer</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <form method="POST" action="<?= base_url('customer/update') ?>">
                  <input type="hidden" name="idcustomer" value="<?= $datas->idcustomer ?>">
                  <div class="form-group">
                    <label for="Company-name" class="col-form-label">Costumer Kode:</label>
                    <input type="text" name="codecustomer" class="form-control" id="company-name" value="<?= $datas->codecustomer ?>" readonly>
                  </div>
                  <div class="form-group">
                    <label for="Company-name" class="col-form-label">Company Name:</label>
                    <input type="text" name="companyname" class="form-control" id="company-name" value="<?= $datas->companyname ?>">
                  </div>
                  <div class="form-group">
                    <label for="address-text" class="col-form-label">Alamat 1:</label>
                    <textarea name="address01" class="form-control" id="address-text"><?= $datas->address01 ?></textarea>
                  </div>
                  <div class="form-group">
                    <label for="city" class="col-form-label">Kota 1:</label>
                    <select name="city01" id="" class="form-control">
                      <?php foreach ($city as $citys) { ?>
                        <option <?php if ($citys->city == $datas->city01) {
                                  echo 'selected';
                                } ?> value="<?= $citys->city ?>"><?= $citys->city ?></option>
                      <?php } ?>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="address-text" class="col-form-label">Alamat 2:</label>
                    <textarea name="address02" class="form-control" id="address-text"><?= $datas->address02 ?></textarea>
                  </div>
                  <div class="form-group">
                    <label for="city" class="col-form-label">Kota 2:</label>
                    <select name="city02" id="" class="form-control">
                      <?php foreach ($city as $citys) { ?>
                        <option <?php if ($citys->city == $datas->city02) {
                                  echo 'selected';
                                } ?> value="<?= $citys->city ?>"><?= $citys->city ?></option>
                      <?php } ?>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="address-text" class="col-form-label">Alamat 3:</label>
                    <textarea name="address03" class="form-control" id="address-text"><?= $datas->address03 ?></textarea>
                  </div>
                  <div class="form-group">
                    <label for="city" class="col-form-label">Kota 3:</label>
                    <select name="city03" id="" class="form-control">
                      <?php foreach ($city as $citys) { ?>
                        <option <?php if ($citys->city == $datas->city01) {
                                  echo 'selected';
                                } ?> value="<?= $citys->city ?>"><?= $citys->city ?></option>
                      <?php } ?>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="address-text" class="col-form-label">Nama 1:</label>
                    <input name="name01" type="text" class="form-control" id="company-name" value="<?= $datas->name01 ?>">
                    <textarea class="form-control" id="address-text" hidden></textarea>
                  </div>
                  <div class="form-group">
                    <label for="city" class="col-form-label">Jabatan 1:</label>
                    <input type="text" name="jabatan01" class="form-control" id="company-name" value="<?= $datas->jabatan01 ?>">
                  </div>
                  <div class="form-group">
                    <label for="address-text" class="col-form-label">Nama 2:</label>
                    <input type="text" name="name02" class="form-control" id="company-name" value="<?= $datas->name02 ?>">
                  </div>
                  <div class="form-group">
                    <label for="city" class="col-form-label">Jabatan 2:</label>
                    <input type="text" name="jabatan02" class="form-control" id="company-name" value="<?= $datas->jabatan02 ?>">
                  </div>
                  <div class="form-group">
                    <label for="address-text" class="col-form-label">Nama 3:</label>
                    <input type="text" name="name03" class="form-control" id="company-name" value="<?= $datas->name03 ?>">
                  </div>
                  <div class="form-group">
                    <label for="city" class="col-form-label">Jabatan 3:</label>
                    <input type="text" name="jabatan03" class="form-control" id="company-name" value="jabatan03">
                  </div>
                  <div class="form-group">
                    <label for="address-text" class="col-form-label">Brand 1:</label>
                    <input type="text" name="brand01" class="form-control" id="company-name" value="<?= $datas->brand01 ?>">
                  </div>
                  <div class="form-group">
                    <label for="city" class="col-form-label">Brand 2:</label>
                    <input type="text" name="brand02" class="form-control" id="company-name" value="<?= $datas->brand02 ?>">
                  </div>
                  <div class="form-group">
                    <label for="address-text" class="col-form-label">Phone Number:</label>
                    <input type="text" name="phone" class="form-control" id="company-name" value="<?= $datas->phone ?>">
                  </div>
                  <div class="form-group">
                    <label for="city" class="col-form-label">Fax :</label>
                    <input type="text" name="fax" class="form-control" id="company-name" value="<?= $datas->fax ?>">
                  </div>
                  <div class="form-group">
                    <label for="address-text" class="col-form-label">Email:</label>
                    <input type="text" name="email" class="form-control" id="company-name" value="<?= $datas->email ?>">
                  </div>
                  <div class="form-group">
                    <label for="city" class="col-form-label">Country:</label>
                    <select name="country" id="" class="form-control">
                      <?php foreach ($country as $countrys) { ?>
                        <option <?php if ($countrys->country == $datas->country) {
                                  echo 'selected';
                                } ?> value="<?= $countrys->country ?>"><?= $countrys->country ?></option>
                      <?php } ?>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="address-text" class="col-form-label">Status:</label>
                    <select name="status" id="" class="form-control">
                      <?php if ($datas->status == 1) { ?>
                        <option value="1">Active</option>
                      <?php } else { ?>
                        <option value="0">Deactive</option>
                      <?php } ?>
                    </select>
                  </div>
                  <div>
                    <label for="city" class="col-form-label">Note:</label>
                    <textarea name="note" class="form-control" id="address-text"><?= $datas->note ?></textarea>
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
          <h5 class="modal-title" id="exampleModalLabel">ADD Customer</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form method="POST" action="<?= base_url('customer/store') ?>">
            <div class="form-group">
              <label for="Company-name" class="col-form-label">Costumer Kode:</label>
              <input type="text" name="codecustomer" class="form-control" id="company-name" value="<?= $kodebarang  ?>" readonly>
            </div>
            <div class="form-group">
              <label for="Company-name" class="col-form-label">Company Name:</label>
              <input type="text" name="companyname" class="form-control" id="company-name" value="" required>
            </div>
            <div class="form-group">
              <label for="address-text" class="col-form-label">Alamat 1:</label>
              <textarea name="address01" class="form-control" id="address-text" required></textarea>
            </div>
            <div class="form-group">
              <label for="city" class="col-form-label">Kota 1:</label>
              <select name="city01" id="" class="form-control">
                <?php foreach ($city as $citys) { ?>
                  <option value="<?= $citys->city ?>"><?= $citys->city ?></option>
                <?php } ?>
              </select>
            </div>
            <div class="form-group">
              <label for="address-text" class="col-form-label">Alamat 2:</label>
              <textarea name="address02" class="form-control" id="address-text"></textarea>
            </div>
            <div class="form-group">
              <label for="city" class="col-form-label">Kota 2:</label>
              <select name="city02" id="" class="form-control">
                <?php foreach ($city as $citys) { ?>
                  <option value="<?= $citys->city ?>"><?= $citys->city ?></option>
                <?php } ?>
              </select>
            </div>
            <div class="form-group">
              <label for="address-text" class="col-form-label">Alamat 3:</label>
              <textarea name="address03" class="form-control" id="address-text"></textarea>
            </div>
            <div class="form-group">
              <label for="city" class="col-form-label">Kota 3:</label>
              <select name="city03" id="" class="form-control">
                <?php foreach ($city as $citys) { ?>
                  <option value="<?= $citys->city ?>"><?= $citys->city ?></option>
                <?php } ?>
              </select>
            </div>
            <div class="form-group">
              <label for="address-text" class="col-form-label">Nama 1:</label>
              <input name="name01" type="text" class="form-control" id="company-name" Value="" required>
              <textarea class="form-control" id="address-text" hidden></textarea>
            </div>
            <div class="form-group">
              <label for="city" class="col-form-label">Jabatan 1:</label>
              <input type="text" name="jabatan01" class="form-control" id="company-name" value="">
            </div>
            <div class="form-group">
              <label for="address-text" class="col-form-label">Nama 2:</label>
              <input type="text" name="name02" class="form-control" id="company-name" value="">
            </div>
            <div class="form-group">
              <label for="city" class="col-form-label">Jabatan 2:</label>
              <input type="text" name="jabatan02" class="form-control" id="company-name" value="">
            </div>
            <div class="form-group">
              <label for="address-text" class="col-form-label">Nama 3:</label>
              <input type="text" name="name03" class="form-control" id="company-name" value="">
            </div>
            <div class="form-group">
              <label for="city" class="col-form-label">Jabatan 3:</label>
              <input type="text" name="jabatan03" class="form-control" id="company-name" value="">
            </div>
            <div class="form-group">
              <label for="address-text" class="col-form-label">Brand 1:</label>
              <input type="text" name="brand01" class="form-control" id="company-name" value="" required>
            </div>
            <div class="form-group">
              <label for="city" class="col-form-label">Brand 2:</label>
              <input type="text" name="brand02" class="form-control" id="company-name" value="">
            </div>
            <div class="form-group">
              <label for="address-text" class="col-form-label">Phone Number:</label>
              <input type="text" name="phone" class="form-control" id="company-name" value="" required>
            </div>
            <div class="form-group">
              <label for="city" class="col-form-label">Fax :</label>
              <input type="text" name="fax" class="form-control" id="company-name" value="">
            </div>
            <div class="form-group">
              <label for="address-text" class="col-form-label">Email:</label>
              <input type="text" name="email" class="form-control" id="company-name" value="" required>
            </div>
            <div class="form-group">
              <label for="city" class="col-form-label">Country:</label>
              <select name="country" id="" class="form-control">
                <?php foreach ($country as $countrys) { ?>
                  <option value="<?= $countrys->country ?>"><?= $countrys->country ?></option>
                <?php } ?>
              </select>
            </div>
            <div>
              <label for="city" class="col-form-label">Note:</label>
              <textarea name="note" class="form-control" id="address-text"></textarea>
            </div>
            <div>
              <button name="btn-submit-vendor" type="submit" class="btn btn-success" style="margin-top:20px" value="submit"><i class="fa fa-floppy-o" aria-hidden="true"></i>Save</button>
            </div>

          </form>
        </div>
      </div>
    </div>
  </div>