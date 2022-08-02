<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    use HasFactory;
    public $fillable = [
        'id',
        'category_name',
    ];
    public function product(){
        return $this->hasMany(product::class,"category_id","id");
    }
}
