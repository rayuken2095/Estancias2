<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="../../bt/css/bootstrap.css">
      <link rel="stylesheet" type="text/css" href="../css/local.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="../../bt/js/bootstrap.js"></script>
  </head>
  <body>



    <div class="row">
      <div class="col-md-12 center-col">
        <h1>Ingresa</h1>
      </div>
      <div class="col-md-4 "></div>

      <div class="col-md-4">
        <div class="panel panel-default">
        <div class="panel-heading">Empresas</div>
        <div class="panel-body  center-col">
            <form action="log_emp.php" method="POST">
              <input type="username" name="email" >
              <input type="password" name="pass">

              <button type="submit" class="btn btn-info" name="button">Iniciar</button>
            </form>
        </div>
      </div>

      <div class="panel panel-default">
      <div class="panel-heading">Usuarios</div>
      <div class="panel-body  center-col">
          <form class="" action="log_usr.php" method="get">
            <input type="username" name="email" >
            <input type="password" name="pass">
            <button type="submit" class="btn btn-success" name="button">Iniciar</button>
          </form>
      </div>
    </div>
      </div>

      <div class="col-md-4"></div>


    </div>

  </body>
</html>
