@extends('layouts.lateral-nav')

@section('title', 'CPanel Contenido')

@section('content')

<div class="container-fluid">

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Contenido</h1>
        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
    </div>

    <h6>Hello World - contenido</h6>

    <!-- Content Agregar contenido -->
    <div class="row mt-3">
        <div class="col-lg-12">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold">Agregar contenido nuevo</h6>
                </div>

        <!-- Card Body -->
        <div class="card-body">
            <div class="row mb-3">
                <div class="col-md-6">
                    <div class="form-floating mb-3 mb-md-0">
                        <label for="inputTitle">Titulo del contenido</label>
                        <input class="form-control" id="inputTitle" name="" type="text" placeholder="" value="" required />
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-floating">
                        <label for="inputCategori">Categoria del contenido (nombre de la lección)</label>
                        <input class="form-control" id="inputCategori" name="" type="text" placeholder="" value="" required />
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="textareaExplain">Explicacion completa del contenido</label>
                        <textarea class="form-control" id="textareaExplain" rows="8"></textarea>
                    </div>
                </div>
            </div>
            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn btn-success shadow-sm">Ingresar este contenido</a>
            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">Previsualizar contenido</a>
            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-danger shadow-sm">Limpiar Formulario</a>
        </div>
    </div>            
    

        <!-- Content Contenido registrado -->
        <div class="row mt-3">
        <div class="col-lg-12">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold">Contenido registrado previamente</h6>
                </div>

                <!-- Card Body -->
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered ff-Inter" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Titulo</th>
                                    <th>Categoria</th>
                                    <th>Contenido</th>
                                    <th>Creación</th>
                                    <th>Actualización</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>Titulo</th>
                                    <th>Categoria</th>
                                    <th>Contenido</th>
                                    <th>Creación</th>
                                    <th>Actualización</th>
                                    <th>Acciones</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                <tr>
                                    <td>Introduccion a C++</td>
                                    <td>Fundamentos de C++</td>
                                    <td class="text-center"><a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="text-white-50"></i> Ver contenido completo</a></td>
                                    <td>2024-05-23 08:30:00</td>
                                    <td>2024-05-23 08:30:00</td>
                                    <td class="text-center"><a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="text-white-50"></i> Editar</a>
                                    <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-danger shadow-sm"><i class="text-white-50"></i> Borrar</a>
                                    </td>
                                    
                                </tr>
                                <tr>
                                    <td>Variables tipos de datos</td>
                                    <td>Fundamentos de C++</td>
                                    <td class="text-center"><a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="text-white-50"></i> Ver contenido completo</a></td>
                                    <td>2024-05-23 08:30:00</td>
                                    <td>2024-05-23 08:30:00</td>
                                    <td class="text-center"><a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="text-white-50"></i> Editar</a>
                                    <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-danger shadow-sm"><i class="text-white-50"></i> Borrar</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Entrada y salida basica (cin y cout)</td>
                                    <td>Fundamentos de C++</td>
                                    <td class="text-center"><a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="text-white-50"></i> Ver contenido completo</a></td>
                                    <td>2024-05-23 08:30:00</td>
                                    <td>2024-05-23 08:30:00</td>
                                    <td class="text-center"><a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="text-white-50"></i> Editar</a>
                                    <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-danger shadow-sm"><i class="text-white-50"></i> Borrar</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Area de un cuadrado</td>
                                    <td>Fundamentos de C++</td>
                                    <td class="text-center"><a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="text-white-50"></i> Ver contenido completo</a></td>
                                    <td>2024-05-23 08:30:00</td>
                                    <td>2024-05-23 08:30:00</td>
                                    <td class="text-center"><a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="text-white-50"></i> Editar</a>
                                    <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-danger shadow-sm"><i class="text-white-50"></i> Borrar</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Estrucutas de control if y else</td>
                                    <td>Fundamentos de C++</td>
                                    <td class="text-center"><a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="text-white-50"></i> Ver contenido completo</a></td>
                                    <td>2024-05-23 08:30:00</td>
                                    <td>2024-05-23 08:30:00</td>
                                    <td class="text-center"><a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="text-white-50"></i> Editar</a>
                                    <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-danger shadow-sm"><i class="text-white-50"></i> Borrar</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Bucles while y for</td>
                                    <td>Fundamentos de C++</td>
                                    <td class="text-center"><a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="text-white-50"></i> Ver contenido completo</a></td>
                                    <td>2024-05-23 08:30:00</td>
                                    <td>2024-05-23 08:30:00</td>
                                    <td class="text-center"><a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="text-white-50"></i> Editar</a>
                                    <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-danger shadow-sm"><i class="text-white-50"></i> Borrar</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Introduccion a C++</td>
                                    <td>Fundamentos de C++</td>
                                    <td class="text-center"><a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="text-white-50"></i> Ver contenido completo</a></td>
                                    <td>2024-05-23 08:30:00</td>
                                    <td>2024-05-23 08:30:00</td>
                                    <td class="text-center"><a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="text-white-50"></i> Editar</a>
                                    <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-danger shadow-sm"><i class="text-white-50"></i> Borrar</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Introduccion a C++</td>
                                    <td>Fundamentos de C++</td>
                                    <td class="text-center"><a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="text-white-50"></i> Ver contenido completo</a></td>
                                    <td>2024-05-23 08:30:00</td>
                                    <td>2024-05-23 08:30:00</td>
                                    <td class="text-center"><a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="text-white-50"></i> Editar</a>
                                    <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-danger shadow-sm"><i class="text-white-50"></i> Borrar</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Introduccion a C++</td>
                                    <td>Fundamentos de C++</td>
                                    <td class="text-center"><a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="text-white-50"></i> Ver contenido completo</a></td>
                                    <td>2024-05-23 08:30:00</td>
                                    <td>2024-05-23 08:30:00</td>
                                    <td class="text-center"><a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="text-white-50"></i> Editar</a>
                                    <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-danger shadow-sm"><i class="text-white-50"></i> Borrar</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Introduccion a C++</td>
                                    <td>Fundamentos de C++</td>
                                    <td class="text-center"><a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="text-white-50"></i> Ver contenido completo</a></td>
                                    <td>2024-05-23 08:30:00</td>
                                    <td>2024-05-23 08:30:00</td>
                                    <td class="text-center"><a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="text-white-50"></i> Editar</a>
                                    <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-danger shadow-sm"><i class="text-white-50"></i> Borrar</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Introduccion a C++</td>
                                    <td>Fundamentos de C++</td>
                                    <td class="text-center"><a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="text-white-50"></i> Ver contenido completo</a></td>
                                    <td>2024-05-23 08:30:00</td>
                                    <td>2024-05-23 08:30:00</td>
                                    <td class="text-center"><a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="text-white-50"></i> Editar</a>
                                    <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-danger shadow-sm"><i class="text-white-50"></i> Borrar</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Introduccion a C++</td>
                                    <td>Fundamentos de C++</td>
                                    <td class="text-center"><a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="text-white-50"></i> Ver contenido completo</a></td>
                                    <td>2024-05-23 08:30:00</td>
                                    <td>2024-05-23 08:30:00</td>
                                    <td class="text-center"><a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="text-white-50"></i> Editar</a>
                                    <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-danger shadow-sm"><i class="text-white-50"></i> Borrar</a>
                                </tr>
                            </tbody>
                        </table>
                    </div>
>>>>>>> frontend
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

