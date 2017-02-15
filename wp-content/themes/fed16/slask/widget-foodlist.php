<?php
class WeeklyFoodList extends WP_Widget {

	public function __construct() {

		$id = "foodlist_fed16";
		$name = "Veckans slafsiga matsedel"; 
		$desc = "Här fyller du i vad mattanterna serverar i caféterian denna vecka."; 

		parent::__construct($id, $name, $desc);

	}

	public function form($instance) {

		$title = $instance['title'];
		$id = esc_attr($this->get_field_id('title'));
		$name = $this->get_field_name('title');
		?>
		<p>
			<lable for="<?php echo $id; ?>">Veckonummer: </lable>
			<input type="number" 
					id="<?php echo $id; ?>"
					name="<?php echo $name; ?>"
					value="<?php echo $title; ?>"> 
		</p>
		<?php
	}

	// Har hand om uppdateringen
	public function update($new_instance, $old_instance) {

		$instance = array();

		if( !empty( $new_instance['title']) ) {
			$instance['title'] = $new_instance['title'];
		}

		return $instance; 
	}

	// Visa widget i front end
	public function widget($arg, $instance) {
		echo $args['before_widget'];
		echo $args['before_title'];
		echo $instance['title'];
		echo $args['after_title'];
		echo $args['after_widget'];
	}

}

add_action( 'widgets_init', 'register_foodlist_fed16' );

function register_foodlist_fed16() {

	register_widget('WeeklyFoodList');

}