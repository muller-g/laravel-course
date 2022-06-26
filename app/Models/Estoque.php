<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estoque extends Model
{
    protected $fillable = ['item','amount', 'price', 'img'];
    use HasFactory;
}
