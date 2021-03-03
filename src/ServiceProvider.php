<?php

namespace Ait\ArabicGlyphs;

use Ait\ArabicGlyphs\Support\GlyphConverter;
use Illuminate\Support\ServiceProvider as IlluminateServiceProvider;

class ServiceProvider extends IlluminateServiceProvider
{


    public function register()
    {
        $configPath = __DIR__ . '/../config/arabic-glyphs.php';
        $this->mergeConfigFrom($configPath, 'arabic-glyphs');

        $this->app->singleton(GlyphConverter::class, function () {
            return new GlyphConverter(config('arabic-glyphs'));
        });

        $this->app->alias('Glyphs', Dompdf::class);
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['GlyphConverter'];
    }
}
