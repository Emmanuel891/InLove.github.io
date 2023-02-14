<?php 
include("cn.php");
$id = $_GET["id"];
$usuarios = "SELECT * FROM registro WHERE id ='$id'";
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title></title>
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

<!-- CSS -->

    <link rel="stylesheet" type="text/css" href="estilo_mostrar.css">
    
    <link rel="icon" type="image/x-icon" href="corazon.jpg"/>

    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <style type="text/css">

        .imagen:hover {filter: blur(5px);}

    </style>

</head>
<body>

  <div class="col-auto p-5 text-center">
    
      <table class="my-custom-scrollbar table-wrapper-scroll-y">
  <br>
  <img src="corazon.jpg"><br>
    <?php $resultado = mysqli_query($conexion, $usuarios);
    while ($row=mysqli_fetch_assoc($resultado)) {?>
      <input type="hidden" name="id" value="<?php echo $row['id'] ?>">
      
      <!-- NOMBRE DE LA PERSONA 1 -->
      <tr>
        <td align="center">
          <a>Persona 1:</a>
          <?php echo $row['person1'] ?></td>
      </tr>    

      <!-- NOMBRE DE LA PERSONA 2 -->
     <tr>
        <td align="center">
          <a>Persona 2:</a>
          <?php echo $row['person2'] ?></td>
      </tr>

      <tr>
        <td align="center">
          <a>Testigo 1:</a>
          <?php echo $row['testigo1'] ?></td>
      </tr>

      <tr>
        <td align="center">
          <a>Testigo 2:</a>
          <?php echo $row['testigo2'] ?></td>
      </tr> 

        <td align="center">
            <br>
            <!-- BOTON PARA GENERAR RECIBO -->
            <a target="_blank" href="pdf.php?id=<?php echo $row["id"];?>"><img src="contrato.png" width="100px"></a>
            <a href="index.php"><img src="home.png" width="100px"></a>

          </td>
        </tr>  

          
          
      <?php } mysqli_free_result($resultado); ?>


   </table>
  </div>
  <br>
  <br>

</body>
</html>