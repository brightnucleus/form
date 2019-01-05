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

/**
 * Class Button
 *
 * @since   0.1.0
 *
 * @package GAA\Webinars\Control
 * @author  Alain Schlesser <alain.schlesser@gmail.com>
 */
class Button extends AbstractControl {

	/**
	 * Render the input field for the control.
	 *
	 * @since 0.1.0
	 *
	 * @return string HTML representation of the control input.
	 */
	public function renderInput() {
		return sprintf(
			'<button id="%1$s" class="button" href="#">%2$s</button>',
			$this->getOption()->getKey(),
			$this->placeholder
		);
	}
}
