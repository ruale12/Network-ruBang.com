<!DOCTYPE html>

<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="content-type" content="text/html; charset=windows-1252">
    <title>Registro</title>
    <link rel="stylesheet" href="..\css\style.css">
</head>

<body>
    <from action="gestion.php" method="post" autocomplete="off">
        <div class="FromInput">
            <h1><code>Inicia sesión</code></h1>
        </div>
        <!-- Nombre -->
        <div class="FromInput">
            <label class="FromImput-label" aria-hidden="true">Nombre</label>
            <input type="text" data-type="text" name="name" id="name" value="" aria-required="true" placeholder="Nombre" />
        </div>
        <!-- Apellido -->
        <div class="FromInput">
            <label class="FromImput-label" aria-hidden="true">Apellido</label>
            <input type="text" data-type="text" name="lastname" id="lastname" value="" aria-required="true" placeholder="Apellido" />
        </div>
        <!-- Cedula-->
        <div class="FromInput">
            <label class="FromImput-label" aria-hidden="true">Cedula</label>
            <input type="number" data-type="number" name="idention" id="idention" value="" aria-required="true" placeholder="Cedula" />
        </div>
        <!-- Direccion -->
        <div class="FromInput">
            <label class="FromImput-label" aria-hidden="true">Direccion</label>
            <input type="text" data-type="text" name="address" id="address" value="" aria-required="true" placeholder="Direccion" />
        </div>
        <!-- Tipo de genero -->
        <div>
            <div class="FromInput">
                <label>Sexo</label>
                <span data-type="radio" data-name="gender_wrapper" id="sex">
                        <span>
                            <input type="radio" name="sex" value="1">
                            <label>Mujer</label>
                        </span>
                <span>
                            <input type="radio" name="sex" value="2">
                            <label>Hombre</label>
                        </span>
                <span>
                            <input type="radio" name="sex" value="-1">
                            <label>Personalizado</label>
                        </span>
                </span>
            </div>
        </div>
        <!-- Telefono -->
        <div class="FromInput">
            <label class="FromImput-label" aria-hidden="true">Telefono</label>
            <input type="number" data-type="number" name="telefon" id="telefon" value="" aria-required="true" placeholder="Telefono" />
        </div>
        <!-- email -->
        <div class="FromInput">
            <label class="FromImput-label" aria-hidden="true">Correo</label>
            <input type="email" data-type="email" name="email" id="email" value="" aria-required="true" placeholder="Correo" />
        </div>
        <!-- userNombre -->
        <div class="FromInput">
            <label class="FromImput-label" aria-hidden="true">Usuario</label>
            <input type="text" data-type="text" name="userName" id="userName" value="" aria-required="true" placeholder="Usuario" />
        </div>
        <!-- password -->
        <div class="FromInput">
            <label class="FromImput-label" aria-hidden="true">Password</label>
            <input type="password" data-type="password" name="password" id="password" value="" aria-required="true" placeholder="Password" />
        </div>
        <!-- Fecha de nacimiento -->
        <div class="FromInput">
            <input type="sutmid" value="Enviar" name="button" id="button" />
        </div>
        <br/>
        <textarea name="comentario" rows="10" cols="40">Escribe tu commentario...</textarea>
    </from>
    <script src="..\js\comportamiento.js"></script>
</body>

</html>
