<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
	<aside>

		<div class="form-group">
			<label for="">BÚSQUEDA AVANZADA</label>
		</div>

		<?= form_open("/principal/recibirdatos"); ?>

		<?php
			$inmueble = array(
				'class'	=>	'form-control',
				'id'	=>	'cmboInmueble',
				'name'	=>	'cmboInmueble'
			);

			$optInmueble = array(
				'optD'	=>	'[Opcional]',
				'opt1'	=>	'Inmueble 1',
				'opt2'	=>	'Inmueble 2',
				'opt3'	=>	'Inmueble 3'
			);

			$operacion = array(
				'class'	=>	'form-control',
				'id'	=>	'cmboOperacion',
				'name'	=>	'cmboOperacion'
			);

			$optOperacion = array(
				'optD'	=>	'[Opcional]',
				'opt1'	=>	'Operacion 1',
				'opt2'	=>	'Operacion 2',
				'opt3'	=>	'Operacion 3'
			);

			$estado = array(
				'class'	=>	'form-control',
				'id'	=>	'cmboEstado',
				'name'	=>	'cmboEstado'
			);

			$optEstado = array(
				'optD'	=>	'[Opcional]',
				'opt1'	=>	'Estado 1',
				'opt2'	=>	'Estado 2',
				'opt3'	=>	'Estado 3'
			);

			$ciudad = array(
				'class'	=>	'form-control',
				'id'	=>	'cmboCiudad',
				'name'	=>	'cmboCiudad'
			);

			$optCiudad = array(
				'optD'	=>	'[Opcional]',
				'opt1'	=>	'Ciudad 1',
				'opt2'	=>	'Ciudad 2',
				'opt3'	=>	'Ciudad 3'
			);

			$colonia = array(
				'class'	=>	'form-control',
				'id'	=>	'cmboColonia',
				'name'	=>	'cmboColonia'
			);

			$optColonia = array(
				'optD'	=>	'[Opcional]',
				'opt1'	=>	'Colonia 1',
				'opt2'	=>	'Colonia 2',
				'opt3'	=>	'Colonia 3'
			);

			$zona = array(
				'class'	=>	'form-control',
				'id'	=>	'cmboZona',
				'name'	=>	'cmboZona'
			);

			$optZona = array(
				'optD'	=>	'[Opcional]',
				'opt1'	=>	'Zona 1',
				'opt2'	=>	'Zona 2',
				'opt3'	=>	'Zona 3'
			);

			$precio = array(
				'class'	=>	'form-control',
				'id'	=>	'cmboPrecio',
				'name'	=>	'cmboPrecio'
			);

			$optPrecio = array(
				'optD'	=>	'[Opcional]',
				'opt1'	=>	'Precio 1',
				'opt2'	=>	'Precio 2',
				'opt3'	=>	'Precio 3'
			);

			$keyword = array(
				'class'	=>	'form-control',
				'id'	=>	'inpKeyword',
				'name'	=>	'inpKeyword'
			);

			$buscar = array(
				'class'	=>	'form-control btn btn-danger',
				'id'	=>	'btnBuscar',
				'name'	=>	'btnBuscar'
			);

		?>

		<div class="form-group">
			<?= form_label('INMUEBLE', 'cmboInmueble'); ?>
			<?= form_dropdown($inmueble, $optInmueble); ?>
		</div>

		<div class="form-group">
			<?= form_label('OPERACIÓN', 'cmboOperacion'); ?>
			<?= form_dropdown($operacion, $optOperacion); ?>
		</div>

		<div class="form-group">
			<?= form_label('ESTADO', 'cmboEstado'); ?>
			<?= form_dropdown($estado, $optEstado); ?>
		</div>

		<div class="form-group">
			<?= form_label('CIUDAD', 'cmboCiudad'); ?>
			<?= form_dropdown($ciudad, $optCiudad); ?>
		</div>

		<div class="form-group">
			<?= form_label('COLONIA', 'cmboColonia'); ?>
			<?= form_dropdown($colonia, $optColonia); ?>
		</div>

		<div class="form-group">
			<?= form_label('ZONA', 'cmboZona'); ?>
			<?= form_dropdown($zona, $optZona); ?>
		</div>

		<div class="form-group">
			<?= form_label('PRECIO', 'cmboPrecio'); ?>
			<?= form_dropdown($precio, $optPrecio); ?>
		</div>

		<div class="form-group">
			<?= form_label('PALABRAS CLAVE', 'inpKeyword'); ?>
			<?= form_input($keyword); ?>
		</div>
		<div class="form-group">
			<?= form_submit($buscar, 'BUSCAR'); ?>
		</div>

		<?= form_close();?>
	</aside>

</div>