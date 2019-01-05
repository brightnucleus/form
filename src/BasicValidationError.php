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

namespace BrightNucleus\Form;

/**
 * Class BasicValidationError.
 *
 * @since   0.1.0
 *
 * @package BrightNucleus\Form
 * @author  Alain Schlesser <alain.schlesser@gmail.com>
 */
final class BasicValidationError {

	/**
	 * Message describing the requirement.
	 *
	 * @since 0.1.0
	 *
	 * @var string
	 */
	private $key;

	/**
	 * Message describing the requirement.
	 *
	 * @since 0.1.0
	 *
	 * @var string
	 */
	private $message;

	/**
	 * Instantiate a BasicValidationError object.
	 *
	 * @since 0.1.0
	 *
	 * @param string $key     Key of the option that was not valid.
	 * @param string $message Message describing the requirement.
	 */
	public function __construct( string $key, string $message ) {
		$this->key     = $key;
		$this->message = $message;
	}

	/**
	 * Get the key of the option that was not valid.
	 *
	 * @since 0.1.0
	 *
	 * @return string Message describing the requirement.
	 */
	public function getKey() {
		return $this->key;
	}

	/**
	 * Get the message describing the requirement.
	 *
	 * @since 0.1.0
	 *
	 * @return string Message describing the requirement.
	 */
	public function getMessage() {
		return $this->message;
	}
}
