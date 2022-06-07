<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SellerCategory extends Model
{
    use HasFactory;
    protected $fillable = [
        'name'
    ];
    public function sellers()
    {
        return $this->hasMany(Seller::class);
    }
}
