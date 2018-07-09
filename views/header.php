<!DOCTYPE html>
<html <?php Hybrid\attr( 'html' ) ?>>

<head>
<?php wp_head() ?>
</head>

<body <?php Hybrid\attr( 'body' ) ?>>

<div class="app">

	<header class="app-header">

		<a class="skip-link screen-reader-text" href="#main"><?php esc_html_e( 'Skip to content', 'abc' ) ?></a>

		<div class="app-header__branding">
			<?php Hybrid\site_title( '', [ 'class' => 'app-header__title' ] ) ?>
			<?php Hybrid\site_description( '', [ 'class' => 'app-header__description' ] ) ?>
		</div>

		<?php Hybrid\render_view( 'components/menu', 'primary', [ 'name' => 'primary' ] ) ?>

	</header>
