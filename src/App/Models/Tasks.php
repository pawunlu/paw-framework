<?php

namespace Paw\App\Models;

use Paw\Core\Model;

class Tasks extends Model
{
    protected $table = 'tasks';

    public function get()
    {
        return $this->db->selectAll($this->table);
    }

    public function insert(array $task)
    {
        $this->db->insert($this->table, $task);
    }
}
