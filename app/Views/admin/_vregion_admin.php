<?= $this->extend('admin/_vtemplate_admin'); ?>

<?= $this->section('title'); ?>
<h1><i class="far fa-circle nav-icon"></i> Data Regional</h1>
<?= $this->endSection(); ?>

<?= $this->section('breadcrumb'); ?>
<li class="breadcrumb-item"><i class="nav-icon fas fa-copy"></i> Data Master</li>
<li class="breadcrumb-item active"><i class="nav-icon fas fa-book"></i> Data Regional</li>
<?= $this->endSection(); ?>  

<?= $this->section('content_admin'); ?>
<!-- ============================================================================== -->    

        <div class="row">
          <div class="col-md-12">

            <?php if(!empty(session()->getFlashdata('berhasil'))){ ?>
              <div class="alert alert-success">
                  <?php echo session()->getFlashdata('berhasil');?>
              </div>
            <?php } ?>

            <?php if(!empty(session()->getFlashdata('gagal'))){ ?>
                <div class="alert alert-danger">
                    <?php echo session()->getFlashdata('gagal');?>
                </div>
            <?php } ?>


            <!-- CARD -->
              <div class="card card-primary card-outline">

                <!-- CARD HEADER -->
                  <div class="card-header">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#tambah-data">
                      <i class="fa fa-plus"></i> Tambah Data
                    </button>
                    <div class="card-tools">
                      <button type="button" class="btn btn-tool" data-card-widget="collapse">
                        <i class="fas fa-minus"></i>
                      </button>
                      <button type="button" class="btn btn-tool" data-card-widget="remove">
                        <i class="fas fa-times"></i>
                      </button>
                    </div>
                  </div>
                <!-- AKHIR CARD HEADER -->


                <!-- CARD BODY -->
                <div class="card-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th style="width:10px;">No</th>
                        <th>Regional</th>
                        <th>Latar Belakang</th>
                        <th style="width:10px;">Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php $no=1; ?>
                      <?php foreach($data as $i): 
                        
                          $id_region=$i['id_region'];
                          $slug=$i['slug_r'];
                          $region=$i['region'];
                          $latarbelakang=$i['latarbelakang'];
                        
                        ?>
                      <tr>
                        <td><?= $no++; ?></td>
                        <td><?= $region; ?></td> 
                        <td><?= substr($latarbelakang, 0, 400); ?></td>
                        <td>
                          <!-- <span class="badge bg-warning"><a href="#" data-toggle="modal" data-target="#edit-data"><i class="fa fa-edit"> Ubah</i></a></span> -->
                          <span class="badge bg-warning"><a href="#" data-toggle="modal" data-target="#edit-data<?php echo $id_region; ?>" id="btn-edit"><i class="fa fa-edit"> Ubah</i></a></span>
                        </td>
                      </tr>
                      <?php endforeach;?>
                    </tbody>
                    <tfoot>
                      <tr>
                        <th>No</th>
                        <th>Judul</th>
                        <th>Detail</th>
                        <th>Aksi</th>
                      </tr>
                    </tfoot>
                  </table>
                </div>
                <!-- /.CARD BODY -->


              </div>
            <!-- /.CARD -->

          </div> 
          <!-- /.col -->
        </div>
        <!-- /.row -->

  <!-- ============================================================================== -->

<!-- =====================MODAL TAMBAH DATA========================= -->    
<div class="modal fade" id="tambah-data" data-backdrop="static">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title"><i class="fa fa-plus"></i> Tambah Data Regional</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>

                        <form role="form" name="myform" method="post" action="Cregional_admin/tambah" enctype="multipart/form-data">
                      
                      <div class="modal-body">
                        <div class="alert alert-warning alert-dismissible">
                          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                          <h4><i class="icon fa fa-info"></i> Keterangan :</h4>
                          <p>Isilah form Regional anda dengan lengkap, terutama yang bertanda (*)</p>
                        </div>           
                        <div class="form-group">
                          <label>Nama Regional*</label>
                          <input class="form-control" type="text" placeholder="Nama Regional" style="width: 100%;" name="region" required autofocus> 
                        </div>
                        <div class="form-group">
                          <label>Latar Belakang Regional*</label>
                          <textarea class="form-control" rows="3" placeholder="Latar Belakang Regional" style="width: 100%; height: 200px;" name="latarbelakang" required></textarea>
                        </div>
                      </div>

                      <div class="modal-footer">
                        <button class="btn btn-primary" type="submit"><i class="fa fa-check"></i></button>
                        <button class="btn btn-warning" type="Reset"><i class="fa fa-redo"></i></button>
                        <button class="btn btn-danger" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times-circle"></i></button>
                      </div>

                    </form>
                      </div>
                      <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
                  </div>
                  <!-- /.modal -->
<!-- ================= AKHIR TAMBAH DATA ============================== -->


<!-- ================================================================== -->



<?php foreach($data as $i): 
                        
                        $id_region=$i['id_region'];
                        $slug=$i['slug_r'];
                        $region=$i['region'];
                        $latarbelakang=$i['latarbelakang'];
                      
                      ?>
                      
<!-- =====================MODAL EDIT DATA========================= -->    
<div class="modal fade" id="edit-data<?php echo $id_region; ?>" data-backdrop="static">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title"><i class="fa fa-plus"></i> Edit Data Regional</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>

                        <form role="form" name="myform" method="post" action="Cregional_admin/ubah" enctype="multipart/form-data">
                      
                      <div class="modal-body">

                      
                      <input type="hidden" name="id_region" value="<?php echo $id_region;?>">
                      <input type="hidden" name="slug" value="<?php echo $slug;?>">
                      <input type="hidden" name="regionlama" value="<?php echo $region;?>">

                        <div class="alert alert-warning alert-dismissible">
                          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                          <h4><i class="icon fa fa-info"></i> Keterangan :</h4>
                          <p>Isilah form Regional anda dengan lengkap, terutama yang bertanda (*)</p>
                        </div>           
                        <div class="form-group">
                        <label>Nama Regional*</label>
                          <input class="form-control" type="text" placeholder="Nama Regional" style="width: 100%;" name="region" value="<?= $region; ?>" required autofocus> 
                        </div>
                        <div class="form-group">
                          <label>Latar Belakang Regional*</label>
                          <textarea class="form-control" rows="3" placeholder="Latar Belakang Regional" style="width: 100%; height: 200px;" name="latarbelakang" required><?= $latarbelakang; ?></textarea>
                        </div>
                      </div>

                      <div class="modal-footer">
                        <button class="btn btn-primary" type="submit"><i class="fa fa-check"></i></button>
                        <button class="btn btn-warning" type="Reset"><i class="fa fa-redo"></i></button>
                        <button class="btn btn-danger" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times-circle"></i></button>
                      </div>

                    </form>
                      </div>
                      <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
                  </div>
                  <!-- /.modal -->
<!-- ================= AKHIR EDIT DATA ============================== -->

<?php endforeach;?>

<?= $this->endSection(); ?>