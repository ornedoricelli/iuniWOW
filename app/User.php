<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class User extends Model
{
    protected $fillable = ['premio1','premio2','premio3','premio4','nombre_auto','venc_licencia','ult_vtv', 'ult_aceite', 'puntos'];

    }
