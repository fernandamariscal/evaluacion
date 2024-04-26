<!DOCTYPE html>
<html lang="es">
<head>
    <!--Importamos los link de los estilos de boostrap para los estilos visuales -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body align ="center">
    <!-- Formulario de registro de los usuarios -->
<h1 style="text-align: center;">Registro de usuarios</h1>
     <div class="container mt-4 text-center">
          <div class="row justify-content-center">
               <div class="col-6">
                    <form class="my-4" name="forma01" action="administradores_salva.php"    method="POST" enctype="multipart/form-data">
                         <div class="mb-3">
                            <!--Solicitamos el nombre del usuario en un string -->
                              <label class="form-label">Nombre</label>
                              <input id="campo1" type="text" class="form-control" name="nombre" placeholder="Escribe tu nombre(s)" required>
                         </div>
                         <!-- Apellidos solicitados por teclado en forma de string-->
                         <div class="mb-3">
                              <label class="form-label">Apellidos</label>
                              <input id="campo2" type="text" class="form-control" name="apellidos" placeholder="Escribe tu apellido(s)" requiered>
                         </div>
                         <div class="mb-3">
                            <!--Codigo del profesor, este es un código universi -->
                              <label class="form-label">Código</label>
                              <input class="form-control" type="text" name="Código" placeholder="Escribe código" requiered>
                              <div id="mensaje_correo"></div>
                         </div>
                            <!--Los roles de los usuarios son los siguientes:
                                [ 1 ] - Administrador (Todos los privilegios)
                                [ 2 ] - Profesor/Maestro (Privilegios de operaciones)
                                [ 3 ] - Alumno/Familiares 
                            
                                Se ha implementado un rol de alumno/familiar, esto a peticion
                                del cliente para que los alumnos y familiares sean capaz
                                de dar un seguimiento en todo momento -->
                         <div class="mb-3">
                              <label class="form-label">Rol</label>
                              <select class="form-select" aria-label="Disabled select example" name="rol">
                                   <option value="0" selected>Selecciona tu rol</option>
                                   <option value="1">Administrador</option>
                                   <option value="2">Profesor</option>
                                   <option value="3">Alumno/Familiares</option>
                              </select>
                         </div>
                        <!--Se solicita al usuario generar una contraseña, se ha dejado
                            a manera de string para poder combinar letras, numeros y caracteres
                            especiales  -->
                         <div class="mb-3">
                              <label class="form-label" for="pass">Contraseña</label>
                              <input type="password" name="pass" class="form-control" placeholder="Escribe tu contraseña">
                         </div>
                         
                         <div class="mb-3">
                              <label for="formFile" class="form-label">Imagen</label>
                              <input class="form-control" type="file" id="archivo" name="archivo" accept="image/png, image/jpeg, image/jpg">
                         </div>
                         <input onclick="redirigirIndex()" type="submit" value="Registrar" class="btn btn-success mt-4 my-4">
                    </form>
                    <div id="mensaje" class="alert alert-warning my-4" role="alert" style="display:none"></div>
               </div>
          </div>
     </div>
     
     <script>
        function redirigirIndex()
        {
            window.location.href ="login.php"
        }
     </script>
        

</body>
</html>