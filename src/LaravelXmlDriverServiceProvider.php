<?php
namespace SamWhisker\LaravelXmlDriver;
use Illuminate\Support\ServiceProvider;
class LaravelXmlDriverServiceProvider extends ServiceProvider
{
    /**
    * Publishes configuration file.
    *
    * @return  void
    */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/../config/laravel_xml_driver.php' => config_path('laravel_xml_driver.php'),
        ], 'laravel-xml-driver-config');
    }
    /**
    * Make config publishment optional by merging the config from the package.
    *
    * @return  void
    */
    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__.'/../config/laravel_xml_driver.php',
            'laravel_xml_driver'
        );
    }
}