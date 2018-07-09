<?php

Hybrid\render_view( 'header' );
?>

<div class="app-content">

	<main id="main" class="app-main">

		<?php Hybrid\render_view( 'layouts', Hybrid\get_global_hierarchy() ); ?>

	</main>

	<?php Hybrid\render_view( 'components/sidebar', 'primary', [ 'name' => 'primary' ] ); ?>

</div>

<?php
Hybrid\render_view( 'footer' );
