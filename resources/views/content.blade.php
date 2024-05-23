@extends('layouts.lateral-nav')

@section('title', 'CPanel Contenido')

@section('content')

<div class="container-fluid">

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Contenido</h1>
        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
    </div>
    <h6>Hello World - contenido</h6>
    <div class="row">
        <div class="container-options-dashboard">
            <div class="grid-container">
                <div class="description-container text-white special-box">
                    <h1>845</h1>
                    <span class="text-below">Usuarios registrados</span>
                    <span class="text-below2">17 pendientes</span>
                    <span class="text-below3">7%</span>
                </div>                
                <div class="description-container">
                    <h1>$700</h1>
                    <span class="text-below">Estadisticas</span>
                
                </div>
                <div class="description-container text-black">
                    <h1>Reportes</h1>
                    <span class="text-below4 text-blue-700">CPU</span>
                    <span class="text-belows">Disco</span>
                    <span class="text-belowss">Red</span>
                </div>
                <div class="description-container">
                    <h1>Usuarios</h1>
                </div>
            </div>
            <div class="grid-container2">
                <div class="ff-Inter users-container">
                    <h1>Tipos de usuarios</h1>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

