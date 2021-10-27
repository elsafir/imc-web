<?= $this->extend('user/_vtemplate_user'); ?>

<?= $this->section('title'); ?>
<h1><i class="nav-icon fas fa-tachometer-alt"></i> Dashboard</h1>
<?= $this->endSection(); ?>

<?= $this->section('breadcrumb'); ?>
<li class="breadcrumb-item active"><i class="nav-icon fas fa-tachometer-alt"></i> Dashboard</li>
<?= $this->endSection(); ?>  

<?= $this->section('content_user'); ?>
<!-- ============================================================================== -->    


        <div class="row">
          <div class="col-md-12">

          <div class="card">
            
              <!-- /.card-header -->
              <div class="card-body">
                <div class="row">
                  <div class="col-lg-4 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3><?php echo $community ?></h3>

                <p>Data Anggota Komunitas</p>
              </div>
              <div class="icon">
                <i class="fa fa-users"></i>
              </div>
              <a href="<?= base_url('Ccommunity_user') ?>" class="small-box-footer">Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
       
          <!-- ./col -->
          <div class="col-lg-4 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3><?php echo $events ?></h3>

                <p>Data Events</p>
              </div>
              <div class="icon">
                <i class="nav-icon fas fa-book"></i>
              </div>
              <a href="<?= base_url('Cevents_user') ?>" class="small-box-footer">Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
         

          
                </div>
                
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

          </div>
        </div>
        <!-- /.row -->



<!-- ============================================================================== -->
<?= $this->endSection(); ?> 