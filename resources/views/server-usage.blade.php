@extends('layouts.lateral-nav')

@section('title', 'CPanel Uso del servidor')

@section('content')

<!-- Begin Page Content -->
<div class="container-fluid">
    
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Servidor / Uso del servidor</h1>
        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
    </div>

    <h6>Hello World - Servidor - Uso del servidor</h6>

    <!-- Content Row -->
    <div class="row mt-4">
        
        <!-- Lista de nombres de las charts -->
        <div class="col-xl-2 col-lg-5">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold">Uso del hardware</h6>
                </div>
                <div class="card-body">
                    <ul class="list-group">
                        <li class="list-group-item chart-button" data-chart="cpuChart">
                            <canvas id="cpuChart" width="100" height="50"></canvas>
                            <figcaption class="chart-title">CPU</figcaption>
                        </li>
                        <li class="list-group-item chart-button" data-chart="memoryChart">
                            <canvas id="memoryChart" width="100" height="50"></canvas>
                            <figcaption class="chart-title">Memory</figcaption>
                        </li>
                        <li class="list-group-item chart-button" data-chart="diskChart">
                            <canvas id="diskChart" width="100" height="50"></canvas>
                            <figcaption class="chart-title">Disk</figcaption>
                        </li>
                        <li class="list-group-item chart-button" data-chart="networkIngressTraffic">
                            <canvas id="networkIngressTraffic" width="100" height="50"></canvas>
                            <figcaption class="chart-title">Ingress Traffic</figcaption>
                        </li>
                        <li class="list-group-item chart-button" data-chart="networkEgressTraffic">
                            <canvas id="networkEgressTraffic" width="100" height="50"></canvas>
                            <figcaption class="chart-title">Egress Traffic</figcaption>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold">Uso general</h6>
                </div>
                <div class="card-body">
                    <p class="fs-13">Tiempo de actividad:</p>
                    <h5 id="upTime">00:00:00:00</h5>
                </div>
            </div>
        </div>

        <!-- Area Chart -->
        <div class="col-xl-10 col-lg-7">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold" id="chartTitle">CPU - Ryzen 7 5700X - 8 Core</h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <div class="chart-area-server-resources">
                        <canvas id="serverUsageChart"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection