<?php

Hybrid\View\render( 'components', 'archive-header' ) ?>

<?php if ( have_posts() ) : ?>

	<?php while ( have_posts() ) : the_post(); ?>

		<?php Hybrid\View\render( 'entry-archive', Hybrid\Post\hierarchy() ) ?>

	<?php endwhile ?>

	<?php Hybrid\View\render( 'components', 'pagination-posts' ) ?>

<?php
endif;
