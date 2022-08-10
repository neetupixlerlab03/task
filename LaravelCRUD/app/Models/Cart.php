<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;
    protected $fillable = ["quantity",	"price",	"user_id",	"product_id",	"created_at",	"updated_at"];
    public function newproduct()
    {
      return$this->belongsToMany(NewProduct::class,'foreign_key', 'local_key');
}
}