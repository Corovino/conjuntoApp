<?php 

  include '../partials/head.php';
  require_once '../partials/menu.php';
  require_once '../partials/aside.php';
  
?>
<div class="container">
	 <div class="row">
	 <div class="col-md-10" style="padding-top: 70px;">
	     <h2>Crear Residente</h2>
	     <form id="residente">
	         <div>
	         	 <label>Nombre</label>
	         	 <input type="text" name="nombre">
	         </div>
	         <div>
	         	 <label>Apto</label>
	         	 <input type="text" name="apto">
	         </div>
	         <div>
	         	 <label>Vehiculo</label>
	         	 <select id="vehiculo" name="vehiculo">
	         	 	<option value="0">No</option>
	         	 	<option value="1" >Si</option>
	         	 </select>
	         </div>
	         <div>
	         	<button onclick="Residente.residente();">Guardar</button>
	         </div>
	     	
	     </form>
	 	
	 </div>		
			 <!--div class="col-md-10" style="padding-top: 60px;">
				   <h1>Listado de. Usuarios</h1>

				   <table>
				   	<thead>
				   		<tr>
				   			<td>Nombre -   </td>
				   			<td> Usuario -  </td>
				   			<td> Email - </td>
				   			<td> Fecha Registro</td>
				   			
				   		</tr>
				   	</thead>
				   	<tbody>
				   	   <?php 
				   	   	 /* foreach ($fila  as $key => $row) {
				   	   	  	echo "<tr id='id_".$row['id']."' style='cursor:pointer'>";
				   	   	  	echo "<td contenteditable='true'><p>".$row['nombre']."</p></td>";
				   	   	  	echo "<td contenteditable='true'><p>".$row['usuario']."</p></td>";
				   	   	  	echo "<td contenteditable='true'> <p>".$row['email']."</p></td>";
				   	   	  	echo "<td contenteditable='true'><p>".$row['fecha_registro']."</p></td>";
				   	   	  	echo "<td ><button class='edit' id_edit=".$row['id'].">Editar</button></td>";
				   	   	  	echo "</tr>";
				   	   	  
				   	   	  }*/
				   	   ?>
				   	   <tr></tr>
				   	</tbody>
				   </table>
			 	
			 </div-->
	 </div>
</div>



<?php include '../partials/footer.php';?>
<script type="text/javascript" src="../assets/js/residente.js"></script>
