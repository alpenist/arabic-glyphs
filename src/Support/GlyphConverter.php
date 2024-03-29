<?php


namespace Ait\ArabicGlyphs\Support;


class GlyphConverter
{
    protected ?Glyphs $converter;

    protected string $lang = 'en';

    public function __construct(array $config = [], string $lang = 'en')
    {
        $this->lang = $lang;
        $this->converter = $lang === 'ar' ? new Glyphs($config) : null;
    }

    public function convert(string $text): string
    {
        if ($this->converter) {
            return $this->converter->utf8Glyphs($text);
        }

        return $text;
    }

}
