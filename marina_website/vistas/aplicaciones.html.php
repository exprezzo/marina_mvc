<div class="section">
<!-- box begin -->
	<div class="box">
		<div class="left-top-corner png"><div class="right-top-corner png"><div class="border-top png"></div></div></div>
		<div class="border-left png">
			<div class="border-right png">
				<div class="inside png">					
					<h2>Aplicaciones</h2>
					<br>
					<form>
						Crear Aplicacion<br>
						<label>Escriba el nombre:</label>
						<input type="text" />
						<input type="submit" value="Crear" text="text">
					</form>
					<style type='text/css'>
						a.aplicacion{
							font-size:20px;
						}
					</style>
					<br><br>
					<?php imprimeProyectos(); ?>
				</div>
			</div>
		</div>
		<div class="left-bot-corner png"><div class="right-bot-corner png"><div class="border-bot png"></div></div></div>
	</div>
	<!-- box end -->
</div>


<?php
 
function imprimeProyectos(){
	if ($gestor = opendir('../app')) {			 
		/* Esta es la forma correcta de iterar sobre el directorio. */
		while (false !== ($entrada = readdir($gestor))) {
			if ($entrada!='.' && $entrada!='..')
			echo "<a class='aplicacion' href='/app/$entrada'> $entrada</a><br>";
		}    
	 
		closedir($gestor);
	}
}

?>