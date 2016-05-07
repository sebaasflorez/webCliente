<div class="container">
	<div class="page-header">
		<h3>Clientes</h3>
	</div>
	<div id="herramientas" class="container">
		<button id="nuevo" type="button" class="btn btn-primary">
			<span class=" glyphicon glyphicon-plus"></span> Nuevo 
		</button>
		<button id="editar" type="button" class="btn btn-primary">
			<span class=" glyphicon glyphicon-pencil"></span> Editar 
		</button>
	</div><br>

	<table name='' id="example" class="display cell-border compact" cellspacing="0" width="100%">
		<thead>
			<tr>
				<th>Codigo</th>
				<th>Tipo Documento</th>
				<th>Numero Documento</th>
				<th>Nombres</th>
				<th>Apellidos</th>
				<th>Telefono</th>
				<th>Direccion</th>
			</tr>
		</thead>
		<tbody>
			<?php 
			
			foreach ($registros as $key => $value) {
				?>
				<tr>
					<td><?php echo $value['id_cliente']?></td>
					<td><?php echo $value['tipo_documento']?></td>
					<td><?php echo $value['numero_documento']?></td>
					<td><?php echo $value['nombres']?></td>
					<td><?php echo $value['apellidos']?></td>
					<td><?php echo $value['telefono']?></td>
					<td><?php echo $value['direccion']?></td>
				</tr>
				<?php
			} ?>
		</tbody>
	</table>
	<script type="text/javascript">
	var table = $('#example').DataTable(SetDatatable());
	$('#example tbody').on( 'click', 'tr', function () {
		$(this).toggleClass('selected');
	} );

	$('#editar').click( function () {
		var rows =  table.rows('.selected').data().length;

		if (rows == 0) {
			alert('Seleccione un (1) registro.');
		}else if ( rows > 1) {
			alert("Seleccione solo un (1) registro.");
		}else{
			window.location = "cliente/editar/"+table.row('.selected').data()[0];
            return;
		}
	} );

	$('#nuevo').click( function () {
			window.location = "cliente/crear";
            return;
	} );

	</script>
</div>


