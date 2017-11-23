
	<?php if(!is_front_page()){
		get_template_part( 'content-contato', 'page' );
	} ?>

	<footer class="footer">
		<div class="container">

			<div class="copy">
				<div class="row">
					<div class="col-10">
						<a href="<?php echo get_home_url(); ?>" title="<?php the_field('titulo', 'option'); ?>" class="logo-footer">
							<img src="<?php the_field('logo_header', 'option'); ?>" alt="<?php the_field('titulo', 'option'); ?>">
						</a>
						<p><i class="fa fa-copyright" aria-hidden="true"></i> <?php echo date('Y') ?> <?php the_field('titulo','option'); ?>. All rights reserved.</p>
					</div>

					<div class="col-2">
						<a href="http://www.di20.com.br" class="di20" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo_di20.png" alt="di20 DESENV." /></a>
					</div>
				</div>
			</div>
		
		</div>
	</footer>

	<script type="text/javascript">
		
		jQuery.noConflict();

		jQuery(document).ready(function(){
			jQuery(".scroll").click(function(event){
				event.preventDefault();
				jQuery('.menu-mobile').removeClass('active');
				jQuery('.header').removeClass('active');
				jQuery('.nav').css('top','-110vh');
				jQuery('html,body').animate( { scrollTop:jQuery(this.hash).offset().top } , 1000);
			});

			jQuery("#gotop").click(function(event){
				event.preventDefault();
				jQuery('html,body').animate( { scrollTop: 0 } , 1000);
			});


			// FORM
			jQuery('form.contato').submit(function(event){
				jQuery('.enviar').html('ENVIANDO').prop( "disabled", true );
				jQuery('.msg-form').removeClass('erro ok').html('');
				var nome = jQuery('#nome').val();
				var email = jQuery('#email').val();
				var mensagem = jQuery('#mensagem').val();
				var para = '<?php the_field('email', 'option'); ?>';
				var nome_site = '<?php the_field('titulo', 'option'); ?>';

				var enviar = true;
				if(nome == ''){
					jQuery('#nome').parent().addClass('erro');
					enviar = false;
				}

				if(email == ''){
					jQuery('#email').parent().addClass('erro');
					enviar = false;
				}

				if(mensagem == ''){
					jQuery('#mensagem').parent().addClass('erro');
					enviar = false;
				}

				if(enviar){
					jQuery.getJSON("<?php echo get_template_directory_uri(); ?>/mail.php", { nome:nome, email:email, mensagem:mensagem, para:para, nome_site:nome_site }, function(result){		
						if(result=='ok'){
							resultado = 'Enviado com sucesso! Obrigado.';
							classe = 'ok';
						}else{
							resultado = result;
							classe = 'erro';
						}
						jQuery('.msg-form').addClass(classe).html(resultado);
						jQuery('form.contato').trigger("reset");
						jQuery('.enviar').html('ENVIAR').prop( "disabled", false );
					});
				}else{
					jQuery('.msg-form').addClass('erro').html('Todos os campos são obrigatórios.');
					jQuery('.enviar').html('ENVIAR').prop( "disabled", false );
				}

				return false;
			});

			jQuery('input, textarea').change(function(){
				if(jQuery(this).parent().hasClass('erro')){
					jQuery(this).parent().removeClass('erro');
				}
			});
		});

	</script>

</body>
</html>