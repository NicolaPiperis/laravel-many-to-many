<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    use HasFactory;
    protected $fillable = [
        'name_project',
        'description',
        'complexity'
    ];

    public function type() {

        return $this -> belongsTo(Type :: class);
    }
    public function technologies() {

        return $this -> belongsToMany(Technology :: class);
    }
}
