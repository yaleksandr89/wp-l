<?php
/**
 * Widget API: WPTEST_Widget_Categories class
 */

class WPTEST_Widget_Categories extends WP_Widget {

	public function __construct() {
		parent::__construct(
			'wptest_widget_categories',
			'WPTEST categories',
			[
				'classname'   => 'wptest_widget_categories',
				'description' => 'Список категорий.',
			]
		);
	}

	public function widget( $args, $instance ): void {
		$default_title = 'Список категорий';
		$current_title = ! empty( $instance['current_title'] ) ? $instance['current_title'] : $default_title;
		$current_title = apply_filters( 'widget_title', $current_title, $instance, $this->id_base );

		$count        = ! empty( $instance['count'] ) ? '1' : '0';
		$hierarchical = ! empty( $instance['hierarchical'] ) ? '1' : '0';

		echo $args['before_widget'];

		if ( $current_title ) {
			echo $args['before_title'] . $current_title . $args['after_title'];
		}

		$container       = '';
		$container_class = '';
		$cat_args        = [
			'orderby'      => 'name',
			'show_count'   => $count,
			'hierarchical' => $hierarchical,
		];
		$wrapper_args    = [
			'container'       => $container ?: 'ul',
			'container_class' => $container_class ?: 'test'
		];
		$format          = current_theme_supports( 'html5', 'navigation-widgets' ) ? 'html5' : 'xhtml';
		$format          = apply_filters( 'navigation_widgets_format', $format );

		if ( 'html5' === $format ) {
			$current_title = trim( strip_tags( $current_title ) );
			$aria_label    = $current_title ?: $default_title;
			echo '<nav role="navigation" aria-label="' . esc_attr( $aria_label ) . '">';
		}
		$cat_args['title_li'] = '';
		$wrapper              = apply_filters( 'wptest_widget_categories_wrapper', $wrapper_args );

		echo '<' . $wrapper['container'] . ' class=' . $wrapper['container_class'] . '>';
		wp_list_categories( apply_filters( 'wptest_widget_categories_args', $cat_args, $instance ) );
		echo '</' . $wrapper['container'] . '>';

		if ( 'html5' === $format ) {
			echo '</nav>';
		}
		echo $args['after_widget'];
	}


	public function update( $new_instance, $old_instance ): array {
		$instance                  = $old_instance;
		$instance['current_title'] = sanitize_text_field( $new_instance['current_title'] );
		$instance['count']         = ! empty( $new_instance['count'] ) ? 1 : 0;
		$instance['hierarchical']  = ! empty( $new_instance['hierarchical'] ) ? 1 : 0;

		return $instance;
	}

	public function form( $instance ): void {
		$instance     = wp_parse_args( (array) $instance, array( 'current_title' => '' ) );
		$count        = isset( $instance['count'] ) ? (bool) $instance['count'] : false;
		$hierarchical = isset( $instance['hierarchical'] ) ? (bool) $instance['hierarchical'] : false;
		?>
        <p>
            <label for="<?php echo $this->get_field_id( 'current_title' ); ?>">Заголовок:</label>
            <input class="widefat" id="<?php echo $this->get_field_id( 'current_title' ); ?>"
                   name="<?php echo $this->get_field_name( 'current_title' ); ?>" type="text"
                   value="<?php echo esc_attr( $instance['current_title'] ); ?>"/>
        </p>

        <p>
            <input type="checkbox" class="checkbox" id="<?php echo $this->get_field_id( 'count' ); ?>"
                   name="<?php echo $this->get_field_name( 'count' ); ?>"<?php checked( $count ); ?> />
            <label for="<?php echo $this->get_field_id( 'count' ); ?>"><?php _e( 'Show post counts' ); ?></label>
            <br/>

            <input type="checkbox" class="checkbox" id="<?php echo $this->get_field_id( 'hierarchical' ); ?>"
                   name="<?php echo $this->get_field_name( 'hierarchical' ); ?>"<?php checked( $hierarchical ); ?> />
            <label for="<?php echo $this->get_field_id( 'hierarchical' ); ?>"><?php _e( 'Show hierarchy' ); ?></label>
        </p>
		<?php
	}
}