<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Companies extends Model
{
    use HasFactory;

    protected $guarded = [];
    protected $fillable = ['company_id', 'firstnama', 'lastnama','gender','email','hobi','nohp'];

    public function perusahaans(){  
        return $this->belongsTo('App\Models\Perusahaan','company_id', 'id');
    }
}
