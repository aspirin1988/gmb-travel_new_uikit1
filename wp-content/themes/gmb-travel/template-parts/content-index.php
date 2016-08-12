
	<main>
	<style>
			main .img-main-page {
				width: 100%;
				background-image: url('<?=get_the_post_thumbnail_url()?>');
				background-size: cover !important;
				height: 100vh;
			}
		</style>
	<div class="img-main-page uk-position-relative" >
		<article>
			<div class="article-in">
				<?=get_field('slogan',4) ?>
			</div>
		</article>
	</div>

	<div id="services" class="services-main-body" data-uk-parallax="{bg: '-200'}">
		<?php $category=get_category(2);?>
		<div class="second-service-background">
			<div class="uk-container uk-container-center">
				<h3 class="services-title"><?=$category->name?></h3>
				<div class="uk-grid uk-grid-match" data-uk-grid-match="{target:'.uk-panel'}">
					<?php $posts=get_posts(array('category_name'=>'services','numberposts'=>3));
					foreach ($posts as $post): setup_postdata($post);
					?>
					<div class="uk-width-small-1-1 uk-width-medium-1-1 uk-width-large-1-3">
						<div class="uk-panel">
							<div class="uk-panel-badge uk-badge"><?=get_field('icon')?></div>
							<a href="<?=get_permalink()?>"><h3 class="uk-panel-title"><?=get_the_title()?></h3></a>
							<?php the_content() ?>
						</div>
					</div>
					<?php endforeach; wp_reset_query();?>
				</div>
			</div>
		</div>
	</div>

	<div id="about" class="about-body">
		<?php $post=get_post(19); setup_postdata($post); ?>
		<div class="about-background-body">
			<div class="uk-container uk-container-center uk-text-center">
				<h3><?=get_the_title()?></h3>
				<div class="uk-grid">
					<?php foreach (pp_gallery_get() as $image): ?>
					<div class="uk-width-small-1-1 uk-width-medium-1-1 uk-width-large-1-5">
						<div class="icon-number">
							<img src="<?=$image->url?>" alt="">
						</div>
						<p class="icon-title">
							<?=$image->description?>
						</p>
					</div>
					<?php endforeach; ?>
				</div>
				<div class="uk-grid">
					<div class="uk-width-small-1-1 uk-width-medium-1-1 uk-width-large-1-1">
						<article>
							<img class="logo-article" src="<?=get_the_post_thumbnail_url()?>" alt="">
							<?php the_content() ?>
						</article>
					</div>
				</div>
			</div>
		</div>
		<?php wp_reset_query(); ?>
	</div>

	<div id="reviews" class="reviews-body" data-uk-parallax="{bg: '-200'}">
		<div class="reviews-background">
			<div class="uk-container uk-container-center">
				<h3 class="reviews-title">Отзывы клиентов</h3>
				<div data-uk-slideset="{small: 1, medium: 1, large: 3}">
					<div class="uk-slidenav-position">
						<ul class="uk-grid uk-slideset">
							<li>
								<div class="reviews-block uk-flex uk-flex-center uk-flex-middle uk-flex-column">
									<div class="img-reviews">
										<img src="public/img/765-default-avatar.png" alt="">
									</div>
									<h3>Имя Клиента</h3>
									<article>
										Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea hic mollitia nemo nostrum quo repudiandae sapiente sit soluta ullam unde. At autem beatae consectetur cupiditate dolor esse quasi ullam voluptatibus.
									</article>
								</div>
							</li>
							<li><img src="" alt="">
								<div class="reviews-block uk-flex uk-flex-center uk-flex-middle uk-flex-column">
									<div class="img-reviews">
										<img src="public/img/765-default-avatar.png" alt="">
									</div>
									<h3>Имя Клиента</h3>
									<article>
										Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea hic mollitia nemo nostrum quo repudiandae sapiente sit soluta ullam unde. At autem beatae consectetur cupiditate dolor esse quasi ullam voluptatibus.
									</article>
								</div>
							</li>
							<li><img src="" alt="">
								<div class="reviews-block uk-flex uk-flex-center uk-flex-middle uk-flex-column">
									<div class="img-reviews">
										<img src="public/img/765-default-avatar.png" alt="">
									</div>
									<h3>Имя Клиента</h3>
									<article>
										Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea hic mollitia nemo nostrum quo repudiandae sapiente sit soluta ullam unde. At autem beatae consectetur cupiditate dolor esse quasi ullam voluptatibus.
									</article>
								</div>
							</li>
						</ul>
						<a href="" class="uk-slidenav uk-slidenav-previous" data-uk-slideset-item="previous"></a>
						<a href="" class="uk-slidenav uk-slidenav-next" data-uk-slideset-item="next"></a>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div id="questions" class="questions-body">
		<div class="questions-background">
			<div class="uk-container uk-container-center uk-text-center">
				<h3>Часто задаваемые вопросы</h3>
				<div class="questions-list">
					<div class="uk-grid">
						<div class="uk-width-small-1-1 uk-width-medium-1-1 uk-width-large-1-3">
							<div class="question">
								<h4>Какие услуги вы предоставляете?</h4>
							</div>
						</div>
						<div class="uk-width-small-1-1 uk-width-medium-1-1 uk-width-large-2-3">
							<article class="response">
								Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam beatae cupiditate ducimus esse et itaque iusto libero magnam molestiae officia officiis porro quasi, recusandae reiciendis rem repellat rerum ullam veniam.
							</article>
						</div>
					</div>
					<div class="uk-grid">
						<div class="uk-width-small-1-1 uk-width-medium-1-1 uk-width-large-1-3">
							<div class="question">
								<h4>Какие услуги вы предоставляете?</h4>
							</div>
						</div>
						<div class="uk-width-small-1-1 uk-width-medium-1-1 uk-width-large-2-3">
							<article class="response">
								Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam beatae cupiditate ducimus esse et itaque iusto libero magnam molestiae officia officiis porro quasi, recusandae reiciendis rem repellat rerum ullam veniam.
							</article>
						</div>
					</div>
					<div class="uk-grid">
						<div class="uk-width-small-1-1 uk-width-medium-1-1 uk-width-large-1-3">
							<div class="question">
								<h4>Какие услуги вы предоставляете?</h4>
							</div>
						</div>
						<div class="uk-width-small-1-1 uk-width-medium-1-1 uk-width-large-2-3">
							<article class="response">
								Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam beatae cupiditate ducimus esse et itaque iusto libero magnam molestiae officia officiis porro quasi, recusandae reiciendis rem repellat rerum ullam veniam.
							</article>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="form-body" data-uk-parallax="{bg: '-200'}">
		<div class="form-background">
			<div class="uk-container uk-container-center">
				<div class="uk-grid">
					<div class="uk-width-small-1-1 uk-width-medium-1-1 uk-width-large-1-4">
						<form action="" class="uk-flex uk-flex-center uk-flex-middle uk-flex-column">
							<h3>Свяжитесь с нами для получения подробной информации!</h3>
							<input type="text" placeholder="Имя">
							<input type="email" placeholder="Email">
							<input type="tel" placeholder="Телефон">
							<input type="submit">
						</form>
					</div>
					<div class="uk-width-small-1-1 uk-width-medium-1-1 uk-width-large-3-4"></div>
				</div>
			</div>
		</div>
	</div>

</main>