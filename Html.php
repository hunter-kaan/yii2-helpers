<?php
namespace valiant\helpers;

/**
 * Class Html
 * @package valiant\helpers
 */
class Html extends \yii\helpers\Html
{

	/**
	 * Generates span glyph icon tag.
	 * @param string $icon name. e.g. "add" for glyphicon-add.
	 * @param array $options the tag options in terms of name-value pairs. These will be rendered as
	 * the attributes of the resulting tag. The values will be HTML-encoded using [[encode()]].
	 * If a value is null, the corresponding attribute will not be rendered.
	 * See [[renderTagAttributes()]] for details on how attributes are being rendered.
	 * @return string the generated glyph icon span tag.
	 */
	public static function icon($icon, $options = [])
	{
		static::addCssClass($options, [
			'glyphicon',
			sprintf('glyphicon-%s', $icon),
		]);
		return static::tag('span', '', $options);
	}
}