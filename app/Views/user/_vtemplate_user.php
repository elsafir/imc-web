<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Indonesia Millenial Connect</title>


  <link rel="shortcut icon" href="/img/imc.jpg">
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="/assets2/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="/assets2/dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">


    <!-- bootstrap datepicker -->
  <link rel="stylesheet" href="/assets2/assets/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css ">


  <!-- DataTables -->
  <link rel="stylesheet" href="/assets2/plugins/datatables-bs4/css/dataTables.bootstrap4.css">


   <!-- export dataTables -->
  <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.5.6/css/buttons.dataTables.min.css">


  
</head>
<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
    </ul>

    <!-- SEARCH FORM -->
    <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
    
      <li class="nav-item">
    <span style="font-size: 23px; margin-right: 20px;">Indonesia Millenial Connect</span>
          <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#logout">Log Out</button>
      </li>


      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#">
          <i class="fas fa-th-large"></i>
        </a>
      </li>



    </ul>
  </nav>
  <!-- /.navbar -->



  <div class="modal fade" id="logout">
        <div class="modal-dialog">
          <div class="modal-content">
            
            <div class="modal-body">
              <p><b>Apakah anda yakin ingin keluar?</b></p>
            </div>
            <div class="modal-footer">

              <button class="btn btn-danger" data-dismiss="modal" aria-hidden="true">Tidak</button>

              <a class="btn btn-primary"href="<?= base_url('Clogin/logout') ?>">Yakin</a>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->





<!-- =========================================================================== -->
<!--   layouts.sidebar -->
<!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <img src="/assets2/dist/img/AdminLTELogo.png"
           alt="AdminLTE Logo"
           class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">IMCONNECT</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <!-- <img src="/assets2/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image"> -->
          <?php if (session('foto_anggota') != NULL): ?>
                      <img src="/img/<?php echo session('foto_anggota') ?>" class="img-circle elevation-2" alt="User Image">
                        <?php else: ?>

                      <img src="/img/noimage.jpg" class="img-circle elevation-2" alt="User Image">
                      <?php endif; ?>
        </div>
        <div class="info">
          <a href="#" class="d-block"><?php echo session('nama_anggota') ?></a>
          <p style="color: grey;"> - <?php echo session('region') ?> -</p>
          <a href="#"><i class="fa fa-circle text-success"></i> <b><?php echo session('status') ?></b>
        </div>
      </div>

     
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
         
          <li class="nav-item">
            <a href="<?= base_url('Cuser') ?>" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="<?= base_url('CtentangRegional_user') ?>" class="nav-link">
              <i class="nav-icon fas fa-archway"></i>
              <p>
                Tentang Region
              </p>
            </a>
          </li>
          

          <li class="nav-item">
            <a href="<?= base_url('Ccommunity_user') ?>" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Data Komunitas
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="<?= base_url('Cprogram_user') ?>" class="nav-link">
              <i class="nav-icon fas fa-chart-line"></i>
              <p>
                Program
              </p>
            </a>
          </li>
                    <li class="nav-item">
            <a href="<?= base_url('Cevents_user') ?>" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Events
              </p>
            </a>
          </li>

         <!--  <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Jenis Program
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Region
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-user-alt"></i>
              <p>
                Data Pengguna
              </p>
            </a>
          </li> -->

        
          <hr>
          <li class="nav-item">
            <a href="<?= base_url('Chome') ?>"  target="_blank" class="nav-link">
              <i class="nav-icon fas fa-tv"></i>
              <p>
                Front-End
              </p>
            </a>
          </li>
         
         
          
            
          
          
          
    
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->

  </aside>









<!-- =========================================================================== -->
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">

          <?= $this->renderSection('title'); ?>

          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#"><i class="fa fa-home"></i> Home</a></li>
              <?= $this->renderSection('breadcrumb'); ?>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <hr>
<!-- =========================================================================== -->











<!-- =========================================================================== -->

    <!-- Main content -->
    <section class="content">
       <div class="container-fluid">

        <?= $this->renderSection('content_user'); ?>

      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<!-- =========================================================================== -->















<!-- =========================================================================== -->
  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.0.3-pre
    </div>
    <strong>Copyright &copy; 2020-2021 <a href="#">AndrichardWS</a>.</strong> All rights
    reserved.
  </footer>


  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="/assets2/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="/assets2/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="/assets2/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="/assets2/dist/js/demo.js"></script>

<!-- DataTables -->
<script src="/assets2/plugins/datatables/jquery.dataTables.js"></script>
<script src="/assets2/plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>


<!-- Filter dataTables -->
<!-- <script src="<?php echo base_url()?>/assets/js/filterDropDown.js"></script> -->


<!-- export dataTables -->
<script src="https://cdn.datatables.net/buttons/1.5.6/js/dataTables.buttons.min.js"></script>
<!-- <script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.flash.min.js"></script> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.print.min.js"></script>


<!-- page script -->
<script>

 
  //Filter data community dan Export
  $(function () {
    $("#example-community").DataTable({

  
       dom: '<"html5buttons"B>lTfgitp',
            buttons: [ {
                        extend: 'copy', text:'<i class="fa fa-file" aria-hidden="true"> Copy',title: 'Data Community',
                        exportOptions: { columns: [ 0, 1, 2 ] }
                    },
                    {
                        extend: 'csv', text:'<i class="fa fa-file-csv" aria-hidden="true"> Csv',title: 'Data Community',
                        exportOptions: { columns: [ 0, 1, 2 ] }
                    },
                    {
                        extend: 'excel', text:'<i class="fa fa-file-excel" aria-hidden="true"> Excel',title: 'Data Community',
                        exportOptions: { columns: [ 0, 1, 2 ] }
                    },
                    {
                        extend: 'pdf', text:'<i class="fa fa-file-pdf" aria-hidden="true"> PDF',title: 'Data Community',
                        exportOptions: { columns: [ 0, 1, 2 ] },
                        customize : function(doc) {
                        doc.content[1].table.widths = [ '10%', '50%', '40%' ];}
                    },
                    {
                        extend: 'print', text:'<i class="fa fa-print" aria-hidden="true"> Print',title: 'Data Community',
                        exportOptions: { columns: [ 0, 1, 2 ] }
                    } ]

         
    });
    
  });



      //Export data program 
  $(function () {
    $("#example-program").DataTable({

  
       dom: '<"html5buttons"B>lTfgitp',
            buttons: [ {
                        extend: 'copy', text:'<i class="fa fa-file" aria-hidden="true"> Copy',title: 'Data Program',
                        exportOptions: { columns: [ 0, 1, 2, 3 ] }
                    },
                    {
                        extend: 'csv', text:'<i class="fa fa-file-csv" aria-hidden="true"> Csv',title: 'Data Program',
                        exportOptions: { columns: [ 0, 1, 2, 3 ] }
                    },
                    {
                        extend: 'excel', text:'<i class="fa fa-file-excel" aria-hidden="true"> Excel',title: 'Data Program',
                        exportOptions: { columns: [ 0, 1, 2, 3 ] }
                    },
                    {
                        extend: 'pdf', text:'<i class="fa fa-file-pdf" aria-hidden="true"> PDF',title: 'Data Program',
                        exportOptions: { columns: [ 0, 1, 2, 3 ] },
                        customize : function(doc) {
                        doc.content[1].table.widths = [ '10%', '10%', '30%', '50%' ];}
                    },
                    {
                        extend: 'print', text:'<i class="fa fa-print" aria-hidden="true"> Print',title: 'Data Program',
                        exportOptions: { columns: [ 0, 1, 2, 3 ] }
                    } ]

         
    });
    
  });


          //Export data events 
  $(function () {
    $("#example-events").DataTable({

  
       dom: '<"html5buttons"B>lTfgitp',
            buttons: [ {
                        extend: 'copy', text:'<i class="fa fa-file" aria-hidden="true"> Copy',title: 'Data Events',
                        exportOptions: { columns: [ 0, 1, 2 ] }
                    },
                    {
                        extend: 'csv', text:'<i class="fa fa-file-csv" aria-hidden="true"> Csv',title: 'Data Events',
                        exportOptions: { columns: [ 0, 1, 2 ] }
                    },
                    {
                        extend: 'excel', text:'<i class="fa fa-file-excel" aria-hidden="true"> Excel',title: 'Data Events',
                        exportOptions: { columns: [ 0, 1, 2 ] }
                    },
                    {
                        extend: 'pdf', text:'<i class="fa fa-file-pdf" aria-hidden="true"> PDF',title: 'Data Events',
                        exportOptions: { columns: [ 0, 1, 2 ] },
                        customize : function(doc) {
                        doc.content[1].table.widths = [ '5%', '20%', '70%' ];}
                    },
                    {
                        extend: 'print', text:'<i class="fa fa-print" aria-hidden="true"> Print',title: 'Data Events',
                        exportOptions: { columns: [ 0, 1, 2 ] }
                    } ]

         
    });
    
  });

</script>



</body>
</html>