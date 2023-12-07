<?php

	/**
		 * Display tooltip.
		 *
		 * @param string $content content string.
		 * @param string $position position.
		 * @param string $length length.
		 * @return string
		 */
		public function display_tooltip( $content, $position = 'up', $length = 'large' ) {
			$valid_positions = [ 'up', 'down', 'left', 'right' ];
			$valid_lengths   = [ 'small', 'medium', 'large', 'fit' ];

			$position = in_array( $position, $valid_positions, true ) ? $position : 'up';
			$length   = in_array( $length, $valid_lengths, true ) ? $length : 'medium';

			return '<div class="bsf-tooltip" data-tooltip-pos="' . esc_attr( $position ) . '" data-tooltip-length="' . esc_attr( $length ) . '"> <span class="bsf-tooltip-content">' . $content . '</span><span class="bsf-exclamatory fa fa-exclamation-circle"></span></div>';

		}
