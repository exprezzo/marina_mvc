<html>
	<head></head>
	<body>
		<div style='display:block;float:right; ;right:33px;position:absolute;top:10px;'>
		<form action="/<?php echo APP_PATH; ?>defaultController/cargarEscena" method="POST">
		<select name="escena_id">
			<?php 
				foreach($this->escenas as $escena){
					$selected=( $escena['id'] === $this->escena_id ) ? 'selected=selected' : '';
					echo '<option '.$selected.' value="'.$escena['id'].'">'.$escena['nombre'].'</option>';
				}
			?>
			
		</select>
		<input type="submit" value="Seleccionar" />
		</form>
		</div>
		<!-- div style='display:block;float:right;; width:112px;'>
		<a href="/">Ir al Home</a>
		</div -->
		<div style='clear:both;'></div>
		<?php $this->renderSeccion('contenido'); ?>
		
	</body>
</html>