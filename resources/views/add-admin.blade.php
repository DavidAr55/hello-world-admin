@extends('layouts.lateral-nav')

@section('title', 'CPanel Agregar un Administrador')

@section('content')

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Agregar un Administrador</h1>
        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
    </div>

    <h6>Hello World - Agregar un Administrador</h6>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <div class="card shadow-lg border-0 rounded-lg mt-5">
                    <div class="card-header">
                        <h3 class="text-center font-weight-light my-4">Crear acceso</h3>
                    </div>
                    <div class="card-body ff-Inter">
                        <form action="" method="POST" enctype="multipart/form-data">
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <div class="form-floating mb-3 mb-md-0">
                                        <input class="form-control" id="inputUserName" name="inputUserName" type="text" placeholder="" value="" required />
                                        <label for="inputUserName">Nombre de usuario</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input class="form-control" id="inputEmail" name="inputEmail" type="email" placeholder="" value="" required />
                                        <label for="inputEmail">Correo electrónico</label>
                                    </div>
                                </div>
                            </div>
                            <div class="container mt-4">
                                <label class="form-label">
                                    Condiciones para la contraseña:
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
                                        <input class="form-control" id="inputPassword name="inputPassword" type="text" placeholder="" value="" required/>
                                        <label for="inputPassword">Contraseña</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input class="form-control" id="inputPasswordConfirm" name="inputPasswordConfirm" type="text" placeholder="" value="" required/>
                                        <label for="inputPasswordConfirm">Confirmar contraseña</label>
                                    </div>
                                </div>
                            </div>

                            <div class="mb-3 mt-4">
                                <button class="btn btn-primary" type="submit" name="submit">Ingresar admin</button>
                                <button class="btn btn-danger" type="submit" name="submit">Limpiar formulario</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



@endsection