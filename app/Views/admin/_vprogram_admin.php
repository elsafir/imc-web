<?= $this->extend('admin/_vtemplate_admin'); ?>

<?= $this->section('title'); ?>
<h1><i class="nav-icon fas fa-chart-line"></i> Data Program</h1>
<?= $this->endSection(); ?>

<?= $this->section('breadcrumb'); ?>
<li class="breadcrumb-item active"><i class="nav-icon fas fa-chart-line"></i> Data Program</li>
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

              <table id="example-program" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th style="width:10px;">No</th>
                  <th>Jenis</th>
                  <th>Judul</th>
                  <th>Detail</th>
                  <th>Foto</th>
                  <th style="width:10px;">Aksi</th>
                </tr>
                </thead>
                <tbody>

                  <?php 
                  $no=1;
                       foreach($data as $i):

                          $id_program=$i['id_program'];
                          $jenis_program=$i['jenis_program'];
                          $judul_program=$i['judul_program'];
                          $detail_program=$i['detail_program'];
                          $foto_program=$i['foto_program'];
                      ?>

                <tr>
                  <td><?php echo $no++; ?></td> 
                  <td><?php echo $jenis_program; ?></td>
                  <td><?php echo $judul_program; ?></td>
                  <td><?php echo substr($detail_program, 0, 200); ?></td>

                  <td>

                    <?php if ($foto_program != NULL): ?>
                        <a href="/img/<?php echo $foto_program; ?>" data-toggle="lightbox" data-title="sample 1 - white">
                        <img src="/img/<?php echo $foto_program; ?>" class="img-fluid mb-2" alt="white sample" style="width: 200px; height: 100px;"/>
                      </a>
                        <?php else: ?>
                          <a href="/img/noimage.jpg" data-toggle="lightbox" data-title="sample 1 - white">
                        <img src="/img/noimage.jpg" class="img-fluid mb-2" alt="white sample" style="width: 200px; height: 100px;"/>
                      </a>
                      <?php endif; ?>

                  </td>


                  <td>
                    <span class="badge bg-success"><a href="#" data-toggle="modal" data-target="#lihat-data<?php echo $id_program;?>"><i class="fa fa-eye"> Lihat</i></a></span>

                    <span class="badge bg-warning"><a href="#" data-toggle="modal" data-target="#edit-data<?php echo $id_program;?>"><i class="fa fa-edit"> Ubah</i></a></span>

                    <span class="badge bg-danger"><a href="#" data-toggle="modal" data-target="#hapus-data<?php echo $id_program;?>"><i class="fa fa-edit"> Hapus</i></a></span>
                  </td>
                </tr>

                <?php endforeach;?>
                
                </tbody>
                <tfoot>
                <tr>
                  <th>No</th>
                  <th>Jenis</th>
                  <th>Judul</th>
                  <th>Detail</th>
                  <th>Foto</th>
                  <th>Aksi</th>
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
              <h4 class="modal-title"><i class="fa fa-plus"></i> Tambah Data Program</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>

                        <form role="form" name="myform" method="post" action="/Cprogram_admin/tambah" enctype="multipart/form-data">

                        <div class="modal-body">


                          <div class="alert alert-warning alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <h4><i class="icon fa fa-info"></i> Keterangan :</h4>
                            <p>Isilah form program anda dengan lengkap, terutama yang bertanda (*)</p>
                        </div>
                    

                        <div class="form-group">
                              <label for="exampleSelect1">Jenis Program*</label>
                              <select class="form-control" style="width: 200px;" name="id_jenis_program" required>
                                <option value="== PILIH ==">== PILIH ==</option>
                                <?php foreach($jp as $i):
                                $id_jenis_program=$i['id_jenis_program'];
                                $jenis_program=$i['jenis_program'];?>
                                <option value="<?php echo $id_jenis_program ?>"><?php echo $jenis_program ?></option>
                                <?php endforeach ?>



                              </select>
                          </div>


                        <div class="form-group">
                          <label>Judul Program*</label>
                          <input class="form-control" type="text" placeholder="Judul Program" style="width: 400px;" name="judul_program" required>
                        </div>


                        <div class="form-group">
                          <label>Detail Program*</label>
                          <textarea class="form-control" rows="3" placeholder="Detail ..." style="width: 400px; height: 200px;" name="detail_program" required></textarea>
                        </div>


                        <div class="form-group">
                          <label for="formGroupExampleInput">Upload Foto*</label>
                          <input type="file" name="file_upload" class="form-control">
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
                    $id_program=$i['id_program'];
                    $id_jenis_program=$i['id_jenis_program'];
                    $id_pengguna=$i['id_pengguna'];
                    $jenis_program=$i['jenis_program'];
                    $judul_program=$i['judul_program'];
                    $detail_program=$i['detail_program'];
                    $foto_program=$i['foto_program'];
                ?>

<!-- =====================MODAL LIHAT DATA========================= -->    

   <div class="modal fade" id="lihat-data<?php echo $id_program;?>" data-backdrop="static">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title"><i class="nav-icon far fa-id-card nav-icon"></i> Detail Program<b> [<?php echo $jenis_program;?>]</b></h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>


            <div class="modal-body">

              <div class="alert alert-warning alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <h4><i class="icon fa fa-info"></i> Keterangan :</h4>
                            <p>Ceklah isi form program anda dengan lengkap, terutama yang bertanda (*). Jika isi form sudah lengkap silakan diunduh. Terimakasih.</p>
                            <a href="#" class="btn btn-success"><i class="fa fa-download"></i> Cetak Program</a>
                        </div>

              <center>
                <?php if ($foto_program != NULL): ?>
                      <img src="/img/<?php echo $foto_program; ?>" style="width: 180px; height: 180px;" class="img-circle img-thumbnail">
                        <?php else: ?>

                      <img src="/img/noimage.jpg" style="width: 180px; height: 180px;" class="img-circle img-thumbnail">
                      <?php endif; ?>
                <br><br>
                

                <h4><b>FORM PROGRAM</b></h4>
                <p><b><?php echo $judul_program;?></b></p>
              </center><br>
              
              <hr>


              <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Jenis Program*</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" placeholder="Jenis Program" disabled="" name="jenis_program" value="<?php echo $jenis_program;?>" style="width: 200px;">
                    </div>
                  </div>


                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Judul Program*</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" disabled="" placeholder="Judul Program" name="judul_program" value="<?php echo $judul_program;?>" style="width: 400px;">
                    </div>
                  </div>


                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Detail Program*</label>
                        <div class="col-sm-10">
                          <textarea class="form-control" rows="3" placeholder="Detail ..." style="width: 400px; height: 200px;" name="detail_program" disabled><?php echo $detail_program;?></textarea>
                        </div>
                        
                       
                  </div>

                   <hr>


            </div>



          
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->
<!-- ============================================================================== -->



  <!-- =====================MODAL EDIT DATA========================= -->    
<div class="modal fade" id="edit-data<?php echo $id_program;?>" data-backdrop="static">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title"><i class="fa fa-edit"></i> Ubah Data Program</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>

                      <form role="form" name="myform" method="post" action="/Cprogram_admin/ubah" enctype="multipart/form-data">

                        <div class="modal-body">

                        <input type="hidden" name="id_program" value="<?php echo $id_program;?>">
                        <input type="hidden" name="id_pengguna" value="<?php echo $id_pengguna;?>">
                        <input type="hidden" name="judul_program_lama" value="<?php echo $judul_program;?>">
                        
                        <div class="form-group">
                            <label for="exampleSelect1">Jenis Program*</label>
                            <select class="form-control" style="width: 200px;" name="id_jenis_program" required>
                              <option value="== PILIH ==">== PILIH ==</option>
                              <?php foreach($jp as $i):
                                $id_jenis_programm=$i['id_jenis_program'];
                                $jenis_program=$i['jenis_program'];?>

                                <option value="<?php echo $id_jenis_programm ?>"
                                  <?php if ($id_jenis_program == 
                                  $id_jenis_programm) { echo "selected"; } ?>
                                  >

                                  <?php echo $jenis_program ?>
                                  
                                </option>
                                <?php endforeach ?>
                                
                            </select>
                        </div>

                        <div class="form-group">
                          <label>Judul Program*</label>
                          <input class="form-control" type="text" placeholder="Judul Program" style="width: 400px;" name="judul_program" required="" value="<?php echo $judul_program;?>">
                        </div>


                        <div class="form-group">
                          <label>Detail Program</label>
                          <textarea class="form-control" rows="3" placeholder="Detail ..." style="width: 400px; height: 200px;" name="detail_program" required=""><?php echo $detail_program;?></textarea>
                        </div>

                        <div class="form-group">
                          <label for="formGroupExampleInput">Upload Foto*</label>
                          <?php if ($foto_program != NULL): ?>
                        <a href="/img/<?php echo $foto_program; ?>" data-toggle="lightbox" data-title="sample 1 - white">
                        <img src="/img/<?php echo $foto_program; ?>" class="img-fluid mb-2" alt="white sample" style="width: 100px; height: 100px;"/>
                      </a>
                        <?php else: ?>
                          <a href="/img/noimage.jpg" data-toggle="lightbox" data-title="sample 1 - white">
                        <img src="/img/noimage.jpg" class="img-fluid mb-2" alt="white sample" style="width: 100px; height: 100px;"/>
                      </a>
                      <?php endif; ?>
                          <input type="file" name="file_upload" class="form-control"> 
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


<!-- =====================MODAL HAPUS DATA========================= -->
<div class="modal fade" id="hapus-data<?php echo $id_program;?>">
        <div class="modal-dialog">
          <div class="modal-content">
            
            <form action="/Cprogram_admin/hapus/<?php echo $id_program;?>" method="post">
            <div class="modal-body">
              <p><b>Apakah anda yakin ingin menghapus data ini?</b></p>
            </div>
            <div class="modal-footer">
              
              <button class="btn btn-danger" data-dismiss="modal" aria-hidden="true">Tidak</button>

              
              <button type="submit" class="btn btn-primary">Yakin</button>
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