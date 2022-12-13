<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;
    protected $table = 'countries';
    protected $primaryKey = 'id';
    protected $timestamp = true;
    protected $guarded = [];

    public function user()
    {
        return $this->hasMany(User::class);
    }
}
