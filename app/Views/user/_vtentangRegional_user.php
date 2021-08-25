<?= $this->extend('user/_vtemplate_user'); ?>

<?= $this->section('title'); ?>
<h1><i class="nav-icon fas fa-archway"></i> Tentang Regional</h1>
<?= $this->endSection(); ?>

<?= $this->section('breadcrumb'); ?>
<li class="breadcrumb-item active"><i class="nav-icon fas fa-archway"></i> Tentang Regional</li>
<?= $this->endSection(); ?>  

<?= $this->section('content_user'); ?>
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

             <span class="modal-title"><i class="fa fa-edit"></i> Ubah Data Tentang Regional</span>


                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>

              <?php foreach($data as $i): 
                        
                        $id_region=$i['id_region'];
                        $slug=$i['slug_r'];
                        $tentang_region=$i['tentang_region'];
                        $link_web=$i['link_web'];
                        $foto_region=$i['foto_region'];
                      
                      ?>

              <!-- /.card-header -->
              <div class="card-body">

                
                      <form role="form" name="myform" method="post" action="/CtentangRegional_user/ubah" enctype="multipart/form-data">

                        <div class="modal-body">

                          <input type="hidden" name="id_region" value="<?= $id_region; ?>">
                          <input type="hidden" name="slug" value="<?= $slug; ?>">

                          <div class="alert alert-warning alert-dismissible">
                          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                          <h4><i class="icon fa fa-info"></i> Keterangan :</h4>
                          <p>Isilah form Tentang Regional anda dengan lengkap, terutama yang bertanda (*)</p>
                        </div>       


                          <div class="form-group">
                        <label>Link Website</label>
                          <input class="form-control" type="text" placeholder="Link Website" style="width: 100%;" name="link_web" value="<?= $link_web; ?>" required autofocus> 
                        </div>
                        
                        <div class="form-group">
                          <label>Tentang Regional*</label>
                          <textarea class="form-control" rows="3" placeholder="Tentang..." style="height:400px;" name="tentang_region" required=""><?= $tentang_region; ?></textarea>
                        </div>

                        </div>

                        <div class="form-group" >
                          <label for="formGroupExampleInput">Upload Foto*</label>
                            
                            <?php if ($foto_region != NULL): ?>
                              <a href="/img/<?php echo $foto_region; ?>" data-toggle="lightbox" data-title="sample 1 - white">
                                <img src="/img/<?php echo $foto_region; ?>" class="img-fluid mb-2" alt="white sample" style="width: 150px;"/>
                              </a>
                            <?php else: ?>
                              
                              <a href="/img/noimage.jpg" data-toggle="lightbox" data-title="sample 1 - white">
                                <img src="/img/noimage.jpg" class="img-fluid mb-2" alt="white sample" style="width: 100px; height: 100px;"/>
                              </a>
                            <?php endif; ?>
                          <input type="file" name="file_upload" class="form-control">
                        </div>

                        <div class="modal-footer">
                          <button class="btn btn-primary" type="submit">Simpan</button>
                          </div>
                      </form>
           

                
              </div>
              <!-- /.card-body -->

              <?php endforeach;?>

            </div>
            <!-- /.card -->

          </div>
        </div>
        <!-- /.row -->

  <!-- ============================================================================== -->



<?= $this->endSection(); ?>