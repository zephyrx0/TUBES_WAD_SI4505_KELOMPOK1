<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservasi extends Model
{
    use HasFactory;
    protected $table = 'reservasis';
    protected $primaryKey = 'id';
    protected $fillable = [
        'tanggal',
        'username',
        'email',
        'hp',
        'pesan',
        'ruangan',
        'jumlahorang',
        'namemenu',
        'jumlahh',
    ];
}
