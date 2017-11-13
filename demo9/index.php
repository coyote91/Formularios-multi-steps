<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet"  type="text/css" media="screen" href="estilos.css" />
  </head>
  <body>

    <!--
    Fuente

       https://www.solvetic.com/tutoriales/article/2501-forma-de-crear-formulario-de-varias-paginas-utilizando-script-php/

  -->

    <div class="container">
    <div class="main">
    <h2>Formulario 1</h2>
      <form action="form2.php" method="post">
    <label>Nombre :</label>
    <input name="nombre" type="text" placeholder="nombre y apellido" required>
    <label>Email :</label>
    <input name="email" type="email" placeholder="mimail@dominio.com" required>
    <label>Domiclio :</label>
    <input name="domicilio" type="text" placeholder="calle y numero" required>
    <label>Telefono :</label>
    <input name="telefono" type="text" placeholder="999 999 999" />
    <label>Telefono movil :</label>
    <input name="movil" type="text" placeholder="+34999999999" >
    <input type="reset" value="Borrar" />
    <input type="submit" value="Siguiente" />
    </form>
    </div>
    </div>


  </body>
</html>
