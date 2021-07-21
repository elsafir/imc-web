<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <?= $this->extend('admin/_vtemplate_admin'); ?>

  <?= $this->section('title'); ?>
  <h1><i class="nav-icon fas fa-book"></i> Jenis Program</h1>
  <?= $this->endSection(); ?>

  <?= $this->section('breadcrumb'); ?>
  <li class="breadcrumb-item active"><i class="nav-icon fas fa-book"></i> Jenis Program</li>
  <?= $this->endSection(); ?>

    <?= $this->section('content_admin'); ?>
    <div class="container">
        <div class="card my-3">
            <div class="card-header">
                <h3>Data Program</h3>
            </div>
            <div class="card-body">
                    <!-- Tambah Pop Up Berhasil -->
                    <?php if(!empty(session()->getFlashdata('berhasil'))){ ?>
                      <div class="alert alert-success">
                    <?php echo session()->getFlashdata('berhasil');?>
              </div>
                  <?php } ?>
                  <!-- Button Berhasil -->
              <button type="button" class="btn btn-primary mb-2" data-toggle="modal" data-target="#tambah-data">
                <a href="#" style="color:white;"><i class="fa fa-plus"></i> Tambah Data Program</a>
              </button>

                <table class="table table-bordered table-striped">
                    <tr>
                        <th>Jenis Program</th>
                        <th>Tentang Program</th>
                        <th>Action</th>
                    </tr>
                    <?php foreach($jenis_program as $js) :
                        $tentang_jenis_program=$js['tentang_jenis_program'];
                       ?>
                    <tr>
                        <td><?= $js['jenis_program'] ?></td>
                        <td><?php echo substr($tentang_jenis_program, 0, 100); ?></td>
                        <td>
                            <ul class="nav">
                                <a href="<?= base_url('jenisprogram/'.$js['id_jenis_program'].'/edit') ?>" class="btn btn-success me-2" style="width:100%;">Edit</a>
                                <!-- Delete -->
                                <!-- <a href="#" data-href="<?= base_url('jenisprogram/'.$js['id_jenis_program']) ?>" onclick="confirmToDelete(this)" class="btn btn-sm btn-outline-danger">Delete</a> -->
                            </ul>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </table>
            </div>
        </div>
    </div>
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
              <form role="form" name="myform" method="post" action="/jenisprogram/create" enctype="multipart/form-data">
                     <div class="modal-body">
                          <div class="alert alert-warning alert-dismissible">
                               <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                               <h4><i class="icon fa fa-info"></i> Perhatian :</h4>
                               <p>Pada Form ini dipergunakan untuk membuat Program yang ada Di IM Connect </p>
                           </div>

                           <div class="form-group">
                             <label>Jenis Program</label>
                             <input class="form-control" type="text" placeholder="Nama Program" style="width: 400px;" name="jenis_program" required>
                           </div>

                           <div class="form-group">
                             <label>Tentang Program</label>
                             <textarea class="form-control" rows="3" placeholder="Tentang ..." style="width: 400px; height: 200px;" name="tentang_jenis_program" required=""><?php echo $tentang_jenis_program;?></textarea>
                           </div>
                        </div>

                           <div class="modal-footer">
                             <button class="btn btn-primary" type="submit" title="Tambah"><i class="fa fa-check"></i></button>
                             <button class="btn btn-warning" type="Reset" title="undo"><i class="fa fa-redo"></i></button>
                             <button class="btn btn-danger" data-dismiss="modal" aria-hidden="true" title="keluar"><i class="fa fa-times-circle"></i></button>
                             </div>
                    </form>
            </div>
        </div>
</div>
   <?php
      foreach($jenis_program as $js):
      $id_jenis_program=$js['id_jenis_program'];
      $jenis_program=$js['jenis_program'];
      $tentang_jenis_program=$js['tentang_jenis_program'];
    ?>
  <?php endforeach;?>

<!--  fungsi & form delete
    <div id="confirm-dialog" class="modal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <h2 class="h2">Apa Anda Yakin</h2>
        <p>The data will be deleted and lost forever</p>
      </div>
      <div class="modal-footer">
        <a href="#" role="button" id="delete-button" class="btn btn-danger">Delete</a>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
      </div>
    </div>
  </div>
</div>

<script>
function confirmToDelete(el){
    $("#delete-button").attr("href", el.dataset.href);
    $("#confirm-dialog").modal('show');
}
</script> -->

    <?= $this->endSection('content_admin'); ?>
</body>
</html>
