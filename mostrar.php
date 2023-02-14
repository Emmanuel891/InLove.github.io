<br>
<p align="center"><a href="index.php"><img src="home.png" width="100px"></a></p>
<?php 
$inc = include("cn.php");
if ($inc) {
	$consulta = "SELECT id,person1,person2,date,testigo1,testigo2 from registro";
	$resultado = mysqli_query($conexion,$consulta);
	if ($resultado) {
		while ($row = $resultado->fetch_array()) {
	    $id = $row['id'];
	    $person1 = $row['person1'];
	    $person2 = $row['person2'];
	    $testigo1 = $row['testigo1'];
	    $testigo2 = $row['testigo2'];

	    ?>

	    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

	    <table class="table table-bordered">
	    	<thead align="center">
	    		<th scope="col"></th>
	    		<th scope="col">Persona 1</th>
	    		<th scope="col">Persona 2</th>
	    		<th scope="col">Testigo 1</th>
	    		<th scope="col">Testigo 2</th>
	    		<th scope="col">Fecha</th>
	    	</thead>

	    	<tbody align="center">
	    	<tr>
				<!-- NOMBRE DE LA EMPRESA -->
				<th align="center">
				<a href="mostrar_todo.php?id=<?php echo $row["id"];?>">
					Seleccionar
				</a>
				</th>

				<!-- PERSONA 1 -->
    			<td><?php echo $row['person1'] ?></td>

    			<!-- PERSONA 2-->
    			<td><?php echo $row['person2'] ?></td>
    			
    			<!-- TESTIGO 1-->
    			<td><?php echo $row['testigo1'] ?></td>
    			
    			<!-- TESTIGO 2-->
    			<td><?php echo $row['testigo2'] ?></td>

    			<!-- FECHA-->
    			<td><?php echo $row['date'] ?></td>
    		</tr>
	    	</tbody>
	    </table>
	    <?php
	    }
	}
}
?>