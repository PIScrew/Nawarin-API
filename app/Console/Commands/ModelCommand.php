<?php

namespace App\Console\Commands;

use flipbox\LumenGenerator\Console\ModelMakeCommand as ModelMakeCommand;

class ModelCommand extends ModelMakeCommand
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
        return $rootNamespace.'\Models';;
    }
}
