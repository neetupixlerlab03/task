<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AddCart extends Model
{
    
    use HasFactory;
    protected $fillable = ["quantity",	"price", "phone_id",	"created_at",	"updated_at"];
    public function newproduct()
    {
      return$this->belongsToMany(Phone::class,'foreign_key', 'local_key');
}
}
