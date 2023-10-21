<?php 

namespace App\Models;

use CodeIgniter\Model;

class ProductModel extends Model
{
    protected $table = 'products';
    protected $primaryKey = 'id_product';
    protected $allowedFields = [
        'id_product',
        'name',
        'description',
        'quantity',
        'quantity_min',
        'price',
        'price_sale',
        'profit',
        'validity',
    ];

    protected $useTimestamps = true;
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';
    protected $deletedField = 'deleted_at';

}

?>