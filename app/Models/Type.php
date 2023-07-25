<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    use HasFactory;

    protected $fillable = [
        'main_programming_language'
    ];

    public function portfolio() {
        return $this -> belongsTo(Portfolio :: class);
    }
}
