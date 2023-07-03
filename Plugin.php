<?php namespace MarvinDurot\Sail;

use Laravel\Sail\SailServiceProvider;
use System\Classes\PluginBase;

/**
 * LaravelSail Plugin Information File
 */
class Plugin extends PluginBase
{
    /**
     * Returns information about this plugin.
     */
    public function pluginDetails(): array
    {
        return [
            'name'        => 'marvindurot.sail::lang.plugin.name',
            'description' => 'marvindurot.sail::lang.plugin.description',
            'author'      => 'Marvin Durot',
            'icon'        => 'icon-leaf'
        ];
    }

    /**
     * Register method, called when the plugin is first registered.
     */
    public function register(): void
    {
        $this->app->register(SailServiceProvider::class);
    }

    /**
     * Boot method, called right before the request route.
     */
    public function boot(): void
    {

    }

    /**
     * Registers any frontend components implemented in this plugin.
     */
    public function registerComponents(): array
    {
        return [];
    }

    /**
     * Registers any backend permissions used by this plugin.
     */
    public function registerPermissions(): array
    {
        return [];
    }

    /**
     * Registers backend navigation items for this plugin.
     */
    public function registerNavigation(): array
    {
        return [];
    }
}
