<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producteurs extends Model
{
    protected $table = "producteur";
    protected $fillable = ['id','name','id_user'];
    public $timestamps = false;

    function produit()
    {
        return $this->hasMany(Produits::class, 'id_producteur');
    }

    function user()
    {
        return $this->hasMany(User::class, 'id_user');
    }
}
