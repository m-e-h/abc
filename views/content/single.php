<?php

if ( have_posts() ) : ?>

	<?php while ( have_posts() ) : the_post(); ?>

		<?php Hybrid\render_view( 'entry-single', Hybrid\get_post_hierarchy() ) ?>

		<?php comments_template() ?>

	<?php endwhile ?>

<?php
endif;
