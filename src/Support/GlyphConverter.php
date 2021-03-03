<?php


namespace Ait\ArabicGlyphs\Support;


class GlyphConverter
{
    protected Glyphs $converter;

    public function __construct(array $config = [])
    {
        $this->converter = new Glyphs($config);
    }

    public function convert(string $text): string
    {
        return $this->converter->utf8Glyphs($text);
    }

}