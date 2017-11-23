<section class="box-content contato cinza" id="contato">
	<div class="container">

		<div class="row">
			<div class="col-6">
				<h3><?php the_field('texto_principal_contato',2); ?></h3>
				<p class="text-contato">
					<?php the_field('texto_secundario_contato',2); ?>
				</p>
			</div>

			<div class="col-6">

				<form class="contato">
					<fieldset>
						<input type="text" id="nome" name="nome" placeholder="Nome:*">
					</fieldset>

					<fieldset>
						<input type="text" id="email" name="email" placeholder="E-mail:*">
					</fieldset>

					<fieldset>
						<textarea id="mensagem" name="mensagem" placeholder="Como podemos ajudar:*"></textarea>
					</fieldset>

					<fieldset>
						<p class="msg-form"></p>
						<button class="enviar">ENVIAR</button>
					</fieldset>
				</form>

			</div>
		</div>

	</div>
</section>