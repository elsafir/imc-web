<?= $this->extend('user/_vtemplate_user'); ?>

<?= $this->section('title'); ?>
<h1><i class="nav-icon fas fa-chart-line"></i> Data events</h1>
<?= $this->endSection(); ?>

<?= $this->section('breadcrumb'); ?>
<li class="breadcrumb-item active"><i class="nav-icon fas fa-chart-line"></i> Data events</li>
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

              <table id="example-events" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th style="width:10px;">No</th>
                  <th>Judul</th>
                  <th class="resp-event-3">Detail</th>
                  <th class="resp-event-2">Link Pendaftaran</th>
                  <th class="resp-event-1">Foto</th>
                  <th style="width:10px;">Aksi</th>
                </tr>
                </thead>
                <tbody>

                  <?php 
                  $no=1;
                       foreach($data as $i):

                          $id_events=$i['id_events'];
                          $judul_events=$i['judul_events'];
                          $detail_events=$i['detail_events'];
                          $foto_events=$i['foto_events'];
                          $linkdaftar_event=$i['linkdaftar_event'];
                      ?>

                <tr>
                  <td><?php echo $no++; ?></td> 
                  <td><?php echo $judul_events; ?></td>
                  <td class="resp-event-3"><?php echo substr($detail_events, 0, 200); ?></td>
                  <td class="resp-event-2"> <a href="<?php echo $linkdaftar_event; ?>"><?php echo substr($linkdaftar_event, 0, 17); ?>...<?php echo substr($linkdaftar_event, -3); ?></a>    </td>


                  <td class="resp-event-1">

                    <?php if ($foto_events != NULL): ?>
                        <a href="/img/<?php echo $foto_events; ?>" data-toggle="lightbox" data-title="sample 1 - white">
                        <img src="/img/<?php echo $foto_events; ?>" class="img-fluid mb-2" alt="white sample" style="width: 200px; height: 100px;"/>
                      </a>
                        <?php else: ?>
                          <a href="/img/noimage.jpg" data-toggle="lightbox" data-title="sample 1 - white">
                        <img src="/img/noimage.jpg" class="img-fluid mb-2" alt="white sample" style="width: 200px; height: 100px;"/>
                      </a>
                      <?php endif; ?>

                  </td>


                  <td>
                    <span class="badge bg-success"><a href="#" data-toggle="modal" data-target="#lihat-data<?php echo $id_events;?>"><i class="fa fa-eye"> Lihat</i></a></span>

                    <span class="badge bg-warning"><a href="#" data-toggle="modal" data-target="#edit-data<?php echo $id_events;?>"><i class="fa fa-edit"> Ubah</i></a></span>

                    <span class="badge bg-danger"><a href="#" data-toggle="modal" data-target="#hapus-data<?php echo $id_events;?>"><i class="fa fa-edit"> Hapus</i></a></span>
                  </td>
                </tr>

                <?php endforeach;?>
                
                </tbody>
                <tfoot>
                <tr>
                  <th>No</th>
                 
                  <th>Judul</th>
                  <th class="resp-event-3">Detail</th>
                  <th class="resp-event-2">Link Pendaftaran</th>
                  <th class="resp-event-1">Foto</th>
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
<script src="<?= base_url('assets/ckeditor/ckeditor.js'); ?>"></script>
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title"><i class="fa fa-plus"></i> Tambah Data events</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>

                        <form role="form" name="myform" method="post" action="/Cevents_user/tambah" enctype="multipart/form-data">

                        <div class="modal-body">


                          <div class="alert alert-warning alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <h4><i class="icon fa fa-info"></i> Keterangan :</h4>
                            <p>Isilah form events anda dengan lengkap, terutama yang bertanda (*)</p>
                        </div>
                    

                        
                        <div class="form-group">
                          <label>Judul events*</label>
                          <input class="form-control" type="text" placeholder="Judul events" style="width: 100%;" name="judul_events" required>
                        </div>


                        <div class="form-group">
                          <label>Detail events*</label>
                          <textarea class="form-control" rows="3" placeholder="Detail ..." style="width: 100%; height: 200px;" name="detail_events" required></textarea>
                        </div>

                        <div class="form-group">
                          <label>Link Pendaftaran Events*</label>
                          <input class="form-control" rows="3" placeholder="Link Pendaftaran ..." style="width: 100%;" name="linkdaftar_event" required></input>
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

<script>
  CKEDITOR.replace('detail_events');
</script>






<?php 
                foreach($data as $i):
          
                    $id_events=$i['id_events'];
                    $id_pengguna=$i['id_pengguna'];
                    $judul_events=$i['judul_events'];
                    $detail_events=$i['detail_events'];
                    $foto_events=$i['foto_events'];
                    $linkdaftar_event=$i['linkdaftar_event'];
                    $created_at=$i['created_at'];
                    $updated_at=$i['updated_at'];
                ?>

<!-- =====================MODAL LIHAT DATA========================= -->    

<div class="modal fade" id="lihat-data<?php echo $id_events;?>" data-backdrop="static">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title"><i class="nav-icon far fa-id-card nav-icon"></i> Detail events</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>


          <div class="modal-body">

            <div class="alert alert-warning alert-dismissible">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">
                &times;
              </button>
              <h4>
                <i class="icon fa fa-info"></i> Keterangan :
              </h4>
              <p>Ceklah isi form events anda dengan lengkap, terutama yang bertanda (*). Jika isi form sudah lengkap silakan diunduh. Terimakasih.</p>
              <a href="#" class="btn btn-success">
                <i class="fa fa-download"></i> Cetak events
              </a>
            </div>

            <center>
              <?php if ($foto_events != NULL): ?>
                <img src="/img/<?php echo $foto_events; ?>" style="width: 180px; height: 180px;" class="img-circle img-thumbnail">
                  <?php else: ?>
                <img src="/img/noimage.jpg" style="width: 180px; height: 180px;" class="img-circle img-thumbnail">
              <?php endif; ?>
              <br><br>
              <h4><b>FORM events</b></h4>
              <p><b><?php echo $judul_events;?></b></p>
              <small><b>Created at : </b> <?= $created_at; ?> <b>|| Updated at: </b> <?= $updated_at; ?> - </small>
            </center>\
            <br>
            <hr>

            <div class="form-group row">
              <label for="inputPassword3" class="col-sm-2 col-form-label">Judul events*</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" disabled="" placeholder="Judul events" name="judul_events" value="<?php echo $judul_events;?>" style="width: 100%;">
              </div>
            </div>

            <div class="form-group row">
              <label for="inputPassword3" class="col-sm-2 col-form-label">Detail events*</label>
              <div class="col-sm-10">
                <textarea class="form-control" rows="3" placeholder="Detail ..." style="width: 100%; height: 200px;" name="detail_events" disabled><?php echo $detail_events;?></textarea>
              </div>
            </div>

            <div class="form-group row">
              <label for="inputPassword3" class="col-sm-2 col-form-label">Link *</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" disabled="" placeholder="Link Pendaftaran Events" name="judul_events" value="<?php echo $linkdaftar_event;?>" style="width: 100%;" required>
              </div>
                </div>
            </div>

                  <hr>

    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
<!-- ============================================================================== -->




  <!-- =====================MODAL EDIT DATA========================= -->    
<div class="modal fade" id="edit-data<?php echo $id_events;?>" data-backdrop="static">
<script src="<?= base_url('assets/ckeditor/ckeditor.js'); ?>"></script>

  <div class="modal-dialog modal-lg">
    <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">
                <i class="fa fa-edit"></i> 
                Ubah Data events
              </h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>

            <form role="form" name="myform" method="post" action="/Cevents_user/ubah" enctype="multipart/form-data">
              <div class="modal-body">

                <input type="hidden" name="id_events" value="<?php echo $id_events;?>">
                <input type="hidden" name="id_pengguna" value="<?php echo $id_pengguna;?>">
                <input type="hidden" name="judullama" value="<?php echo $judul_events;?>">

                <div class="form-group">
                  <label>Judul events*</label>
                  <input class="form-control" type="text" placeholder="Judul events" style="width: 100%;" name="judul_events" required="" value="<?php echo $judul_events;?>">
                </div>

                <div class="form-group">
                  <label>Detail events</label>
                  <textarea class="form-control" rows="3" placeholder="Detail ..." style="width: 100%; height: 200px;" name="detail_events" id="detail_events" required=""><?php echo $detail_events;?></textarea>
                </div>

                <div class="form-group">
                  <label>Link Pendaftaran Events*</label>
                  <input class="form-control" type="text" placeholder="Link Pendaftaran Events" style="width: 100%;" name="linkdaftar_event" required="" value="<?php echo $linkdaftar_event;?>">
                </div>

                <div class="form-group">
                    <label for="formGroupExampleInput">Upload Foto*</label>
                    <?php if ($foto_events != NULL): ?>
                      <a href="/img/<?php echo $foto_events; ?>" data-toggle="lightbox" data-title="sample 1 - white">
                        <img src="/img/<?php echo $foto_events; ?>" class="img-fluid mb-2" alt="white sample" style="width: 100px; height: 100px;"/>
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
  <script>
  CKEDITOR.replace('detail_events');
</script>

</div>
<!-- /.modal -->
<!-- =============================================== -->





<!-- =====================MODAL HAPUS DATA========================= -->
<div class="modal fade" id="hapus-data<?php echo $id_events;?>">
    <div class="modal-dialog">
      <div class="modal-content">
        <form action="/Cevents_user/hapus/<?php echo $id_events;?>" method="post">
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


<script>
  CKEDITOR.replace('detail_events');
</script>


<?= $this->endSection(); ?>