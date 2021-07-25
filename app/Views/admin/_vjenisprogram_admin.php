<?= $this->extend('admin/_vtemplate_admin'); ?>

<?= $this->section('title'); ?>
<h1><i class="far fa-circle nav-icon"></i> Jenis Program</h1>
<?= $this->endSection(); ?>

<?= $this->section('breadcrumb'); ?>
<li class="breadcrumb-item"><i class="nav-icon fas fa-copy"></i> Data Master</li>
<li class="breadcrumb-item active"><i class="far fa-circle nav-icon"></i> Jenis Program</li>
<?= $this->endSection(); ?>  

<?= $this->section('content_admin'); ?>
<!-- ============================================================================== -->    

           <div class="row">
          <div class="col-md-12">

          <div class="card card-primary card-outline">
              <div class="card-header">
                
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

              <!-- /.card-header -->
              <div class="card-body">

              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th style="width:10px;">No</th>
                  <th>Jenis Program</th>
                  <th>Tentang</th>
                  <th style="width:10px;">Aksi</th>
                </tr>
                </thead>
                <tbody>

                  <?php 
                  $no=1;
                       foreach($data as $i):

                          $id_jenis_program=$i['id_jenis_program'];
                          $jenis_program=$i['jenis_program'];
                          $tentang_jenis_program=$i['tentang_jenis_program'];

                      ?>

                <tr>
                  <td><?php echo $no++; ?></td> 
                  <td><?php echo $jenis_program; ?></td>
                  <td><?php echo substr($tentang_jenis_program, 0, 200); ?></td>



                  <td>

                    <span class="badge bg-warning"><a href="#" data-toggle="modal" data-target="#edit-data<?php echo $id_jenis_program;?>"><i class="fa fa-edit"> Ubah</i></a></span>

                  </td>
                </tr>

                <?php endforeach;?>
                
                </tbody>
                <tfoot>
                <tr>
                  <th style="width:10px;">No</th>
                   <th>Jenis Program</th>
                  <th>Tentang</th>
                  <th style="width:10px;">Aksi</th>
                </tr>
                </tfoot>
              </table>
           

                
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

          </div>
        </div>
        <!-- /.row -->

  <!-- ============================================================================== -->




 <!-- =====================MODAL TAMBAH DATA========================= -->    
<div class="modal fade" id="tambah-data" data-backdrop="static">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title"><i class="fa fa-plus"></i> Tambah Data Jenis Program</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>

                        <?php if(!empty(session()->getFlashdata('gagal'))){ ?>
                <div class="alert alert-danger">
                    <?php echo session()->getFlashdata('gagal');?>
                </div>
            <?php } ?>

                        <form role="form" name="myform" method="post" action="/CjenisProgram_admin/create" enctype="multipart/form-data">

                        <div class="modal-body">


                          <div class="alert alert-warning alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <h4><i class="icon fa fa-info"></i> Keterangan :</h4>
                            <p>Isilah form jenis program anda dengan lengkap, terutama yang bertanda (*)</p>
                        </div>



            
                        <div class="form-group">
                          <label>Jenis Program*</label>
                          <input class="form-control" type="text" placeholder="Jenis Program" style="width: 200px;" name="jenis_program" required>
                        </div>


                        <div class="form-group">
                          <label>Tentang Jenis Program*</label>
                          <textarea class="form-control" rows="3" placeholder="Tentang ..." style="width: 400px; height: 200px;" name="tentang_jenis_program" required></textarea>
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
<!-- =============================================== -->







<?php 
                foreach($data as $i):
                    $id_jenis_program=$i['id_jenis_program'];
                    $jenis_program=$i['jenis_program'];
                      $tentang_jenis_program=$i['tentang_jenis_program'];

                ?>


  <!-- =====================MODAL EDIT DATA========================= -->    
<div class="modal fade" id="edit-data<?php echo $id_jenis_program;?>" data-backdrop="static">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title"><i class="fa fa-edit"></i> Ubah Data Jenis Program</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>

                      <form role="form" name="myform" method="post" action="/CjenisProgram_admin/update" enctype="multipart/form-data">

                        <div class="modal-body">

                        <input type="hidden" name="id_jenis_program" value="<?php echo $id_jenis_program;?>">

                        <div class="form-group">
                          <label>Jenis Program*</label>
                          <input class="form-control" type="text" placeholder="Jenis Program" style="width: 200px;" name="jenis_program" required="" value="<?php echo $jenis_program;?>">

                        </div>


                         <div class="form-group">
                          <label>Tentang Jenis Program</label>
                          <textarea class="form-control" rows="3" placeholder="Tentang ..." style="width: 400px; height: 200px;" name="tentang_jenis_program" required=""><?php echo $tentang_jenis_program;?></textarea>
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
<!-- =============================================== -->

<?php endforeach;?>



<?= $this->endSection(); ?>