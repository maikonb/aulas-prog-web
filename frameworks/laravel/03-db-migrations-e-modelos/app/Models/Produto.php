<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    use HasFactory;

    public function marca() 
    {
        return $this->belongsTo("App\Models\Marca");
    }

    public function departamentos()
    {
        return $this->belongsToMany(
            'App\Models\Departamento', 'produto_departamento');
    }
}
