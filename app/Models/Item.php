<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;
    protected $table = 'item';

    protected $fillable = [
        'id','image', 'name', 'box','price','category_id'
    ];
    public function category()
    {
        return $this->belongsTo(Machineservice::class, 'category_id', 'id');
    }
}
