@extends('layouts.lateral-nav')

@section('title', 'CPanel')

@section('content')

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
    </div>

    <h6>Home - Dashboard</h6>

    <!-- Content Row -->
    <div class="row">

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                Earnings (Monthly)</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">$40,000</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                Earnings (Annual)</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">$215,000</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Tasks
                            </div>
                            <div class="row no-gutters align-items-center">
                                <div class="col-auto">
                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">50%</div>
                                </div>
                                <div class="col">
                                    <div class="progress progress-sm mr-2">
                                        <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Pending Requests Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                Pending Requests</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">18</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-comments fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Content Row -->
    <div class="row">

        <!-- Usuarios registrados -->
        <div class="col-xl-3 col-lg-5">
            <div class="card shadow mb-4 bg-blue">
                <!-- Card Body -->
                <div class="card-body">
                    <div style="margin-left: 18px;">
                        <h2 class="font-weight-bold text-light">845</h2>
                        <p class="ff-Inter text-light">Usuarios registrados</p>
                        <div style="height: 260px;"><!-- div vacio --></div>
                        <div class="mb-1 small text-light">17 usuarios pendientes</div>
                        <div class="progress mb-4">
                            <div class="progress-bar bg-dark" role="progressbar" style="width: 85%"
                                aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Pie Chart -->
        <div class="col-xl-3 col-lg-5">
            <div class="card shadow mb-4">
                <!-- Card Body -->
                <div class="card-body">
                    <div style="margin-left: 18px;">
                        <h2 class="font-weight-bold text-gray-800">$700</h2>
                        <p class="ff-Inter">Porcentaje de planes contratados</p>
                    </div>
                    <div class="chart-pie pt-4 pb-2">
                        <canvas id="myPieChart"></canvas>
                    </div>
                    <div class="mt-4 text-center small">
                        <span class="mr-2 ff-Inter">
                            <i class="fas fa-circle text-primary"></i> VIP
                        </span>
                        <span class="mr-2 ff-Inter">
                            <i class="fas fa-circle text-success"></i> Basico
                        </span>
                        <span class="mr-2 ff-Inter">
                            <i class="fas fa-circle text-info"></i> Organizacional
                        </span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Usuarios registrados -->
        <div class="col-xl-6 col-lg-10">
            <div class="card shadow mb-4">
                <!-- Card Body -->
                <div class="card-body">
                    <div style="margin-left: 18px;">
                        <h2 class="font-weight-bold text-gray-800">Categorias de usuario</h2>
                        <p class="ff-Inter">Listado de usuarios</p>
                        <div style="height: 260px;"><!-- div vacio --></div>
                        <div class="mb-1 small">17 usuarios pendientes</div>
                        <div class="progress mb-4">
                            <div class="progress-bar bg-dark" role="progressbar" style="width: 85%"
                                aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Usuarios registrados -->
        <div class="col-xl-3 col-lg-5">
            <div class="card shadow mb-4">
                <!-- Card Body -->
                <div class="card-body">
                    <div style="margin-left: 18px;">
                        <h2 class="font-weight-bold text-gray-800">Reportes</h2>
                        <p class="ff-Inter">Usuarios registrados</p>
                        <div style="height: 260px;"><!-- div vacio --></div>
                        <div class="mb-1 small">17 usuarios pendientes</div>
                        <div class="progress mb-4">
                            <div class="progress-bar bg-dark" role="progressbar" style="width: 85%"
                                aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Pie Chart -->
        <div class="col-xl-3 col-lg-5">
            <div class="card shadow mb-4">
                <!-- Card Body -->
                <div class="card-body">
                    <div style="margin-left: 18px;">
                        <h2 class="font-weight-bold text-gray-800">Planes</h2>
                        <p class="ff-Inter">Porcentaje de planes contratados</p>
                    </div>
                    <div class="chart-pie pt-4 pb-2">
                        <canvas id="myPieChart"></canvas>
                    </div>
                    <div class="mt-4 text-center small">
                        <span class="mr-2 ff-Inter">
                            <i class="fas fa-circle text-primary"></i> VIP
                        </span>
                        <span class="mr-2 ff-Inter">
                            <i class="fas fa-circle text-success"></i> Basico
                        </span>
                        <span class="mr-2 ff-Inter">
                            <i class="fas fa-circle text-info"></i> Organizacional
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->
@endsection