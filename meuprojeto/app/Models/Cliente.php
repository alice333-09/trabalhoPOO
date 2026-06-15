<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    // Adicione esta propriedade se não existir:
    protected $fillable = ['nome', 'dt_venda', 'valor'];
}
