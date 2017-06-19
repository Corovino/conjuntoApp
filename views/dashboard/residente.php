<?php 

  include '../partials/head.php';
  require_once '../partials/menu.php';
  require_once '../partials/aside.php';
  require_once '../../controller/UserController.php';
  
?>
<div class="container">
	 <div class="row">
	 <div class="col-md-10" style="padding-top: 70px;">
	     <h2>Crear Residente</h2>
	     <form id="residente" method='POST'>
	         <div class="form-group">
	         	 <label>Nombre</label>
	         	 <input type="text" name="nombre" required class="form-control">
	         </div>
	         <div class="form-group">
	         	 <label>Apto</label>
	         	 <input type="text" name="apto"  required class="form-control">
	         </div>
	         <div class="form-group">
	         	 <label>Vehiculo</label>
	         	 <select id="vehiculo" name="vehiculo">
	         	 	<option value="0">No</option>
	         	 	<option value="1" >Si</option>
	         	 </select>
	         </div>
	         <div class="form-group">
	         	<button onclick="Residente.residente(); return false;" class="btn btn-primary">Guardar</button>
	         </div>
	     	
	     </form>
	 	
	 </div>		
			 <div class="col-md-10" style="padding-top: 60px;">
				   <h1>Listado de. Usuarios</h1>

				   <table class="table">
				   	<thead>
				   		<tr>
				   			<td>Nombre -   </td>
				   			<td> Apto -  </td>
				   			<td> propietario vehiculo - </td>
				   			<td> Editar </td>
				   			
				   		</tr>
				   	</thead>
				   	<tbody>
				   	   <?php 
				   	   	  foreach ( Usuario::getAllResidentes()  as $key => $row) {
				   	   	  	echo "<tr id='id_".$row['id']."' style='cursor:pointer'>";
				   	   	  	echo "<td contenteditable='true'><p>".$row['nombre']."</p></td>";
				   	   	  	echo "<td contenteditable='true'><p>".$row['numero_apto']."</p></td>";
				   	   	  	echo "<td contenteditable='true'> <p>" .$res =($row['vehiculo'] == 0) ?  "no":  "si" . "</p></td>";
				   	   	  	echo "<td ><button class='edit' id_edit=".$row['id'].">Editar</button></td>";
				   	   	  	echo "</tr>";
				   	   	  
				   	   	  }
				   	   ?>
				   	   <tr></tr>
				   	</tbody>
				   </table>
			 	
			 </div>
	 </div>
</div>



<?php include '../partials/footer.php';?>
<script type="text/javascript" src="../assets/js/residente.js"></script>
