<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class quotes extends Model
{
    public $table = "quotes";
    use HasFactory;

    protected $fillable = [
        'isi'
    ];
}
