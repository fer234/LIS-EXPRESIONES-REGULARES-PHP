<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <title>Validaciones | LIS</title>
</head>
<body>
    <div class="container">
    <form name="frmPrueba" method="POST" action="php/validacion.php">
    <legend>Ingresa todos tus datos</legend>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Carnet estudiantil</label>
          <input type="text" class="form-control" name="txtCarnet" id="txt5" aria-describedby="name" required>
          <div id="ayuda1" class="form-text">Ingresa tu carnet UDB, las iniciales en mayuscula.</div>
        </div>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Nombres</label>
          <input type="text" class="form-control" name="txtNombre" id="txt1" aria-describedby="name" required>
          <div id="ayuda2" class="form-text">Ingresa tu nombre.</div>
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Apellidos</label>
            <input type="text" class="form-control" name="txtApellidos" id="txt2" aria-describedby="name" required>
            <div id="ayuda3" class="form-text">Ingresa tus apellidos.</div>
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Edad</label>
            <input type="number" class="form-control" name="txtEdad" id="txt3" aria-describedby="name" size="3" maxlength="2" required>
            <div id="ayuda4" class="form-text">Ingresa tu edad exacta.</div>
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Correo Electronico</label>
            <input type="text" class="form-control" name="txtCorreo" id="txt4" aria-describedby="emailHelp" required>
            <div id="ayuda5" class="form-text">Ingresa su dirección de correo electrónico.</div>
        </div>
        <br>
        <button type="submit" name="btnEnviar" class="btn btn-primary">Validar</button>
      </form>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
</html>