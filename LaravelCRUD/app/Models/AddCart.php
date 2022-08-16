<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AddCart extends Model
{
    use HasFactory;
    protected $fillable = ["quantity",	"price", "phone_id","user_id", "created_at",	"updated_at"];
    public function phone()
    {
      return$this->hasOne(Phone::class,'id', 'phone_id');
}
}
