<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Machineservice extends Model
{
    use HasFactory;
    protected $table = 'machineservice';

    protected $fillable = [
        'id','title', 'image'
    ];
    public function items()
    {
        return $this->hasMany(Item::class, 'category_id', 'id');
    }
}
