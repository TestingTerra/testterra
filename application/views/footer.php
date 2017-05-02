		<div class="row-fluid">
			<footer>
				Footer
				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos, nobis hic maiores excepturi iusto ullam. Doloremque dolore, odio, dicta facere eos quae animi sequi nostrum laborum molestias iure nam inventore.
			</footer>
		</div>

		<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">

			<?= form_open("/principal/login"); ?>

			<?php
				$login = array(
					'class'	=>	'form-control btn btn-danger',
					'id'	=>	'btnLogin',
					'name'	=>	'btnLogin'
				);
			?>

			<div class="form-group">
				<?= form_submit($login, 'INICIAR SESION'); ?>
			</div>

			<?= form_close();?>

		</div>

	</div>
</div>