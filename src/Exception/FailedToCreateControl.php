<?php
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

namespace BrightNucleus\Form\Exception;

use BrightNucleus\Exception\UnexpectedValueException;

/**
 * Class FailedToCreateControl.
 *
 * This exception is thrown when the Config values passed to a method were
 * missing a required key.
 *
 * @since   0.1.0
 *
 * @package BrightNucleus\Form\Exception
 * @author  Alain Schlesser <alain.schlesser@gmail.com>
 */
class FailedToCreateControl extends UnexpectedValueException implements AdminPageException {

	/**
	 * Get an instance of a FailedToCreateControl exception for an unknown
	 * class.
	 *
	 * @since 0.1.0
	 *
	 * @param string $class Class for which the control could not be created.
	 *
	 * @return FailedToCreateControl
	 */
	public static function forClass( $class ) {
		$message = sprintf(
			'Could not create a form control for the class "%1$s".',
			$class
		);

		return new self( $message );
	}
}
