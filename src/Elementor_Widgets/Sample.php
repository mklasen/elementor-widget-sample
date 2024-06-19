<?php
namespace mklasen\ElementorSample\Elementor_Widgets;

class Sample extends \Elementor\Widget_Base {
	public function get_name() {
		return 'ElementorSample_onetime';
	}

	public function get_title() {
		return __( 'One Time Purchase', 'ElementorSample' );
	}

	public function get_icon() {
		return 'eicon-code';
	}

	public function get_categories() {
		return [ 'basic' ];
	}

	protected function _register_controls() {
		// Register widget controls here, if needed.
	}

	protected function render() {
		echo '<div>test</div>';
	}

	protected function _content_template() {
		?>
		<div>test</div>
		<?php
	}

}