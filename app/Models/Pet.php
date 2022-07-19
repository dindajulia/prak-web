<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pet extends Model
{
    use HasFactory;

    protected $guarded = [];
    protected $table = "pet";
    protected $fillable = ['nama','jumlah','jenis','foto'];
}