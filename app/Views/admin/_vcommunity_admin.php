<?= $this->extend('admin/_vtemplate_admin'); ?>

<?= $this->section('title'); ?>
<h1><i class="nav-icon fas fa-users"></i> Data Community</h1>
<?= $this->endSection(); ?>

<?= $this->section('breadcrumb'); ?>
<li class="breadcrumb-item active"><i class="nav-icon fas fa-users"></i> Data Community</li>
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

              <table id="example-community" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th class="resp-com-3" style="width:10px;" >No</th>
                  <th class="resp-com-3">Region</th>
                  <th>Nama Anggota</th>
                  <th>jabatan</th>
                  <th class="resp-com-2">Instagram</th>
                  <th class="resp-com-1">Email</th>
                  <!-- <th class="resp-com-1"style="width:100px;">Foto</th> -->
                  <th style="width:10px;">Aksi</th>
                </tr>
                </thead>
                <tbody>

                  <?php 
                  $no=1;
                       foreach($data as $i):

                          $id_community=$i['id_community'];
                          $region=$i['region'];
                          $nama_anggota=$i['nama_anggota'];
                          $jabatan=$i['jabatan'];
                          $foto_anggota=$i['foto_anggota'];
                          $email_anggota=$i['email_anggota'];
                          $instagram_anggota=$i['instagram_anggota'];
                      ?>

                <tr>
                  <td class="resp-com-3"><?php echo $no++; ?></td> 
                  <td class="resp-com-3"><?php echo $region; ?></td>
                  <td><?php echo $nama_anggota?></td>
                  <td><?php echo $jabatan?></td>
                  <td class="resp-com-2"><?php echo $instagram_anggota?></td>
                  <td class="resp-com-1"><?php echo $email_anggota?></td>
                  

                  <!-- <td class="resp-com-1">

                    /php if ($foto_anggota != NULL): ?>
                        <a href="/img/</?php echo $foto_anggota; ?>" data-toggle="lightbox" data-title="sample 1 - white">
                        <img src="/img/</?php echo $foto_anggota; ?>" class="img-fluid mb-2" alt="white sample" style="width: 200px; height: 100px;"/>
                      </a>
                        </?php else: ?>
                          <a href="/img/noimage.jpg" data-toggle="lightbox" data-title="sample 1 - white">
                        <img src="/img/noimage.jpg" class="img-fluid mb-2" alt="white sample" style="width: 200px; height: 100px;"/>
                      </a>
                      </?php endif; ?>

                  </td> -->


                  <td style="display: flex;">
                  <abbr title="Lihat"><span class="badge bg-success"><a href="#" data-toggle="modal" data-target="#lihat-data<?php echo $id_community;?>"><i class="fa fa-eye"> </i></a></span></abbr>

                  <abbr title="Edit">  <span class="badge bg-warning"><a href="#" data-toggle="modal" data-target="#edit-data<?php echo $id_community;?>"><i class="fa fa-edit"> </i></a></span></abbr>

                  <abbr title="Hapus">  <span class="badge bg-danger"><a href="#" data-toggle="modal" data-target="#hapus-data<?php echo $id_community;?>"><i class="fa fa-trash"> </i></a></span></abbr>
                  </td>
                </tr>

                <?php endforeach;?>
                
                </tbody>
                <tfoot>
                <tr>
                  <th class="resp-com-3">No</th>
                  <th class="resp-com-3">Region</th>
                  <th>Nama Anggota</th>
                  <th>jabatan</th>
                  <th class="resp-com-2">Instagram</th>
                  <th class="resp-com-1">Email</th>
                  <!-- <th class="resp-com-1">Foto</th> -->
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
              <h4 class="modal-title"><i class="fa fa-plus"></i> Tambah Data Anggota</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>

                        <form role="form" name="myform" method="post" action="/Ccommunity_admin/tambah" enctype="multipart/form-data">

                        <div class="modal-body">


                          <div class="alert alert-warning alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <h4><i class="icon fa fa-info"></i> Keterangan :</h4>
                            <p>Isilah form community anda dengan lengkap, terutama yang bertanda (*)</p>
                        </div>
                    


                         <div class="form-group">
                              <label for="exampleSelect1">Region*</label>
                              <select class="form-control" style="width: 100%;" name="id_region" required>
                                <option value="== PILIH ==">== PILIH ==</option>
                                <?php foreach($rg as $i):
                                $id_region=$i['id_region'];
                                $region=$i['region'];?>
                                <option value="<?php echo $id_region ?>"><?php echo $region ?></option>
                                <?php endforeach ?>



                              </select>
                          </div>


                        <div class="form-group">
                          <label>Nama Anggota*</label>
                          <input class="form-control" type="text" placeholder="Nama Anggota" style="width: 100%;" name="nama_anggota" required>
                        </div>


                        <div class="form-group">
                              <label for="exampleSelect1">Jabatan*</label>
                              <select class="form-control" style="width: 100%;" name="id_jabatan" required>
                                <option value="== PILIH ==">== PILIH ==</option>
                                <?php foreach($jb as $i):
                                $id_jabatan=$i['id_jabatan'];
                                $jabatan=$i['jabatan'];?>
                                <option value="<?php echo $id_jabatan ?>"><?php echo $jabatan ?></option>
                                <?php endforeach ?>



                              </select>
                          </div>

                        <div class="form-group">
                          <label>Instagram Anggota*</label>
                          <input class="form-control" type="text" placeholder="Username Instagram (tanpa @)" style="width: 100%;" name="instagram_anggota" required>
                        </div>

                        <div class="form-group">
                          <label>Email Anggota*</label>
                          <input class="form-control" type="text" placeholder="contoh@gmail.com" style="width: 100%;" name="email_anggota" required>
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
                    $id_community=$i['id_community'];
                    $id_region=$i['id_region'];
                    $region=$i['region'];
                    $nama_anggota=$i['nama_anggota'];
                    $id_jabatan=$i['id_jabatan'];
                    $jabatan=$i['jabatan'];
                    $foto_anggota=$i['foto_anggota'];
                    $email_anggota=$i['email_anggota'];
                    $instagram_anggota=$i['instagram_anggota'];
                ?>

<!-- =====================MODAL LIHAT DATA========================= -->    

   <div class="modal fade" id="lihat-data<?php echo $id_community;?>" data-backdrop="static">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title"><i class="nav-icon far fa-id-card nav-icon"></i> Detail Anggota<b></h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>


            <div class="modal-body">

              <div class="alert alert-warning alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <h4><i class="icon fa fa-info"></i> Keterangan :</h4>
                            <p>Ceklah isi form community anda dengan lengkap, terutama yang bertanda (*) Terimakasih.</p>
                            <!-- <a href="#" class="btn btn-success"><i class="fa fa-download"></i> Cetak Anggota</a> -->
                        </div>

              <center>
                <?php if ($foto_anggota != NULL): ?>
                      <img src="/img/<?php echo $foto_anggota; ?>" style="width: 180px; height: 180px;" class="img-circle img-thumbnail">
                        <?php else: ?>

                      <img src="/img/noimage.jpg" style="width: 180px; height: 180px;" class="img-circle img-thumbnail">
                      <?php endif; ?>
                <br><br>
                

                <h4><b>FORM ANGGOTA</b></h4>
                <p><b><?php echo $nama_anggota;?></b></p>
              </center><br>
              
              <hr>



                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Region*</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" disabled="" placeholder="Region" name="region" value="<?php echo $region;?>" style="width: 100%;" required>
                    </div>
                  </div>


                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Nama Anggota*</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" disabled="" placeholder="Nama Anggota" name="nama_anggota" value="<?php echo $nama_anggota;?>" style="width: 100%;" required>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Jabatan*</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" disabled="" placeholder="Jabatan" name="jabatan" value="<?php echo $jabatan;?>" style="width: 100%;" required>
                    </div>
                    
                  </div>

                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Instagram*</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" disabled="" placeholder="Instagram" name="jabatan" value="<?php echo $instagram_anggota;?>" style="width: 100%;" required>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Email*</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" disabled="" placeholder="Email" name="jabatan" value="<?php echo $email_anggota;?>" style="width: 100%;" required>
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
<div class="modal fade" id="edit-data<?php echo $id_community;?>" data-backdrop="static">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title"><i class="fa fa-edit"></i> Ubah Data Anggota</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>

                      <form role="form" name="myform" method="post" action="/Ccommunity_admin/ubah" enctype="multipart/form-data">

                        <div class="modal-body">

                        <input type="hidden" name="id_community" value="<?php echo $id_community;?>">


                        <div class="form-group">
                            <label for="exampleSelect1">Region*</label>
                            <select class="form-control" style="width: 100%;" name="id_region" required>
                              <option value="== PILIH ==">== PILIH ==</option>
                              <?php foreach($rg as $i):
                                $id_regionn=$i['id_region'];
                                $region=$i['region'];?>

                                <option value="<?php echo $id_regionn ?>"
                                  <?php if ($id_region == 
                                  $id_regionn) { echo "selected"; } ?>
                                  >

                                  <?php echo $region ?>
                                  
                                </option>
                                <?php endforeach ?>



                            </select>



                        </div>


                        <div class="form-group">
                          <label>Nama Anggota*</label>
                          <input class="form-control" type="text" placeholder="Nama Anggota" style="width: 100%;" name="nama_anggota" required="" value="<?php echo $nama_anggota;?>" required>
                        </div>

                        <div class="form-group">
                            <label for="exampleSelect1">Jabatan*</label>
                            <select class="form-control" style="width: 100%;" name="id_jabatan" required>
                              <option value="== PILIH ==">== PILIH ==</option>
                              <?php foreach($jb as $i):
                                $id_jabatann=$i['id_jabatan'];
                                $jabatan=$i['jabatan'];?>

                                <option value="<?php echo $id_jabatann ?>"
                                  <?php if ($id_jabatan == 
                                  $id_jabatann) { echo "selected"; } ?>
                                  >
                                  <?php echo $jabatan ?>
                                </option>
                                <?php endforeach ?>
                            </select>
                        </div>

                        <div class="form-group">
                          <label>Instagram Anggota*</label>
                          <input class="form-control" type="text" placeholder="Instagram Anggota" style="width: 100%;" name="instagram_anggota" required="" value="<?php echo $instagram_anggota;?>" required>
                        </div>

                        <div class="form-group">
                          <label>Email Anggota*</label>
                          <input class="form-control" type="text" placeholder="Email Anggota" style="width: 100%;" name="email_anggota" required="" value="<?php echo $email_anggota;?>" required>
                        </div>

                        <div class="form-group">
                          <label for="formGroupExampleInput">Upload Foto*</label>
                          <?php if ($foto_anggota != NULL): ?>
                        <a href="/img/<?php echo $foto_anggota; ?>" data-toggle="lightbox" data-title="sample 1 - white">
                        <img src="/img/<?php echo $foto_anggota; ?>" class="img-fluid mb-2" alt="white sample" style="width: 100px; height: 100px;"/>
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
<div class="modal fade" id="hapus-data<?php echo $id_community;?>">
        <div class="modal-dialog">
          <div class="modal-content">
            
            <form action="/Ccommunity_admin/hapus/<?php echo $id_community;?>" method="post">
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