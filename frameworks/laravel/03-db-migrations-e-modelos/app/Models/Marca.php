<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Marca extends Model
{
    use HasFactory;

    // Se o nome de seu model eh Marca, o laravel
    // infere que o nome da tabela, ligada a esse 
    // model, se chama 'marcaS', no plural. Essa eh
    // uma convencao de nomenclatura do Laravel
    // que visa facilitar a utilizacao do ORM.
    // Porem, se sua tabela nao se chamar 'marcaS', 
    // voce pode utilizar o atributo abaixo para
    // indicar ao Laravel qual o nome correto da 
    // tabela.
    protected $table = 'marcas';
}
