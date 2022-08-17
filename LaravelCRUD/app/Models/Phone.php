<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Phone extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'price',
        'image',
        'description',
    ];
    public function addcart()
    {
      return$this->belongsToMany(AddCart::class, 'foreign_key', 'local_key');

    }
}
