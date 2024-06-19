<?php

namespace mklasen\ElementorSample;

use mklasen\ElementorSample\Elementor_Widgets\Sample;

class Elementor {
	public function __construct() {
		$this->hooks();
	}

	public function hooks() {
		add_action( 'elementor/widgets/register', array($this, 'register_elementor_components') );
	}

	public function register_elementor_components( $widgets_manager ) {
		$widgets_manager->register( new Sample() );
	}

}