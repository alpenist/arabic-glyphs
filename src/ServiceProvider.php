<?php

namespace Ait\ArabicGlyphs;

use Ait\ArabicGlyphs\Support\GlyphConverter;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Support\ServiceProvider as IlluminateServiceProvider;

class ServiceProvider extends IlluminateServiceProvider
{


    public function register()
    {
        $configPath = __DIR__ . '/../config/arabic-glyphs.php';
        $this->mergeConfigFrom($configPath, 'arabic-glyphs');

        $this->app->singleton('Glyphs', function (Application $app) {

            return new GlyphConverter(config('arabic-glyphs'), $app->getLocale());
        });

        $this->app->alias('Glyphs', GlyphConverter::class);
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
