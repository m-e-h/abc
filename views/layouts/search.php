<?php

Hybrid\View\render( 'components', 'archive-header' ) ?>

<?php if ( have_posts() ) : ?>

	<?php while ( have_posts() ) : the_post(); ?>

		<?php Hybrid\View\render( 'entries', Hybrid\Template\hierarchy() ) ?>

	<?php endwhile ?>

	<?php Hybrid\View\render( 'components', 'pagination-posts' ) ?>

<?php
endif;
