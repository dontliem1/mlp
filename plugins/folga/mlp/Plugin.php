<?php namespace Folga\Mlp;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
    }

    public function registerSettings()
    {
    }

    public function registerMailTemplates()
    {
        return [
            'folga.mlp::mail.nominate'
        ];
    }
}
