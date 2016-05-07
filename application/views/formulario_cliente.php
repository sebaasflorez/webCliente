<div class="container">
  <div class="page-header">
    <h3><?php echo $titulo; ?></h3>
  </div>

  <form role="form" class="form-horizontal" action="<?php echo site_url("$accion");?> " enctype="multipart/form-data" name="" method="post">
    <div class="form-group">
      <label for="id_cliente">Codigo:</label>
      <input type="text" class="form-control"  id="id_cliente" name="id_cliente" value="<?php echo $registros['id_cliente']; ?>" readonly>
    </div>
    <div class="form-group">
      <label for="tipo_documento">Tipo Documento:</label>
      <?php echo $registros['tipo_documento'] ?>
      <select class="form-control" id="tipo_documento" name="tipo_documento">
        <option <?php if($registros['tipo_documento']=='CC') echo "selected"; ?>value="CC">CC</option>
        <option <?php if($registros['tipo_documento']=='NIT') echo "selected"; ?> value="NIT">NIT</option>
        <option <?php if($registros['tipo_documento']=='CE') echo "selected"; ?> value="CE">CE</option>
      </select> 
    </div>
    <div class="form-group">
      <label for="numero_documento">Numero Documento:</label>
      <input type="text" class="form-control" id="numero_documento" name="numero_documento"  value="<?php echo $registros['numero_documento']; ?>">
    </div>

    <div class="form-group">
      <label for="nombres">Nombres:</label>
      <input type="text" class="form-control" id="nombres" name="nombres"  value="<?php echo $registros['nombres']; ?>">
    </div>

    <div class="form-group">
      <label for="apellidos">Apellidos:</label>
      <input type="text" class="form-control" id="apellidos" name="apellidos"  value="<?php echo $registros['apellidos']; ?>">
    </div>

    <div class="form-group">
      <label for="telefono">Telefono:</label>
      <input type="text" class="form-control" id="telefono" name="telefono"  value="<?php echo $registros['telefono']; ?>">
    </div>
    <div class="form-group">
      <label for="direccion">Direccion:</label>
      <input type="text" class="form-control" id="direccion" name="direccion"  value="<?php echo $registros['direccion']; ?>">
    </div>
    <button type="submit" class="btn btn-primary">Actualizar</button>
  </form>
</div>
