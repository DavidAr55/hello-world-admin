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
    <!-- First Column: 2 rows with 2 columns each -->
    <div class="col-md-6">
        <div class="row">
            <!-- Usuarios registrados -->
            <div class="col-md-6">
                <div class="card shadow mb-4 bg-blue">
                    <!-- Card Body -->
                    <div class="card-body">
                        <div style="margin-left: 18px;">
                            <h2 class="font-weight-bold text-light">845</h2>
                            <p class="ff-Inter text-light">Usuarios registrados</p>
                            <div style="height: 260px;"><!-- div vacio --></div>
                            <div class="d-flex justify-content-between text-light mb-1 small">
                                <span>17 pendientes</span>
                                <span>2%</span>
                            </div>
                            <div class="progress mb-4">
                                <div class="progress-bar bg-white" role="progressbar" style="width: 85%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            

            <!-- Pie Chart -->
            <div class="col-md-6">
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
        </div>

        <div class="row">
            <!-- Reportes -->
            <div class="col-md-6">
                <div class="card shadow mb-4">
                    <!-- Card Body -->
                    <div class="card-body">
                        <div style="margin-left: 18px;">
                            <h2 class="font-weight-bold text-gray-800">Reportes</h2>
                            <table class="table ff-Inter"  width="100%" cellspacing="0">
                                <tbody>
                                    <tr>
                                        <td class="custom-blue">CPU</td>      
                                        <td class="text-right"><a href="recursos-servidor"><i class="fas fa-external-link-square-alt" style="color: #84868b; font-size: 25px;"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td class="custom-blue">Disco</td>                       
                                        <td class="text-right"><a href="recursos-servidor"><i class="fas fa-external-link-square-alt" style="color: #84868b; font-size: 25px;"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td class="custom-blue">Red</td>               
                                        <td class="text-right"><a href="recursos-servidor"><i class="fas fa-external-link-square-alt" style="color: #84868b; font-size: 25px;"></i></a></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Planes -->
            <div class="col-md-6">
                <div class="card shadow mb-4">
                    <!-- Card Body -->
                    <div class="card-body">
                        <div style="margin-left: 18px;">
                            <h2 class="font-weight-bold text-gray-800">Usuarios</h2>
                            <table class="table ff-Inter"  width="100%" cellspacing="0">
                                <tbody>
                                    <tr>
                                        <td>VIP</td>      
                                        <td class="text-right"><i class="fas fa-arrow-up fa-rotate-by" style="color: #12fd21; -fa-rotate-angle: -320deg;""></i></td>
                                        <td><h6>512</h6></td>
                                    </tr>
                                    <tr>
                                        <td>Organizacional</td>                       
                                        <td class="text-right"><i class="fas fa-arrow-up fa-rotate-by" style="color: #12fd21; -fa-rotate-angle: -320deg;""></i></td>
                                        <td><h6>78</h6></td>
                                    </tr>
                                    <tr>
                                        <td>Basico</td>               
                                        <td class="text-right"><i class="fas fa-arrow-down" style="color: #ef0b0b;"></i></td>
                                        <td><h6>54</h6></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-- Second Column: Tipos de usuarios -->
<div class="col-md-6" style="height: 735px; overflow-y: auto;">
    <div class="card shadow mb-4">
        <div class="card-header">
            <h2 class="font-weight-bold text-gray-800">Tipos de usuarios</h2>
        </div>
        <div class="card-body">
            <p class="ff-Inter">Listado de usuarios</p>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-auto">
                        <a href="#" class="btn btn-xl custom-btn-blue btn-spacing shadow-sm">
                            <i class="fas fa-star text-white-50"></i> Basico
                        </a>
                    </div>
                    <div class="col-auto">
                        <a href="#" class="btn btn-xl custom-btn-blue btn-spacing shadow-sm">
                            <i class="fas fa-crown text-white-50"></i> VIP 
                        </a>
                    </div>
                    <div class="col-auto">
                        <a href="#" class="btn btn-xl custom-btn-blue btn-spacing shadow-sm">
                            <i class="fas fa-building text-white-50"></i> Organizacional
                        </a>
                    </div>
                </div>
            </div>
            <!-- Card Body -->
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table ff-Inter" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Usuario</th>
                                <th></th>
                                <th>Porcentaje</th>
                                <th>Uso plataforma</th>
                                <th>Vista</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <div>
                                        <i class="fas fa-user-circle" style="color: #000000; font-size: 55px;"></i>
                                    </div>   
                                    <td class="text-left">
                                        <p>
                                            <strong>Rodrigo Ramos</strong>
                                            <p>RodrigoCoris</p>
                                        </p>
                                    </td>
                                <td class="text-center">68%</td>
                                <td><canvas id="cpuChart1" width="100" height="50"></canvas></td>
                                <td class="text-center"><a href="#"><i class="fas fa-arrow-right" style="color: #B5A6A6; font-size: 20px;"></i></a></td>
                            </tr>
                            <tr>
                                <td>
                                    <div>
                                        <i class="fas fa-user-circle" style="color: #000000; font-size: 55px;"></i>
                                    </div>   
                                    <td class="text-left">
                                        <p>
                                            <strong>David Loera</strong>
                                            <p>DavidTurin</p>
                                        </p>
                                    </td>
                                <td class="text-center">21%</td>
                                <td><canvas id="cpuChart2" width="100" height="50"></canvas></td>
                                <td class="text-center"><a href="#"><i class="fas fa-arrow-right" style="color: #B5A6A6; font-size: 20px;"></i></a></td>
                            </tr>
                            <tr>
                                <td>
                                    <div>
                                        <i class="fas fa-user-circle" style="color: #000000; font-size: 55px;"></i>
                                    </div>   
                                    <td class="text-left">
                                        <p>
                                            <strong>Carlos Lopez</strong>
                                            <p>HotTaco</p>
                                        </p>
                                    </td>
                                <td class="text-center">61%</td>
                                <td><canvas id="cpuChart3" width="100" height="50"></canvas></td>
                                <td class="text-center"><a href="#"><i class="fas fa-arrow-right" style="color: #B5A6A6; font-size: 20px;"></i></a></td>
                            </tr>
                            <tr>
                                <td>
                                    <div>
                                        <i class="fas fa-user-circle" style="color: #000000; font-size: 55px;"></i>
                                    </div>   
                                    <td class="text-left">
                                        <p>
                                            <strong>Mariana Estrada</strong>
                                            <p>Marianita69</p>
                                        </p>
                                    </td>
                                <td class="text-center">72%</td>
                                <td><canvas id="cpuChart4" width="100" height="50"></canvas></td>
                                <td class="text-center"><a href="#"><i class="fas fa-arrow-right" style="color: #B5A6A6; font-size: 20px;"></i></a></td>
                            </tr>
                            <tr>
                                <td>
                                    <div>
                                        <i class="fas fa-user-circle" style="color: #000000; font-size: 55px;"></i>
                                    </div>   
                                    <td class="text-left">
                                        <p>
                                            <strong>Juan Pablo</strong>
                                            <p>Krozz</p>
                                        </p>
                                    </td>
                                <td class="text-center">31%</td>
                                <td><canvas id="cpuChart5" width="100" height="50"></canvas></td>
                                <td class="text-center"><a href="#"><i class="fas fa-arrow-right" style="color: #B5A6A6; font-size: 20px;"></i></a></td>
                            </tr>           
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<!-- /.container-fluid -->

@endsection