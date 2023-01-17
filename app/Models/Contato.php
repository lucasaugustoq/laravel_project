<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contato extends Model
{
    public function lista()
    {
        return (object) [
            'nome'=>'Ta chovendo aí? Aqui ta chovendo',
            'tel'=>'354321545'
        ];
    }
}
