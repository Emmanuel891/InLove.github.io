<!DOCTYPE html>
<html>
<head>
  <title>REGISTO CIVIL</title>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

<!-- CSS -->
    
      
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    
<!-- TIPO DE LETRA -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">

<!-- SCRIPTS -->

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

</head>
<body bgcolor="#FB876F" class="m-0 vh-100 row justify-content-center align-items-center">


<!-- FORMULARIO PARA INSERTAR CASAMIENTO -->

      <div class="col-auto p-5 text-center">
          <img src="corazon.jpg"><br>
        <form action="insertar.php" method="POST">
            <font color="black">
              <br>
          <label for="">Persona 1:</label>
          <input type="text" name="person1" required>
      
          <label for="">Persona 2:</label>
          <input type="text" name="person2" required>

          <label for="">Testigo 1:</label>
          <input type="text" name="testigo1" required>

          <label for="">Testigo 2:</label>
          <input type="text" name="testigo2" required>
          
            </font>
            <p><input type="submit" value="Registrar Casamiento">
          <button><a href="mostrar.php">Generar tu Acta</a></button>
          
        </form>
        </div>
</body>

</html>