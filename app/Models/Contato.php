<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contato extends Model
{
    public funcion lista()
    {
        return (object) [
            'nome'=>'lucas',
            'tel'=>'354321545'
        ];
    }
}
