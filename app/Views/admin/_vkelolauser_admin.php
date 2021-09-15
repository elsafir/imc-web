<?= $this->extend('admin/_vtemplate_admin'); ?>

<?= $this->section('title'); ?>
<h1><i class="nav-icon fas fa-user-alt"></i> Kelola User</h1>
<?= $this->endSection(); ?>

<?= $this->section('breadcrumb'); ?>
<li class="breadcrumb-item active"><i class="nav-icon fas fa-user-alt"></i> Kelola User</li>
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
                  <th>Region</th>
                  <th>Nama Anggota</th>
                  <th>Username</th>
                  <th>Password</th>
                  <th>Level</th>
                  <th>Status</th>
                  <th style="width:10px;">Aksi</th>
                </tr>
                </thead>
                <tbody>

                  <?php 
                  $no=1;
                       foreach($data as $i):

                          $id_pengguna=$i['id_pengguna'];
                          $region=$i['region'];
                          $nama_anggota=$i['nama_anggota'];
                          $username=$i['username'];
                          $password=$i['password'];
                          $level=$i['level'];
                          $status=$i['status'];
                      ?>

                <tr>
                  <td><?php echo $no++; ?></td> 
                  <td><?php echo $region; ?></td>
                  <td><?php echo $nama_anggota; ?></td>
                  <td><?php echo $username; ?></td>
                  <td><?php echo substr($password, 0, 20); ?></td>
                  <td><?php echo $level; ?></td>
                  <td><?php echo $status; ?></td>


                  <td>

                    <span class="badge bg-warning"><a href="#" data-toggle="modal" data-target="#edit-data<?php echo $id_pengguna;?>"><i class="fa fa-edit"> Ubah</i></a></span>

                  </td>
                </tr>

                <?php endforeach;?>
                
                </tbody>
                <tfoot>
                <tr>
                  <th>No</th>
                  <th>Region</th>
                  <th>Nama Anggota</th>
                  <th>Username</th>
                  <th>Password</th>
                  <th>Level</th>
                  <th>Status</th>
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
              <h4 class="modal-title"><i class="fa fa-plus"></i> Tambah Data User</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>

                        <?php if(!empty(session()->getFlashdata('gagal'))){ ?>
                <div class="alert alert-danger">
                    <?php echo session()->getFlashdata('gagal');?>
                </div>
            <?php } ?>

                        <form role="form" name="myform" method="post" action="/CkelolaUser_admin/tambah" enctype="multipart/form-data">

                        <div class="modal-body">


                          <div class="alert alert-warning alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <h4><i class="icon fa fa-info"></i> Keterangan :</h4>
                            <p>Isilah form pengguna anda dengan lengkap, terutama yang bertanda (*)</p>
                        </div>


                        <div class="form-group">
                              <label for="exampleSelect1">Nama Anggota*</label>
                              <select class="form-control" style="width: 100%;" name="id_community" required>
                                <option value="== PILIH ==">== PILIH ==</option>
                                <?php foreach($cm as $i):
                                $id_community=$i['id_community'];
                                $nama_anggota=$i['nama_anggota'];?>
                                <option value="<?php echo $id_community ?>"><?php echo $nama_anggota ?></option>
                                <?php endforeach ?>



                              </select>
                          </div><hr>
                    


                        <div class="form-group">
                          <label>Username*</label>
                          <input class="form-control" type="text" placeholder="Username" style="width: 100%;" name="username" required>
                        </div>


                        <div class="form-group">
                          <label>Password*</label>
                          <input class="form-control" type="text" placeholder="Password" style="width: 100%;" name="password" required>
                        </div>

                      
                        <div class="form-group">
                            <label for="exampleSelect1">Level*</label>
                            <select class="form-control" style="width: 100%;" name="level" required>
                              <option value="== PILIH ==">== PILIH ==</option>
                              <option value="Administrator">Administrator</option>
                              <option value="User">User</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="exampleSelect1">Status*</label>
                            <select class="form-control" style="width: 100%;" name="status" required>
                              <option value="== PILIH ==">== PILIH ==</option>
                              <option value="Aktif">Aktif</option>
                              <option value="Tidak Aktif">Tidak Aktif</option>
                            </select>
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
                    $id_pengguna=$i['id_pengguna'];
                    $id_community=$i['id_community'];
                      $username=$i['username'];
                      $password=$i['password'];
                      $level=$i['level'];
                      $status=$i['status'];
                ?>


  <!-- =====================MODAL EDIT DATA========================= -->    
<div class="modal fade" id="edit-data<?php echo $id_pengguna;?>" data-backdrop="static">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title"><i class="fa fa-edit"></i> Ubah Data User</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>

                      <form role="form" name="myform" method="post" action="/CkelolaUser_admin/ubah" enctype="multipart/form-data">

                        <div class="modal-body">

                        <input type="hidden" name="id_pengguna" value="<?php echo $id_pengguna;?>">
                        <input type="hidden" name="id_community" value="<?php echo $id_community;?>">

                        <div class="form-group">
                          <label>Username*</label>
                          <input class="form-control" type="text" placeholder="Username" style="width: 100%;" name="username" required="" value="<?php echo $username;?>">

                        </div>


                        <div class="form-group">
                          <label>Password*</label><br>
                          <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#reset-password<?php echo $id_pengguna;?>"><i class="fa fa-redo"></i> Reset Password</button>

                        </div>

                         <div class="form-group">
                            <label for="exampleSelect1">Level*</label>
                            <select class="form-control" style="width: 100%;" name="level" required>
                              <option value="== PILIH ==">== PILIH ==</option>
                              <option <?php if ($level == "Administrator") { echo "selected"; } ?> value="Administrator">Administrator</option>
                              <option <?php if ($level == "User") { echo "selected"; } ?> value="User">User</option>
                             
                            </select>

                        </div>

                        <div class="form-group">
                            <label for="exampleSelect1">Status*</label>
                            <select class="form-control" style="width: 100%;" name="status" required>
                              <option value="== PILIH ==">== PILIH ==</option>
                              <option <?php if ($status == "Aktif") { echo "selected"; } ?> value="Aktif">Aktif</option>
                            <option <?php if ($status == "Tidak Aktif") { echo "selected"; } ?> value="Tidak Aktif">Tidak Aktif</option>
                             
                            </select>



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
<div class="modal fade" id="hapus-data<?php echo $id_pengguna;?>">
        <div class="modal-dialog">
          <div class="modal-content">
            
            <form action="/CkelolaUser_admin/hapus/<?php echo $id_pengguna;?>" method="post">
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



      <!-- ===================== RESET PASSWORD ========================== -->
<div class="modal fade" id="reset-password<?php echo $id_pengguna;?>" data-backdrop="static">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title"><i class="fa fa-redo"></i> Reset Password</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form role="form" name="myform" method="post" action="/CkelolaUser_admin/reset_password">
            <div class="modal-body">

                <input type="hidden" name="id_pengguna" value="<?php echo $id_pengguna;?>">
                <input type="hidden" name="id_community" value="<?php echo $id_community;?>">
                
 
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-4 col-form-label">Password Default*</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" placeholder="Password" name="password" value="12345678" style="width: 300px;" required>
                    </div>
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
<!-- ============================================================================== -->

<?php endforeach;?>



<?= $this->endSection(); ?>