<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;
    protected $fillable = [
        'category',
        'menu_name',
        'menu_desc',
        'price',
        'id', 
        
    ];

    public function getPriceAttribute($price)
    {
        // Tambahkan digit nol jika angka kurang dari seribu
        return number_format($price, 0, ',', '.') . ',00';
    }

}
