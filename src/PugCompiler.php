<?php

namespace Bkwld\LaravelPug;

use Illuminate\Filesystem\Filesystem;
use Illuminate\View\Compilers\Compiler;
use Illuminate\View\Compilers\CompilerInterface;

class PugCompiler extends Compiler implements CompilerInterface
{
    use PugHandlerTrait;

    /**
     * Create a new compiler instance.
     *
     * @param array      $pugTarget
     * @param Filesystem $files
     * @param array      $config
     * @param string     $defaultCachePath
     */
    public function __construct(array $pugTarget, Filesystem $files, array $config, $defaultCachePath = null)
    {
        $this->construct($pugTarget, $files, $config, $defaultCachePath);
    }

    /**
     * Compile the view at the given path.
     *
     * @param string $path
     *
     * @throws \InvalidArgumentException
     *
     * @return void
     */
    public function compile($path)
    {
        $this->compileWith($path);
    }
}
