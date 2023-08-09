<?php

namespace App\Models;

use CodeIgniter\Model;

class MerkModel extends Model
{
    protected $table = "merk";
    protected $primaryKey = "id_gitar";

    protected $useTimestamps = false;
    protected $allowedFields = ['id_merk', 'merk'];
  
}