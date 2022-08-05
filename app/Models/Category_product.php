<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category_product extends Model
{
    use HasFactory;
    protected $fillable = ['nama_category'];

    public function product()
    {
        return $this->hasMany(Product::class, 'categori_id', 'id');
    }
}
