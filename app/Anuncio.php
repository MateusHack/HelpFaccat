<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Anuncio extends Model
{
    protected $fillable = [
        'id_anuncio', 'id_user', 'password', 'titulo', 'descricao', 'contato', 'id_user_help',
    ];


    protected $table = 'anuncio';

    protected $primaryKey = 'id_anuncio';
    
    public function user(){
       return $this->hasOne('App\User', 'id', 'id_user', 'users');
    }    
    
    public function iduserhelp(){
        return $this->hasOne('App\User', 'id', 'id_user_help', 'users');
    }
}
