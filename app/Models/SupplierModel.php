<?php

namespace App\Models;

use CodeIgniter\Model;

class SupplierModel extends Model
{
    protected $table      = 'suppliers';
    protected $primaryKey = 'id_suppliers';
    //protected $useAutoIncrement = true;
    protected $returnType     = 'array';
    //protected $useSoftDeletes = true;
    protected $allowedFields = ['id_suppliers','suppliers_name','suppliers_code','cnpj_suppliers','suppliers_created_in'];
    
}