<?php

namespace Paw\Core;

use Paw\Core\App;

/**
 * Clase abstracta para manejar los modelos
 */
abstract class Model
{
    protected $db = null;

    public function __construct()
    {
        $this->db = App::get('database');
    }
}
