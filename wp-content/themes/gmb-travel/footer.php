<footer id="contacts">
	<div class="uk-container uk-container-center">
		<div class="uk-grid">
			<div class="uk-width-small-1-1 uk-width-medium-1-1 uk-width-large-1-3">
				<a href="<?=get_permalink(4)?>"><img src="<?=get_field('logo',4)?>" alt=""></a>
				<address>
					<p><?=get_field('address',4)?></p>
					<a href="<?=get_field('phone-1',4)?>"><?=get_field('phone-1',4)?></a>
					<a href="<?=get_field('phone-2',4)?>"><?=get_field('phone-2',4)?></a>
					<a href="<?=get_field('email',4)?>"><?=get_field('email',4)?></a>
				</address>
			</div>
			<div class="uk-width-small-1-1 uk-width-medium-1-1 uk-width-large-2-3">
				<?=get_field('map',4);?>
			</div>
		</div>
	</div>
</footer>

</body>

<script src="<?php bloginfo('template_directory') ?>/public/js/jquery-3.1.0.min.js"></script>
<script src="<?php bloginfo('template_directory') ?>/public/js/uikit.min.js"></script>
<script src="<?php bloginfo('template_directory') ?>/public/js/components/parallax.min.js"></script>
<script src="<?php bloginfo('template_directory') ?>/public/js/components/slideset.min.js"></script>
<script src="<?php bloginfo('template_directory') ?>/public/js/components/sticky.min.js"></script>
</html>