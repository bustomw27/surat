 <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
     <div class="sb-sidenav-menu">
         <div class="nav">
             <div class="sb-sidenav-menu-heading">Dashboard</div>
             <a class="nav-link" href="<?= base_url('dashboard') ?>">
                 <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>Pusat Data
             </a>
         </div>

         <div class="nav">
             <div class="sb-sidenav-menu-heading">Employee</div>
             <a class="nav-link" href="<?= base_url('employee') ?>">
                 <div class="sb-nav-link-icon"><i class="far fa-address-book"></i></div>
                 Employee
             </a>
         </div>
         <div class="nav">
             <div class="sb-sidenav-menu-heading">Ticket</div>
             <a class="nav-link" href="<?= base_url('ticket') ?>">
                 <div class="sb-nav-link-icon"><i class="fas fa-address-card"></i></div>
                 Ticket
             </a>
         </div>
         <div class="nav">
             <div class="sb-sidenav-menu-heading">Payroll</div>
             <a class="nav-link" href="<?= base_url('payroll') ?>">
                 <div class="sb-nav-link-icon"><i class="fas fa-address-card"></i></div>
                 Payroll
             </a>
         </div>
         <div class="nav">
             <div class="sb-sidenav-menu-heading">Template Surat</div>
             <a class="nav-link" href="<?= base_url('templatesurat') ?>">
                 <div class="sb-nav-link-icon"><i class="fas fa-address-card"></i></div>
                 Template Surat
             </a>
         </div>
         
         <!--<div class="nav">
             <div class="sb-sidenav-menu-heading">Finance & Akunting</div>
             <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts2" aria-expanded="false" aria-controls="collapseLayouts">
                 <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                 Monitoring Finance
                 <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
             </a>
             <div class="collapse" id="collapseLayouts2" aria-labelledby="headingThree" data-parent="#sidenavAccordion">
                 <nav class="sb-sidenav-menu-nested nav"><a class="nav-link" href="<?= base_url('modul1') ?>">Monitoring Media RCM</a><a class="nav-link" href="#">Monitoring Harian</a><a class="nav-link" href="#">Monitoring Hutang</a><a class="nav-link" href="#">Monitoring Non Kontrak</a>
                    <a class="nav-link" href="#">Monitoring Hutang</a><a class="nav-link" href="#">Jurnal Kas</a></nav>
             </div>
         </div>-->
         <div class="sb-sidenav-footer">
             <div class="small">Logged in as:</div>
             <?= $this->session->userdata('fname') ?>&nbsp<?= $this->session->userdata('lname') ?>
         </div>
 </nav>