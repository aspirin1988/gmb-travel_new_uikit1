<?php
/**
 * The template for displaying archive pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package gmb-travel
 */

get_header(); ?>

	<div id="primary" class="content-area">
			<main>
				<div class="tour-body">
					<div class="uk-container uk-container-center uk-text-center">
						<div class="uk-grid">
							<div class="uk-width-small-1-1 uk-width-medium-1-1 uk-width-large-2-3">
								<h2>Туры</h2>
								<div class="uk-grid grid-tour">
									<?php
									if ( have_posts() ) : ?>
										<?php
										while ( have_posts() ) : the_post();
											get_template_part( 'template-parts/content', 'ar-tours' );
										endwhile;
									endif; ?>
									<div class="uk-width-small-1-1 uk-width-medium-1-2 uk-width-large-1-2">
										<div class="tour-single-block">
											<img class="thumbnail-tour" src="public/img/france-tour.png" alt="">
											<div class="link-tour">
												<img class="flag" src="public/img/flags/France.png" alt="">
												<a href="#">Франция</a>
											</div>
										</div>
									</div>
									<div class="uk-width-small-1-1 uk-width-medium-1-2 uk-width-large-1-2">
										<div class="tour-single-block">
											<img class="thumbnail-tour" src="public/img/france-tour.png" alt="">
											<div class="link-tour">
												<img class="flag" src="public/img/flags/France.png" alt="">
												<a href="#">Франция</a>
											</div>
										</div>
									</div>
									<div class="uk-width-small-1-1 uk-width-medium-1-2 uk-width-large-1-2">
										<div class="tour-single-block">
											<img class="thumbnail-tour" src="public/img/france-tour.png" alt="">
											<div class="link-tour">
												<img class="flag" src="public/img/flags/France.png" alt="">
												<a href="#">Франция</a>
											</div>
										</div>
									</div>
									<div class="uk-width-small-1-1 uk-width-medium-1-2 uk-width-large-1-2">
										<div class="tour-single-block">
											<img class="thumbnail-tour" src="public/img/france-tour.png" alt="">
											<div class="link-tour">
												<img class="flag" src="public/img/flags/France.png" alt="">
												<a href="#">Франция</a>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="uk-width-small-1-1 uk-width-medium-1-1 uk-width-large-1-3">
								<div class="hot-tours-list">
									<a href="#"><h2>Горячие туры!</h2></a>
									<div class="hot-tour-single uk-text-left">
										<img src="public/img/france-tour.png" alt="">
										<h3>Франция</h3>
										<article>
											ВЫГОДНЫЕ ЦЕНЫ НА ТУРЫ НА БАЛИ ИЗ АЛМАТЫ!
											ОТДЫХ НА ОСТРОВЕ ПО ВЫГОДНЫМ ЦЕНАМ! ОТДЫХАЙТЕ ВСЕЙ СЕМЬЕЙ
										</article>
										<p>ЦЕНА: <span>100 000 ТНГ</span></p>
										<p>ОСТАЛОСЬ: <span> 2 ДНЯ</span></p>
									</div>
									<div class="hot-tour-single uk-text-left">
										<img src="public/img/france-tour.png" alt="">
										<h3>Франция</h3>
										<article>
											ВЫГОДНЫЕ ЦЕНЫ НА ТУРЫ НА БАЛИ ИЗ АЛМАТЫ!
											ОТДЫХ НА ОСТРОВЕ ПО ВЫГОДНЫМ ЦЕНАМ! ОТДЫХАЙТЕ ВСЕЙ СЕМЬЕЙ
										</article>
										<p>ЦЕНА: <span>100 000 ТНГ</span></p>
										<p>ОСТАЛОСЬ: <span> 2 ДНЯ</span></p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</main>
	</div><!-- #primary -->

<?php
get_footer();
