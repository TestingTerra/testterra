<div class="container-fluid" id="contForm">
	<div class="row">
		<div class="col-xs-6 col-sm-3 col-md-4">
			<?php
		    $atribForm = array('id' =>'formAltInm' );
		    echo form_open_multipart('principal/altaInmueble',$atribForm);
	    ?>
			<?php
				$this->load->database();
	      $consulta = $this->db->query('SELECT * FROM estados');
	      $resultado = $consulta->result_array();
	      $estados[''] = "Selecciona un estado";
	      foreach ($resultado as $res) {
					$estados[$res['nombre']] = $res['nombre'];
				}//Fin del for each
			?>
			<!--imagen input principal tipo file  -->
			<div class="form-group">
				<?php
		      $atribFormUp = array('name' => 'imgPrin','id'=>'imgPrin','class'=>'form-control','accept' =>'image/*');
	      echo form_label("Agregar Imagen: ".form_upload($atribFormUp),'imgPrin');
	      ?>
			</div>
			<!-- titulo input tipo texto  -->
			<div class="form-group">
				<?php
					// un arreglo de los atributos del input.
		      $atribInpTit = array('name' => 'titulo', 'id'=>'titulo','class'=>'form-control');
		      echo form_label('Título: '.form_input($atribInpTit),'titulo');
				?>
			</div>
			<!-- subtítulo input tipo texto  -->
			<div class="form-group">
				<?php
					// un arreglo de los atributos del input.
		      $atribInpTit = array('name' => 'subtitulo', 'id'=>'subtitulo','class'=>'form-control','value'=>set_value('subtitulo'));
		      echo form_label('Subtítulo: '.form_input($atribInpTit),'subtitulo');
				?>
			</div>
			<!-- clave input tipo texto  -->
			<div class="form-group">
				<?php
					// un arreglo de los atributos del input.
		      $atribInpTit = array('name' => 'clave', 'id'=>'clave','class'=>'form-control','value' => set_value('clave'));
		      echo form_label('Clave'.form_input($atribInpTit),'clave');
				?>
			</div>
			<!-- área en construcción input tipo texto  -->
			<div class="form-group">
				<?php
					// un arreglo de los atributos del input.
		      $atribInpTit = array('name' => 'areaConst', 'id'=>'areaConst','class'=>'form-control','value' => set_value('areaConst'));
		      echo form_label('Área en construcción:'.form_input($atribInpTit),'areaConst');
				?>
			</div>
			<!-- área del terreno input tipo texto  -->
			<div class="form-group">
				<?php
					// un arreglo de los atributos del input.
		      $atribInpTit = array('name' => 'areaTerr', 'id'=>'areaTerr','class'=>'form-control','value' => set_value('areaTerr'));
		      echo form_label('Área del terreno:'.form_input($atribInpTit),'areaTerr');
	      ?>
			</div>
			<!--cantidad de recamaras input tipo number  -->
			<div class="form-group">
				<?php
		      // un arreglo de los atributos del input.
		      $atribInpTit = array('name' => 'recam', 'id'=>'recam','class'=>'form-control','type'=>'number','min'=>'1','value' => set_value('recam'));
		      echo form_label('Recamaras:'.form_input($atribInpTit),'recam');
			  ?>
			</div>
			<!--baños input tipo number  -->
			<div class="form-group">
				<?php
		      // un arreglo de los atributos del input.
		      $atribInpTit = array('name' => 'banos', 'id'=>'banos','class'=>'form-control','type'=>'number','min'=>'1','value' => set_value('banos'));
		      echo form_label('Baños:'.form_input($atribInpTit),'banos');
					?>
			</div>
			<!--cantidad de medios baños input tipo number  -->
			<div class="form-group">
				<?php
					// un arreglo de los atributos del input.
		      $atribInpTit = array('name' => 'medBanos', 'id'=>'medBanos','class'=>'form-control','type'=>'number','min'=>'1','value' => set_value('medBanos'));
		      echo form_label('Medios Baños '.form_input($atribInpTit),'medBanos');
				?>
			</div>
			<!-- dirección input tipo texto  -->
			<div class="form-group">
				<?php
		      // un arreglo de los atributos del input.
		      $atribInpTit = array('name' => 'direccion', 'id'=>'direccion','class'=>'form-control','value' =>set_value('direccion'));
		      echo form_label('Dirección:'.form_input($atribInpTit),'direccion');
				?>
			</div>
			<!-- tipo input tipo texto  -->
			<div class="form-group">
				<?php
		      // un arreglo de los atributos del input.
		      $atribInpTit = array('name' => 'tipo', 'id'=>'tipo','class'=>'form-control','value' => set_value('tipo'));
		      echo form_label('Tipo:'.form_input($atribInpTit),'tipo');
				?>
			</div>
			<!-- operación input tipo texto  -->
			<div class="form-group">
				<?php
		      // un arreglo de los atributos del input.
		      $atribInpTit = array('name' => 'oper', 'id'=>'oper','class'=>'form-control','value' => set_value('oper'));
		      echo form_label('Operación:'.form_input($atribInpTit),'oper');
	      ?>
			</div>
			<!-- input hidden urlControlador  -->
			<div class="form-group">
				<?php
		      $atribInpTit = array('name' => 'urlCont', 'id'=>'urlCont','class'=>'form-control','type' => 'hidden');
		      echo form_input($atribInpTit,site_url('principal/muniDb'));
        ?>
			</div>
			<!-- select estado  -->
			<div class="form-group">
				<?php
		      $atribSelect = array('name' => 'estado', 'id'=>'estado','class'=>'form-control','value' => set_value('estado'));
	       echo form_label('Estado:','estado').form_dropdown($atribSelect,$estados,set_value('estado'));
				?>
			</div>
			<!-- select municipio -->
			<div class="form-group">
				<?php
		      $atribSelect = array('name' => 'mun', 'id'=>'mun','class'=>'form-control','disabled'=>'disabled','value' => set_value('mun'));
		       echo form_label('Municipio:','mun').form_dropdown($atribSelect,'',set_value('mun'));
	      ?>
			</div>
			<!-- colonia input tipo texto  -->
			<div class="form-group">
				<?php
		      // un arreglo de los atributos del input.
		      $atribInpTit = array('name' => 'col', 'id'=>'col','class'=>'form-control','value' => set_value('col'));
		      echo form_label('Colonia:'.form_input($atribInpTit),'col');
	      ?>
			</div>
			<!-- zona input tipo texto  -->
			<div class="form-group">
				<?php
		      // un arreglo de los atributos del input.
		      $atribInpTit = array('name' => 'zona', 'id'=>'zona','class'=>'form-control','value' => set_value('zona'));
		      echo form_label('Zona:'.form_input($atribInpTit),'zona');
        ?>
			</div>
			<!-- precio input tipo texto  -->
			<div class="form-group">
				<?php
		      // un arreglo de los atributos del input.
		      $atribInpTit = array('name' => 'precio', 'id'=>'precio','class'=>'form-control','value' => set_value('precio'));
		      echo form_label('Precio:'.form_input($atribInpTit),'precio');
	      ?>
			</div>
			<!-- submit input tipo texto  -->
			<div class="form-group">
				<?php
		      // un arreglo de los atributos del input.
		      $atribInpTit = array('name' => 'enviar', 'id'=>'enviar','class'=>'form-control btn btn-default','value'=>'Guardar','type'=>'submit');
		      echo form_input($atribInpTit);
				?>
			</div>
			<?php
			echo form_close();
			?>
		</div>
	</div>
</div>
