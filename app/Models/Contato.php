<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Contato extends Model
{
     use HasFactory;
     use SoftDeletes;
     protected $dates = ['deleted_at'];

     protected $table = 'contato';
     protected $primaryKey = 'id';
     protected $fillable = ['nome', 'email', 'contato'];

}
