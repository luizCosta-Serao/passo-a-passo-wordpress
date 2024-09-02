<?php
  // Template Name: Home
?>
<?php get_header(); ?>
<div class="clear"></div>
			<br />
			<br />
			<div class="w50 time-descricao">
				<h2>Melhore a comunicação com seu cliente e time.</h2>
				<p>Consultoria especializada em startups, empresas, principalmente, pessoas.</p>
				<a target="_blank" href="https://dankicode.com">Ver demonstração</a>
			</div><!--w50-->
			<div class="w50 time-imagem">
				<img src="<?php echo get_theme_root_uri(); ?>/danki/images/equipe.png" />
			</div><!--w50-->
			<div class="clear"></div>
		</div><!--center-->
	</section><!--topo-->
	<div class="circle"><i class="fas fa-angle-down"></i></div>
	<section class="conteudo-da-pagina">
		<?php
			// Exibir os posts (geralmente é usado para blogs)
			if ( have_posts() ) : while ( have_posts() ) : the_post();
				the_content();
			endwhile; else: 
		?>
			<p>Sorry, no posts matched your criteria.</p>
		<?php endif; ?>
	</section>

	<section class="clientes-slider">

		<div class="center">
		<div style="max-width: 700px;margin: 0 auto;overflow: hidden;" class="slider-container">
			<img src="<?php echo get_theme_root_uri(); ?>/danki/images/amazon.jpg" />
			<img src="<?php echo get_theme_root_uri(); ?>/danki/images/costco.jpg" />
			<img src="<?php echo get_theme_root_uri(); ?>/danki/images/dominos.jpg" />
			<img src="<?php echo get_theme_root_uri(); ?>/danki/images/uber.jpg" />
			<img src="<?php echo get_theme_root_uri(); ?>/danki/images/walmart.jpg" />
			<img src="<?php echo get_theme_root_uri(); ?>/danki/images/amazon.jpg" />
			<img src="<?php echo get_theme_root_uri(); ?>/danki/images/costco.jpg" />
			<img src="<?php echo get_theme_root_uri(); ?>/danki/images/dominos.jpg" />
			<img src="<?php echo get_theme_root_uri(); ?>/danki/images/uber.jpg" />
			<img src="<?php echo get_theme_root_uri(); ?>/danki/images/walmart.jpg" />
		</div>
		</div><!--center-->
	</section>


	<section class="diferenciais">
			
			<div class="center">
				<h2>Contribuímos de ponta a ponta</h2>

				<div class="icons-diferenciais">

					<div class="box-single-diferenciais">
						<img src="<?php echo get_theme_root_uri(); ?>/danki/images/icon1.png" />
						<h3>Ambientes Mobile</h3>
						<p>Garanta que toda sua comunicação esteja alinhada com seu propósito, cada palavra conta.</p>
					</div><!--box-single-diferenciais-->

					<div class="box-single-diferenciais">
						<img src="<?php echo get_theme_root_uri(); ?>/danki/images/icon2.png" />
						<h3>Ambientes Mobile</h3>
						<p>Garanta que toda sua comunicação esteja alinhada com seu propósito, cada palavra conta.</p>
					</div><!--box-single-diferenciais-->

					<div class="box-single-diferenciais">
						<img src="<?php echo get_theme_root_uri(); ?>/danki/images/icon3.png" />
						<h3>Ambientes Mobile</h3>
						<p>Garanta que toda sua comunicação esteja alinhada com seu propósito, cada palavra conta.</p>
					</div><!--box-single-diferenciais-->

				</div><!--icons-diferenciais-->

			</div>

	</section>

	<section class="sobre-time">
		<div class="center">
			<div class="w50 time-descricao-2">
				<h2>Um time experiente,<br/>comunicador e coeso.</h2>
				<p>A Product Runt acredita que marcas fortes são construídas a partir de transformações importantes e positivas na vida dos consumidores. Exatamente como uma conversa que ganha forma, a ideia vira flâmula.
				<br /><br/>
				Comunicar bem, de forma coerente e clara não é algo fácil e estamos aqui para ajudar você e seu time. Você escolhe, remoto ou presencial, para seu cliente ou seu público interno, você determina como vamos te ajudar.</p>
			</div><!--w50-->
			<div class="w50 img-time">
				<img src="<?php echo get_theme_root_uri(); ?>/danki/images/time.png" />
			</div>
			<div class="clear"></div>
		</div>
	</section>

	<section class="depoimentos">
		<div class="center">
			<h2>Depoimentos</h2>
			<div class="depoimentos-box">
				<div class="depoimento-single">
					<p>"Aliqua quis ut duis eiusmod laboris aliquip elit consequat incididunt occaecat minim in consequat ut id culpa veniam. Ut mollit culpa laboris reprehenderit esse id anim anim quis in sed laborum irure mollit culpa."</p>
					<p>Guilherme Grillo</p>
					<img src="<?php echo get_theme_root_uri(); ?>/danki/images/autor.jpg" />
				</div><!--depoimento-single-->
				<div class="depoimento-single">
					<p>"Aliqua quis ut duis eiusmod laboris aliquip elit consequat incididunt occaecat minim in consequat ut id culpa veniam. Ut mollit culpa laboris reprehenderit esse id anim anim quis in sed laborum irure mollit culpa."</p>
					<p>Guilherme Grillo</p>
					<img src="<?php echo get_theme_root_uri(); ?>/danki/images/autor.jpg" />
				</div><!--depoimento-single-->
				<div class="depoimento-single">
					<p>"Aliqua quis ut duis eiusmod laboris aliquip elit consequat incididunt occaecat minim in consequat ut id culpa veniam. Ut mollit culpa laboris reprehenderit esse id anim anim quis in sed laborum irure mollit culpa."</p>
					<p>Guilherme Grillo</p>
					<img src="<?php echo get_theme_root_uri(); ?>/danki/images/autor.jpg" />
				</div><!--depoimento-single-->
			</div><!--depoimentos-box-->
		</div>
	</section>
  <?php get_footer(); ?>