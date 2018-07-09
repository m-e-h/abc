<article <?php Hybrid\attr( 'entry' ) ?>>

	<header class="entry__header">
		<h1 class="entry__title"><?php single_post_title() ?></h1>
	</header>

	<?php Hybrid\post_media( [ 'type' => 'audio' ] ) ?>

	<div class="entry__content">
		<?php the_content() ?>
		<?php Hybrid\render_view( 'components', 'pagination-singular' ) ?>
	</div>

	<div class="media-meta media-meta--audio">

		<h3 class="media-meta__title"><?php esc_html_e( 'Audio Info', 'abc' ) ?></h3>

		<ul class="media-meta__items">
			<?php Hybrid\media_meta( 'length_formatted', [ 'itemtag' => 'li', 'label' => __( 'Run Time', 'abc' )     ] ) ?>
			<?php Hybrid\media_meta( 'artist',           [ 'itemtag' => 'li', 'label' => __( 'Artist', 'abc' )       ] ) ?>
			<?php Hybrid\media_meta( 'album',            [ 'itemtag' => 'li', 'label' => __( 'Album', 'abc' )        ] ) ?>
			<?php Hybrid\media_meta( 'track_number',     [ 'itemtag' => 'li', 'label' => __( 'Track Number', 'abc' ) ] ) ?>
			<?php Hybrid\media_meta( 'year',             [ 'itemtag' => 'li', 'label' => __( 'Year', 'abc' )         ] ) ?>
			<?php Hybrid\media_meta( 'genre',            [ 'itemtag' => 'li', 'label' => __( 'Genre', 'abc' )        ] ) ?>
			<?php Hybrid\media_meta( 'file_name',        [ 'itemtag' => 'li', 'label' => __( 'Name', 'abc' )         ] ) ?>
			<?php Hybrid\media_meta( 'mime_type',        [ 'itemtag' => 'li', 'label' => __( 'Mime Type', 'abc' )    ] ) ?>
			<?php Hybrid\media_meta( 'file_type',        [ 'itemtag' => 'li', 'label' => __( 'Type', 'abc' )         ] ) ?>
			<?php Hybrid\media_meta( 'file_size',        [ 'itemtag' => 'li', 'label' => __( 'Size', 'abc' )         ] ) ?>
		</ul>

	</div>

</article>
