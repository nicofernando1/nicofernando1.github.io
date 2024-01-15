<div class="card-header ">
  <h1 class="display-3 justify-content-center"><?= $judul?></h1>
</div>
<section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3><?= $req ?></h3>
                <p class="mb-6 lead">Request</p>
              </div>
              <div class="icon">
                <i class="ion ion-pull-request"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-primary ">
              <div class="inner">
                <h3><?= $ass ?><sup style="font-size: 20px"></sup></h3>

                <p class="lead">Assigned</p>
              </div>
              <div class="icon">
                <i class="ion ion-merge"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-secondary">
              <div class="inner">
                <h3><?= $pro ?></h3>

                <p class="lead">In Progress</p>
              </div>
              <div class="icon">
                <i class="ion ion-more"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3><?= $pen ?></h3>

                <p class="lead"><strong>Pending</strong></p>
              </div>
              <div class="icon">
                <i class="ion ion-load-a"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
                    <!-- ./col -->
                    <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3><?= $reso ?><sup style="font-size: 20px"></sup></h3>

                <p class="lead">Resolved</p>
              </div>
              <div class="icon">
                <i class="ion ion-clipboard"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
                    <!-- ./col -->
                    <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3><?= $reject?><sup style="font-size: 20px"></sup></h3>

                <p class="lead">Rejected</p>
              </div>
              <div class="icon">
                <i class="ion ion-pin"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->
        <!-- Main row -->
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>