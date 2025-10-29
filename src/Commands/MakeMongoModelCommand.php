<?php

namespace Chaoswd\Mongo\Models\Commands;

use Illuminate\Console\GeneratorCommand;
use Symfony\Component\Console\Input\InputOption;

class MakeMongoModelCommand extends GeneratorCommand
{
    protected $name = 'make:mongo:model';
    protected $description = 'Create a new Eloquent MongoDB model class';
    protected $type = 'Mongo Model';

    protected function getStub()
    {
        return __DIR__ . '/../stubs/model.stub';
    }

    protected function getDefaultNamespace($rootNamespace)
    {
        return $rootNamespace . '\Models';
    }

    protected function getOptions()
    {
        return [
            ['collection', null, InputOption::VALUE_OPTIONAL, 'Specify the collection name', null],
        ];
    }

    protected function buildClass($name)
    {
        $stub = parent::buildClass($name);

        $collection = $this->option('collection');
        if ($collection) {
            $stub = str_replace('{{ collection }}', "'{$collection}'", $stub);
        } else {
            $stub = str_replace('{{ collection }}', "''", $stub);
        }

        return $stub;
    }
}
