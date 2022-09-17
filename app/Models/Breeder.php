<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Breeder extends Model
{
    use HasFactory;

    protected $table = 'breeders';
    protected $primaryKey = 'id';
    protected $fillable = ['breeder', 'breed', 'age', 'location', 'price', 'phone', 'photo'];
}
