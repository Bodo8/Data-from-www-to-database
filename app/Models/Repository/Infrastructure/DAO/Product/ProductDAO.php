<?php
declare(strict_types=1);

namespace App\Models\Repository\Infrastructure\DAO\Product;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class ProductDAO
 * @author Bogusław Trojański
 */
class ProductDAO extends Model
{
     use  HasFactory;

    protected $table = 'products';
    protected $primaryKey = 'id_product';
    public $timestamps = false;
    protected $fillable = ['name','price','availability'];
}
