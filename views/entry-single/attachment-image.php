<article <?php Hybrid\attr( 'entry' ) ?>>

	<header class="entry__header">
		<h1 class="entry__title"><?php single_post_title() ?></h1>

		<div class="entry__byline">
			<?php printf( esc_html__( 'Sizes: %s', 'abc' ), Hybrid\get_image_size_links() ) ?>
		</div>
	</header>

	<?php if ( has_excerpt() ) : ?>

		<?php $src = wp_get_attachment_image_src( get_the_ID(), 'full' ); ?>

		<?php echo img_caption_shortcode(
			[
				'align'   => 'aligncenter',
				'width'   => esc_attr( $src[1] ),
				'caption' => get_the_excerpt()
			],
			wp_get_attachment_image( get_the_ID(), 'large', false )
		) ?>

	<?php else : ?>

		<?php echo wp_get_attachment_image( get_the_ID(), 'large', false, [ 'class' => 'aligncenter' ] ) ?>

	<?php endif ?>

	<div class="entry__content">
		<?php the_content() ?>
		<?php Hybrid\render_view( 'components', 'pagination-singular' ) ?>
	</div>

	<?php $gallery = gallery_shortcode( [
		'columns'     => 4,
		'numberposts' => 8,
		'orderby'     => 'rand',
		'id'          => get_queried_object()->post_parent,
		'exclude'     => get_the_excerpt()
	] ) ?>

	<?php if ( $gallery ) : ?>

		<div class="media-gallery">
			<h3 class="media-gallery__title"><?php esc_html_e( 'Gallery', 'abc' ) ?></h3>
			<?php echo $gallery ?>
		</div>

	<?php endif ?>

	<div class="media-meta media-meta--image">

		<h3 class="media-meta__title"><?php esc_html_e( 'Image Info', 'abc' ) ?></h3>

		<ul class="media-meta__items">
			<?php Hybrid\media_meta( 'dimensions',        [ 'itemtag' => 'li', 'label' => __( 'Dimensions', 'abc' )    ] ) ?>
			<?php Hybrid\media_meta( 'created_timestamp', [ 'itemtag' => 'li', 'label' => __( 'Date', 'abc' )          ] ) ?>
			<?php Hybrid\media_meta( 'camera',            [ 'itemtag' => 'li', 'label' => __( 'Camera', 'abc' )        ] ) ?>
			<?php Hybrid\media_meta( 'aperture',          [ 'itemtag' => 'li', 'label' => __( 'Aperture', 'abc' )      ] ) ?>
			<?php Hybrid\media_meta( 'focal_length',      [ 'itemtag' => 'li', 'label' => __( 'Focal Length', 'abc' )  ] ) ?>
			<?php Hybrid\media_meta( 'iso',               [ 'itemtag' => 'li', 'label' => __( 'ISO', 'abc' )           ] ) ?>
			<?php Hybrid\media_meta( 'shutter_speed',     [ 'itemtag' => 'li', 'label' => __( 'Shutter Speed', 'abc' ) ] ) ?>
			<?php Hybrid\media_meta( 'file_name',         [ 'itemtag' => 'li', 'label' => __( 'Name', 'abc' )          ] ) ?>
			<?php Hybrid\media_meta( 'mime_type',         [ 'itemtag' => 'li', 'label' => __( 'Mime Type', 'abc' )     ] ) ?>
			<?php Hybrid\media_meta( 'file_type',         [ 'itemtag' => 'li', 'label' => __( 'Type', 'abc' )          ] ) ?>
			<?php Hybrid\media_meta( 'file_size',         [ 'itemtag' => 'li', 'label' => __( 'Size', 'abc' )          ] ) ?>
		</ul>

	</div>

</article>
