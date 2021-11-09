<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Schema\Blueprint;

class Cliente extends Model
{
    use HasFactory;
    /*public function up(){
        Schema::create('cliente',function(Blueprint Stable){
            Stable->increments('id');
            Stable->string('nome',50);
            Stable ->string("endereço",80)->nullable();
            Stable ->string("email")->nullable();
            Stable ->string("telefone")->nullable();
        });
    }*/
}