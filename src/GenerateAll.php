<?php

namespace SwaggerGen;

class GenerateAll
{
    public $saved_models = 0;
    public $saved_requests = 0;

    /**
     * Generates all required files into the specified directory
     *
     * @param string $namespace
     * @param string $swaggerFile
     * @param string $dir
     * @param bool   $more_specificity
     */
    public function __construct(string $namespace, string $swaggerFile, string $dir, bool $more_specificity = false)
    {
        $generate_models = new GenerateModels($namespace);
        $this->saved_models = $generate_models->runFull($swaggerFile, $dir);
    }
}
