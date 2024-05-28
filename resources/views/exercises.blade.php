@extends('layouts.lateral-nav')

@section('title', 'CPanel Ejercicios')

@section('content')

<div class="container-fluid">
    
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Ejercicios</h1>
        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
    </div>

    <h6>Hello World - ejercicios</h6>

    <!-- Content Agregar ejercicio -->
    <div class="row mt-3">
        <div class="col-lg-12">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold">Agregar un ejercicio nuevo</h6>
                </div>

                <!-- Card Body -->
                <div class="card-body">
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <div class="form-floating mb-3 mb-md-0">
                                <label for="inputTitle">Título del ejercicio</label>
                                <input class="form-control" id="inputTitle" name="" type="text" placeholder="" value="" required />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating">
                                <label for="inputCategori">Categoría del ejercicio (nombre de la lección)</label>
                                <input class="form-control" id="inputCategori" name="" type="text" placeholder="" value="" required />
                            </div>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="textareaExplain">Descripción completa del ejercicio</label>
                                <textarea class="form-control" id="textareaExplain" rows="8"></textarea>
                            </div>
                        </div>
                    </div>

                    <!-- Tu HTML -->
                    <div class="row mb-3">
                        <div class="col-md-12">
                            <div class="body-ide-580">
                                <section class="body-ide-container" id="editor-preview-header"></section>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <div class="form-floating mb-3 mb-md-0">
                                <label for="ExerciseDifficulty">Dificultad del ejercicio</label>
                                <select class="form-control" id="ExerciseDifficulty">
                                    <option>Básico</option>
                                    <option>Intermedio</option>
                                    <option>Intermedio Avanzado</option>
                                    <option>Avanzado</option>
                                    <option>Experto</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating">
                                <label for="statusExercise">Estado del ejercicio</label>
                                <select class="form-control" id="statusExercise">
                                    <option>Activo</option>
                                    <option>Inactivo</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-4">
                        <div class="col-md-12">
                            <div class="form-floating">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="validatedCustomFile" required>
                                    <label class="custom-file-label" for="validatedCustomFile">Elija archivo...</label>
                                    <div class="invalid-feedback">Ejemplo de feedback inválido de archivo personalizado</div>
                                </div>
                            </div>
                        </div>
                    </div>    

                    <!-- Botones alineados en un div con clase d-flex -->
                    <div class=" mt-4">
                        <a href="#" class="btn btn-success btn-sm shadow-sm">Ingresar este contenido</a>
                        <a href="#" class="btn btn-primary btn-sm shadow-sm">Previsualizar contenido</a>
                        <a href="#" class="btn btn-danger btn-sm shadow-sm">Limpiar Formulario</a>
                    </div>
                </div>
            </div>           
        </div>
    </div>


    <!-- Content Ejercicios registrado -->
    <div class="row mt-3">
        <div class="col-lg-12">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold">Ejercicios registrado previamente</h6>
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
                                    <th>Dificultad</th>
                                    <th>Estado</th>
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
                                    <th>Dificultad</th>
                                    <th>Estado</th>
                                    <th>Creación</th>
                                    <th>Actualización</th>
                                    <th>Acciones</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                <tr>
                                    <td>Introduccion a C++</td>
                                    <td>Fundamentos de C++</td>
                                    <td class="text-center"><a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">Ver contenido completo</a></td>
                                    <td><span class="difficult-basic">Basico</span></td>
                                    <td><span class="inactive-status">Inactivo</span></td>
                                    <td>2024-05-23 08:30:00</td>
                                    <td>2024-05-23 08:30:00</td>
                                    <td class="text-center"><a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">Editar</a>
                                    <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-danger shadow-sm"> Borrar</a>
                                    </td>
                                    
                                </tr>
                                <tr>
                                    <td>Variables tipos de datos</td>
                                    <td>Fundamentos de C++</td>
                                    <td class="text-center"><a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">Ver contenido completo</a></td>
                                    <td><span class="difficult-intermediate-advanced">Inter Avanzado</span></td>
                                    <td><span class="active-status">Activo</span></td>
                                    <td>2024-05-23 08:30:00</td>
                                    <td>2024-05-23 08:30:00</td>
                                    <td class="text-center"><a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">Editar</a>
                                    <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-danger shadow-sm"></i> Borrar</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Entrada y salida basica (cin y cout)</td>
                                    <td>Fundamentos de C++</td>
                                    <td class="text-center"><a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">Ver contenido completo</a></td>
                                    <td><span class="difficult-intermediante">Intermedio</span></td>
                                    <td><span class="inactive-status">Inactivo</span></td>
                                    <td>2024-05-23 08:30:00</td>
                                    <td>2024-05-23 08:30:00</td>
                                    <td class="text-center"><a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">Editar</a>
                                    <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-danger shadow-sm">Borrar</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Area de un cuadrado</td>
                                    <td>Fundamentos de C++</td>
                                    <td class="text-center"><a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">Ver contenido completo</a></td>
                                    <td><span class="difficult-advanced">Avanzado</span></td>
                                    <td><span class="active-status">Activo</span></td>
                                    <td>2024-05-23 08:30:00</td>
                                    <td>2024-05-23 08:30:00</td>
                                    <td class="text-center"><a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">Editar</a>
                                    <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-danger shadow-sm">Borrar</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Estrucutas de control if y else</td>
                                    <td>Fundamentos de C++</td>
                                    <td class="text-center"><a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">Ver contenido completo</a></td>
                                    <td><span class="difficult-basic">Basico</span></td>
                                    <td><span class="active-status">Activo</span></td>
                                    <td>2024-05-23 08:30:00</td>
                                    <td>2024-05-23 08:30:00</td>
                                    <td class="text-center"><a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">Editar</a>
                                    <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-danger shadow-sm">Borrar</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Bucles while y for</td>
                                    <td>Fundamentos de C++</td>
                                    <td class="text-center"><a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">Ver contenido completo</a></td>
                                    <td><span class="difficult-intermediante">Intermedio</span></td>
                                    <td><span class="active-status">Activo</span></td>
                                    <td>2024-05-23 08:30:00</td>
                                    <td>2024-05-23 08:30:00</td>
                                    <td class="text-center"><a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">Editar</a>
                                    <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-danger shadow-sm">Borrar</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Introduccion a C++</td>
                                    <td>Fundamentos de C++</td>
                                    <td class="text-center"><a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">Ver contenido completo</a></td>
                                    <td><span class="difficult-expert">Experto</span></td>
                                    <td><span class="active-status">Activo</span></td>
                                    <td>2024-05-23 08:30:00</td>
                                    <td>2024-05-23 08:30:00</td>
                                    <td class="text-center"><a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">Editar</a>
                                    <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-danger shadow-sm">Borrar</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Introduccion a C++</td>
                                    <td>Fundamentos de C++</td>
                                    <td class="text-center"><a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">Ver contenido completo</a></td>
                                    <td><span class="difficult-intermediate-advanced">Inter Avanzado</td>
                                    <td><span class="inactive-status">Inactivo</span></td>
                                    <td>2024-05-23 08:30:00</td>
                                    <td>2024-05-23 08:30:00</td>
                                    <td class="text-center"><a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">Editar</a>
                                    <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-danger shadow-sm">Borrar</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Introduccion a C++</td>
                                    <td>Fundamentos de C++</td>
                                    <td class="text-center"><a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">Ver contenido completo</a></td>
                                    <td><span class="difficult-advanced">Avanzado</span></td>
                                    <td><span class="active-status">Activo</span></td>
                                    <td>2024-05-23 08:30:00</td>
                                    <td>2024-05-23 08:30:00</td>
                                    <td class="text-center"><a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">Editar</a>
                                    <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-danger shadow-sm">Borrar</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Introduccion a C++</td>
                                    <td>Fundamentos de C++</td>
                                    <td class="text-center"><a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">Ver contenido completo</a></td>
                                    <td><span class="difficult-intermediante">Intermedio</span></td>
                                    <td><span class="active-status">Activo</span></td>
                                    <td>2024-05-23 08:30:00</td>
                                    <td>2024-05-23 08:30:00</td>
                                    <td class="text-center"><a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">Editar</a>
                                    <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-danger shadow-sm">Borrar</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Introduccion a C++</td>
                                    <td>Fundamentos de C++</td>
                                    <td class="text-center"><a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">Ver contenido completo</a></td>
                                    <td><span class="difficult-intermediate-advanced">Inter Avanzado</span></td>
                                    <td><span class="active-status">Activo</span></td>
                                    <td>2024-05-23 08:30:00</td>
                                    <td>2024-05-23 08:30:00</td>
                                    <td class="text-center"><a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">Editar</a>
                                    <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-danger shadow-sm">Borrar</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Introduccion a C++</td>
                                    <td>Fundamentos de C++</td>
                                    <td class="text-center"><a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">Ver contenido completo</a></td>
                                    <td><span class="difficult-expert">Experto</span></td>
                                    <td><span class="active-status">Activo</span></td>
                                    <td>2024-05-23 08:30:00</td>
                                    <td>2024-05-23 08:30:00</td>
                                    <td class="text-center"><a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">Editar</a>
                                    <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-danger shadow-sm">Borrar</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Introduccion a C++</td>
                                    <td>Fundamentos de C++</td>
                                    <td class="text-center"><a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">Ver contenido completo</a></td>
                                    <td><span class="difficult-advanced">Avanzado</span></td>
                                    <td><span class="active-status">Activo</span></td>
                                    <td>2024-05-23 08:30:00</td>
                                    <td>2024-05-23 08:30:00</td>
                                    <td class="text-center"><a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">Editar</a>
                                    <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-danger shadow-sm">Borrar</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Introduccion a C++</td>
                                    <td>Fundamentos de C++</td>
                                    <td class="text-center"><a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">Ver contenido completo</a></td>
                                    <td><span class="difficult-basic">Basico</span></td>
                                    <td><span class="active-status">Activo</span></td>
                                    <td>2024-05-23 08:30:00</td>
                                    <td>2024-05-23 08:30:00</td>
                                    <td class="text-center"><a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">Editar</a>
                                    <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-danger shadow-sm">Borrar</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Introduccion a C++</td>
                                    <td>Fundamentos de C++</td>
                                    <td class="text-center"><a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">Ver contenido completo</a></td>
                                    <td><span class="difficult-intermediante">Intermedio</span></td>
                                    <td><span class="inactive-status">Inactivo</span></td>
                                    <td>2024-05-23 08:30:00</td>
                                    <td>2024-05-23 08:30:00</td>
                                    <td class="text-center"><a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">Editar</a>
                                    <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-danger shadow-sm">Borrar</a>
                                </tr>
                                <tr>
                                    <td>Introduccion a C++</td>
                                    <td>Fundamentos de C++</td>
                                    <td class="text-center"><a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">Ver contenido completo</a></td>
                                    <td><span class="difficult-advanced">Avanzado</span></td>
                                    <td><span class="active-status">Activo</span></td>
                                    <td>2024-05-23 08:30:00</td>
                                    <td>2024-05-23 08:30:00</td>
                                    <td class="text-center"><a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">Editar</a>
                                    <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-danger shadow-sm">Borrar</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Introduccion a C++</td>
                                    <td>Fundamentos de C++</td>
                                    <td class="text-center"><a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">Ver contenido completo</a></td>
                                    <td><span class="difficult-expert">Experto</span></td>
                                    <td><span class="active-status">Activo</span></td>
                                    <td>2024-05-23 08:30:00</td>
                                    <td>2024-05-23 08:30:00</td>
                                    <td class="text-center"><a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">Editar</a>
                                    <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-danger shadow-sm">Borrar</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Introduccion a C++</td>
                                    <td>Fundamentos de C++</td>
                                    <td class="text-center"><a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">Ver contenido completo</a></td>
                                    <td><span class="difficult-advanced">Avanzado</span></td>
                                    <td><span class="active-status">Activo</span></td>
                                    <td>2024-05-23 08:30:00</td>
                                    <td>2024-05-23 08:30:00</td>
                                    <td class="text-center"><a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">Editar</a>
                                    <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-danger shadow-sm">Borrar</a>
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

<script>
document.addEventListener("DOMContentLoaded", function() {
    console.log("DOM completamente cargado"); // Verifica si este mensaje aparece en la consola del navegador

    var editor_header = ace.edit("editor-preview-header");
    if (!editor_header) {
        console.error("No se pudo encontrar el elemento con el id 'editor-preview-header'");
        return;
    }

    editor_header.setTheme("ace/theme/monokai");
    editor_header.session.setMode("ace/mode/c_cpp");

    // Agrega la extensión de autocompletado de C++
    ace.require("ace/ext/language_tools");
    editor_header.setOptions({
    enableBasicAutocompletion: true,
    enableSnippets: true,
    enableLiveAutocompletion: true
});

    // Establece el contenido inicial
    editor_header.setValue(`#include <iostream>

int main() {
        

    /* Escribe aquí la solucion al problema */


    return 0;
}`);

    // Ajusta el tamaño de la fuente
    editor_header.setFontSize("16px");
});

</script>


@endsection