<section class="content">
    <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-info">
                    <div class="inner">
                        <h3> <?= isset($jml_pendaftar[0]['JumlahDaftar']) ? $jml_pendaftar[0]['JumlahDaftar'] : '0' ?></h3>

                        <p>Pendaftar</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-person-add"></i>
                    </div>
                    <a href="<?= base_url("Dashboard/PendaftarPages") ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-success">
                    <div class="inner">
                        <h3> <?= isset($jml_pendaki_naik[0]['JumlahNaik']) ? $jml_pendaki_naik[0]['JumlahNaik'] : '0' ?><sup style="font-size: 20px"></sup></h3>

                        <p>Pendaki Naik</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-stats-bars"></i>
                    </div>
                    <a href="<?= base_url('Dashboard/DashboardNaik') ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-warning">
                    <div class="inner">
                        <h3><?= isset($jml_pendaki_turun[0]['JumlahTurun']) ? $jml_pendaki_turun[0]['JumlahTurun'] : '0' ?><sup style="font-size: 20px"></sup></h3>

                        <p>Pendaki Turun</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-person-add"></i>
                    </div>
                    <a href="<?= base_url('Dashboard/DashboardTurun') ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-danger">
                    <div class="inner">
                        <h3><?= isset($JmlAccident[0]['JumlahAccident']) ? $JmlAccident[0]['JumlahAccident'] : '0' ?><sup style="font-size: 20px"></sup></h3>

                        <p>Dashboard Accident</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-pie-graph"></i>
                    </div>
                    <a href="<?= base_url('Dashboard/DashboardAccident') ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
        </div>
        <!-- /.row -->
        <!-- Main row -->
        <div class="row">
            <!-- Left col -->
            <section class="col-lg-7 connectedSortable">

        </div>
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Calendar</h3>
                </div>
                <div class="card-body">
                    <!-- Embedded Google Calendar -->
                    <iframe src="https://calendar.google.com/calendar/embed?src=en.indonesian%23holiday%40group.v.calendar.google.com&ctz=Asia%2FJakarta" style="border: 0" width="800" height="600" frameborder="0" scrolling="no"></iframe>
                </div>
            </div>
        </div>
        <!-- /.card -->
</section>

<!-- /.Left col -->
<!-- right col (We are only adding the ID to make the widgets sortable)-->

<!-- right col -->
</div>
<!-- /.row (main row) -->
</div><!-- /.container-fluid -->

<!-- /.content -->
</div>