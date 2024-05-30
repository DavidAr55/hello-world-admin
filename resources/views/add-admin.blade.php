@extends('layouts.lateral-nav')

@section('title', 'CPanel Agregar un Administrador')

@section('content')

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Administrador</h1>
        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
    </div>

    <h6>Hello World - Administrador</h6>

<!-- Content Row -->
<div class="row mt-3">
    <div class="col-lg-12">
        <div class="card shadow mb-4">
            <!-- Card Header - Dropdown -->
            <div class="card-header">
                <h3 class="text-center-admin font-weight-light my-4">Agregar un nuevo administrador</h3>
            </div>
            <!-- Card Body -->
            <div class="card-body">
                <div class="table-responsive">
                    <form action="" method="POST" enctype="multipart/form-data">
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <div class="form-floating mb-3 mb-md-0">
                                    <input class="form-control" id="inputUserName" name="inputUserName" type="text" placeholder="Nombre de usuario" value="" required />
                                    <!--<label for="inputUserName">Nombre de usuario</label>-->
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input class="form-control" id="inputEmail" name="inputEmail" type="email" placeholder="Correo Electronico" value="" required />
                                    <!--<label for="inputEmail">Correo electrónico</label>-->
                                </div>
                            </div>
                        </div>
                        <div class="container-password mt-4">
                            <label class="form-label text-black">
                                <h5>Condiciones para la contraseña:</h5>
                                <ul class="list-unstyled">
                                    <li class="gray-text">Debe contener al menos <b style="font-weight: normal; color: darkblue;">8 caracteres</b>.</li>
                                    <li class="gray-text">Al menos una letra mayúscula <b style="font-weight: normal; color: darkblue;">(A-Z)</b>.</li>
                                    <li class="gray-text">Al menos un dígito <b style="font-weight: normal; color: darkblue;">(0-9)</b>.</li>
                                    <li class="gray-text">Al menos un carácter especial <b style="font-weight: normal; color: darkblue;">(por ejemplo: !, @, #, $, %, ^, &, *)</b>.</li>
                                </ul>
                            </label>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <div class="form-floating mb-3 mb-md-0">
                                    <input class="form-control" id="inputPassword name="inputPassword" type="text" placeholder="Contraseña" value="" required/>
                                    <!--<label for="inputPassword">Contraseña</label>-->
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input class="form-control" id="inputPasswordConfirm" name="inputPasswordConfirm" type="text" placeholder="Confirmar contraseña" value="" required/>
                                    <!--<label for="inputPasswordConfirm">Confirmar contraseña</label>-->
                                </div>
                            </div>
                        </div>
                        <div class="mb-3 mt-4">
                            <button class="btn custom-btn-blue" type="submit" name="submit">Ingresar admin</button>
                            <button class="btn custom-btn-red" type="submit" name="submit">Limpiar formulario</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Content Row -->
<div class="row mt-3">
    <div class="col-lg-12">
        <div class="card shadow mb-4">
            <!-- Card Header - Dropdown -->
            <div class="card-header py-3">
                <span><i class="fas fa-th-large" style="color: #000000;"></i> Administradores registrados previamente</span>
            </div>
            <!-- Card Body -->
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped *:ff-Inter" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th scope="col">Nombre de usuario</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Creación</th>
                                    <th scope="col">Actualización</th>
                                    <th scope="col">Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>DavidAr55</td>
                                    <td>davidarturoloera@hello-world.com.mx</td>
                                    <td>01/05/2024 13:29:15</td>
                                    <td>01/05/2024 13:29:15</td>
                                    <td class="text-center">
                                        <button class="btn custom-btn-blue" type="submit" name="edit">Editar</button>
                                        <button class="btn custom-btn-red" type="submit" name="delete">Borrar</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Hot_Taco_Loco</td>
                                    <td>hottaco@hello-world.com.mx</td>
                                    <td>01/05/2024 13:31:11</td>
                                    <td>01/05/2024 13:31:11</td>
                                    <td class="text-center">
                                        <button class="btn custom-btn-blue" type="submit" name="edit">Editar</button>
                                        <button class="btn custom-btn-red" type="submit" name="delete">Borrar</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>rodrigo_ramoss</td>
                                    <td>rodri@hello-world.com.mx</td>
                                    <td>01/05/2024 13:33:23</td>
                                    <td>02/05/2024 10:39:05</td>
                                    <td class="text-center">
                                        <button class="btn custom-btn-blue" type="submit" name="edit">Editar</button>
                                        <button class="btn custom-btn-red" type="submit" name="delete">Borrar</button>
                                    </td>
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