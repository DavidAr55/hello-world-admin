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
                <div class="ff-Inter description-container">
                    <h1>1</h1>
                </div>
                <div class="ff-Inter description-container">
                    <h1>2</h1>
                </div>
                <div class="ff-Inter description-container">
                    <h1>3</h1>
                </div>
                <div class="ff-Inter description-container">
                    <h1>4</h1>
                </div>
            </div>
            <div class="grid-container2">
                <div class="ff-Inter users-container">
                    <h1>5</h1>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

