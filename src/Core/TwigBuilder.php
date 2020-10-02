<?php

namespace Paw\Core;

class TwigBuilder
{
    private string $template_dir;
    private string $cache_dir;
    private bool $debug;

    function setTemplateDir($template_dir = "./templates") 
    { 
        $this->templateDir = $template_dir; 
        return $this;
    }

    function setDebug($debug = false) 
    { 
        $this->debug = $debug; 
        return $this;
    }

    function setCacheDir($cache_dir = "./templates/cache") 
    { 
        $this->cache_dir = $cache_dir; 
        return $this;
    }

    function buildLoader()
    {
        $this->loader = new \Twig_Loader_Filesystem($this->templateDir);
        return $this;
    }

    function build()
    {
        return new \Twig_Environment($this->loader, [
            'cache' => $this->cache_dir,
            'debug' => $this->debug,
        ]);
    }
}
