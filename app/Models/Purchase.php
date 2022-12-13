<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{
    use HasFactory;
    protected $table = 'purchases';
    protected $primaryKey = 'id';
    protected $timestamp = true;
    protected $guarded = [];

    public function products()
    {
        return $this->belongsToMany(Product::class, PurchaseDetail::class)->withPivot('quantity');
    }
}
