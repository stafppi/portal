@extends('templates.app')

@section('content')

<section class="content">
    <div class="container-fluid">
    <!-- Small boxes (Stat box) -->
    <div class="row">
        <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-info">
            <div class="inner">
            <h3>BAAK</h3>

            <p>BAAK</p>
            </div>
            <div class="icon">
            <i class="ion ion-person-add"></i>
            </div>
            <a href="#" class="small-box-footer">Login <i class="fas fa-arrow-circle-right"></i></a>
        </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-info">
            <div class="inner">
            <h3>BAU<sup style="font-size: 20px">%</sup></h3>

            <p>BAU</p>
            </div>
            <div class="icon">
            <i class="ion ion-person-add"></i>
            </div>
            <a href="#" class="small-box-footer">Login <i class="fas fa-arrow-circle-right"></i></a>
        </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-info">
            <div class="inner">
            <h3>SPMI</h3>

            <p>SPMI</p>
            </div>
            <div class="icon">
            <i class="ion ion-person-add"></i>
            </div>
            <a href="/dosen" class="small-box-footer">Login <i class="fas fa-arrow-circle-right"></i></a>
        </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-info">
            <div class="inner">
            <h3>Resepsionis</h3>

            <p>Resepsionis</p>
            </div>
            <div class="icon">
            <i class="ion ion-person-add"></i>
            </div>
            <a href="/karyawan" class="small-box-footer">Login <i class="fas fa-arrow-circle-right"></i></a>
        </div>
        </div>
        <!-- ./col -->
    </div>
    <!-- /.row -->

    <!-- Small boxes (Stat box) -->
    <div class="row">
        <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-info">
            <div class="inner">
            <h3>Mahasiswa</h3>

            <p>Mahasiswa</p>
            </div>
            <div class="icon">
            <i class="ion ion-person-add"></i>
            </div>
            <a href="#" class="small-box-footer">Login <i class="fas fa-arrow-circle-right"></i></a>
        </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-info">
            <div class="inner">
            <h3>Dosen</h3>

            <p>Dosen</p>
            </div>
            <div class="icon">
            <i class="ion ion-person-add"></i>
            </div>
            <a href="#" class="small-box-footer">Login <i class="fas fa-arrow-circle-right"></i></a>
        </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-info">
            <div class="inner">
            <h3>Absensi</h3>

            <p>Absensi</p>
            </div>
            <div class="icon">
            <i class="ion ion-person-add"></i>
            </div>
            <a href="/dosen" class="small-box-footer">Login <i class="fas fa-arrow-circle-right"></i></a>
        </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-info">
            <div class="inner">
            <h3>CMS & LMS</h3>

            <p>CMS & LMS</p>
            </div>
            <div class="icon">
            <i class="ion ion-person-add"></i>
            </div>
            <a href="/karyawan" class="small-box-footer">Login <i class="fas fa-arrow-circle-right"></i></a>
        </div>
        </div>
        <!-- ./col -->
    </div>
    <!-- /.row -->

    <!-- Small boxes (Stat box) -->
    <div class="row">
        <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-info">
            <div class="inner">
            <h3>Perpustakaan</h3>

            <p>Perpustakaan</p>
            </div>
            <div class="icon">
            <i class="ion ion-person-add"></i>
            </div>
            <a href="#" class="small-box-footer">Login <i class="fas fa-arrow-circle-right"></i></a>
        </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-info">
            <div class="inner">
            <h3>Akreditasi</h3>

            <p>Akreditasi</p>
            </div>
            <div class="icon">
            <i class="ion ion-person-add"></i>
            </div>
            <a href="#" class="small-box-footer">Login <i class="fas fa-arrow-circle-right"></i></a>
        </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-info">
            <div class="inner">
            <h3>Pelaporan</h3>

            <p>Pelaporan</p>
            </div>
            <div class="icon">
            <i class="ion ion-person-add"></i>
            </div>
            <a href="/dosen" class="small-box-footer">Login <i class="fas fa-arrow-circle-right"></i></a>
        </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-info">
            <div class="inner">
            <h3>{{ $all_karyawan }}</h3>

            <p>Data Karyawan</p>
            </div>
            <div class="icon">
            <i class="ion ion-person-add"></i>
            </div>
            <a href="/karyawan" class="small-box-footer">Login <i class="fas fa-arrow-circle-right"></i></a>
        </div>
        </div>
        <!-- ./col -->
    </div>
    <!-- /.row -->

    <!-- Small boxes (Stat box) -->
    <div class="row">
        <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-info">
            <div class="inner">
            <h3>CCTV</h3>

            <p>CCTV</p>
            </div>
            <div class="icon">
            <i class="ion ion-person-add"></i>
            </div>
            <a href="#" class="small-box-footer">Login <i class="fas fa-arrow-circle-right"></i></a>
        </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-info">
            <div class="inner">
            <h3>Inventory</h3>

            <p>Invontory</p>
            </div>
            <div class="icon">
            <i class="ion ion-person-add"></i>
            </div>
            <a href="#" class="small-box-footer">Login <i class="fas fa-arrow-circle-right"></i></a>
        </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-info">
            <div class="inner">
            <h3>Pelaporan</h3>

            <p>Pelaporan</p>
            </div>
            <div class="icon">
            <i class="ion ion-person-add"></i>
            </div>
            <a href="/dosen" class="small-box-footer">Login <i class="fas fa-arrow-circle-right"></i></a>
        </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-info">
            <div class="inner">
            <h3>Sistem Operasi</h3>

            <p>Sistem Operasi</p>
            </div>
            <div class="icon">
            <i class="ion ion-person-add"></i>
            </div>
            <a href="/karyawan" class="small-box-footer">Login <i class="fas fa-arrow-circle-right"></i></a>
        </div>
        </div>
        <!-- ./col -->
    </div>
    <!-- /.row -->




    <!-- Main row -->
    <div class="row">
        <!-- Left col -->
        <section class="col-lg-7 connectedSortable">

            <!-- Calendar -->
            <div class="card bg-gradient-success">
                <div class="card-header border-0">

                <h3 class="card-title">
                    <i class="far fa-calendar-alt"></i>
                    Calendar
                </h3>
                <!-- tools card -->
                <div class="card-tools">
                    <button type="button" class="btn btn-success btn-sm" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-success btn-sm" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                    </button>
                </div>
                <!-- /. tools -->
                </div>
                <!-- /.card-header -->
                <div class="card-body pt-0">
                <!--The calendar -->
                <div id="calendar" style="width: 100%"></div>
                </div>
                <!-- /.card-body -->
            </div>


            <!-- TO DO List -->
            
            <!-- /.card -->
        </section>
        <!-- /.Left col -->
        <!-- right col (We are only adding the ID to make the widgets sortable)-->
        <section class="col-lg-5 connectedSortable">

            <!-- Map card -->
            <div class="card bg-gradient-primary">
                <div class="card-header border-0">
                <h3 class="card-title">
                    <i class="fas fa-map-marker-alt mr-1"></i>
                    Visitors
                </h3>
                <!-- card tools -->
                <div class="card-tools">
                    <button type="button" class="btn btn-primary btn-sm daterange" title="Date range">
                    <i class="far fa-calendar-alt"></i>
                    </button>
                    <button type="button" class="btn btn-primary btn-sm" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-minus"></i>
                    </button>
                </div>
                <!-- /.card-tools -->
                </div>
                <div class="card-body">
                <div id="world-map" style="height: 250px; width: 100%;"></div>
                </div>
                <!-- /.card-body-->
                <div class="card-footer bg-transparent">
                <div class="row">
                    <div class="col-4 text-center">
                    <div id="sparkline-1"></div>
                    <div class="text-white">Visitors</div>
                    </div>
                    <!-- ./col -->
                    <div class="col-4 text-center">
                    <div id="sparkline-2"></div>
                    <div class="text-white">Online</div>
                    </div>
                    <!-- ./col -->
                    <div class="col-4 text-center">
                    <div id="sparkline-3"></div>
                    <div class="text-white">Sales</div>
                    </div>
                    <!-- ./col -->
                </div>
                <!-- /.row -->
                </div>
            </div>

        
        </section>
        <!-- right col -->
    </div>
    <!-- /.row (main row) -->
    </div><!-- /.container-fluid -->
</section>

@endsection