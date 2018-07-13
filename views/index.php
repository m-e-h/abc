<?php

Hybrid\View\render( 'header' );
?>

<div class="app-content">

	<main id="main" class="app-main">

		<?php Hybrid\View\render( 'layouts', Hybrid\Template\hierarchy() ); ?>

	</main>

	<?php Hybrid\View\render( 'components/sidebar', 'primary', [ 'name' => 'primary' ] ); ?>

</div>

<?php
Hybrid\View\render( 'footer' );
