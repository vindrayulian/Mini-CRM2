<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Perusahaan extends Model
{
    use HasFactory;
    // protected $guarded = [];
    // protected $table = 'company';
    protected $fillable = [
        'nama','email','logo','website'
    ];
}
