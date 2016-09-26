<?php  ?>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Test</title>

  <link rel="stylesheet" type="text/css" href="../../bt/css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="../css/local.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="../../bt/js/bootstrap.js"></script>
  <script src="../js/local.js"></script>


  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">

    <style type="text/css">
      .user{
        padding:5px;
        margin-bottom: 5px;
      }
    </style>


      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
      <script src="../js/BootSideMenu.js"></script>
    <link rel="stylesheet" href="../css/BootSideMenu.css">

      <script type="text/javascript">
      $(document).ready(function(){
          $('#test').BootSideMenu({side:"left", autoClose:false});
          //$('#test2').BootSideMenu({side:"right"});
      });
      </script>

</head>
<body>

  <!--Test -->
  <div id="test">
    <div class="user">
      <img src="http://queanimalada.net/wp-content/uploads/2012/08/perro-gracioso-disfrazado-vestido-sir.jpg" alt="Esempio" class="img-thumbnail">
      <a href="#" target="_blank" class="navbar-link">Carlos Gallegos</a>
    </div>
    <div class="list-group">
      <a href="#" class="list-group-item active">Inicio</a>
      <a href="#" class="list-group-item">Buscador</a>
      <a href="#" class="list-group-item">Configuracion</a>
      <a href="#subTest" class="list-group-item">Categorias</a>

    </div>

    <div class="list-group submenu" id="subTest">
      <a href="#" class="list-group-item">cat1</a>
      <a href="#subTestSub" class="list-group-item">cat2</a>
      <a href="#" class="list-group-item">cat3</a>
    </div>

    <div class="list-group submenu" id="subTestSub">
      <a href="#" class="list-group-item">cat_3</a>
      <a href="#" class="list-group-item">cat_4</a>
    </div>

  </div>


  <!--Normale contenuto di pagina-->
  <div class="container">


  </div>
  <!--Normale contenuto di pagina-->


</body>
</html>
