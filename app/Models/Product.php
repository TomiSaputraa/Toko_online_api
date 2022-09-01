<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    // protected terdiri dari 2 yaitu fillable & guarded
    // fillable = boleh diisi
    // Guarded = Semua kolom yang kita tambahkan ke $guarded akan diabaikan oleh Eloquent ketika kita melakukan insert/update.
    use HasFactory;
    protected $guarded = [
        'id'
    ];
}
