<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductMutation extends Model
{
    use HasFactory;

    protected $fillable = ['type', 'quantity', 'product_id'];
}
