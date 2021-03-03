<?php


namespace Ait\ArabicGlyphs\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @method static string convert(string $text)
 *
 * @see \Ait\ArabicGlyphs\Support\GlyphConverter
 */

class GlyphsFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'Glyphs';
    }
}
