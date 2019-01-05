<?php declare( strict_types=1 );
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

interface FieldType {

	const STRING    = 'string';
	const NUMERIC   = 'numeric';
	const LIST      = 'list';
	const CONTAINER = 'container';
}
