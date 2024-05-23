@extends('layouts.lateral-nav')

@section('title', 'CPanel Registros')

@section('content')

<!-- Begin Page Content -->
<div class="container-fluid">
    
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Servidor / Logs</h1>
        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
    </div>

    <h6>Hello World - Servidor - logs</h6>

    <!-- Content Row -->
    <div class="row mt-3">
        <div class="col-lg-12">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold">Registros del servidor</h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered ff-Inter" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Código</th>
                                    <th>Mensaje de Registro</th>
                                    <th>Fecha</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>Código</th>
                                    <th>Mensaje de Registro</th>
                                    <th>Fecha</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                <tr>
                                    <td class="text-center"><span class="code-200">200</span></td>
                                    <td>POST /v1/invoices/in_6246_2417/payment</td>
                                    <td>2024-05-23 08:30:00</td>
                                </tr>
                                <tr>
                                    <td class="text-center"><span class="code-200">200</span></td>
                                    <td>POST /v1/invoices/in_9541_7914/payment</td>
                                    <td>2024-05-23 09:15:00</td>
                                </tr>
                                <tr>
                                    <td class="text-center"><span class="code-500">500-ERR</span></td>
                                    <td>POST /v1/invoice/in_4499_7511/invalid</td>
                                    <td>2024-05-23 10:00:00</td>
                                </tr>
                                <tr>
                                    <td class="text-center"><span class="code-404">404-WRN</span></td>
                                    <td>POST /v1/customer/c_6632b42a8fcbb/not_found</td>
                                    <td>2024-05-23 11:30:00</td>
                                </tr>
                                <tr>
                                    <td class="text-center"><span class="code-200">200</span></td>
                                    <td>POST /v1/invoices/in_6246_2417/payment</td>
                                    <td>2024-05-23 12:00:00</td>
                                </tr>
                                <tr>
                                    <td class="text-center"><span class="code-200">200</span></td>
                                    <td>POST /v1/invoices/in_9541_7914/payment</td>
                                    <td>2024-05-23 13:15:00</td>
                                </tr>
                                <tr>
                                    <td class="text-center"><span class="code-500">500-ERR</span></td>
                                    <td>POST /v1/invoice/in_4499_7511/invalid</td>
                                    <td>2024-05-23 14:30:00</td>
                                </tr>
                                <tr>
                                    <td class="text-center"><span class="code-404">404-WRN</span></td>
                                    <td>POST /v1/customer/c_6632b42a8fcbb/not_found</td>
                                    <td>2024-05-23 15:45:00</td>
                                </tr>
                                <tr>
                                    <td class="text-center"><span class="code-200">200</span></td>
                                    <td>POST /v1/invoices/in_6246_2417/payment</td>
                                    <td>2024-05-23 16:00:00</td>
                                </tr>
                                <tr>
                                    <td class="text-center"><span class="code-200">200</span></td>
                                    <td>POST /v1/invoices/in_9541_7914/payment</td>
                                    <td>2024-05-23 17:30:00</td>
                                </tr>
                                <tr>
                                    <td class="text-center"><span class="code-500">500-ERR</span></td>
                                    <td>POST /v1/invoice/in_4499_7511/invalid</td>
                                    <td>2024-05-23 18:45:00</td>
                                </tr>
                                <tr>
                                    <td class="text-center"><span class="code-404">404-WRN</span></td>
                                    <td>POST /v1/customer/c_6632b42a8fcbb/not_found</td>
                                    <td>2024-05-23 19:00:00</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection