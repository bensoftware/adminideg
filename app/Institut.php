<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Institut extends Model
{



    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'libelle','phone','mail','fixe','description','adresse','responsable'
    ];

}
