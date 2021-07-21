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
                <h3>Ubah Program</h3>
            </div>
            <div class="card-body">
              <form action="<?= base_url('/jenisprogram/'.$jenis_program['id_jenis_program']); ?>" method="POST">
                  <?php csrf_field(); ?>
                  <input type="hidden" name="_method" value="PUT"><!-- Form menggunakan method PUT -->
                  <ul class="list-group">
                      Jenis Program <input type="text" name="jenis_program" value="<?= $jenis_program['jenis_program'] ?>" required>
                      Tentang Program <textarea name="tentang_jenis_program" rows="8" cols="80" value="<?= $jenis_program['tentang_jenis_program'] ?>" required></textarea>
                  </ul>
                  <hr>
                  <a href="<?= base_url('jenisprogram') ?>" class="btn btn-primary">Kembali</a>
                  <input type="submit" value="Ubah Data" class="btn btn-success">
              </form>
              </div>
            </div>
        </div>

    <?= $this->endSection('content_admin'); ?>
</body>
</html>
