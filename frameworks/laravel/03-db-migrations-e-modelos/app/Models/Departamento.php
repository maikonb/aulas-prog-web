<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Departamento extends Model
{
    use HasFactory;

    public function produtos()
    {
        return $this->belongsToMany(
            'App\Models\Produto', 'produto_departamento');
    }
}
