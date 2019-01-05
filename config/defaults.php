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

$control_factory = [
	'BrightNucleus\OptionsStore\Option\EmailAddressOption' => Control\Text::class,
	'BrightNucleus\OptionsStore\Option\IntegerOption'      => Control\Text::class,
	'BrightNucleus\OptionsStore\Option\StringOption'       => Control\Text::class,
];

return [
	'BrightNucleus' => [
		'AdminPage' => [
			'ControlFactory' => $control_factory,
		],
	],
];
