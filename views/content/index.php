<?php

Hybrid\render_view( 'components', 'archive-header' ) ?>

<?php if ( have_posts() ) : ?>

	<?php while ( have_posts() ) : the_post(); ?>

		<?php Hybrid\render_view( 'entry-archive', Hybrid\get_post_hierarchy() ) ?>

	<?php endwhile ?>

	<?php Hybrid\render_view( 'components', 'pagination-posts' ) ?>

<?php
endif;
