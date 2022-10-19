<?php namespace Folga\Mlp;

use Backend;
use Backend\Models\UserRole;
use System\Classes\PluginBase;

/**
 * mlp Plugin Information File
 */
class Plugin extends PluginBase
{
    /**
     * Returns information about this plugin.
     */
    public function pluginDetails(): array
    {
        return [
            'name'        => 'folga.mlp::lang.plugin.name',
            'description' => 'folga.mlp::lang.plugin.description',
            'author'      => 'Folga',
            'icon'        => 'icon-leaf'
        ];
    }

    /**
     * Register method, called when the plugin is first registered.
     */
    public function register(): void
    {

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
        return []; // Remove this line to activate

        return [
            'Folga\Mlp\Components\MyComponent' => 'myComponent',
        ];
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
        return []; // Remove this line to activate

        return [
            'mlp' => [
                'label'       => 'folga.mlp::lang.plugin.name',
                'url'         => Backend::url('folga/mlp/mycontroller'),
                'icon'        => 'icon-forward',
                'permissions' => ['folga.mlp.*'],
                'order'       => 500,
            ],
        ];
    }

    public function registerMailTemplates()
    {
        return [
            'folga.mlp::mail.nominate'
        ];
    }
}
