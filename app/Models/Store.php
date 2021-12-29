<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'contact_name', 'contact_email', 'address', 'city', 'store_category_id'];

    public function storeCategory()
    {
        return $this->belongsTo(StoreCategory::class);
    }
}
