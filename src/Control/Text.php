<?php declare( strict_types = 1 );
/**
 * Bright Nucleus Form.
 *
 * Config-based Forms.
 *
 * @package   BrightNucleus\Form
 * @author    Alain Schlesser <alain.schlesser@gmail.com>
 * @license   MIT
 * @link      https://www.brightnucleus.com/
 * @copyright 2019 Alain Schlesser, Bright Nucleus
 */

namespace BrightNucleus\Form\Control;

use BrightNucleus\Values\EscapeTarget;

/**
 * Class Text.
 *
 * @since   0.1.0
 *
 * @package BrightNucleus\Form\Control
 * @author  Alain Schlesser <alain.schlesser@gmail.com>
 */
class Text extends AbstractControl {

	/**
	 * Render the input field for the control.
	 *
	 * @since 0.1.0
	 *
	 * @return string HTML representation of the control input.
	 */
	public function renderInput() {
		return sprintf(
			'<input type="text" name="%1$s" id="%1$s" value="%2$s" placeholder="%3$s">',
			$this->option->getKey(),
			$this->option->escape( EscapeTarget::ATTRIBUTE ),
			$this->placeholder
		);
	}
}
