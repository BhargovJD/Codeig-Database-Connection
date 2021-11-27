<?php

namespace App\Models;
use CodeIgniter\Model;

class EmpModel extends Model{
    protected $table = 'employees';
    function getAll(){
        return $this->findAll();
    }
}

?>
