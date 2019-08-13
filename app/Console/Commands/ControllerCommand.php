<?php

namespace App\Console\Commands;

use flipbox\LumenGenerator\Console\ControllerMakeCommand as ControllerMakeCommand;

class ControllerCommand extends ControllerMakeCommand
{
     /**
     * Get the default namespace for the class.
     *
     * @param string $rootNamespace
     *
     * @return string
     */
    protected function getDefaultNamespace($rootNamespace)
    {
        return $rootNamespace.'\Http\Controllers\Api\V1';
    }

}
