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
 * Interface Form.
 *
 * @since   0.1.0
 *
 * @package BrightNucleus\Form
 * @author  Alain Schlesser <alain.schlesser@gmail.com>
 */
interface Form {

	const ID            = 'id';
	const ACTION        = 'action';
	const CONTROLS      = 'controls';
	const SUBMIT_BUTTON = 'submit_button';

	/**
	 * Get the identifier of the form.
	 *
	 * @since 0.1.0
	 *
	 * @return string Identifier of the form.
	 */
	public function get_id();

	/**
	 * Get the action identifier of the button.
	 *
	 * @since 0.1.0
	 *
	 * @return string Action identifier of the button.
	 */
	public function get_action();

	/**
	 * Render the form starting tag(s).
	 *
	 * This includes the hidden input fields with the nonce and the referrer.
	 *
	 * @since 0.1.0
	 *
	 * @return string HTML rendering of the button.
	 */
	public function start();

	/**
	 * Render the controls associated with the form.
	 *
	 * @since 0.1.0
	 *
	 * @return string HTML representation of the form controls.
	 */
	public function controls();

	/**
	 * Render the submit button.
	 *
	 * @since 0.1.0
	 *
	 * @return string HTML rendering of the submit button.
	 */
	public function submit();

	/**
	 * Render the form closing tag(s).
	 *
	 * @since 0.1.0
	 *
	 * @return string HTML rendering of the button.
	 */
	public function end();

	/**
	 * Render the entire form in one go.
	 *
	 * @since 0.1.0
	 *
	 * @return string HTML rendering of the form.
	 */
	public function render();
}
